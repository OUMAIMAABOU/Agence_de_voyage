<?php
class AdministrateurController
{

  public function insert()
  {
    $admin = new Administrateur();

    if (isset($_POST['saveadmin'])) {
      $file_name = $_FILES['image']['name'];
      $file_tmp = $_FILES['image']['tmp_name'];
      move_uploaded_file($file_tmp, "views/assets/img/client/" . $file_name);
      $admin->Setname($_POST['nom']);
      $admin->Setemail($_POST['email']);
      $admin->Setpassword($_POST['password']);
      $admin->SetAdress($_POST['adres']);
      $admin->Setimage($file_name);
      $admin->SetPhone($_POST['Phone']);
      $admin->Settype($_POST['type']);
      $admin->SetGenre($_POST['genre']);
      $admin->Setcin($_POST['cin']);
      if ($admin->insert()) {
        cookies::set('success', 'Utilisateur a été Ajoute');
        header('location:admin');
      } else {
        cookies::set('error', 'Utilisateur ne pas ajouter');
        header('location:admin');
      }
    }
  }

  public function login()
  {

    $admin = new Administrateur();
    if (isset($_POST['loginconnect'])) {
      $admin->Setemail($_POST['email']);
      $admin = $admin->login();
      if ($admin && password_verify($_POST['password'], $admin['pass'])) 
      {
        $_SESSION['id'] = $admin['id'];
        $_SESSION['name'] = $admin['name'];
        $_SESSION['image'] = $admin['image'];
        $_SESSION['role'] = $admin[3];
        if ($admin[3] == "Agent" || $admin[3] == "Admin") {
          header('location:chart');
          var_dump($admin->login());
        } else if ($admin[3] == "client") {
          header('location:Acueille');
        }
      } else {
        cookies::set('error', "Utilisateur n'est exsite pas ");
        header('location:login');
      }
    }
  }


  public function Delete()
  {
    if (isset($_POST['deletADMIN'])) {
      if ($_SESSION['role'] == 'Admin') {
        $p = new Administrateur();
        $p->Setid($_POST['id']);
        if ($p->DeleteAdmin()) {
          cookies::set('success', 'Utilisateur a été Supprimer');
          header('location:admin');
        } else {
          cookies::set('error', 'Tu na pas les droit de supprimer cette utilisateur');
          var_dump($p->DeleteAdmin());
          header('location:admin');
        }
      } else if ($_SESSION['role'] != 'Admin') {
        cookies::set('error', 'Tu na pas les droit de supprimer les admins');

        header('location:admin');
      }
    }
  }
  public function getAllAdmin()
  {     
    return  Administrateur::Afficher();
  }
  public function getType()
  {
    return Administrateur::Afficher();
  }
  public function update()
  {

    if (isset($_POST['update'])) {
      $file_name = $_FILES['image']['name'];
      $file_tmp = $_FILES['image']['tmp_name'];
      move_uploaded_file($file_tmp, "views/assets/img/client/" . $file_name);
      $admin = new Administrateur();
      $admin->SetId($_POST['id']);
      $admin->Setname($_POST['nom']);
      $admin->Setemail($_POST['email']);
      $admin->Setpassword($_POST['password']);
      $admin->SetAdress($_POST['adres']);
      $admin->SetPhone($_POST['Phone']);
      $admin->Settype($_POST['type']);
      $admin->Setimage($file_name);
      $admin->SetGenre($_POST['genre']);

      if ($admin->Updateadmin()) {
        cookies::set('success', 'Utilisateur a été Modifé');
        header('location:admin');
      } else {
        cookies::set('error', 'Utilisateur ne pas Modifé');
        header('location:admin');
      }
    }
  }
  public function inscription()
  {

    if (isset($_POST['inscription'])) {

      $admin = new Administrateur();
      $admin->Setname($_POST['nom']);
      $admin->Setemail($_POST['email']);
      $admin->Setpassword($_POST['password']);
      $admin->SetAdress($_POST['adresse']);
      $admin->Setimage($_POST['image']);
      $admin->SetPhone($_POST['Phone']);
      $admin->Settype(3);
      $admin->SetGenre($_POST['genre']);
      $admin->Setcin($_POST['cin']);
      if ($admin->insert()) {
        cookies::set('success', 'Le compte a été Ajouté');
        header('location:login');
      } else {
        cookies::set('error', 'Compte ne pas Ajouté');
        header('location:inscription');
      }
    }
  }

  
}
