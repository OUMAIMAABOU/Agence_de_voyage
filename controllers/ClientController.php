<?php
class ClientController{
    
 
  Public function getallville(){
    $voyage=new voyage();
         return $voyage->getAllville();
  }

  Public function getallcommentair(){
    $hotel=new Client();
         return $hotel->SelectCommantaire();
  }
  // ---------------------------------------
  public function InsertContact(){
    $Contact = new contact();
    if($Contact->insert()){
    cookies::set('success','Le message a été envoyé');
    header('location:Accueille');
    }
    cookies::set('error','Ne peut pas envoyer de message');

  }
 
 }