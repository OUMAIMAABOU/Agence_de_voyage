<?php

class Hotel extends Dbconnect{

static public $id;
static public $Chamber;
static public $Restauran;
static public $ville;
static public $Etoile;
static public $Prix;
static public $Telephone;
static public $image;
static public $Adresse;
static public $email;
static public $name;





 public function getAllData(){
   
        $req=$this->connect()->query("SELECT * FROM hotel,chambre WHERE hotel.id=chambre.id_hotel");
        return $req->fetchAll();
}
static public function insert()
{
   try{ return Dbconnect::add('hotel',"(NULL,?,?,?,?,?,?,?,?,?,?)",[self::$name, self::$Etoile, self::$ville, self::$Adresse, self::$image, self::$Telephone, self::$Chamber,self::$Restauran,self::$Prix,self::$email]); }catch(PDOException $e){ return $e->getMessage();}
 }
 static  public  function Afficher(){return static :: GetALL('hotel');}
 static public  function DeleteModele(){
        return Dbconnect :: delete('hotel',"id",[self::$id]); 
        }















        static public function SetId($id){self::$id=$id;}
        static public function Setname($name){self::$name=$name;}
        static public function Setemail($email){self::$email=$email;}
        static public function SetChamber($Chamber){self::$Chamber=$Chamber;}
        static public function Setville($ville){self::$ville=$ville;}
        static public function Setimage($image){self::$image=$image;}
        static public function SetTelephone($Telephone){self::$Telephone=$Telephone;}
        static public function SetEtoile($Etoile){self::$Etoile=$Etoile;}
        static public function SetAdress($adresse){self::$Adresse=$adresse;}
        static public function SetPrix($Prix){self::$Prix=$Prix;}
        static public function SetRestauran($Restauran){self::$Restauran=$Restauran;}

}
