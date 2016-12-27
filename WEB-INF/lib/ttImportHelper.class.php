<?php
// +----------------------------------------------------------------------+
// | Anuko Time Tracker
// +----------------------------------------------------------------------+
// | Copyright (c) Anuko International Ltd. (https://www.anuko.com)
// +----------------------------------------------------------------------+
// | LIBERAL FREEWARE LICENSE: This source code document may be used
// | by anyone for any purpose, and freely redistributed alone or in
// | combination with other software, provided that the license is obeyed.
// |
// | There are only two ways to violate the license:
// |
// | 1. To redistribute this code in source form, with the copyright
// |    notice or license removed or altered. (Distributing in compiled
// |    forms without embedded copyright notices is permitted).
// |
// | 2. To redistribute modified versions of this code in *any* form
// |    that bears insufficient indications that the modifications are
// |    not the work of the original author(s).
// |
// | This license applies to this document only, not any other software
// | that it may be combined with.
// |
// +----------------------------------------------------------------------+
// | Contributors:
// | https://www.anuko.com/time_tracker/credits.htm
// +----------------------------------------------------------------------+

import('ttTeamHelper');
import('ttUserHelper');
import('ttProjectHelper');
import('ttTaskHelper');
import('ttInvoiceHelper');
import('ttTimeHelper');
import('ttClientHelper');
import('ttCustomFieldHelper');
import('ttFavReportHelper');
import('ttExpenseHelper');

// ttImportHelper - this class is used to import team data from a file.
class ttImportHelper {
  var $errors         = null;    // Errors go here. Set in constructor by reference.

  var $currentElement = array(); // Current element of the XML file we are parsing.
  var $currentTag     = '';      // XML tag of the current element.

  var $canImport      = true;    // False if we cannot import data due to a login collision.
  var $teamData       = array(); // Array of team data such as team name, etc.
  var $team_id        = null;    // New team id we are importing. It is created during the import operation.
  var $users          = array(); // Array of arrays of user properties.

  // The following arrays are maps between entity ids in the file versus the database.
  // In the file they are sequential (1,2,3...) while in the database the entities have different ids.
  var $userMap       = array(); // User ids.
  var $projectMap    = array(); // Project ids.
  var $taskMap       = array(); // Task ids.
  var $clientMap     = array(); // Client ids.
  var $invoiceMap    = array(); // Invoice ids.

  var $customFieldMap       = array(); // Custom field ids.
  var $customFieldOptionMap = array(); // Custop field option ids.
  var $logMap        = array(); // Time log ids.

  // Constructor.
  function ttImportHelper(&$errors) {
    $this->errors = &$errors;
  }

  // startElement - callback handler for opening tag of an XML element.
  // In this function we assign passed in attributes to currentElement.
  function startElement($parser, $name, $attrs) {
    if ($name == 'TEAM'
      || $name == 'USER'
      || $name == 'TASK'
      || $name == 'PROJECT'
      || $name == 'CLIENT'
      || $name == 'INVOICE'
      || $name == 'MONTHLY_QUOTA'
      || $name == 'LOG_ITEM'
      || $name == 'CUSTOM_FIELD'
      || $name == 'CUSTOM_FIELD_OPTION'
      || $name == 'CUSTOM_FIELD_LOG_ENTRY'
      || $name == 'INVOICE_HEADER'
      || $name == 'USER_PROJECT_BIND'
      || $name == 'EXPENSE_ITEM'
      || $name == 'FAV_REPORT') {
      $this->currentElement = $attrs;
    }
    $this->currentTag = $name;
  }

