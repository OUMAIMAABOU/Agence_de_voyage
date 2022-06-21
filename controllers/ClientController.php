<?php
class ClientController
{
  public function getallville()
  {
    $voyage = new voyage();
    return $voyage->getAllville();
  }

  public function getallcommentair()
  {
    $hotel = new Client();
    return $hotel->SelectCommantaire();
  }


  static public function select()
  {
    $admin = Client::Afficher();
    return  $admin;
  }
  static public function Delete()
  {
    if (isset($_POST['deleclient'])) {
      $p = new Administrateur();
      $p->Setid($_POST['id']);
      if ($p->DeleteAdmin()) {
        cookies::set('success', 'Le message a été envoyé');
        header('location:client');
      }
    }
  }
  static public function Addcommantaire()
  {
    if (isset($_POST['Addcommantaire'])) {
      if (empty($_SESSION['id'])) {
        header('location:login');
      } else {
        Client::$id_users = $_SESSION['id'];
        Client::$commantaire = $_POST['comataira'];
        if (Client::Addcommantaire()) {
          cookies::set('success', 'le commantaire a été envoyé');
          header('location:Acueille');
        } else {
          cookies::set('error', "le commantaire n'est pas envoyé");

          header('location:Acueille');
        }
      }
    }
  }
  static public function femme(){
return count(Client::genrFemme());
  }
  static public function homme(){
    $Administrateur=new Administrateur();

    return count(Client::genreHomme());

  }
}
