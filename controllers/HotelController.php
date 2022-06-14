<?php
class HotelController
{
  Public function insert()
  {
    if(isset($_POST['add']))
    {
      // if(!empty($_POST['name'])|| !empty($_POST[Setemail])|| !empty($_POST['Phone']))
        Hotel::Setname($_POST['name']);
        Hotel::Setemail($_POST['email']);
        Hotel::SetChamber($_POST['Chamber']);
        Hotel::SetAdress($_POST['Adresse']);
        // Hotel::Setimage('$_POST[$_FILES]');
        Hotel::SetTelephone($_POST['Telephone']);
        Hotel::SetRestauran($_POST['Restauran']);
        Hotel::SetEtoile($_POST['Etoile']);
        Hotel::Setimage($_POST['image']);
        Hotel::Setville($_POST['ville']);
        Hotel::SetType($_POST['type']);
        Hotel::SetAgent(30);
      if (Hotel::insert())header('location:Hotel'); 
    }  
  }

  static public function select(){
    return Hotel::Afficher();
   }

   public function Delete(){
    if(isset($_POST['deleteHotel'])){
       Hotel::SetId($_POST['id']);
       if(Hotel::DeleteModele()) header('location:Hotel');
      } 
  }
  public function update()
  {
    if(isset($_POST['updateHotel']))
    {   
       Hotel::SetId($_POST['id']);
        Hotel::Setname($_POST['name']);
        Hotel::Setemail($_POST['email']);
        Hotel::SetAdress($_POST['Adresse']);
        Hotel::SetTelephone($_POST['Telephone']);
        Hotel::SetRestauran($_POST['Restauran']);
        Hotel::SetEtoile($_POST['Etoile']);
        Hotel::Setville($_POST['ville']);
        Hotel::SetType($_POST['type']);

      if (Hotel::UpdateHotel())header('location:Hotel'); 
    }  
}

} 