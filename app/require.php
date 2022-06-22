<?php
require_once("./database/Connection.php");


// if( basename($_SERVER['REQUEST_URI'])=="Acceuille" || basename($_SERVER['REQUEST_URI'])=="operation"){
//     include_once('models/voyage.php');
// }

if( basename($_SERVER['REQUEST_URI'])=="admin" || basename($_SERVER['REQUEST_URI'])=="operation"|| basename($_SERVER['REQUEST_URI'])=="chart"){
    require_once('models/admin.php');
}


