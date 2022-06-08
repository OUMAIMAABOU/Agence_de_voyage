<?php
require_once("./database/Connection.php");


if( basename($_SERVER['REQUEST_URI'])=="Acceuille" || basename($_SERVER['REQUEST_URI'])=="operation"){
    require_once('models/voyage.php');
}

if( basename($_SERVER['REQUEST_URI'])=="admin" || basename($_SERVER['REQUEST_URI'])=="operation"){
    require_once('models/admin.php');
}
// if( basename($_SERVER['REQUEST_URI'])=="reservation" || basename($_SERVER['REQUEST_URI'])=="operation"){
//     require_once('models/voyage.php');
// }

