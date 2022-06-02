<?php
class Client extends Dbconnect{
    



    public function getcommentair(){
        $req=$this->connect()->query("SELECT * from clients");
        return $req->fetchAll();
    }
}