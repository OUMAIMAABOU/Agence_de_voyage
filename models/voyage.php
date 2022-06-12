<?php
class  Voyage extends Dbconnect{
    
static public $id;
static public $duree;
static public $date_de_depart;
static public $Prix;
static public $discription;
static public $food;
static public $image;
static public $etat;
static public $id_hotel;




public function getAllville(){ return $this->GetALL('ville');}


static public function insert(){try{ return Dbconnect::add('voyage_organises',"(NULL,?,?,?,?,?,?,?,?)",[self::$duree, self::$date_de_depart, self::$Prix, self::$discription, self::$food, self::$image,self::$etat,self::$id_hotel]); }catch(PDOException $e){ return $e->getMessage();}}
static  public  function Afficher(){return static :: SELECTJoin('voyage_organises,hotel','voyage_organises.id,voyage_organises.Dure,voyage_organises.date_de_depart,voyage_organises.Prix,voyage_organises.Discription,voyage_organises.Food,voyage_organises.image ,voyage_organises.etat,hotel.id,hotel.name '," hotel.id = voyage_organises.id_Hotel");}
static public  function DeleteModele(){ return Dbconnect :: delete('voyage_organises',"id",[self::$id]);}
static public function UpdateVoyage(){ return Dbconnect::Update('voyage_organises',"Dure=?,etat=?,Discription=?,id_hotel=?,date_de_depart=?,Prix=?,Food=?",[self::$duree,self::$etat,self::$discription, self::$id_hotel,self::$date_de_depart,self::$Prix,self::$food,self::$id]);}




static public function SetId($id){self::$id=$id;}
static public function Setduree($duree){self::$duree=$duree;}
static public function Setdate_de_depart($date_de_depart){self::$date_de_depart=$date_de_depart;}
static public function SetPrix($Prix){self::$Prix=$Prix;}
static public function Setdiscription($discription){self::$discription=$discription;}
static public function Setfood($food){self::$food=$food;}
static public function Setimage($image){self::$image=$image;}
static public function Setetat($etat){self::$etat=$etat;}
static public function Sethotel($id_hotel){self::$id_hotel=$id_hotel;}

}