<?php 
namespace EMG;
require_once "DB.php";
//require_once "Cache.php";
use EMG\DB;
class Model extends DB
{
    protected $dbn;

     public static function data($table)
    {
        $dbn = new DB();
        $sql = $dbn->query('SELECT * FROM '.$table);
        $call_center="";
        while ($call_center = $sql->fetch_object()){
            $res.='<option  value="'.$call_center->id.'">'.$call_center->name.'</option>';

        }
        return $res;
        
    
    }


        public static function data_desks($table, $id)
    {
        $dbn = new DB();
        $sql = $dbn->query('SELECT * FROM '.$table. ' WHERE id='.$id);
        $res='<option  value="" disabled selected>Desk option</option>';
        while ($desk = $sql->fetch_object()){
            $res.='<option  value="'.$desk->desk_name.'">'.$desk->desk_name.'</option>';
           
        }
        return $res;
        
    
    }

   /* public static function findById($id, $column, $table)
    {
        $dbn1 = new DB();
        return $dbn1->query('SELECT * FROM '.$table.'  WHERE '.$column.'='.$id);
    
    }

     public static function findById_services($id, $status)
    {
        $dbn1 = new DB();
        return $dbn1->query('SELECT obj_services.title_service, obj_services.status, obj_contracts.id_contract, obj_contracts.number, obj_contracts.date_sign, obj_contracts.staff_number  FROM obj_services INNER JOIN obj_contracts ON obj_services.id_contract = obj_contracts.id_contract WHERE obj_contracts.id_customer='.$id.' AND obj_services.status='."'".$status."'");
    
    }


    public function data($id, $status, $column, $table){
    	$id_ = $id.'_'.$status.'.tmp';
    	$cache = new Cache();
    	$res = $cache->read($id_);
    	if (empty($res)) {
    		$sql = $this->findById($id, $column, $table);
    		$sql_services = $this->findById_services($id, $status);
    		$res = $this->data_new($sql, $sql_services);
    		$cache->write($id_, $res);
    	}
    	return $res;
    	
    }

    public function data_new($sql, $sql_services){
    	while ($customer = $sql->fetch_object()){
		if(!empty($customer->id_customer) || !empty($customer->name_customer)){
	    $res = '<h3>'.'Информация про клиента: '.'</h3>';
	    $res .= 'Название клиента: '.$customer->id_customer.'</br>';
	    $res .= ' Имя клиента: '.$customer->name_customer.'</br>';
	    $res .= 'Информация про компанию'.$customer->company.'</br>';
	    $res .=  '<h3>'.'Информация про сервисы: '.'</h3>'; 
                 if($sql_services->num_rows!=0){	    
	    	     while ($contracts_services_ = $sql_services->fetch_object()){
		        if(!empty($contracts_services_->title_service)){
                  $res .=  'Название сервиса:'.$contracts_services_->title_service.'</br>';
		          $res .=  'Номер контракта:'.$contracts_services_->id_contract.'</br>';
		          $res .=  'Номер сервиса:'.$contracts_services_->number.'</br>';
		          $res .=  'Дата создания:'.$contracts_services_->date_sign;
              			}
           
                 }
	             }
	             else{
	             	$res .='Нет сервисов';
	             }
	              return $res;
	       }
	    }


	    if(!$sql->fetch_object()){
			$res = "Такого пользователя не существует";	
			return $res;
		}
        
}*/

}
?>