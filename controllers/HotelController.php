<?php
class HotelController{

    Public function insert()
    {
  
      if(isset($_POST['add'])){
        // if(!empty($_POST['name'])|| !empty($_POST[Setemail])|| !empty($_POST['Phone']))
       
         
      
  
         Hotel::Setname($_POST['name']);
         Hotel::Setemail($_POST['email']);
         Hotel::SetChamber($_POST['Chamber']);
         Hotel::SetAdress($_POST['Adresse']);
         Hotel::Setimage('$_POST[$_FILES]');
         Hotel::SetTelephone($_POST['Telephone']);
         Hotel::SetRestauran($_POST['Restauran']);
         Hotel::SetEtoile($_POST['Etoile']);
          Hotel::Setimage($_POST['image']);
          Hotel::Setville($_POST['ville']);
          Hotel::SetPrix($_POST['Prix']);
  
          if (Hotel::insert())header('location:formreservation');  
         
  }  
}
} 