  // endElement - callback handler for the closing tag of an XML element.
  // When we are here, currentElement is an array of the element attributes (as set in startElement).
  // Here we do the actual import of data into the database.
  function endElement($parser, $name) {
    if ($name == 'TEAM') {
      $this->teamData = $this->currentElement;
      // Now teamData is an array of team properties. We'll use it later to create a team.
      // Cannot create the team here. Need to determine whether logins collide with existing logins.
      $this->currentElement = array();
    }
    if ($name == 'USER') {
      $this->users[$this->currentElement['ID']] = $this->currentElement;
      $this->currentElement = array();
    }
    if ($name == 'USERS') {
      foreach ($this->users as $user_item) {
        if (('' != $user_item['STATUS']) && ttUserHelper::getUserByLogin($user_item['LOGIN'])) {
          // We have a login collision, cannot import any data.
          $this->canImport = false;
          break;
        }
      }

      // Now we can create a team.
      if ($this->canImport) {
        $team_id = ttTeamHelper::insert(array(
          'name' => $this->teamData['NAME'],
          'address' => $this->teamData['ADDRESS'],
          'currency' => $this->teamData['CURRENCY'],
          'lock_spec' => $this->teamData['LOCK_SPEC'],
          'workday_hours' => $this->teamData['WORKDAY_HOURS'],
          'lang' => $this->teamData['LANG'],
          'decimal_mark' => $this->teamData['DECIMAL_MARK'],
          'date_format' => $this->teamData['DATE_FORMAT'],
          'time_format' => $this->teamData['TIME_FORMAT'],
          'week_start' => $this->teamData['WEEK_START'],
          'plugins' => $this->teamData['PLUGINS'],
          'tracking_mode' => $this->teamData['TRACKING_MODE'],
          'record_type' => $this->teamData['RECORD_TYPE']));
        if ($team_id) {
          $this->team_id = $team_id;
          foreach ($this->users as $key=>$user_item) {
            $user_id = ttUserHelper::insert(array(
              'team_id' => $this->team_id,
              'role' => $user_item['ROLE'],
              'client_id' => $user_item['CLIENT_ID'], // Note: NOT mapped value, replaced in CLIENT handler.
              'name' => $user_item['NAME'],
              'login' => $user_item['LOGIN'],
              'password' => $user_item['PASSWORD'],
              'rate' => $user_item['RATE'],
              'email' => $user_item['EMAIL'],
              'status' => $user_item['STATUS']), false);
            $this->userMap[$key] = $user_id;
          }
        }
      }
    }

    if ($name == 'TASK' && $this->canImport) {
      $this->taskMap[$this->currentElement['ID']] =
        ttTaskHelper::insert(array(
          'team_id' => $this->team_id,
          'name' => $this->currentElement['NAME'],
          'description' => $this->currentElement['DESCRIPTION'],
          'status' => $this->currentElement['STATUS']));
    }
    if ($name == 'PROJECT' && $this->canImport) {
      // Prepare a list of task ids.
      $tasks = explode(',', $this->currentElement['TASKS']);
      foreach ($tasks as $id)
        $mapped_tasks[] = $this->taskMap[$id];

      // Add a new project.
      $this->projectMap[$this->currentElement['ID']] =
        ttProjectHelper::insert(array(
          'team_id' => $this->team_id,
          'name' => $this->currentElement['NAME'],
          'description' => $this->currentElement['DESCRIPTION'],
          'tasks' => $mapped_tasks,
          'status' => $this->currentElement['STATUS']));
    }
    if ($name == 'USER_PROJECT_BIND' && $this->canImport) {
      ttUserHelper::insertBind(
        $this->userMap[$this->currentElement['USER_ID']],
        $this->projectMap[$this->currentElement['PROJECT_ID']],
        $this->currentElement['RATE'],
        $this->currentElement['STATUS']);
    }

    if ($name == 'CLIENT' && $this->canImport) {
      // Prepare a list of project ids.
      if ($this->currentElement['PROJECTS']) {
        $projects = explode(',', $this->currentElement['PROJECTS']);
        foreach ($projects as $id)
          $mapped_projects[] = $this->projectMap[$id];
      }

      $this->clientMap[$this->currentElement['ID']] =
        ttClientHelper::insert(array(
          'team_id' => $this->team_id,
          'name' => $this->currentElement['NAME'],
          'address' => $this->currentElement['ADDRESS'],
          'tax' => $this->currentElement['TAX'],
          'projects' => $mapped_projects,
          'status' => $this->currentElement['STATUS']));

        // Update client_id for tt_users to a mapped value.
        // We did not do it during user insertion because clientMap was not ready then.
        if ($this->currentElement['ID'] != $this->clientMap[$this->currentElement['ID']])
          ttClientHelper::setMappedClient($this->team_id, $this->currentElement['ID'], $this->clientMap[$this->currentElement['ID']]);
    }

    if ($name == 'INVOICE' && $this->canImport) {
      $this->invoiceMap[$this->currentElement['ID']] =
        ttInvoiceHelper::insert(array(
          'team_id' => $this->team_id,
          'name' => $this->currentElement['NAME'],
          'date' => $this->currentElement['DATE'],
          'client_id' => $this->clientMap[$this->currentElement['CLIENT_ID']],
          'discount' => $this->currentElement['DISCOUNT'],
          'status' => $this->currentElement['STATUS']));
    }

    if ($name == 'MONTHLY_QUOTA' && $this->canImport) {
      $this->insertMonthlyQuota($this->team_id, $this->currentElement['YEAR'], $this->currentElement['MONTH'], $this->currentElement['QUOTA']);
    }

    if ($name == 'LOG_ITEM' && $this->canImport) {
      $this->logMap[$this->currentElement['ID']] =
        ttTimeHelper::insert(array(
          'timestamp' => $this->currentElement['TIMESTAMP'],
          'user_id' => $this->userMap[$this->currentElement['USER_ID']],
          'date' => $this->currentElement['DATE'],
          'start' => $this->currentElement['START'],
          'finish' => $this->currentElement['FINISH'],
          'duration' => $this->currentElement['DURATION'],
          'client' => $this->clientMap[$this->currentElement['CLIENT_ID']],
          'project' => $this->projectMap[$this->currentElement['PROJECT_ID']],
          'task' => $this->taskMap[$this->currentElement['TASK_ID']],
          'invoice' => $this->invoiceMap[$this->currentElement['INVOICE_ID']],
          'note' => (isset($this->currentElement['COMMENT']) ? $this->currentElement['COMMENT'] : ''),
          'billable' => $this->currentElement['BILLABLE'],
          'status' => $this->currentElement['STATUS']));
    }

    if ($name == 'CUSTOM_FIELD' && $this->canImport) {
      $this->customFieldMap[$this->currentElement['ID']] =
        ttCustomFieldHelper::insertField(array(
          'team_id' => $this->team_id,
          'type' => $this->currentElement['TYPE'],
          'label' => $this->currentElement['LABEL'],
          'required' => $this->currentElement['REQUIRED'],
          'status' => $this->currentElement['STATUS']));
    }

    if ($name == 'CUSTOM_FIELD_OPTION' && $this->canImport) {
      $this->customFieldOptionMap[$this->currentElement['ID']] =
        ttCustomFieldHelper::insertOption(array(
          'field_id' => $this->customFieldMap[$this->currentElement['FIELD_ID']],
          'value' => $this->currentElement['VALUE']));
    }

    if ($name == 'CUSTOM_FIELD_LOG_ENTRY' && $this->canImport) {
      ttCustomFieldHelper::insertLogEntry(array(
        'log_id' => $this->logMap[$this->currentElement['LOG_ID']],
        'field_id' => $this->customFieldMap[$this->currentElement['FIELD_ID']],
        'option_id' => $this->customFieldOptionMap[$this->currentElement['OPTION_ID']],
        'value' => $this->currentElement['VALUE'],
        'status' => $this->currentElement['STATUS']));
    }

    if ($name == 'EXPENSE_ITEM' && $this->canImport) {
      ttExpenseHelper::insert(array(
        'date' => $this->currentElement['DATE'],
        'user_id' => $this->userMap[$this->currentElement['USER_ID']],
        'client_id' => $this->clientMap[$this->currentElement['CLIENT_ID']],
        'project_id' => $this->projectMap[$this->currentElement['PROJECT_ID']],
        'name' => $this->currentElement['NAME'],
        'cost' => $this->currentElement['COST'],
        'invoice_id' => $this->invoiceMap[$this->currentElement['INVOICE_ID']],
        'status' => $this->currentElement['STATUS']));
    }

    if ($name == 'FAV_REPORT' && $this->canImport) {
      $user_list = '';
      if (strlen($this->currentElement['USERS']) > 0) {
        $arr = explode(',', $this->currentElement['USERS']);
        foreach ($arr as $v)
          $user_list .= (strlen($user_list) == 0 ? '' : ',').$this->userMap[$v];
      }
      ttFavReportHelper::insertReport(array(
        'name' => $this->currentElement['NAME'],
        'user_id' => $this->userMap[$this->currentElement['USER_ID']],
        'client' => $this->clientMap[$this->currentElement['CLIENT_ID']],
        'option' => $this->customFieldOptionMap[$this->currentElement['CF_1_OPTION_ID']],
        'project' => $this->projectMap[$this->currentElement['PROJECT_ID']],
        'task' => $this->taskMap[$this->currentElement['TASK_ID']],
        'billable' => $this->currentElement['BILLABLE'],
        'users' => $user_list,
        'period' => $this->currentElement['PERIOD'],
        'from' => $this->currentElement['PERIOD_START'],
        'to' => $this->currentElement['PERIOD_END'],
        'chclient' => $this->currentElement['SHOW_CLIENT'],
        'chinvoice' => $this->currentElement['SHOW_INVOICE'],
        'chproject' => $this->currentElement['SHOW_PROJECT'],
        'chstart' => $this->currentElement['SHOW_START'],
        'chduration' => $this->currentElement['SHOW_DURATION'],
        'chcost' => $this->currentElement['SHOW_COST'],
        'chtask' => $this->currentElement['SHOW_TASK'],
        'chfinish' => $this->currentElement['SHOW_END'],
        'chnote' => $this->currentElement['SHOW_NOTE'],
        'chcf_1' => $this->currentElement['SHOW_CUSTOM_FIELD_1'],
        'group_by' => $this->currentElement['GROUP_BY'],
        'chtotalsonly' => $this->currentElement['SHOW_TOTALS_ONLY']));
    }
    $this->currentTag = '';
  }

