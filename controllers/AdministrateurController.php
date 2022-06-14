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
        $admin->Setimage($_FILES['image']['name']);
        $admin->Setimage($_POST['image']);
        $admin->SetPhone($_POST['Phone']);
        $admin->Settype($_POST['type']);
        // $admin->Setimage($_POST['image']);
        $admin->SetGenre($_POST['genre']);
        $admin->Setcin($_POST['cin']);
        if ($admin->insert())header('location:admin');  
     }  
  } 
  public function login()
  {
    $admin=new Administrateur();
    if(isset($_POST['loginconnect']))
    {
       $admin->Setemail($_POST['email']);
       $admin=$admin->login();
      if($admin && password_verify($_POST['password'],$admin['password']))
      {
          $_SESSION['id']= $admin['id'];
          $_SESSION['name']= $admin['name'];
          $_SESSION['image']= $admin[2];
          $_SESSION['role']= $admin[3];
           if($admin[3]=="Agent"||$admin[3]=="admin_general"||$admin[3]=="admin_secondaire")header('location:admin'); 
           else if($admin[3]=="client")header('location:Acueille'); 
           else echo "error user type not allowed!";
     } else header('location:login'); 
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
   
         // if(!empty([$_POST['nom']])|| !empty([$_POST['genre']])|| !empty($_POST['Phone']))
         $admin->Setname($_POST['nom']);
         $admin->Setemail($_POST['email']);
         $admin->Setpassword($_POST['password']);
         $admin->SetAdress($_POST['adresse']);
         $admin->Setimage($_POST['image']);
         $admin->SetPhone($_POST['Phone']);
         $admin->Settype(6);
         $admin->SetGenre($_POST['genre']);
         $admin->Setcin($_POST['cin']);
         if ($admin->insert()){
          print_r($_POST);
          echo "b1 ajouter";
         }
      

    
     
    }
 }


    
  
 }