<?php
require_once("./database/Connection.php");

if( basename($_SERVER['REQUEST_URI'])=="Acceuille" || basename($_SERVER['REQUEST_URI'])=="operation"){
    require_once('models/voyage.php');
}