  // dataElement - callback handler for text data fragments. It builds up currentElement array with text pieces from XML.
  function dataElement($parser, $data) {
    if ($this->currentTag == 'NAME'
      || $this->currentTag == 'DESCRIPTION'
      || $this->currentTag == 'LABEL'
      || $this->currentTag == 'VALUE'
      || $this->currentTag == 'COMMENT'
      || $this->currentTag == 'ADDRESS'
      || $this->currentTag == 'CLIENT_NAME'
      || $this->currentTag == 'CLIENT_ADDRESS') {
      if (isset($this->currentElement[$this->currentTag]))
        $this->currentElement[$this->currentTag] .= trim($data);
      else
        $this->currentElement[$this->currentTag] = trim($data);
    }
  }

  // importXml - uncompresses the file, reads and parses its content. During parsing,
  // startElement, endElement, and dataElement functions are called as many times as necessary.
  // Actual import occurs in the endElement handler.
  function importXml() {
    // Do we have a compressed file?
    $compressed = false;
    $file_ext = substr($_FILES['xmlfile']['name'], strrpos($_FILES['xmlfile']['name'], '.') + 1);
    if (in_array($file_ext, array('bz','tbz','bz2','tbz2'))) {
      $compressed = true;
    }

    // Create a temporary file.
    $dirName = dirname(TEMPLATE_DIR . '_c/.');
    $filename = tempnam($dirName, 'import_');

    // If the file is compressed - uncompress it.
    if ($compressed) {
      if (!$this->uncompress($_FILES['xmlfile']['tmp_name'], $filename)) {
        $this->errors->add($GLOBALS['I18N']->getKey('error.sys'));
        return;
      }
      unlink($_FILES['xmlfile']['tmp_name']);
    } else {
      if (!move_uploaded_file($_FILES['xmlfile']['tmp_name'], $filename)) {
        $this->errors->add($GLOBALS['I18N']->getKey('error.upload'));
        return;
      }
    }

    // Initialize XML parser.
    $parser = xml_parser_create();
    xml_set_object($parser, $this);
    xml_set_element_handler($parser, 'startElement', 'endElement');
    xml_set_character_data_handler($parser, 'dataElement');

    // Read and parse the content of the file. During parsing, startElement, endElement, and dataElement functions are called.
    $file = fopen($filename, 'r');
    while ($data = fread($file, 4096)) {
      if (!xml_parse($parser, $data, feof($file))) {
        $this->errors->add(sprintf("XML error: %s at line %d",
          xml_error_string(xml_get_error_code($parser)),
          xml_get_current_line_number($parser)));
      }
      if (!$this->canImport) {
        $this->errors->add($GLOBALS['I18N']->getKey('error.user_exists'));
        break;
      }
    }
    xml_parser_free($parser);
    if ($file) fclose($file);
    unlink($filename);
  }

  // uncompress - uncompresses the content of the $in file into the $out file.
  function uncompress($in, $out) {
    // Do we have the uncompress function?
    if (!function_exists('bzopen'))
      return false;

    // Initial checks of file names and permissions.
    if (!file_exists($in) || !is_readable ($in))
      return false;
    if ((!file_exists($out) && !is_writable(dirname($out))) || (file_exists($out) && !is_writable($out)))
      return false;

    if (!$out_file = fopen($out, 'wb'))
      return false;
    if (!$in_file = bzopen ($in, 'r'))
      return false;

    while (!feof($in_file)) {
      $buffer = bzread($in_file, 4096);
      fwrite($out_file, $buffer, 4096);
    }
    bzclose($in_file);
    fclose ($out_file);
    return true;
  }

  // insertMonthlyQuota - a helper function to insert a monthly quota.
  private function insertMonthlyQuota($team_id, $year, $month, $quota) {
    $mdb2 = getConnection();
    $sql = "INSERT INTO tt_monthly_quotas (team_id, year, month, quota) values ($team_id, $year, $month, $quota)";
    $affected = $mdb2->exec($sql);
    return (!is_a($affected, 'PEAR_Error'));
  }
}
