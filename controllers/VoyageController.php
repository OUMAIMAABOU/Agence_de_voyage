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
    return  voyage::selectOne($_POST['id']);
  }
  public function insert()
  {
    if (isset($_POST['addVoyage'])) {
      Voyage::Setduree($_POST['duree']);
      Voyage::Setdate_de_depart($_POST['date']);
      Voyage::SetPrix($_POST['prix']);
      Voyage::Setdiscription($_POST['Discription']);
      Voyage::Setfood($_POST['food']);
      Voyage::Setimage($_POST['image']);
      Voyage::Setetat($_POST['etat']);
      Voyage::Sethotel($_POST['Hotel']);
      Voyage::Setdistination($_POST['distination']);
      if (Voyage::insert()) header('location:voyage');
    }
  }

  public function Delete()
  {
    if (isset($_POST['Voyagedelete'])) {
      Voyage::SetId($_POST['id']);
      if (Voyage::DeleteModele()) header('location:voyage');
    }
  }

  public function update()
  {
    if (isset($_POST['UPDATEVoyage'])) {
      Voyage::Setid($_POST['id']);
      Voyage::Setduree($_POST['duree']);
      Voyage::Setdate_de_depart($_POST['date']);
      Voyage::SetPrix($_POST['prix']);
      Voyage::Setdiscription($_POST['Discription']);
      Voyage::Setfood($_POST['food']);
      // Voyage::Setimage($_POST['image']);
      Voyage::Setetat($_POST['etat']);
      Voyage::Sethotel($_POST['Hotel']);
      if (Voyage::UpdateVoyage()) header('location:voyage');
    }
  }
}
