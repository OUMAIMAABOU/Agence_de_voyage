<?php

class Hotel extends Dbconnect{

static public $id;
static public $Chamber;
static public $Restauran;
static public $ville;
static public $Etoile;
static public $Agent;
static public $Telephone;
static public $Adresse;
static public $email;
static public $name;
static public $Type;






static public function insert(){try{ return Dbconnect::add('hotel',"(NULL,?,?,?,?,?,?,?,?,?)",[self::$name, self::$Etoile, self::$ville, self::$Adresse,self::$Telephone,self::$Restauran,self::$Agent,self::$email,self::$Type]); }catch(PDOException $e){ return $e->getMessage();}}
static  public  function Afficher(){return static :: SELECTJoin('hotel,users','hotel.*,users.name as username',"hotel.id_users=users.id");}
static public  function DeleteModele(){ return Dbconnect :: delete('hotel',"id",[self::$id]);}
static public function UpdateHotel(){ return Dbconnect::Update('hotel',"name=?,etoile=?,ville=?,adresse=?,telephone=?,restaurant=?,email=?,type=?",[self::$name,self::$Etoile,self::$ville, self::$Adresse, self::$Telephone, self::$Restauran,self::$email,self::$Type,self::$id]);}













        static public function SetId($id){self::$id=$id;}
        static public function Setname($name){self::$name=$name;}
        static public function Setemail($email){self::$email=$email;}

        static public function SetChamber($Chamber){self::$Chamber=$Chamber;}
        static public function Setville($ville){self::$ville=$ville;}
        static public function SetTelephone($Telephone){self::$Telephone=$Telephone;}
        static public function SetEtoile($Etoile){self::$Etoile=$Etoile;}
        static public function SetAdress($adresse){self::$Adresse=$adresse;}
        static public function SetAgent($Agent){self::$Agent=$Agent;}
        static public function SetRestauran($Restauran){self::$Restauran=$Restauran;}
        static public function SetType($type){self::$Type=$type;}

}