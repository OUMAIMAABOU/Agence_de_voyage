<?php
class HotelController
{
  public function insert()
  {
    if (isset($_POST['addHotel'])) {
      Hotel::Setname($_POST['name']);
      Hotel::Setemail($_POST['email']);
      Hotel::SetAdress($_POST['Adresse']);
      Hotel::SetTelephone($_POST['Telephone']);
      Hotel::SetRestauran($_POST['Restauran']);
      Hotel::SetEtoile($_POST['Etoile']);
      Hotel::Setville($_POST['ville']);
      Hotel::SetType($_POST['type']);
      Hotel::SetAgent(90);
      if (Hotel::insert()){
        cookies::set('success','Hotel a été Ajouté'); 
        header('location:Hotel');
      }else{
        cookies::set('error',"Hotel n'est pas Ajouté");
        // header('location:Hotel');
 
      } 
       } 
    }
  

  static public function select()
  {
    return Hotel::Afficher();
  }

  public function Delete()
  {
    if (isset($_POST['deleteHotel'])) {
      Hotel::SetId($_POST['id']);
      if (Hotel::DeleteModele()) {
        cookies::set('success', 'Hotel a été Supprimé');
        header('location:Hotel');
      } else {
        cookies::set('error', "Hotel n'est pas supprimé");
        header('location:Hotel');
      }
    }
  }
  public function update()
  {
    if (isset($_POST['updateHotel'])) {
      Hotel::SetId($_POST['id']);
      Hotel::Setname($_POST['name']);
      Hotel::Setemail($_POST['email']);
      Hotel::SetAdress($_POST['Adresse']);
      Hotel::SetTelephone($_POST['Telephone']);
      Hotel::SetRestauran($_POST['Restauran']);
      Hotel::SetEtoile($_POST['Etoile']);
      Hotel::Setville($_POST['ville']);
      Hotel::SetType($_POST['type']);

      if (Hotel::UpdateHotel()) {
        cookies::set('success', 'Hotel a été Modifié');
        header('location:Hotel');
      } else {
        cookies::set('error', "Hotel n'est pas Modifié");
        header('location:Hotel');
      }
    }
  }
}
