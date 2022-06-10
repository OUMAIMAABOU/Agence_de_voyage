<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Happy travel</title>
	</head>
	<body>
		

		<section class="banner d-flex justify-content-center align-items-center pt-5">
			<div class="container">
				<div class="row">
					<div class=" banner-desc lh-lg">
						<h1 class=" py-3 redressed">
							Explorez la beauté du beau monde 
						</h1>
						<p style="text-align: end;">
							<button class="btn btn-order  btn-lg rounded-0 merriweather" >explorer maintenant</button>
						</p>
					</div>
				</div>



        		<div class="row bg">
        		
        					
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="">
							<h2>destination</h2>
							<div class="travel-select-icon">
								<select class="form-control ">
									<option value="default">entrez votre pays de destination</option><?php $controller = new ClientController();$ville=$controller->getallville();foreach($ville as $x => $rows){?>
									<option value="<?= $rows[0];?>"><?= $rows[1]; }?></option>
								</select>
							</div>

						
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4">
						<div class="">
							<h2>Depart</h2>
							<div class="">
							<input type="date" name="check_in" class="form-control" data-toggle="" placeholder="<?= date('d-m-y'); ?> ">
							</div>
						</div>
					</div>

					<div class="col-lg-2 col-md-3 col-sm-4">
						<div class="">
							<h2>check out</h2>
							<div class="">
									<input type="date" name="check_out" class="form-control"  data-toggle="" placeholder="<?= date('d-m-y'); ?>">	
							</div>
						</div>
					</div>

					<div class="col-lg-2 col-md-1 col-sm-4">
						<div class="">
							<h2>Durée</h2>
							<div class="travel-select-icon">
								<select class="form-control "><option value="default">5</option><?php for ($i=6; $i <=20 ; $i++) {?><option value="<?= $i;?>"><?= $i; }?></option></select>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-1 col-sm-4">
						<div class="">
							<h2>Membres</h2>
							<div class="travel-select-icon">
								<select class="form-control"><option value="1">1</option><?php for ($i=2; $i <8 ; $i++){?><option value="<?= $i;?>"><?= $i; }?></option></select>	
							</div>
						</div>
					</div>
				</div>																						
				<div class="clo-sm-7" style="text-align: end; margin-top: -15px;">
						<button  class="btn btn-order2  btn-lg rounded-0 merriweather" style="margin-top: -8px;"> Chercher</button>
				</div>
									
					
        		</div>
		</section>


		<section class="mt-5" id="Voyage">
			<div class="container mt-5 " >
				<div class="text-center">
					<h2>Voyage organise	</h2>
					<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla. </p> 
				</div>
				<div class="mt-5">
					<div class="row "   >
				    	<?php $hotel=$controller->getallhotel(); foreach($hotel as $x => $rows){?>
						<div class="col-md-3 col-sm-6 bg-light vogare-item " data-aos="fade-up">
						        <div class="">	
								<img src="views/assets/images/packages/<?=  $rows[5]?>" alt="package-place" style=" BORDER-RADIUS: 40px; width: 100%;height: 200px; max-width: 100%; box-sizing: border-box;">
								<div class="">
								
									<h3> <?=  $rows[3]?> <span class=""><?=  $rows[11]?> Dh</span></h3>
									<div class="">
									<p><span><i class="fa fa-angle-right"></i> 5 daays 6 nights</span>
									<i class="fa fa-angle-right"></i> <?= $rows[2]?> star accomodation</p>
									<p><span><i class="fa fa-angle-right"></i>  transportation</span>
										<i class="fa fa-angle-right"></i>  food facilities</p>	
								</div>
								<div class="">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span>2544 review</span>
									</p>
								</div>
								<div class="about-btn">
									<a href="reservation"><button type="submit"  class="btn btn-order  btn-lg rounded-0 merriweather" style="margin-bottom: 24px;">Reserve</button></a>
								</div>		
							</div>
 		          	 </div>
					</div><?php }?>				
				</div>
     			</div>	
    	</section>
			
		<section class="cc-menu merriweather py-5" id="Destination">
			<div class="container">

				<div class="row">
					<h3 class="text-center text-light  merriweather">Top Destination</h3>
					<div class="card bg-transparent text-center mb-4">
						<div class="card-header redressed fs-4">
							<ul class="nav nav-tabs justify-content-center card-header-tabs">
								<li class="nav-item">
									<a class="nav-link active " onclick="filterSelection('all')" href="#">Tous Les Destination</a>
								</li>
								<li class="nav-item">
									<a class="nav-link"onclick="filterSelection('campagne')" href="#">campagne</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" onclick="filterSelection('montagne')"href="#">montagne</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" onclick="filterSelection('plage')" href="#">plage</a>
								</li>
							</ul>
						</div>
						<div class="card-body">
							<p class="text-center text-light  merriweather">Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.</p>
						</div>
					</div>
				</div>

				<div class="container">
			
					<div class="row">
					<?php $voyage=$controller->getallvoyage();foreach($voyage as $x => $rows){?>

						<div class="col-3">
							<div class="card">
								<img src="views/assets/images/gallary/<?=$rows[1];?>" class="card-img-top" alt="..." />
								<div class="card-body">
									<h5 class="card-title"><?=$rows[2];?></h5>
									<p class="card-text">
										This is a longer card with supporting text below as a natural lead-in to additional content. This
										content is a little bit longer.
									</p>
								</div>
							</div>
	
						</div>
						<?php }?>	

			     	</div>
				
				</div>
			</div>
		</section>
		
		

	


		<section class="container  "  id="review" >
		<h1 class="text-center mt-5">Client's Review</h1>
			<div class="overflow-auto d-flex" data-aos="zoom-in">
				<?php  $hotel=$controller->getallcommentair(); foreach($hotel as $x => $rows){?>
				<div class="col-3 d-flex flex-column vogare-item p-3">
					<div>
					<img src="views\assets\images\client\<?= $rows[3]?>" alt=""  class="rounded-circle mx-auto d-block" style="width: 73px;  height: 73px;">
					</div>
					<h3 class="text-center" style="color:#40c29b"><?= $rows[1]?></h3>
					<p class="text-center"><?= $rows[2]?></p>
				</div>
				<?php }?>
			</div>
		</section>




		<section class="order-form py-5" id="Contact-nous">
			<div class="container">
				<h2 class="merriweather text-center text-light mb-4">Contactez-Nous</h2>
				<h4 class="merriweather text-center text-light mb-4">Avez-vous des questions? N'hésitez pas à nous contacter directement. Notre équipe reviendra vers vous dans une question d'heures pour vous aider</h4>


				<form>
					<div class="row">
						<div class="col-md-6 col-sm">
							<div class="input-group mb-3">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
								<input type="text" class="form-control" placeholder="Votre nom complet" />
							</div>
						
						</div>
						<div class="col-md-6 col-sm">
							<div class="input-group mb-3">
								<input type="email" class="form-control" placeholder="Votre adresse email" />
								<span class="input-group-text"><i class="fas fa-at"></i></span>
							</div>
						
						</div>
					</div>
					<div class="row">
						<div class="input-group mb-3">
							<span class="input-group-text">Subject</span>
							<input type="text" class="form-control" placeholder="Subject" />
						</div>
						<div class="input-group">
							<span class="input-group-text">Message</span>
							<textarea class="form-control" aria-label="With textarea" placeholder="Message"></textarea>
						</div>
					</div>
					<button  type="submit" name="contact" class="btn btn-order2  btn-lg rounded-0 merriweather mt-3" >Contacter</button>

				</form>
			</div>
		</section>


		<section   class="my-5" id="propos">
			<div class="container my-5">
				<div class="text-center mt-5"><h2>À Propos De Nous</h2>
					<p class="text-center my-5 ">Vous avez prévu de partir en vacances et vous cherchez les meilleures offres de vols et d'hôtels pour partir pas cher ? Réserver votre voyage à travers d'une agence de voyage en ligne vous permettra de bénéficier des meilleurs tarifs sans avoir à vous déplacer.</p>
				</div>
				
				</div>
		</section>
	
	

		<!-- <script src="assets/js/bootstrap.bundle.min.js"></script> -->
	</body>
</html>
