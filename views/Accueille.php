<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<title>HappyTravel</title>

		<link rel="shortcut icon" type="./views/image/icon" href="./views/logo/favicon.png"/>

		<link rel="stylesheet" href="./views/css/font-awesome.min.css" />

		<link rel="stylesheet" href="./views/css/animate.css" />

		<link rel="stylesheet" href="./views/css/hover-min.css">

		<link rel="stylesheet"  href="./views/css/datepicker.css" >

        <link rel="stylesheet" href="./views/css/owl.carousel.min.css">
		<link rel="stylesheet" href="./views/css/owl.theme.default.min.css"/>

        <link rel="stylesheet" href="./views/css/jquery-ui.min.css" />

		<link rel="stylesheet" href="./views/css/bootstrap.min.css" />

		<link rel="stylesheet" href="./views/css/bootsnav.css"/>

		<link rel="stylesheet" href="./views/css/style.css" />

		<link rel="stylesheet" href="./views/css/responsive.css" />

		

	</head>

	<body>
		
		<header class="top-area">
			<div class="header-area">
				<div class="container ">
					<div class="row" style="MARGIN-TOP: 29px;">
						<div class="col-sm-2">
							<div class="logo">
								<a href="index.html">
									Happy<span>Travel</span>
									<img src="./views/images/logo/logo.png" alt="" style=" position: absolute;top: -23px;left: 64px; width: 53px;">

								</a>
							</div>
						</div>
						<div class="col-sm-10">
							<div class="main-menu">
							
							
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button>
								</div>
								<div class="collapse navbar-collapse">		  
									<ul class="nav navbar-nav navbar-right">
										<li class="smooth-menu"><a href="#home">home</a></li>
										<li class="smooth-menu"><a href="#gallery">Destination</a></li>
										<li class="smooth-menu"><a href="#pack">Voyage</a></li>
										<li class="smooth-menu"><a href="#spo">offres</a></li>
										<li class="smooth-menu"><a href="#blog">Contact-nous</a></li>
										<li class="smooth-menu"><a href="#subs">À propos </a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="home-border"></div>
				</div>
			</div>

		</header>
		

		
		
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										Explore the Beauty of the Beautiful World 

									</h2>
									<div class="about-btn">
										<button  class="about-view">
											explore now
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-0">
							<div class="single-about-us">
								
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
		

		
		<section  class="travel-box">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="single-travel-boxes">
        					<div id="desc-tabs" class="desc-tabs">

								<ul class="nav nav-tabs" role="tablist">

									<li role="presentation" class="active">
									 	<a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
									 		<i class="fa fa-tree"></i>
									 		tours
									 	</a>
									</li>

									<li role="presentation">
										<a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">
											<i class="fa fa-building"></i>
											hotels
										</a>
									</li>

								</ul>

								<!-- Tab panes -->
								<div class="tab-content">

									<div role="tabpanel" class="tab-pane active fade in" id="tours">
										<div class="tab-para">

											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="single-tab-select-box">

														<h2>destination</h2>

														<div class="travel-select-icon">
															<select class="form-control ">
															  	<option value="default">enter your destination country</option>
																<?php $controller = new ClientController();$ville=$controller->getallville();foreach($ville as $x => $rows){?>
															  	<option value="<?= $rows[0];?>"><?= $rows[1]; }?></option>
															</select>
														</div>

														<div class="travel-select-icon">
															<select class="form-control ">
															  	<option value="default">enter your destination location</option>
																 <?php $ville=$controller->getallville();foreach($ville as $x => $rows){?>
                                                                <option value="<?= $rows[0];?>"><?= $rows[1]; }?></option>
															</select>
														</div>

													</div>
												</div>

												<div class="col-lg-2 col-md-3 col-sm-4">
													<div class="single-tab-select-box">
														<h2>check in</h2>
														<div class="travel-check-icon">
															<form action="#">
																<input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="<?= date('d-m-y'); ?> ">
															</form>
														</div>
													</div>
												</div>

												<div class="col-lg-2 col-md-3 col-sm-4">
													<div class="single-tab-select-box">
														<h2>check out</h2>
														<div class="travel-check-icon">
															<form action="#">
																<input type="text" name="check_out" class="form-control"  data-toggle="datepicker" placeholder="<?= date('d-m-y'); ?>">
															</form>
														</div>
													</div>
												</div>

												<div class="col-lg-2 col-md-1 col-sm-4">
													<div class="single-tab-select-box">
														<h2>duration</h2>
														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">5</option>

															  	<?php for ($i=6; $i <=20 ; $i++) { ?>
                                                                <option value="<?= $i;?>"><?= $i; }?></option>

															</select>
														</div>
													</div>
												</div>

												<div class="col-lg-2 col-md-1 col-sm-4">
													<div class="single-tab-select-box">
														<h2>members</h2>
														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="1">1</option>
																  <?php for ($i=2; $i <8 ; $i++) { ?>
                                                                <option value="<?= $i;?>"><?= $i; }?></option>
															  	

															</select>
														</div>
													</div>
												</div>

											</div>

											
												<div class="clo-sm-7">
													<div class="about-btn travel-mrt-0 pull-right">
														<button  class="about-view travel-btn" style="margin-top: -54px;">
															search	
														</button>
													</div>
												</div>


										</div>

									</div>

									<div role="tabpanel" class="tab-pane fade in" id="hotels">
										<div class="tab-para">

											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="single-tab-select-box">

														<h2>destination</h2>

														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">enter your destination country</option>

																  <?php $ville=$controller->getallville();foreach($ville as $x => $rows){?>
                                                                <option value="<?= $rows[0];?>"><?= $rows[1]; }?></option>

															</select>
														</div>

														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">enter your destination location</option>

																  <?php $ville=$controller->getallville();foreach($ville as $x => $rows){?>
                                                                <option value="<?= $rows[0];?>"><?= $rows[1]; }?></option>

															</select>
														</div>

													</div>
												</div>

												<div class="col-lg-2 col-md-3 col-sm-4">
													<div class="single-tab-select-box">
														<h2>check in</h2>
														<div class="travel-check-icon">
															<form action="#">
																<input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="<?= date('d-m-y'); ?> ">
															</form>
														</div>
													</div>
												</div>

												<div class="col-lg-2 col-md-3 col-sm-4">
													<div class="single-tab-select-box">
														<h2>check out</h2>
														<div class="travel-check-icon">
															<form action="#">
																<input type="text" name="check_out" class="form-control"  data-toggle="datepicker" placeholder="<?= date('d-m-y'); ?> ">
															</form>
														</div>
													</div>
												</div>

												<div class="col-lg-2 col-md-1 col-sm-4">
													<div class="single-tab-select-box">
														<h2>duration</h2>
														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">5</option>

																  <?php for ($i=6; $i <=20 ; $i++) { ?>
                                                                <option value="<?= $i;?>"><?= $i; }?></option>

															</select>
														</div>
													</div>
												</div>

												<div class="col-lg-2 col-md-1 col-sm-4">
													<div class="single-tab-select-box">
														<h2>members</h2>
														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="1">1</option>

															  	<?php for ($i=1; $i <8 ; $i++) { ?>
                                                                <option value="<?= $i;?>"><?= $i; }?></option>

															</select>
														</div>
													</div>
												</div>

											</div>

											<div class="row">
												<div class="clo-sm-7">
													<div class="about-btn travel-mrt-0 pull-right">
														<button  class="about-view travel-btn"  style="margin-top: -54px;">
															search	
														</button>
													</div>
												</div>

											</div>

										</div>

									</div>

								
										
									</div>

								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>

        </section>
		

        
		<section id="service" class="service">
			<div class="container">

				<div class="service-counter text-center">

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="./views/images/service/s1.png" alt="service-icon" />
							</div>
							<div class="service-content">
								<h2>
									<a href="#">
									amazing tour packages
									</a>
								</h2>
								<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="./views/images/service/s2.png" alt="service-icon" />
							</div>
							<div class="service-content">
								<h2>
									<a href="#">
										book top class hotel
									</a>
								</h2>
								<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="statistics-img">
								<img src="./views/images/service/s3.png" alt="service-icon" />
							</div>
							<div class="service-content">

								<h2>
									<a href="#">
										online flight booking
									</a>
								</h2>
								<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
							</div>
						</div>
					</div>

				</div>
					
			</div>

		</section>
		

		
		<section id="gallery" class="gallery">
			<div class="container">
				<div class="gallery-details">
					<div class="gallary-header text-center">
						<h2>
							top destination
						</h2>
						<p>
							Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.  
						</p>
					</div>
					<div id="myBtnContainer">
					<button class="btn active" onclick="filterSelection('all')"> Show all</button>
					<button class="btn" onclick="filterSelection('campagne ')"> campagne </button>
					<button class="btn" onclick="filterSelection('plage')">  plage</button>
					<button class="btn" onclick="filterSelection('montagne ')"> montagne </button>
					</div>
					<div class="gallery-box">
						<div class="gallery-content">
						  	<div class="filtr-container">
								 
						  		<div class="row">
							

									<tr>
								 <?php $voyage=$controller->getallvoyage();foreach($voyage as $x => $rows){?>
                                        <td hidden><?php  $rows[0]; ?></td>

                                        
										<td class="">
										<div class="column <?=  $rows[9]; ?>" >
											<div class="filtr-item">
												<img src="./views/images/gallary/<?=$rows[1];?>" alt="portfolio image"/>
												<div class="item-title">
													<a href="#">
													
													</a>
													<p><span><?=$rows[4];?>   tours</span><span><?=$rows[5];?> Personne</span></p>
											  </div>
										</div>
										</div></td>
								
                                      
										<?php };?>
                                       
                                    </tr>

						  		

						  		

						  		

						  			

									  

						  		</div>

						  	</div>
						</div>
					</div>
				

		</section>
		


		
		<section class="discount-offer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="dicount-offer-content text-center">
							<h2>Join with us within 21 January, 2018 and get upto 40% Discount</h2>
							<div class="campaign-timer">
								<div id="timer">
									<div class="time time-after" id="days">
										<span></span>
									</div>
									<div class="time time-after" id="hours">

									</div>
									<div class="time time-after" id="minutes">

									</div>
									<div class="time" id="seconds">

									</div>
								</div>
							</div>
							<div class="about-btn">
								<button  class="about-view discount-offer-btn">
									join now
								</button>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
	
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>Voyage organise	</h2>
					<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla. </p> 
					
				</div>
				<div class="packages-content">
					<div class="row">
				    	<?php $hotel=$controller->getallhotel(); foreach($hotel as $x => $rows){?>

						<div class="col-md-4 col-sm-6">

						        <div class="single-package-item">	
								<img src="./views/images/packages/<?=  $rows[5]?>" alt="package-place" style="width: 500px;	height: 266px;">
								<div class="single-package-item-txt">
								
									<h3> <?=  $rows[3]?> <span class="pull-right"><?=  $rows[11]?> Dh</span></h3>
									<div class="packages-para">
									<p>
										<span>
											<i class="fa fa-angle-right"></i> 5 daays 6 nights
										</span>
										<i class="fa fa-angle-right"></i> <?= $rows[2]?> star accomodation
									</p>
									<p>
										<span>
											<i class="fa fa-angle-right"></i>  transportation
										</span>
										<i class="fa fa-angle-right"></i>  food facilities
									</p>
								</div>
								<div class="packages-review">
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
									<button  class="about-view packages-btn">
										book now
									</button>
								</div>
								
							</div>

						</div>

					</div>
					<?php }?>
				</div>
			</div>
			
		</section>
		

		
		<section   class="testemonial">
			<div class="container">

				<div class="gallary-header text-center">
					<h2>
						Avis Clients
					</h2>
					<p>
						Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla. 
					</p>

				</div>
				<div class="col-md-4 col-sm-6">

				<?php $commentaire=$controller->getallcommentair(); foreach($commentaire as $x => $rows){?>

					<div class="home1-testm item">

						<div class="home1-testm-single text-center">

							<div class="home1-testm-img">
								<img src="./views/images/client/<?= $rows[3];?>" alt="img"/>
							</div>
							<div class="home1-testm-txt">
								<span class="icon section-icon"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
								<p><?= $rows[2];?></p>
								<h3><a href="#"><?= $rows[1];?></a></h3>
							</div>
						</div>

					</div>
						<?php }?>

				</div>
			</div>
			
		</section>	
		


		
		<section id="spo" class="special-offer">
			<div class="container">
				<div class="special-offer-content">
					<div class="row">
						<div class="col-sm-8">
							<div class="single-special-offer">
								<div class="single-special-offer-txt">
									<h2>thiland</h2>
									<div class="packages-review special-offer-review">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2544 review</span>
										</p>
									</div>
									<div class="packages-para special-offer-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 daays 6 nights
											</span>
											<span>
												<i class="fa fa-angle-right"></i> 2 person
											</span>
											<span>
												<i class="fa fa-angle-right"></i>  5 star accomodation
											</span>
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  transportation
											</span>
											<span>
												<i class="fa fa-angle-right"></i>  food facilities
											</span>  
										</p>
										<p class="offer-para">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem ut labore et dolore magna  aliqua. Ut enim ad minim veniam, quis nostrud exercitation una <br> ullamco laboris nisi ut aliquip ex ea commodo consequat. 
										</p>
									</div>
									<div class="offer-btn-group">
										<div class="about-btn">
											<button  class="about-view packages-btn offfer-btn">
												make tour
											</button>
										</div>
										<div class="about-btn">
											<button  class="about-view packages-btn">
												book now
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-special-offer">
								<div class="single-special-offer-bg">
									<img src="./views/images/offer/offer-shape.png" alt="offer-shape">
								</div>
								<div class="single-special-shape-txt">
									<h3>special offer</h3>
									<h4><span>40%</span><br>off</h4>
									<p><span>$999</span><br>reguler $ 1450</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
		

		
		<section id="blog" class="blog">
			<div class="container">
				<div class="blog-details">
						<div class="gallary-header text-center">
							<h2>
								Contactez-nous						
								</h2>
							<p>
								Avez-vous des questions? N'hésitez pas à nous contacter directement. Notre équipe reviendra vers vous dans
								une question d'heures pour vous aider							</p>
						</div>
						<div class="blog-content">
							<div class="row d-flex">

								<div class="col">
											<div class="row">

												
												<div class="col-md-10 mb-md-2 mt-3 mb-3">
													<form id="contact-form" name="contact-form" action="mail.php" method="POST">
										
														
														<div class="row">
															<div class="col-md-6">
																<div class="md-form mb-2 mt-2">
																	<label for="name" class="">Nom</label>

																	<input type="text" id="name" name="name" class="form-control">
																</div>
															</div>

															<div class="col-md-6 ">
																<div class="md-form  mb-2 mt-2">
																	<label for="email" class=""> Email</label>

																	<input type="text" id="email" name="email" class="form-control">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="md-form  mb-2 mt-2">
																	<label for="subject" class="">Subject</label>
																	<input type="text" id="subject" name="subject" class="form-control">
																</div>
															</div>
														</div>
														
														<div class="row">
										
															<div class="col-md-12">
										
																<div class="md-form  mb-2 mt-2">
																	<label for="message">Message</label>

																	<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
																</div>
										
															</div>
														</div>
														<button class="appsLand-btn subscribe-btn mt-5">envoyer</button>

										
													</form>
										
												
												</div>
											
												
												</div>
												
										
											</div>
										
									
									</div>

								</div>


							</div>
						</div>
					</div>
				

		</section>
		
		<section id="subs" class="subscribe">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						À propos de nous	
					</h2>
					<p>
						Vous avez prévu de partir en vacances et vous cherchez les meilleures offres de vols et d'hôtels pour partir pas cher ? Réserver votre voyage à travers d'une agence de voyage en ligne vous permettra de bénéficier des meilleurs tarifs sans avoir à vous déplacer.

						Accessible depuis un ordinateur, une tablette ou un Smartphone, une agence de voyage en ligne vous permet en effet de comparer en temps réel les offres de milliers de prestataires touristiques et notamment de compagnies aériennes, d'hôtels et de loueurs de voiture. Il vous suffit d'indiquer vos critères de recherche (dates de voyage, destination, nombre de voyageurs, etc) sur le moteur de recherche pour obtenir, en quelques secondes seulement et sans rien avoir à faire, l'ensemble des offres répondant à vos attentes. Vous pourrez ensuite les filtrer afin de trouver celle qui convient le mieux à vos besoins et à votre budget.					</p>
				</div>
				
			</div>

		</section>
	
		<footer  class="footer-copyright">
			<div class="container">
				<div class="footer-content">
					<div class="row">

						<div class="col-sm-3">
							<div class="single-footer-item">
								<div class="footer-logo d-flex" >
									<a href="index.html">
									<div style="margin-left: 55px;"><img src="./views/images/logo/logo.png" alt="" style=" width: 53px;"></div>
									<div>Happy<span>Travel</span></div>	

									</a>
								</div>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>link</h2>
								<div class="single-footer-txt">
									<p><a href="#">home</a></p>
									<p><a href="#">destination</a></p>
									<p><a href="#">spacial packages</a></p>
									<p><a href="#">special offers</a></p>
									<p><a href="#">blog</a></p>
									<p><a href="#">contacts</a></p>
								</div>
							</div>

						</div>

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>popular destination</h2>
								<div class="single-footer-txt">
									<p><a href="#">china</a></p>
									<p><a href="#">venezuela</a></p>
									<p><a href="#">brazil</a></p>
									<p><a href="#">australia</a></p>
									<p><a href="#">london</a></p>
								</div>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="single-footer-item text-center">
								<h2 class="text-left">contacts</h2>
								<div class="single-footer-txt text-left">
									<p>+1 (300) 1234 6543</p>
									<p class="foot-email"><a href="#">info@tnest.com</a></p>
									<p>North Warnner Park 336/A</p>
									<p>Newyork, USA</p>
								</div>
							</div>
						</div>

					</div>

				</div><!--/.footer-content-->
				<hr>
				<div class="foot-icons ">
					<ul class="footer-social-links list-inline list-unstyled">
		                <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
		        	</ul>
		        	<!-- <p>&copy; 2017 <a href="https://www.themesine.com">ThemeSINE</a>. All Right Reserved</p> -->

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div>

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->




		<script src="./views/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="./views/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="./views/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="./views/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="./views/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="./views/js/jquery.counterup.min.js"></script>
		<script src="./views/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="./views/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="./views/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="./views/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="./views/js/custom.js"></script>


	</body>
	<script>
		filterSelection("all")
		function filterSelection(c) {
		  var x, i;
		  x = document.getElementsByClassName("column");
		  if (c == "all") c = "";
		  for (i = 0; i < x.length; i++) {
			w3RemoveClass(x[i], "show");
			if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
		  }
		}
		
		function w3AddClass(element, name) {
		  var i, arr1, arr2;
		  arr1 = element.className.split(" ");
		  arr2 = name.split(" ");
		  for (i = 0; i < arr2.length; i++) {
			if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
		  }
		}
		
		function w3RemoveClass(element, name) {
		  var i, arr1, arr2;
		  arr1 = element.className.split(" ");
		  arr2 = name.split(" ");
		  for (i = 0; i < arr2.length; i++) {
			while (arr1.indexOf(arr2[i]) > -1) {
			  arr1.splice(arr1.indexOf(arr2[i]), 1);     
			}
		  }
		  element.className = arr1.join(" ");
		}
		
		
		// Add active class to the current button (highlight it)
		var btnContainer = document.getElementById("myBtnContainer");
		var btns = btnContainer.getElementsByClassName("btn");
		for (var i = 0; i < btns.length; i++) {
		  btns[i].addEventListener("click", function(){
			var current = document.getElementsByClassName("active");
			current[0].className = current[0].className.replace(" active", "");
			this.className += " active";
		  });
		}
		</script>
</html>