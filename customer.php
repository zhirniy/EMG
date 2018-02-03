<?php
namespace EMG;
//require_once "DB.php";
require_once "Model.php";
//use EMG\;
//use EMG\;

$call_center_all = $_POST['call_center_all'];
$call_center = $_POST['call_center'];
$desk = $_POST['desk'];
$team = $_POST['team'];
$db = new Model();

if($call_center_all !== null){
$cc_callcenters = $db->data('cc_callcenters');
echo json_encode($cc_callcenters);
}
else if($call_center !== null){
$cc_desks = $db->data_desks('cc_desks', $call_center);
echo json_encode($cc_desks);
}
else if($desk !== null){
$cc_teams = $db->data_teams('cc_teams', $desk);
echo json_encode($cc_teams);
}
else if($team !== null){
$cc_users = $db->data_users('cc_users', $team);
echo json_encode($cc_users);
}



?>