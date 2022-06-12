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
        if ($admin->insert())header('location:admin');  
     }  
  } 
  public function login(){
    $admin=new Administrateur();
  if(isset($_POST['loginconnect'])){
  $admin->Setpassword($_POST['password']);
  $admin->Setemail($_POST['email']);
 
  var_dump($admin->login());

  if ($admin->login())header('location:admin');  

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


    
  
 }