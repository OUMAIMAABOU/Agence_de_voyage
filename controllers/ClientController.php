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
  // public function InsertContact(){
  //   $Contact = new contact();
  //   if($Contact->insert()){
  //   cookies::set('success','Le message a été envoyé');
  //   header('location:Accueille');
  //   }
  //   cookies::set('error','Ne peut pas envoyer de message');

  // }

  static public function select(){
    $admin = Client::Afficher();
    return  $admin;
 }
 static public function Delete(){
  if(isset($_POST['deleclient'])){
     $p = new Administrateur();
       $p->Setid($_POST['id']);
     if($p->DeleteAdmin()){
      cookies::set('success','Le message a été envoyé');
       header('location:client');
     }
    } 
}
  static public function Addcommantaire(){
    Client::$id_users=$_SESSION['id'];
    Client::$commantaire=$_POST['comataira'];
    if(isset($_POST['Addcommantaire'])){
      if(Client::Addcommantaire()){
    cookies::set('success', 'le commantaire a été envoyé');
    header('location:Acueille');
  } else {
    cookies::set('error', "le commantaire n'est pas envoyé");

    header('location:Acueille');

  } 
    }
 
  
}
 
 }