<?php
class Dbconnect
{
     public  function connect()
    {
      try { return new PDO("mysql:host=localhost; dbname=agence_voyage" ,"root" ,"");
      }catch (PDOException $ex) {echo $ex->getMessage();}
    }

    public function getdata($req){try{ return $this->connect()->prepare($req);}catch(PDOException $ex) {echo $ex->getMessage();}}
 

    public function GetALL($table)
  {
    try{return $this->connect()->query("select * from $table")->fetchALL();}catch (PDOException $ex) {echo $ex->getMessage();} 
  }
  
  public function GetOne($table,$id,$getid)
  {
    try{return $this->connect()->prepare("select * from '$table' where '$id'= ?")->execute([$getid]);
    }catch (PDOException $ex) {echo $ex->getMessage();}
  }



}
