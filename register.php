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

require_once('initialize.php');
import('form.Form');
import('ttUserHelper');

if (!isTrue(MULTITEAM_MODE) || $auth->isPasswordExternal()) {
  header('Location: login.php');
  exit();
}

$auth->doLogout();

if (!defined('CURRENCY_DEFAULT')) define('CURRENCY_DEFAULT', '$');

if ($request->isPost()) {
  $cl_team_name = trim($request->getParameter('team_name'));
  $cl_currency = trim($request->getParameter('currency'));
  if (!$cl_currency) $cl_currency = CURRENCY_DEFAULT;
  $cl_manager_name = trim($request->getParameter('manager_name'));
  $cl_manager_login = trim($request->getParameter('manager_login'));
  $cl_password1 = $request->getParameter('password1');
  $cl_password2 = $request->getParameter('password2');
  $cl_manager_email = trim($request->getParameter('manager_email'));
} else
  $cl_currency = CURRENCY_DEFAULT;

$form = new Form('profileForm');
$form->addInput(array('type'=>'text','maxlength'=>'200','name'=>'team_name','value'=>$cl_team_name));
$form->addInput(array('type'=>'text','maxlength'=>'7','name'=>'currency','value'=>$cl_currency));
$form->addInput(array('type'=>'text','maxlength'=>'100','name'=>'manager_name','value'=>$cl_manager_name));
$form->addInput(array('type'=>'text','maxlength'=>'100','name'=>'manager_login','value'=>$cl_manager_login));
$form->addInput(array('type'=>'text','maxlength'=>'30','name'=>'password1','aspassword'=>true,'value'=>$cl_password1));
$form->addInput(array('type'=>'text','maxlength'=>'30','name'=>'password2','aspassword'=>true,'value'=>$cl_password2));
$form->addInput(array('type'=>'text','maxlength'=>'100','name'=>'manager_email','value'=>$cl_manager_email));
$form->addInput(array('type'=>'submit','name'=>'btn_submit','value'=>$i18n->getKey('button.submit')));

if ($request->isPost()) {
  // Validate user input.
  if (!ttValidString($cl_team_name, true)) $err->add($i18n->getKey('error.field'), $i18n->getKey('label.team_name'));
  if (!ttValidString($cl_currency, true)) $err->add($i18n->getKey('error.field'), $i18n->getKey('label.currency'));
  if (!ttValidString($cl_manager_name)) $err->add($i18n->getKey('error.field'), $i18n->getKey('label.manager_name'));
  if (!ttValidString($cl_manager_login)) $err->add($i18n->getKey('error.field'), $i18n->getKey('label.manager_login'));
  if (!ttValidString($cl_password1)) $err->add($i18n->getKey('error.field'), $i18n->getKey('label.password'));
  if (!ttValidString($cl_password2)) $err->add($i18n->getKey('error.field'), $i18n->getKey('label.confirm_password'));
  if ($cl_password1 !== $cl_password2)
    $err->add($i18n->getKey('error.not_equal'), $i18n->getKey('label.password'), $i18n->getKey('label.confirm_password'));
  if (!ttValidEmail($cl_manager_email, true)) $err->add($i18n->getKey('error.field'), $i18n->getKey('label.email'));

  if ($err->no()) {
    if (!ttUserHelper::getUserByLogin($cl_manager_login)) {
      // Create a new team.
      $team_id = ttTeamHelper::insert(array('name'=>$cl_team_name,'currency'=>$cl_currency));
      if ($team_id) {
        // Team created, now create a team manager.
        $user_id = ttUserHelper::insert(array(
          'team_id' => $team_id,
          'role' => ROLE_MANAGER,
          'name' => $cl_manager_name,
          'login' => $cl_manager_login,
          'password' => $cl_password1,
          'email' => $cl_manager_email));
      }
      if ($team_id && $user_id) {
        if ($auth->doLogin($cl_manager_login, $cl_password1)) {
          setcookie('tt_login', $cl_manager_login, time() + COOKIE_EXPIRE, '/');
          header('Location: time.php');
        } else {
          header('Location: login.php');
        }
        exit();
      } else
        $err->add($i18n->getKey('error.db'));
    } else
      $err->add($i18n->getKey('error.user_exists'));
  }
} // isPost

$smarty->assign('title', $i18n->getKey('title.create_team'));
$smarty->assign('forms', array($form->getName()=>$form->toArray()));
$smarty->assign('onload', 'onLoad="document.profileForm.team.focus()"');
$smarty->assign('content_page_name', 'register.tpl');
$smarty->display('index.tpl');
