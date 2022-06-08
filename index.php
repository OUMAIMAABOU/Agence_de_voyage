<?php

require_once('./autoload.php');
require_once('./controllers/HomeController.php');
require_once('./views/includes/alerts.php');
if( basename($_SERVER['REQUEST_URI'])=="Acueille"){
include ('./views/includes/navbar.php');}


$home =new HomeController();
$page=['Acueille','test','reservation','operation','agent','navbar','index1','admin','chart'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$page)){
        $home->index($_GET['page']);
    } else{
      include('views/includes/404.php');
    }
}else{
        $home->index('Acueille');
    }
 





