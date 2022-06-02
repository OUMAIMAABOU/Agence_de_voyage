<?php
class Contact extends Dbconnect{
    public function insert(){
        $req=$this->connect()->query("SELECT * from clients");
        return $req->fetchAll();
    }
}