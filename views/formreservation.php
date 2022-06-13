<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
    <body>
    <section class="mt-5" id="Voyage">
			<div class="container mt-5 " >
				<div class="text-center">
					<h2>Voyage organise	</h2>
					<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla. </p> 
				</div>
				<div class="mt-5">
					<div class="row "   >
				    	<?php $controller = new VoyageController(); $hotel=$controller->Afficher(); foreach($hotel as $x => $rows){?>
						<div class="col-md-3 col-sm-6 bg-light vogare-item " >
						        <div class="">	
								<img src="views/assets/images/packages/<?=  $rows[6]?>" alt="package-place" style=" BORDER-RADIUS: 40px; width: 100%;height: 200px; max-width: 100%; box-sizing: border-box;">
								<div class="">
								
									<h3> <?=  $rows[8]?> <span class=""><?=  $rows[3]?> Dh</span></h3>
									<div class="">
									<p><span><i class="fa fa-angle-right"></i> <?=  $rows[2]?> daays 6 nights</span>
									<i class="fa fa-angle-right"></i> <?= $rows[7]?> star accomodation</p>
									<p><i class="fa fa-angle-right"></i>transportation </p>
									<p><i class="fa fa-angle-right"></i>  food :<?= $rows[5]?> </p>	
								</div>
								<div class="">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</p>
								</div>
								<div class="about-btn">
									<a href="formreservation?id= <?= $rows[0]?>"><button type="submit"  class="btn btn-order  btn-lg rounded-0 merriweather" style="margin-bottom: 24px;">Reserve</button></a>
								</div>		
							</div>
 		          	 </div>
					</div><?php }?>				
				</div>
     			</div>	
    	</section>
      <div class="mt-5 p-5 vogare-item d-flex ">
         
            
            <form action="operation" method="post" class="php-email-form">
                                        <div class="row gy-4 mt-4">
                  
                                          <div class="col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Nomber Adulte" required>
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Nomber Enfant" required>
                                          </div>
                  
                                          <div class="col-md-6 ">
                                            <input type="text" class="form-control" name="ville"  placeholder="ville" required>
                                          </div>
                                          <div class="col-md-6 ">
                                          <select class="form-control" name="genre" required data-parsley-trigger="keyup">
                                          <option value="default">Genre </option> 
                                          <option value="Femme">Femme</option>
                                           <option value="Homme">Homme</option>
                                           </select>
                                                                               
                                          </div>
                                          <div class="col-md-6 ">
                                          <select class="form-control" name="Chamber" required data-parsley-trigger="keyup">
                                          <option value="default">Transport </option> 
                                          <option value="1">OUI</option>
                                           <option value="2">NON</option>
                                           </select>
                                                                               
                                          </div>
                                          <div class="col-md-6 ">
                                          <select class="form-control" name="Chamber" required data-parsley-trigger="keyup">
                                           <option value="default">Hotel </option> 
                                           <option value="1">OUI</option>
                                           <option value="2">NON</option>
                                          </select>
                                          </div>
                                           <div class="col-md-6 ">

                                           <select class="form-control" name="Restauran"  required data-parsley-trigger="keyup">
                                           <option value="default">Restaurant </option> 
                                           <option value="1">OUI </option>
                                           <option value="2">NON </option>
                                           </select>
                                           </div>
                                        
                                         
                                       
                                          <div class="col-md-12 text-center">
                                            <button type="submit" class="btn  w-25 mb-3"name="add" style="background:#90f5d7 ; color: #012970; ">Ajouter
                                            </button>
                                          </div>
                  
                                        </div>
                                      </form>
                                </div>

            </div>
</div> 
        <script  src="views\js\script.js"></script>
          
    
           
</body>
</html>