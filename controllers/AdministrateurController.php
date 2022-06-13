<?php
class AdministrateurController{
    
  Public function insert()
  {
    $admin=new Administrateur();

    if(isset($_POST['saveadmin'])){
      // if(!empty([$_POST['nom']])|| !empty([$_POST['genre']])|| !empty($_POST['Phone']))
        $admin->Setname($_POST['nom']);
        $admin->Setemail($_POST['email']);
        $admin->Setpassword($_POST['password']);
        $admin->SetAdress($_POST['adres']);
        // $admin->Setimage($_POST[$_FILES['image']['name']]);
        $admin->Setimage($_POST['image']);
        $admin->SetPhone($_POST['Phone']);
        $admin->Settype($_POST['type']);
        // $admin->Setimage($_POST['image']);
        $admin->SetGenre($_POST['genre']);
        $admin->Setcin($_POST['cin']);
        if ($admin->insert())header('location:admin');  
     }  
  } 
  public function login(){
    $admin=new Administrateur();
  if(isset($_POST['loginconnect'])){
  $admin->Setpassword($_POST['password']);
  $admin->Setemail($_POST['email']);
 
  var_dump($admin->login());
$admin=$admin->login();
var_dump($admin);
  if ($admin){
    session_start();
    $_SESSION['NOM']="ouma";
    // $_SESSION["name"] = $admin['name'];
    // $_SESSION["name1"] = $admin[1];
    // $_SESSION["name3"] = $admin->name; 
    var_dump(  $_SESSION['admin']);    
     
  //   $_SESSION['email']= $admin['email'];
  //  $_SESSION['role']=$admin['type'];
    header('location:admin');  
  }
}
  }
  public function Delete(){
    if(isset($_POST['deletparent'])){
       $p = new Administrateur();
       $p->Setid($_POST['id']);
       if($p->DeleteAdmin()) header('location:admin');
      } 
  }
   public function getAllAdmin(){
   $admin = Administrateur::Afficher();
   return  $admin;
}
public function getType(){
 return Administrateur::Afficher();
}
public function update(){

  if(isset($_POST['update'])){
  
    $admin=new Administrateur();
        $admin->SetId($_POST['id']);
        $admin->Setname($_POST['nom']);
        $admin->Setemail($_POST['email']);
        $admin->Setpassword($_POST['password']);
        $admin->SetAdress($_POST['adres']);
        $admin->Setimage($_FILES['image']['name']);
        $admin->SetPhone($_POST['Phone']);
        $admin->Settype($_POST['type']);
        $admin->Setimage($_POST['image']);
        $admin->SetGenre($_POST['genre']);
       
      if($admin->Updateadmin())header('location:admin');
      print_r($_POST);
    }
 }
 public function inscription(){

  if(isset($_POST['inscription'])){
  
    $admin=new Administrateur();
   
        $admin->Setname($_POST['nom']);
        $admin->Setemail($_POST['email']);
        $admin->Setpassword($_POST['configpassword']);
        $admin->SetAdress($_POST['adresse']);
        $admin->Setimage($_POST['image']);
        $admin->SetPhone($_POST['Phone']);
        $admin->Settype($_POST['type']);
        $admin->Setimage($_POST['image']);
        $admin->SetGenre($_POST['genre']);
        $admin->Setcin($_POST['cin']);
       
      if($admin->insert())header('location:login');
      print_r($_POST);
      echo "b1 ajouter";
    }
 }


    
  
 }