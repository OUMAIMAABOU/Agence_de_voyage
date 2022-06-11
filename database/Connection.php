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
  
 static public  function GetOne($table,$Condition,$getid)
  {
    try{return self::connect()->prepare("select * from $table where $Condition")->execute($getid);
    }catch (PDOException $ex) {echo $ex->getMessage();}
  }
  
  static public  function Add($table,$id,$array)
  {
    try{return self::connect()->prepare("insert into $table values $id ")->execute($array);
    }catch (PDOException $ex) {echo $ex->getMessage();}
  }

 
  static public  function delete($table,$id,$array)
  {
    try{return self::connect()->prepare("delete from $table where $id = ? ")->execute($array);
    }catch (PDOException $ex) {echo $ex->getMessage();}
  }



}
