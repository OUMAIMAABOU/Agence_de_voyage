<?php
class AdministrateurController{
    
  Public function insrtadmin()
  {
    $admin=new Administrateur();
    if(isset($_POST['saveadmin'])){
        echo "b1";
        $admin->Setname('oumaima');
        $admin->Setemail('genre');
        $admin->Setpassword('Job');
        $admin->Setimage('adres');
        $admin->SetPhone('Phone');
        $admin->Setimage('Setimage');
        $admin->SetGenre(1);
        if($admin->insert()) header('location:operation');
  
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
    $admin=new Administrateur();
   return $admin->Afficher();
}


    
  
 }