<?php
class  Voyage extends Dbconnect{
    
public $id;
public $nom;
public $adresse;
public $ville;
public $nomber_de_chambre;
public $prix_chambre;
public $type_de_chambre;



public function getAllville(){ return $this->GetALL('ville');}


// static public function insert(){try{ return Dbconnect::add('hotel',"(NULL,?,?,?,?,?,?,?,?,?)",[self::$name, self::$Etoile, self::$ville, self::$Adresse, self::$image, self::$Telephone,self::$Restauran,self::$Agent,self::$email]); }catch(PDOException $e){ return $e->getMessage();}}
static  public  function Afficher(){return static :: SELECTJoin('voyage_organises,hotel','voyage_organises.id,voyage_organises.Dure,voyage_organises.date_de_depart,voyage_organises.Prix,voyage_organises.Discription,voyage_organises.Food,voyage_organises.image ,voyage_organises.etat,hotel.name '," hotel.id = voyage_organises.id_Hotel");}


// static public  function DeleteModele(){ return Dbconnect :: delete('hotel',"id",[self::$id]);}
// static public function UpdateHotel(){ return Dbconnect::Update('hotel',"name=?,etoile=?,ville=?,adresse=?,telephone=?,restaurant=?,email=?",[self::$name,self::$Etoile,self::$ville, self::$Adresse, self::$Telephone, self::$Restauran,self::$email,self::$id]);}


}