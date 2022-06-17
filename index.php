<?php
include_once('./views/includes/script.php');
require_once('./autoload.php');
require_once('./controllers/HomeController.php');


// require_once('./views/includes/alerts.php');
if (basename($_SERVER['REQUEST_URI']) == "Acueille" ||basename($_SERVER['REQUEST_URI']) == "reservationClient" || basename($_SERVER['REQUEST_URI']) == "inscription" || basename($_SERVER['REQUEST_URI']) == "Agence_de_voyage" || basename($_SERVER['REQUEST_URI']) == "formreservation" || basename($_SERVER['REQUEST_URI']) == "login") {
    include('./views/includes/navbar.php');
}

require_once('./views/includes/alerts.php');




$home = new HomeController();
$page = ['login', 'voyage', 'image', 'reservationClient', 'client', 'inscription', 'transport', 'Hotel', 'Acueille', 'test', 'reservation', 'operation', 'index1', 'admin', 'chart', 'tableReservation', 'setting', 'formreservation'];

if (isset($_GET['page'])) {
    if (in_array($_GET['page'], $page)) {
        $home->index($_GET['page']);
    } else {
        include('views/includes/404.php');
    }
} else {
    $home->index('Acueille');
}

if (basename($_SERVER['REQUEST_URI']) == "Acueille") {

    include('./views/includes/footer.php');
}
