<?php
class Dbconnect
{
 public $localhost;
 public $dbname;
 public $root;
 public $password;


    public  function connect()
    {
      
        return new PDO("mysql:host=$this->localhost; dbname=$this->dbname" ,$this->root ,$this->password);
    }
    public function GetALL($table)
  {
    try
    {
    return $this->connect()->query("select * from '$table'")->fetchALL();
    }catch (PDOException $ex) {echo $ex->getMessage();}
  }

  public function GetOne($table,$id,$getid)
  {
    try
    {
      return $this->connect()->prepare("select * from '$table' where $id='?'")->execute([$getid]);

    }catch (PDOException $ex) {echo $ex->getMessage();}
  }
  public function Delete($table,$id,$getid)
  {
    try
    {
     $requet= $this->connect()->prepare("delete from '$table' where $id='?'");
     $requet->execute([$getid]);
      return  $requet->fetch();
    }catch (PDOException $ex) {echo $ex->getMessage();}
  }
 


}