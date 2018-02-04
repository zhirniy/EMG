<?php
namespace EMG;

require_once "Model\Model.php";

//Данные из формы записываем в переменные
$call_center_all = (int)$_POST['call_center_all'];
$call_center = (int)$_POST['call_center'];
$desk = (int)$_POST['desk'];
$team = (int)$_POST['team'];

//Создаём экземпляр класса Model что позволит подключиться к базе данных 
$db = new Model();
//Если есть запрос на получение данных списка Call center делаем запрос к базе данных.
//Полученные данные передаём на вывод
if($call_center_all !== 0){
$cc_callcenters = $db->data('cc_callcenters');
echo json_encode($cc_callcenters);
}
//Если есть запрос на получение данных списка Desc делаем запрос к базе данных.
//Полученные данные передаём на вывод
else if($call_center !== 0){
$cc_desks = $db->data_desks('cc_desks', $call_center);
echo json_encode($cc_desks);
}
//Если есть запрос на получение данных списка Team делаем запрос к базе данных.
//Полученные данные передаём на вывод
else if($desk !== 0){
$cc_teams = $db->data_teams('cc_teams', $desk);
echo json_encode($cc_teams);
}
//Если есть запрос на получение данных списка Sales делаем запрос к базе данных.
//Полученные данные передаём на вывод
else if($team !== 0){
$cc_users = $db->data_users('cc_users', $team);
echo json_encode($cc_users);
}

?>