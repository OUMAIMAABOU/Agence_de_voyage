<?php
$Controller= new ClientController();
// $Controller->InsertContact();

$Controllers= new AdministrateurController();
$Controllers->insert();
$Controllers->Delete();
$Controllers->update();
$Controllers->login();
$Controllers->inscription();


$hotel=new HotelController();
$hotel->insert();
$hotel->Delete();
// $hotel-> update();

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
// $Resrvation->Delete();
// $Resrvation->Update();





?>