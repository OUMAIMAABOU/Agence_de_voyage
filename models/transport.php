<?php

class Transport extends Dbconnect{

static public $id;
static public $ville;
static public $Telephone;
static public $Adresse;
static public $Type;
static public $name;
static public $Email;
static public $idUSER;






static public function insert()
{ try{ return Dbconnect::add('transport',"(NULL,?,?,?,?,?,?,?)",[self::$name,self::$Adresse, self::$Telephone, self::$ville, self::$Type,self::$Email,self::$idUSER]);
     }catch(PDOException $e){ return $e->getMessage();}}
 static public function Afficher(){return static :: GetALL('transport');}
 static public function DeleteModele(){ return Dbconnect :: delete('transport',"id",[self::$id]);}
 static public function Update(){
            try{
              $sql=Dbconnect::getdata("UPDATE transport SET name =?,adresse=?,tele=?,Ville=?,type=?,email=?,id_users=? WHERE id = ?");
              return $sql->execute([self::$name,self::$Adresse, self::$Telephone, self::$ville, self::$Type,self::$Email,self::$idUSER,self::$id]);
            }catch(PDOException $e){ return $e->getMessage();} 
            }
















        static public function SetId($id){self::$id=$id;}
        static public function Setname($name){self::$name=$name;}
        static public function Setville($ville){self::$ville=$ville;}
        static public function SetTelephone($Telephone){self::$Telephone=$Telephone;}
        static public function SetAdress($adresse){self::$Adresse=$adresse;}
        static public function SetType($Type){self::$Type=$Type;}
        static public function SetEmail($Email){self::$Email=$Email;}
        static public function SetIdUser($idUSER){self::$idUSER=$idUSER;}



}
