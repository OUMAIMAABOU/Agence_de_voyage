<?php
class  Voyage extends Dbconnect{
    
public $id;
public $nom;
public $adresse;
public $ville;
public $nomber_de_chambre;
public $prix_chambre;
public $type_de_chambre;


 public function getAllData(){
   
        $req=$this->connect()->query("SELECT tour.id ,voyage.image, voyage.ville, duree,nbr_place_de_tour,nombre_de_group,prix,remise,description,destination from voyage,tour WHERE voyage.id=tour.voyage;
                ");
        return $req->fetchAll();
}
public function getAllville(){
   
        $req=$this->connect()->query("SELECT * from ville");
        return $req->fetchAll();
}



}