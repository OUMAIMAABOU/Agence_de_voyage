
		<link rel="stylesheet" href="./views/assets/css/style.css">
		<link rel="stylesheet" href="./views/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="./views/assets/css/login.css	">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="http://parsleyjs.org/src/parsley.css" />

    	<nav class="cc-navbar navbar navbar-expand-lg fixed navbar-dark">
			<div class="container-fluid">
				<a class="navbar-brand text-uppercase ms-4 py-3 fw-bolder redressed fs-3"  href="Acueille"><span style="color:#20c997;">Happy</span>Travel</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item me-1">
							<a class="nav-link active" aria-current="page" href="Acueille">Accueil</a>
						</li>
						<li class="nav-item me-1">
							<a class="nav-link" href="#Destination" >Destination</a>
						</li>
						<li class="nav-item me-1">
							<a class="nav-link" href="#Voyage">Voyage</a>
						</li>
						<li class="nav-item me-1">
							<a class="nav-link" href="#Contact-nous">Contact-nous</a>
						</li>
						<li class="nav-item me-1">
							<a class="nav-link" href="#review">Commantaire</a>
						</li>
						<li class="nav-item me-1">
							<a class="nav-link" href="#propos">À propos</a>
						</li>
						<li class="nav-item me-1">
							<a class="nav-link" href="reservationClient">Reservation</a>
						</li>
						<?php if(empty($_SESSION['id'])){
							echo '<li class="nav-item pe-2">
							<a class="btn btn-order rounded-0" href="login">Login</a>
						</li>';
						}else{
							echo ' <form method="POST" action="operation"> <li class="nav-item pe-2">
							<button type="submit"  name="logout" class="btn btn-order rounded-0" href="">Log out</button></form>
						</li>';
						}
							?>
					</ul>
				</div>
			</div>
		</nav>