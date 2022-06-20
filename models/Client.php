<?php
class Client extends Dbconnect{
  static public $id;
  static public $id_users;
  static public $commantaire;
    
    static  public  function SelectCommantaire(){
    return static :: SELECTJoin('users, clients','clients.commentaire , users.name as name,users.image as image'," users.id=clients.id_client");

    }
    static  public  function Afficher()
    {
      return  static :: SELECTJoin('users, types','users.* , types.type'," users.type=types.id and types.type='client'");
  
    }
    static  public  function Addcommantaire()
    {
      return  static :: add('clients','(?,?)',[null,self::$commantaire,self::$id_users]);
  
    }
}