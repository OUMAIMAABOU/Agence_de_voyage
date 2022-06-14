<?php
class ResrvationController{

    Public function insert()
    {
      if(isset($_POST['addreservation']))
      {
        // if(!empty($_POST['name'])|| !empty($_POST[Setemail])|| !empty($_POST['Phone']))
          Reservation::SetidVoyage($_SESSION['id_voyage']);
          Reservation::Setid_client($_SESSION['id']);
          Reservation::Setnomber_adulet($_POST['adulte']);
          Reservation::Setnomber_enfant($_POST['Enfant']);
        
          Reservation::Settransportr($_POST['transport']);
          Reservation::Setlocal($_POST['Local']);
          Reservation::Setdate_depart($_POST['date_depart']);
          Reservation::Setdate_retour($_POST['date_retour']);
        if (Reservation::insert())header('location:formreservation'); 
      }  
    }

  public function select(){
    return Reservation::Afficher();
   }

   public function Delete(){
    if(isset($_POST['delete'])){
       Transport::SetId($_POST['id']);
       if(Transport::DeleteModele()) header('location:transport');
      } 
  }
  Public function Update()
  {
    if(isset($_POST['updateTransport']))
    {
      // if(!empty($_POST['name'])|| !empty($_POST[Setemail])|| !empty($_POST['Phone']))
        Transport::SetId($_POST['id']);
        Transport::Setname($_POST['name']);
        Transport::Setemail($_POST['Email']);
        Transport::SetAdress($_POST['Adresse']);
        Transport::SetTelephone($_POST['Telephone']);
        Transport::Setville($_POST['ville']);
        Transport::SetType($_POST['Type']);
        Transport::SetIdUser(1);
      if (Transport::UpdateTransport())header('location:transport'); 
    }  
  }


}