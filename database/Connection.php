<?php
class Dbconnect
{
  static public function connect()
    {
      try { return new PDO("mysql:host=localhost; dbname=agence_voyage" ,"root" ,"");
      }catch (PDOException $ex) {echo $ex->getMessage();}
    }

     static public function getdata($req){try{ return self::connect()->prepare($req);}catch(PDOException $ex) {echo $ex->getMessage();}}
 

  static  public  function GetALL($table)
  {
    try{return self::connect()->query("select * from $table")->fetchALL();}catch (PDOException $ex) {echo $ex->getMessage();} 
  }
  
 static public  function GetOne($table,$id,$getid)
  {
    try{return self::connect()->prepare("select * from '$table' where '$id'= ?")->execute([$getid]);
    }catch (PDOException $ex) {echo $ex->getMessage();}
  }



}
