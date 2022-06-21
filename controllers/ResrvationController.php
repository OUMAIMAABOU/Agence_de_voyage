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
          header('location:Acueille');
        } else {
          cookies::set('error', "Reservation n'est pas Ajouté");
          header('location:formreservation');
        } 
        $_SESSION['id_voyage'];
      }  
    }

  static public function select(){
    return Reservation::Afficherreservation($_SESSION['id']);
   }
   static public function selectAll(){
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
   Public function Annule()
   {
     if(isset($_POST['Annuler']))
     {
         Reservation::SetId($_POST['id']);

         if (Reservation::Annulerservation())header('location:reservationClient'); 
     }  
   }
   public function Delete()
  {
    if (isset($_POST['Supprimerresveration'])) {
      Reservation::SetId($_POST['id']);
      if (Reservation::Deletereservation()) {
        cookies::set('success', 'Reservation a été Supprimé');
        header('location:tableReservation');
      } else {
        cookies::set('error', "Reservation n'est pas supprimé");
        header('location:tableReservation');
      }
    }
  }
  public static function Topdestination(){
   return Reservation:: Topdestination();
  }

}