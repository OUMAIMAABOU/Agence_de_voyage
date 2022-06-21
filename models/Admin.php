<?php
class Administrateur extends Dbconnect
{
  public $id;
  public $name;
  public $email;
  public $type;
  public $password;
  public $password2;
  public $image;
  public $phone;
  public $genre;
  public $adresse;
  public $cin;


  public  function DeleteAdmin()
  {
    return Dbconnect::delete('users', "type!=1 and id", [$this->id]);
  }
  static  public  function Afficher()
  {
    return  static :: SELECTJoin('users, types','users.* , types.type'," users.type=types.id and types.type!='client'");

  }
  public function insert()
  {
   
      $this->password = password_hash($this->password, PASSWORD_DEFAULT);
      return Dbconnect::add('users', "(NULL,?,?,?,?,?,?,?,?,?)", [$this->name, $this->cin, $this->email, $this->genre, $this->type, $this->password, $this->image, $this->phone, $this->adresse]);
 
  }

  public function login()
  {
    $result = $this->GetData("SELECT users.id, users.name ,users.image as image,types.type as type,users.password as pass  from users ,types WHERE users.type=types.id and email=?");
    $result->execute([$this->email]);
    return $result = $result->fetch();
  }
  public function Updateadmin()
  {
    if($this->password ==""){
      return Dbconnect::Update('users', "name =?,email=?,genre=?,type=?,image=?,Phone=?,adresse=?", [$this->name, $this->email, $this->genre, $this->type,  $this->image, $this->phone, $this->adresse, $this->id]);

    }else if($this->type ==""){
      $this->password = password_hash($this->password, PASSWORD_DEFAULT);
      return Dbconnect::Update('users', "name =?,email=?,genre=?,image=?,Phone=?,adresse=?", [$this->name, $this->email, $this->genre, $this->image, $this->phone, $this->adresse, $this->id]);
     
    }else if($this->image ==""){
      $this->password = password_hash($this->password, PASSWORD_DEFAULT);
      return Dbconnect::Update('users', "name =?,email=?,genre=?,Phone=?,adresse=?", [$this->name, $this->email, $this->genre, $this->phone, $this->adresse, $this->id]);
     }else{
    $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    return Dbconnect::Update('users', "name =?,email=?,genre=?,type=?,password=?,image=?,Phone=?,adresse=?", [$this->name, $this->email, $this->genre, $this->type, $this->password, $this->image, $this->phone, $this->adresse, $this->id]);
  }
}

 

  // public function search($search){
  //   try{
  //      $query="SELECT * FROM parents WHERE Matricule LIKE ? OR Nom_complet LIKE ? OR Genre LIKE ? OR Job LIKE ? OR Adresse LIKE ? OR Phone LIKE ?" ;
  //      $query=$this->GetData($query);
  //      $query->execute(['%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%']);
  //      return $query->fetchAll();
  //      return  static :: SELECTJoin('users','*'," genre='Homme'");
  //      $query->close;
  //     }catch(PDOException $e){ return $e->getMessage();} 

  // }
  
  





















  public function SetId($id)
  {
    $this->id = $id;
  }
  public function Setname($name)
  {
    $this->name = $name;
  }
  public function Setemail($email)
  {
    $this->email = $email;
  }
  public function Settype($type)
  {
    $this->type = $type;
  }
  public function Setpassword($password)
  {
    $this->password = $password;
  }
  public function Setimage($image)
  {
    $this->image = $image;
  }
  public function Setphone($phone)
  {
    $this->phone = $phone;
  }
  public function SetGenre($genre)
  {
    $this->genre = $genre;
  }
  public function SetAdress($adresse)
  {
    $this->adresse = $adresse;
  }
  public function Setcin($cin)
  {
    $this->cin = $cin;
  }
  public function Getpassword()
  {
    return $this->adresse;
  }
}
