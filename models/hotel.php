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
   
        $req=$this->connect()->query("SELECT hotel.id ,name , etoile, ville ,adresse,chambre.discription,chambre.prix,chambre.remise,image.image_principale from hotel,chambre,image WHERE image.id=hotel.id_image and chambre.id=hotel.id_chambre");
        return $req->fetchAll();
}





}
