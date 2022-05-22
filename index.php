<?php

require_once('./autoload.php');
require_once('./controllers/HomeController.php');

$home =new HomeController();
$page=[];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$page)){
        $home->index($_GET['page']);
    } else{
      include('views/includes/404.php');
    }
}else{
        $home->index('login');
    }





