<?php
$Controller= new ClientController();
// $Controller->InsertContact();

$Controllers= new AdministrateurController();
$Controllers->insert();

$Controllers->Delete();
$Controllers->update();

// if(isset($_FILES['image'])){
        
//     $file_name = $_FILES['image']['name'];
//     $file_tmp =$_FILES['image']['tmp_name'];
//     move_uploaded_file($file_tmp,"views/assets/images/avatar".$file_name);}
$hotel=new HotelController();
$hotel->insert();




?>