<?php
class TransportController
{
  Public function insert()
  {
    if(isset($_POST['addTrasport']))
    {
      // if(!empty($_POST['name'])|| !empty($_POST[Setemail])|| !empty($_POST['Phone']))
        Transport::Setname($_POST['name']);
        Transport::Setemail($_POST['Email']);
        Transport::SetAdress($_POST['Adresse']);
        Transport::SetTelephone($_POST['Telephone']);
        Transport::Setville($_POST['ville']);
        Transport::SetType($_POST['Type']);
        Transport::SetIdUser(1);
      if (Transport::insert())header('location:transport'); 
    }  
  }

  public function select(){
    return Transport::Afficher();
   }

   public function Delete(){
    if(isset($_POST['delete'])){
       Transport::SetId($_POST['id']);
       if(Transport::DeleteModele()) header('location:transport');
      } 
  }
  Public function Update()
  {
    if(isset($_POST['updateTransport']))
    {
      // if(!empty($_POST['name'])|| !empty($_POST[Setemail])|| !empty($_POST['Phone']))
        Transport::SetId($_POST['id']);
        Transport::Setname($_POST['name']);
        Transport::Setemail($_POST['Email']);
        Transport::SetAdress($_POST['Adresse']);
        Transport::SetTelephone($_POST['Telephone']);
        Transport::Setville($_POST['ville']);
        Transport::SetType($_POST['Type']);
        Transport::SetIdUser(1);
      if (Transport::UpdateTransport())header('location:transport'); 
    }  
  }

} 