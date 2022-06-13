<?php
class Reservation extends Dbconnect {
    static public $id;
    static public $id_yoyage;
    static public $id_client;
    static public $nomber_adulet;
    static public $nomber_enfant;
    static public $nomber_femme;
    static public $nomber_homme;
    static public $transport;
    static public $local;
    static public $date_depart;
    static public $date_retour;

    
   
       public  function Deletereservation(){
        return Dbconnect :: delete('users',"id",[$this->id]); 
        }

      static  public  function Afficher(){return static :: GetALL('reservation');}

      public function insert(){
        try{
            
            return Dbconnect::add('reservation',"(NULL,?,?,?,?,?,?,?,?,?,?)",[self::$nomber_adulet, self::$nomber_enfant,
            self::$nomber_femme,self::$nomber_homme,self::$transport,self::$local,self::$date_depart,self::$date_retour,self::$id_client,self::$id_yoyage]);
           }catch(PDOException $e){ return $e->getMessage();}
        }

         public function Updatereservation(){
          try{
    
            $sql=Dbconnect::getdata("UPDATE users SET name =?,email=?,genre=?,type=?,password=?,image=?,Phone=?,adresse=? WHERE id = ? ");
            return $sql->execute([$this->name,$this->email,$this->genre,$this->type,$this->password,$this->image,$this->phone,$this->adresse,$this->id]);

          }catch(PDOException $e){ return $e->getMessage();} 
          }





















       public function SetId($id){$this->id=$id;}
        public function Setname($name){$this->name=$name;}
        public function Setemail($email){$this->email=$email;}
        public function Settype($type){$this->type=$type;}
        public function Setpassword($password){$this->password=$password;}
        public function Setimage($image){$this->image=$image;}
        public function Setphone($phone){$this->phone=$phone;}
        public function SetGenre($genre){$this->genre=$genre;}
        public function SetAdress($adresse){$this->adresse=$adresse;}






            
        

    }

       



