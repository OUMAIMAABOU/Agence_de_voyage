<?php
// use model/voyage;
class VoyageController
{
  public function Afficher()
  {
    return voyage::Afficher();
  }
  public function ShowVille()
  {
    $voyage = new voyage();
    return $voyage->getAllville();
  }

  public function select()
  {
    if(empty($_SESSION['id'])) header('location:login');
 
   else  return  voyage::selectOne($_POST['id']);
  }
  public function insert()
  {
        
   
    if (isset($_POST['addVoyage'])) {
      $file_name = $_FILES['image']['name'];
      $file_tmp =$_FILES['image']['tmp_name'];
      move_uploaded_file($file_tmp,"views/assets/img/voyage/".$file_name);   
      Voyage::Setduree($_POST['duree']);
      Voyage::Setdate_de_depart($_POST['date']);
      Voyage::SetPrix($_POST['prix']);
      Voyage::Setdiscription($_POST['Discription']);
      Voyage::Setfood($_POST['food']);
      Voyage::Setimage($_FILES['image']['name']);
      Voyage::Sethotel($_POST['Hotel']);
      Voyage::Setdistination($_POST['distination']);
      Voyage::Setville($_POST['ville']);
      if (Voyage::insert()){ 
      cookies::set('success','Voyage a été Ajouté'); 
      header('location:voyage');
        }else{
      cookies::set('error',"Voyage n'est pas Ajouté");
      header('location:voyage');
    }
    }
  }

  public function Delete()
  {
    if (isset($_POST['Voyagedelete'])) {
      Voyage::SetId($_POST['id']);
      if (Voyage::DeleteModele()) header('location:voyage');
    }
  }

  static public function update()
  {
    if (isset($_POST['UPDATEVoyage'])) {
      $file_name = $_FILES['image']['name'];
      $file_tmp =$_FILES['image']['tmp_name'];
      move_uploaded_file($file_tmp,"views/assets/img/voyage/".$file_name);   

      Voyage::Setid($_POST['id']);
      Voyage::Setduree($_POST['duree']);
      Voyage::Setdate_de_depart($_POST['date']);
      Voyage::SetPrix($_POST['prix']);
      Voyage::Setdiscription($_POST['Discription']);
      Voyage::Setfood($_POST['food']);
      Voyage::Setimage($_FILES['image']['name']);
      Voyage::Setville($_POST['ville']);
      Voyage::Setdistination($_POST['distination']);

      Voyage::Sethotel($_POST['Hotel']);
      if (Voyage::UpdateVoyage()) header('location:voyage');
    }
  }
}
