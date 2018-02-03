<?php 
namespace EMG;
require_once "DB.php";
use EMG\DB;
class Model extends DB
{
    protected $dbn;
    //Функция получение и вывода списка Call center
     public static function data($table)
    {
        $dbn = new DB();
        $sql = $dbn->query('SELECT * FROM '.$table);
        $res='<option  value="" disabled selected>Call center</option>';
        while ($call_center = $sql->fetch_object()){
            $res.='<option  value="'.$call_center->id.'">'.$call_center->name.'</option>';

        }
        return $res;
        
    
    }

    //Функция получение и вывода списка Desc
        public static function data_desks($table, $id)
    {
        $dbn = new DB();
        $sql = $dbn->query('SELECT * FROM '.$table. ' WHERE id_callcenter='.$id);
        $res='<option  value="" disabled selected>Desk option</option>';
        while ($desk = $sql->fetch_object()){
            $res.='<option  value="'.$desk->id_callcenter.'">'.$desk->desk_name.'</option>';
           
        }
        return $res;
        
    
    }

  //Функция получение и вывода списка Team
    public static function data_teams($table, $id)
    {
        $dbn = new DB();
        $sql = $dbn->query('SELECT * FROM '.$table. ' WHERE id_desk='.$id);
        $res='<option  value="" disabled selected>Team option</option>';
        while ($teams = $sql->fetch_object()){
            $res.='<option  value="'.$teams->id_desk.'">'.$teams->team_name.'</option>';
           
        }
        return $res;
     }

    //Функция получение и вывода списка Sales

         public static function data_users($table, $id)
    {
        $dbn = new DB();
        $sql = $dbn->query('SELECT * FROM '.$table. ' WHERE team_id='.$id);
        $res='<option  value="" disabled selected>Sales option</option>';
        while ($users = $sql->fetch_object()){
            $res.='<option  value="'.$users->user_id.'">'.$users->stage_name.'</option>';
                     
        }
        return $res;
     }

}
?>