<?php
class Client extends Dbconnect{
    



    static  public  function SelectCommantaire(){
    return static :: GetALL('clients');

    }
    static  public  function Afficher()
    {
      return  static :: SELECTJoin('users, types','users.* , types.type'," users.type=types.id and types.type='client'");
  
    }
 
}