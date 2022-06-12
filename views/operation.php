<?php
$Controller= new ClientController();
// $Controller->InsertContact();

$Controllers= new AdministrateurController();
$Controllers->insert();
$Controllers->Delete();
$Controllers->update();
$Controllers->login();


$hotel=new HotelController();
$hotel->insert();
$hotel->Delete();
$hotel-> update();

$Transport=new TransportController();
$Transport->insert();
$Transport->Delete();
$Transport->Update();





?>