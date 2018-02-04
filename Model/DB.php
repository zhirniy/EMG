<?php
namespace EMG;
//Класс соединения с базой данных
class DB
{
protected $dbn;	
public function __construct()
  {
     $this->dbn = mysqli_connect("localhost", "root", "12345678", "test_db") or die ("Невозможно подключиться к БД");
   }


   public function query($params)
   {

   	 return mysqli_query($this->dbn, $params);
  }

}
?> 