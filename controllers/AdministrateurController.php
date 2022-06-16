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
      $admin->Setimage($_FILES['image']['name']);
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
      if ($admin && password_verify($_POST['password'], $admin['pass'])) {
        $_SESSION['id'] = $admin['id'];
        $_SESSION['name'] = $admin['name'];
        $_SESSION['image'] = $admin['image'];
        $_SESSION['role'] = $admin['type'];
        if ($admin[3] == "Agent" || $admin[3] == "admin_general") {
          header('location:admin');
          var_dump($admin->login());
        } else if ($admin[3] == "client") {
          header('location:Acueille');
        } 
    }
    var_dump($admin->login());
      cookies::set('error', "Utilisateur n'est exsite pas ");
      header('location:login');
  }
    echo "aaa";
  
}


  public function Delete()
  {
    if (isset($_POST['deletADMIN'])) {
      $p = new Administrateur();
      $p->Setid($_POST['id']);
      if ($p->DeleteAdmin()) {
        cookies::set('success', 'Utilisateur a été Supprimer');
        header('location:admin');
      } else {
        cookies::set('error', 'Tu na pas les droit de supprimer cette utilisateur');
        header('location:admin');
      }
    }
  }
  public function getAllAdmin()
  {
    $admin = Administrateur::Afficher();
    return  $admin;
  }
  public function getType()
  {
    return Administrateur::Afficher();
  }
  public function update()
  {

    if (isset($_POST['update'])) {

      $admin = new Administrateur();
      $admin->SetId($_POST['id']);
      $admin->Setname($_POST['nom']);
      $admin->Setemail($_POST['email']);
      $admin->Setpassword($_POST['password']);
      $admin->SetAdress($_POST['adres']);
      $admin->SetPhone($_POST['Phone']);
      $admin->Settype($_POST['type']);
      $admin->Setimage($_POST['image']);
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

      // if(!empty([$_POST['nom']])|| !empty([$_POST['genre']])|| !empty($_POST['Phone']))
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
        print_r($_POST);
        echo "b1 ajouter";
      }
    }
  }
}
