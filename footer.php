<?php 
require_once('initialize.php');
import('form.Form');
import('ttUserHelper');
import('ttTeamHelper');
import('ttClientHelper');
import('ttTimeHelper');
import('DateAndTime');
$formpop = new Form('timeRecordpopupForm');
$project_list = $user->getAssignedProjects();

//input type popup project
 $formpop->addInput(array('type'=>'combobox',
    'onchange'=>'fillTaskDropdown(this.value);',
    'name'=>'projectpopup',
    'style'=>'width: 250px;',
    'value'=>$cl_project,
    'data'=>$project_list,
    'datakeys'=>array('id','name'),
    'empty'=>array(''=>$i18n->getKey('dropdown.select'))));
 $record = ttUserHelper::getCategory();
   
//input type popup category
 $formpop->addInput(array('type'=>'combobox',
    'onchange'=>'fillTaskDropdown(this.value);',
    'name'=>'categorypopup',
    'style'=>'width: 250px;',
    'value'=>$record,
    'data'=>$record,
    'datakeys'=>array('id','category'),
    'empty'=>array(''=>$i18n->getKey('dropdown.select'))));
//text field for duration of popup
 $formpop->addInput(array('type'=>'text','name'=>'startpop','value'=>$cl_duration));
 $formpop->addInput(array('type'=>'text','name'=>'end','value'=>$cl_duration));
 $formpop->addInput(array('type'=>'text','name'=>'durationone','value'=>$cl_duration,'onchange'=>"formDisable('duration');"));
//text area for note
 $formpop->addInput(array('type'=>'textarea','name'=>'notepopup','style'=>'width: 500px; height:'.NOTE_INPUT_HEIGHT.'px;','value'=>$cl_note));
//submit button
 $formpop->addInput(array('type'=>'submit','name'=>'btn_submitpopup','value'=>$i18n->getKey('button.submit')));
  $cl_date = $_SESSION['date'] ;
   $cl_client = $_SESSION['client'] ;
   $cl_billable = $_SESSION['billable'];

 // Submit.
if ($request->isPost()) {
	
	if($request->getParameter('btn_submitpopup'))
  {
    $cl_start = $request->getParameter('startpop');
    $cl_finish = $request->getParameter('end');
    //prohibiting overlap record
    if ($err->no()) {
      if (ttTimeHelper::overlaps($user->getActiveUser(), $cl_date, $cl_start, $cl_finish))
        $err->add($i18n->getKey('error.overlap'));
    }

    //insert record
    if($err->no())
    {

      
       $id = ttTimeHelper::insert(array(
        'date' => $cl_date,
        'user_id' => $user->getActiveUser(),
        'client' => $cl_client,
        'project' => $request->getParameter('projectpopup'),
        'category' => $request->getParameter('categorypopup'),
        'task' => $cl_task,
        'start' => $request->getParameter('startpop'),
        'finish' => $request->getParameter('end'),
        'duration' => $request->getParameter('durationone'),
        'note' => $request->getParameter('notepopup'),
        'billable' => $cl_billable));
  

    }
    
  }
  


}
//$_SESSION['date'] = $cl_date;

 $smarty->assign('onload', 'onLoad="fillDropdowns()"');

 $smarty->assign('formspopup', array($formpop->getName()=>$formpop->toArray()));
 
$smarty->assign('product',$_SESSION['billable']);


$smarty->display('footerindex.tpl');
?>
