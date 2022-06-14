<?php
class Reservation extends Dbconnect
{
   static public $id;
   static public $id_yoyage;
   static public $id_client;
   static public $nomber_adulet;
   static public $nomber_enfant;
   static public $transport;
   static public $local;
   static public $date_depart;
   static public $date_retour;
   static public $date_reservation;
   static public $etat;





   static  public  function Afficher()
   {
      return static::SELECTJoin('reservation,users,voyage_organises ', 'reservation.* ,users.name,users.adresse,users.email,voyage_organises.Prix ,voyage_organises.destination', "reservation.id_voyage=voyage_organises.id and reservation.id_client=users.id");
   }

   static public function insert()
   {
      try {
         return Dbconnect::add('reservation', "(NULL,?,?,?,?,?,?,?,?,?,?)", [self::$nomber_adulet, self::$nomber_enfant, self::$transport, self::$local, self::$date_depart, self::$date_retour, self::$id_client, self::$id_yoyage, date("Y-m-d H:i:s"), 'en attend']);
      } catch (PDOException $e) {
         return $e->getMessage();
      }
   }

  static public function AceptReservation()
   {
     return Dbconnect::Update('reservation', "etat='Accepte'", [self::$id]);
   }
   static public function refosereservation()
   {
     return Dbconnect::Update('reservation', "etat='Refuse'", [self::$id]);
   }

























   static public function SetId($id)
   {
      self::$id = $id;
   }
   static public function SetidVoyage($id_yoyage)
   {
      self::$id_yoyage = $id_yoyage;
   }
   static public function Setid_client($id_client)
   {
      self::$id_client = $id_client;
   }
   static public function Setnomber_adulet($nomber_adulet)
   {
      self::$nomber_adulet = $nomber_adulet;
   }
   static  public function Setnomber_enfant($nomber_enfant)
   {
      self::$nomber_enfant = $nomber_enfant;
   }
   static public function Settransportr($transport)
   {
      self::$transport = $transport;
   }
   static public function Setlocal($local)
   {
      self::$local = $local;
   }
   static public function Setdate_depart($date_depart)
   {
      self::$date_depart = $date_depart;
   }
   static  public function Setdate_retour($date_retour)
   {
      self::$date_retour = $date_retour;
   }
   static  public function Setdate_etat($etat)
   {
      self::$etat = $etat;
   }
}
