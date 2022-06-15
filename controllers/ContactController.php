<?php
class ContactController{
    static public function insert(){
        if(isset($_POST["contact"])){
            Contact::Setname($_POST['nom']);
        Contact::Setemail($_POST['email']);
        Contact::Setmessage($_POST['msg']);
        Contact::Setsubject($_POST['Subject']);
        if(Contact::insert()){
            echo "b1";
        } 
        }
       
    }
}