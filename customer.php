<?php
namespace EMG;
require_once "DB.php";
require_once "Model.php";
//use EMG\DB;

$call_center_all = $_POST['call_center_all'];
$call_center = $_POST['call_center'];
$call_center2 = $_POST['call_center2'];
$call_center3 = $_POST['call_center3'];

if($call_center_all !== null){
$db = new Model();
$cc_callcenters = $db->data('cc_callcenters');
echo json_encode($cc_callcenters);
}
else if($call_center !== null){
$db = new Model();
$cc_desks = $db->data_desks('cc_desks', $call_center);
//$cc_desks='<option  value="" selected>'.$call_center.'</option>';
echo json_encode($cc_desks);
}
else if($call_center2 !== null){
$call_center2='<option  value="" selected>English desk2</option><option  value="" selected>E02 desk2</option>';
echo json_encode($call_center2);
}
else if($call_center3 !== null){
$call_center3='<option  value="" selected>English desk2</option><option  value="" selected>E02 desk2</option>';
echo json_encode($call_center3);
}



?>