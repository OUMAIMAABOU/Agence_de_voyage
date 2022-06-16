<?php
class ResrvationController{

    Public function insert()
    {
      if(isset($_POST['addreservation']))
      {
          Reservation::SetidVoyage($_SESSION['id_voyage']);
          Reservation::Setid_client($_SESSION['id']);
          Reservation::Setnomber_adulet($_POST['adulte']);
          Reservation::Setnomber_enfant($_POST['Enfant']);
          Reservation::Settransportr($_POST['transport']);
          Reservation::Setlocal($_POST['Local']);
          Reservation::Setdate_depart($_POST['date_depart']);
          Reservation::Setdate_retour($_POST['date_retour']);
        if (Reservation::insert())
        {
          cookies::set('success', 'votre reservation a été Ajouté voueillez attandre ');
          header('location:formreservation');
        } else {
          cookies::set('error', "Hotel n'est pas Ajouté");
          header('location:formreservation');
        } 
      }  
    }

  static public function select(){
    return Reservation::Afficher();
   }


   Public function Update()
   {
     if(isset($_POST['Accepte']))
     {
         Reservation::SetId($_POST['id']);
       if (Reservation::AceptReservation())header('location:tableReservation'); 
     }  
   }
   Public function Updaterefuse()
   {
     if(isset($_POST['Refuse']))
     {
         Reservation::SetId($_POST['id']);

         if (Reservation::refosereservation())header('location:tableReservation'); 
     }  
   }

}