<?php
namespace EMG;

require_once "Model.php";

//Данные из формы записываем в переменные
$call_center_all = $_POST['call_center_all'];
$call_center = $_POST['call_center'];
$desk = $_POST['desk'];
$team = $_POST['team'];

//Создаём экземпляр класса Model что позволит подключиться к базе данных 
$db = new Model();
//Если есть запрос на получение данных списка Call center делаем запрос к базе данных.
//Полученные данные передаём на вывод
if($call_center_all !== null){
$cc_callcenters = $db->data('cc_callcenters');
echo json_encode($cc_callcenters);
}
//Если есть запрос на получение данных списка Desc делаем запрос к базе данных.
//Полученные данные передаём на вывод
else if($call_center !== null){
$cc_desks = $db->data_desks('cc_desks', $call_center);
echo json_encode($cc_desks);
}
//Если есть запрос на получение данных списка Team делаем запрос к базе данных.
//Полученные данные передаём на вывод
else if($desk !== null){
$cc_teams = $db->data_teams('cc_teams', $desk);
echo json_encode($cc_teams);
}
//Если есть запрос на получение данных списка Sales делаем запрос к базе данных.
//Полученные данные передаём на вывод
else if($team !== null){
$cc_users = $db->data_users('cc_users', $team);
echo json_encode($cc_users);
}



?>