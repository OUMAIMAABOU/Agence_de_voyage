<?php
class AdministrateurController{
    
  Public function insrtadmin()
  {
    $admin=new Administrateur();

    if(isset($_POST['saveadmin'])){
      // if(!empty([$_POST['nom']])|| !empty([$_POST['genre']])|| !empty($_POST['Phone']))
       

        $admin->Setname($_POST['nom']);
        $admin->Setemail($_POST['email']);
        $admin->Setpassword('$_POST[password]');
        $admin->Setimage('$_POST[nom]');
        $admin->SetPhone($_POST['Phone']);
        $admin->Settype(1);
        // $admin->Setimage($_POST['nom']);
        $admin->SetGenre($_POST['genre']);

        $admin->insert();
        header('location:admin');
  
     }  
  } 
  public function DeleteAdmin(){
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
  $admin=new Administrateur();
 return $admin->Afficher();
}


    
  
 }