<?php
$Controller= new ClientController();
// $Controller->InsertContact();

$Controllers= new AdministrateurController();

$Controllers->insert();
$Controllers->Delete();
$Controllers->update();




?>