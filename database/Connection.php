<?php
class Dbconnect
{
  static protected function connect()
    {
      try { return new PDO("mysql:host=127.0.0.1; dbname=agence_voyage" ,"root" ,"root");
      }catch (PDOException $ex) {echo $ex->getMessage();}
    }

  static protected function getdata($req){try{ return self::connect()->prepare($req);}catch(PDOException $ex) {echo $ex->getMessage();}}
  static  protected  function GetALL($table)
  {
    try{return self::connect()->query("select * from $table ORDER BY id DESC")->fetchALL();}catch (PDOException $ex) {echo $ex->getMessage();} 
  }

  static  protected  function SELECTJoin($table,$array,$condition)
  {
    try{return self::connect()->query("select $array from $table where $condition")->fetchALL();}catch (PDOException $ex) {echo $ex->getMessage();} 
  }
  
 static protected  function GetOne($table,$Condition,$getid)
  {
    try{return self::connect()->prepare("select * from $table where $Condition ")->execute($getid);}catch (PDOException $ex) {echo $ex->getMessage();}
  }
  
  static protected  function Add($table,$id,$array)
  {
    try{return self::connect()->prepare("insert into $table values $id ")->execute($array);}catch (PDOException $ex) {echo $ex->getMessage();}
  }

 
  static protected  function delete($table,$id,$array)
  {
    try{return self::connect()->prepare("delete from $table where $id = ? ")->execute($array);}catch (PDOException $ex) {echo $ex->getMessage();}
  }
  static protected  function Update($table ,$val,$array)
  {
    try{return self::connect()->prepare("UPDATE $table SET $val where id = ? ")->execute($array); }catch (PDOException $ex) {echo $ex->getMessage();}
  }




}
