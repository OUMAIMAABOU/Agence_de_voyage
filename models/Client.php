<?php
class Client extends Dbconnect{
    



    static  public  function SelectCommantaire(){
    return static :: GetALL('clients');

    }
}