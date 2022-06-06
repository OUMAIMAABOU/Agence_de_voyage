<?php
class Contact extends Dbconnect{
public $name;
public $email;
public $subjet;
public $message;

    public function insert(){
         return $this->getdata("INSERT INTO contact VALUES(NULL,'?','?','?','?')")->execute([$this->name,$this->email,$this->subjet,$this->message]);
    }
}