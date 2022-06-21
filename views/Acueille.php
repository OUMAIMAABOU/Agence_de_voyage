<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Happy travel</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

	<section class="bg-dark landing_page">
		<div class="container-fluid">
			<div class="row d-flex align-content-between flex-wrap">
				<div class="mb-5">
					<h1 class="py-3 text-light">Explorez la beauté du beau monde</h1>
				</div>
				<div class="text-end mt-5">
					<p class="text-light mt-5 mb-0 text-uppercase me-4 py-3 fw-bolder fs-3">bienvenue sur <span style="color:#20c997;">Happy</span>Travel</p>
				</div>
			</div>
		</div>
	</section>
	
	<div class="container-fluid mt-5" id="Voyage">
		<div class="text-center">
			<h2>Voyage organise </h2>
			<p>Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla. </p>
		</div>
		<div class="container-fluid mt-5">
			<div class="row p-1">
				<?php $controller = new VoyageController();
				$hotel = $controller->Afficher();
				foreach ($hotel as $x => $rows) { ?>
					<div class="card pt-2 rounded-5 mx-auto mb-3" style="width: 25rem;">
					<div>
						<img src="views/assets/img/voyage/<?= $rows[6] ?>" class="card-img-top rounded-4" alt="package-place"  style=" height: 80%;">
					</div>	
					
						<div class="card-body">
							<h5 class="card-title"><?= $rows[9]?>&nbsp;<?= $rows[3] ?> Dh</h5>
							<p class="card-text"><?= $rows[8]?></p>
							<p class="card-text"><span>
								<i class="fa fa-angle-right"></i> <?= $rows[2] ?> daays </span>
								<i class="fa fa-angle-right"></i> <?= $rows[7] ?> </p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">transportation</li>
							<li class="list-group-item"><i class="fa fa-angle-right"></i> food :<?= $rows[5] ?></li>
						</ul>
						<div class="card-body">
							<form action="formreservation" method="POST">
								<button type="submit" name="idclient" class="btn btn-lg btn-outline-success">
								<input type="hidden" name="id" value="<?= $rows[0] ?>">Reserve</button>
							</form>
						</div>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
	
	<section class="container-fluid mt-5">
		<div class="row">
			<button class="btn btn-outline-success col-lg-3 col-md-4 col-sm-6 col-10 btn-lg mx-auto" onclick="myFunction()">Ajouter commantaire</button>
			<div class="container mt-5">
				<form action="operation" method="POST" id="formares" style="display:none;">
					<div class="text-center">
						<h2>Commantaire </h2>
						<p>Ajouter commantaire: </p>
					</div>
					<div class="row">
						<div class="col-10 mx-auto">
							<textarea class="form-control" name="comataira" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						<button type="submit" class="btn mt-2 mx-auto w-25 mb-3" name="Addcommantaire" style="background:#90f5d7 ; color: #012970; ">Add Commantaire</button>
					</div>
				</form>
			</div>
		</div>
	</section>

	<section class="cc-menu merriweather py-1" id="Destination">
		<div class="container-fluid">

			<div class="row">
				<h3 class="text-center text-dark  merriweather">Top Destination</h3>
				<div class="card bg-transparent text-center mb-4">

					<div class="card-body">
						<p class="text-center text-dark  merriweather">Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.</p>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<?php $voyage = ResrvationController::Topdestination();
					foreach ($voyage as $x => $rows) { ?>
						
						<div class="col-lg-3 col-md-4 col-sm-12 mt-2 p-2 mx-3">
							<div class="card" >
								<div >
									<img src="views/assets/img/voyage/<?= $rows['image']; ?>" class="card-img-top" alt="..." style=" height: 80%;"/>
								</div>
								
								<div class="card-body">
									<h5 class="card-title" style="width:100%"><?= $rows['prix']; ?>Dh</h5>
									<p><?= $rows['destination']; ?></p>
									<p class="card-text">
										<?= $rows['description']; ?>
									</p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>

	<section class="container  " id="review">
		<h1 class="text-center mt-5">Client's Review</h1>
		<div class="overflow-auto d-flex" data-aos="zoom-in">
			<?php $client = new ClientController();
			$client = $client->getallcommentair();
			foreach ($client as $x => $rows) { ?>
				<div class="col-6 d-flex flex-column vogare-item p-1">
					<div>
						<img src="views/assets/img/client/<?= $rows['image'] ?>" alt="" class="rounded-circle mx-auto d-block" style="width: 73px;  height: 73px;">
					</div>
					<p class="text-center fs-4" style="#2b5448"><?= $rows['commentaire'] ?></p>
					<p class="text-center"><?= $rows['name'] ?></p>
				</div>


			<?php } ?>

		</div>

	</section>


	<section class="order-form py-1" id="Contact-nous">
		<div class="container">
			<h2 class="merriweather text-center text-light mb-1">Contactez-Nous</h2>
			<h4 class="merriweather text-center text-light mb-4">Avez-vous des questions? N'hésitez pas à nous contacter directement. Notre équipe reviendra vers vous dans une question d'heures pour vous aider</h4>


			<form method="POST" action="operation">
				<div class="row">
					<div class="col-md-6 col-sm">
						<div class="input-group mb-3">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
							<input type="text" class="form-control" name="nom" placeholder="Votre nom complet" />
						</div>

					</div>
					<div class="col-md-6 col-sm">
						<div class="input-group mb-3">
							<input type="email" name="email" class="form-control" placeholder="Votre adresse email" />
							<span class="input-group-text"><i class="fas fa-at"></i></span>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="input-group mb-3">
						<span class="input-group-text">Subject</span>
						<input type="text" class="form-control" name="Subject" placeholder="Subject" />
					</div>
					<div class="input-group">
						<span class="input-group-text">Message</span>
						<textarea class="form-control" name="msg" aria-label="With textarea" placeholder="Message"></textarea>
					</div>
				</div>
				<button type="submit" name="contact" class="btn btn-order2  btn-lg rounded-0 merriweather mt-3">Contacter</button>

			</form>
		</div>
	</section>


	<section class="my-5" id="propos">
		<div class="container my-5">
			<div class="text-center mt-5">
				<h2>À Propos De Nous</h2>
				<p class="text-center my-5 ">Vous avez prévu de partir en vacances et vous cherchez les meilleures offres de vols et d'hôtels pour partir pas cher ? Réserver votre voyage à travers d'une agence de voyage en ligne vous permettra de bénéficier des meilleurs tarifs sans avoir à vous déplacer.</p>
			</div>

		</div>
	</section>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>

<script>
	function myFunction() {
		if (document.getElementById("formares").style.display === "none") {
			document.getElementById("formares").style.display = "block";
		} else {
			document.getElementById("formares").style.display = "none";
		}
	}
</script>