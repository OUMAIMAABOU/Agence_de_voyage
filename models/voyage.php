<?php
class  Voyage extends Dbconnect
{

    static public $id;
    static public $duree;
    static public $date_de_depart;
    static public $Prix;
    static public $discription;
    static public $food;
    static public $image;
    static public $id_hotel;
    static public $ville;
    static public $distination;
    public function getAllville()
    {
        return $this->GetALL('ville');
    }
    static public function insert()
    {
        try {
            return Dbconnect::add('voyage_organises', "(NULL,?,?,?,?,?,?,?,?,?)", 
            [self::$duree, self::$date_de_depart, self::$Prix, self::$discription,self::$food, self::$image, self::$id_hotel,self::$distination,self::$ville]);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    static  public  function Afficher()
    {
        return static::SELECTJoin('voyage_organises,hotel', 'voyage_organises.*, hotel.ville,hotel.etoile,hotel.id,hotel.name ', " hotel.id = voyage_organises.id_Hotel ORDER BY voyage_organises.id DESC");
    }
    static  public  function selectOne($id)
    {
        return static::SELECTJoin('voyage_organises,hotel', 'voyage_organises.id , voyage_organises.Dure,voyage_organises.Prix,voyage_organises.Discription,voyage_organises.image,voyage_organises.Food,hotel.ville,hotel.etoile', "  voyage_organises.id_Hotel=hotel.id and voyage_organises.id=$id");
    }
    static public  function Deletevoyage()
    {
        return Dbconnect::delete('voyage_organises', "id", [self::$id]);
    }
    static public function UpdateVoyage()
    {
        if(self::$image==""){
            return Dbconnect::Update('voyage_organises', "Dure=?,Discription=?,id_hotel=?,date_de_depart=?,Prix=?,Food=?,ville=?", [self::$duree,  self::$discription, self::$id_hotel, self::$date_de_depart, self::$Prix, self::$food,self::$ville, self::$id]);

        }else{
            return Dbconnect::Update('voyage_organises', "Dure=?,Discription=?,id_hotel=?,date_de_depart=?,Prix=?,destination=?,Food=?,ville=?,image=?", [self::$duree,  self::$discription, self::$id_hotel, self::$date_de_depart, self::$Prix, self::$distination, self::$food,self::$ville,self::$image,self::$id]);

        }
    }




    static public function SetId($id)
    {
        self::$id = $id;
    }
    static public function Setduree($duree)
    {
        self::$duree = $duree;
    }
    static public function Setdate_de_depart($date_de_depart)
    {
        self::$date_de_depart = $date_de_depart;
    }
    static public function SetPrix($Prix)
    {
        self::$Prix = $Prix;
    }
    static public function Setdiscription($discription)
    {
        self::$discription = $discription;
    }
    static public function Setfood($food)
    {
        self::$food = $food;
    }
    static public function Setimage($image)
    {
        self::$image = $image;
    }
 
    static public function Sethotel($id_hotel)
    {
        self::$id_hotel = $id_hotel;
    }
    static public function Setville($ville)
    {
        self::$ville = $ville;
    }
    static public function Setdistination($distination)
    {
        self::$distination = $distination;
    }
}
