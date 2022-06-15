<?php
class Contact extends Dbconnect{
static public $name;
static public $email;
static public $subjet;
static public $message;

 
    static public function insert(){
         return Dbconnect::add('contact',"(NULL,?,?,?,?)",[self::$name,self::$email,self::$subjet,self::$message]); 
         }

         static public function Setmessage($message){self::$message=$message;}
         static public function Setname($name){self::$name=$name;}
         static public function Setemail($email){self::$email=$email;}
         static public function Setsubject($subjet){self::$subjet=$subjet;}

}