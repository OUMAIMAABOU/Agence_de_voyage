<?php

class Hotel extends Dbconnect{

public $id;
public $nom;
public $adresse;
public $ville;
public $nomber_de_chambre;
public $prix_chambre;
public $type_de_chambre;


 public function getAllData(){
   
        $req=$this->connect()->query("SELECT * FROM hotel,chambre WHERE hotel.id=chambre.id_hotel");
        return $req->fetchAll();
}





}
