<?php
class Administrateur extends Dbconnect {
    public $id;
    public $name;
    public $email;
    public $type;
    public $password;
    public $image;
    public $phone;
    public $genre;
    public $adresse;
    
    // public function insert(){
    //     try{
    //         return Dbconnect::getdata("insert into admin values(NULL,?,?,?,?,?,?,?,?)")->execute([ $this->name, $this->email, $this->genre, $this->type, $this->password, $this->image, $this->phone]);
    //        }catch(PDOException $e){ return $e->getMessage();}
    //     }
       public  function DeleteAdmin(){
        return Dbconnect :: delete('users',"id",[$this->id]); 
        }

      static  public  function Afficher(){return static :: GetALL('users');}
      static public  function Affichertype(){return static ::GetALL('types');}

      public function insert(){
        try{
            
            return Dbconnect::add('users',"(NULL,?,?,?,?,?,?,?,?)",[$this->name, $this->email, $this->genre, $this->type, $this->password, $this->image, $this->phone,$this->adresse]);
           }catch(PDOException $e){ return $e->getMessage();}
        }

         public function Update(){
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

       



