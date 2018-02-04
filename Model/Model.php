<?php 
namespace EMG;
require_once "Model\DB.php";

class Model extends DB
{
    protected $dbn;
    //Функция получение и вывода списка Call center
         public static function data($table)
    {
       //Подключаемся к базе данных и делаем выборку значений. Полученный результат записываем в переменную $res
      //и передаём переменную в seqrch.php
        $dbn = new DB();
        $sql = $dbn->query('SELECT * FROM '.$table, null);
        $res='<option  value="" disabled selected>Call center</option>';
        if($sql){
               foreach ($sql as $call_center){
                $res.='<option  value="'.$call_center['id'].'">'.$call_center['name'].'</option>';
               }
        }

        return $res;
      
    
    }

    //Функция получение и вывода списка Desc
     //Подключаемся к базе данных и делаем выборку значений. Полученный результат записываем в переменную $res
    //и передаём переменную в seqrch.php
        public static function data_desks($table, $id)
    {
        $res='<option  value="" disabled selected>Desk option</option>';
        $dbn = new DB();
        $sql = $dbn->query('SELECT * FROM '.$table. ' WHERE id_callcenter=:id', $id);
        if($sql){
               foreach ($sql as $desk){
                   $res.='<option  value="'.$desk['id_callcenter'].'">'.$desk['desk_name'].'</option>';
           }
        }
        return $res;
  
    }

  //Функция получение и вывода списка Team
  //Подключаемся к базе данных и делаем выборку значений. Полученный результат записываем в переменную $res
  //и передаём переменную в seqrch.php
    public static function data_teams($table, $id)
    {
        $res='<option  value="" disabled selected>Team option</option>';
        $dbn = new DB();
        $sql = $dbn->query('SELECT * FROM '.$table. ' WHERE id_desk=:id', $id);
        if($sql){
               foreach ($sql as $teams){
               $res.='<option  value="'.$teams['id_desk'].'">'.$teams['team_name'].'</option>';
           }
        }
        return $res;
     }

    //Функция получение и вывода списка Sales
    //Подключаемся к базе данных и делаем выборку значений. Полученный результат записываем в переменную $res
    //и передаём переменную в seqrch.php

         public static function data_users($table, $id)
    {
        $res='<option  value="" disabled selected>Sales option</option>';
        $dbn = new DB();
        $sql = $dbn->query('SELECT * FROM '.$table. ' WHERE team_id=:id', $id);
        if($sql){
               foreach ($sql as $users){
            $res.='<option  value="'.$users['user_id'].'">'.$users['stage_name'].'</option>';
           }          
        }
        return $res;
     }

}
?>