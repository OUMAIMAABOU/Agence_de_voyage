
<?php 
if(isset($_POST['logout']) ){
    session_destroy();
  header("Location: login");
    
  
  }
 
$CLIENT= new ClientController();
$CLIENT->InsertContact();
$Controllers= new AdministrateurController();
$Controllers->insert();

// if($_SESSION['role']=='admin_general'){
  $Controllers->Delete(); 
// }
 
$Controllers->update();
$Controllers->login();
$Controllers->inscription();


$hotel=new HotelController();
$hotel->insert();
$hotel->Delete();
$hotel-> update();

$Transport=new TransportController();
$Transport->insert();
$Transport->Delete();
$Transport->Update();
$Voyage=new VoyageController();
$Voyage->insert();
$Voyage->Delete();
$Voyage->Update();
$Resrvation=new ResrvationController();
$Resrvation->insert();
$Resrvation->Updaterefuse();
$Resrvation->Update();

ClientController::Delete();
ContactController::insert();







?>