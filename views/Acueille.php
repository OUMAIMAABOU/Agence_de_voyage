<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Happy travel</title>
</head>

<body>



	<section class="banner landing_page d-flex justify-content-center align-items-center pt-5  ">
		<div class="container">
			<div class="row">
				<div class="">
					<h1 class=" py-3 redressed">
						Explorez la beauté du beau monde
					</h1>
					<div style="text-align: end;">
					<p class=" text-light text-uppercase mx-4 py-3 fw-bolder redressed fs-3">bienvenue sur  <span style="color:#20c997;">Happy</span>Travel</p>
</div>
				</div>
			</div>


		</div>
	</section>


	<section class="mt-5" id="Voyage">
		<div class="container mt-5 ">
			<div class="text-center">
				<h2>Voyage organise </h2>
				<p>Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla. </p>
			</div>
			<div class="mt-5">
				<div class="row ">
					<?php $controller = new VoyageController();
					$hotel = $controller->Afficher();
					foreach ($hotel as $x => $rows) { ?>
						<div class="col-md-3 col-sm-6 bg-light vogare-item " data-aos="fade-up">
							<div class="">
								<img src="views/assets/img/voyage/<?= $rows[6] ?>" alt="package-place" style=" BORDER-RADIUS: 40px; width: 100%;height: 200px; max-width: 100%; box-sizing: border-box;">
								<div class="">

									<h3> <?= $rows['ville'] ?> <span class=""><?= $rows[3] ?> Dh</span></h3>
									<div class="">
										<p><span><i class="fa fa-angle-right"></i> <?= $rows[2] ?> daays 6 nights</span>
											<i class="fa fa-angle-right"></i> <?= $rows[7] ?> star accomodation
										</p>
										<p><i class="fa fa-angle-right"></i>transportation </p>
										<p><i class="fa fa-angle-right"></i> food :<?= $rows[5] ?> </p>
									</div>

									<div class="about-btn">
										<form action="formreservation" method="POST">
											<button type="submit" name="idclient" class="btn btn-order  btn-lg rounded-0 merriweather" style="margin-bottom: 24px;">
												<input type="text" hidden name="id" value="<?= $rows[0] ?>">Reserve</button>
										</form>
									</div>
								</div>
							</div>
						</div><?php } ?>
				</div>
			</div>
	</section>

	<section class="cc-menu merriweather py-1" id="Destination">
		<div class="container">

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

						<div class="col-lg-3 col-sm-12 mt-2 p-2 mx-3">
							<div class="card" style="height: 360px;">
								<img src="views/assets/img/voyage/<?= $rows['image']; ?>" class="card-img-top" alt="..." style="height:40%;" />
								<div class="card-body">
									<h5 class="card-title" style="width:100%"><?= $rows['destination']; ?> , <?= $rows['prix']; ?>Dh</h5>
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




</body>

</html>