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
    
   
      public  function DeleteAdmin(){return Dbconnect :: delete('users',"id",[$this->id]); }
      static  public  function Afficher(){return static :: GetALL('users');}
      public function insert(){
        try{
            return Dbconnect::add('users',"(NULL,?,?,?,?,?,?,?,?)",[$this->name, $this->email, $this->genre, $this->type, $this->password, $this->image, $this->phone,$this->adresse]);
           }catch(PDOException $e){ return $e->getMessage();}
        }
   
      public function login(){
        $result= $this->GetData("select * from users where email= ?");
        $result->execute([$this->email]);
        $numrows=$result;
        $res=$numrows->fetch(PDO::FETCH_ASSOC);
       
          //  $_SESSION['name'] = $res['name'];
            
          //   $_SESSION['email']= $res['email'];
          //   $_SESSION['role']=$res['type'];

            return $res;
    }  

      public function Updateadmin(){
      return Dbconnect::Update('users',"name =?,email=?,genre=?,type=?,password=?,image=?,Phone=?,adresse=?",[$this->name,$this->email,$this->genre,$this->type,$this->password,$this->image,$this->phone,$this->adresse,$this->id]);
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

       



