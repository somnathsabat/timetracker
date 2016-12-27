<?php 
require_once('initialize.php');
import('form.Form');
import('ttUserHelper');
import('ttTeamHelper');
import('ttClientHelper');
import('ttTimeHelper');
import('DateAndTime');
$cl_date = $_SESSION['date'] ;
   $cl_client = $_SESSION['client'] ;
   $cl_billable = $_SESSION['billable'];

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
        'billable' => 1));

?>