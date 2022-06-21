
<?php 
if(isset($_POST['logout']) ){
    session_destroy();
  header("Location: login");
    
  
  }
 
$CLIENT= new ClientController();
$Controllers= new AdministrateurController();
$Controllers->insert();
ClientController::Addcommantaire();


  $Controllers->Delete(); 


 
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
VoyageController::Update();

$Resrvation=new ResrvationController();
$Resrvation->insert();
$Resrvation->Updaterefuse();
$Resrvation->Update();
$Resrvation->Annule();
$Resrvation-> Delete();

ClientController::Delete();
ContactController::insert();
?>