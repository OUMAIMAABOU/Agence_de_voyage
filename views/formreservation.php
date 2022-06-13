<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
    <body>
<main>   
    <section class="mt-5" id="Voyage">
			<div class="container mt-5 " >
				<div class="text-center mt-5">
					<h2 class="mt-5">Reservation	</h2>
				</div>
				<div class="mt-5">
					<div class="row "   >
				    	<?php $controller = new VoyageController(); $controller=$controller->select(); foreach($controller as $x => $rows){?>
						<div class="col bg-light vogare-item " >
						        <div class="">	
								<img src="views/assets/images/packages/<?=  $rows[4]?>" alt="package-place" style=" BORDER-RADIUS: 40px; width: 100%;height: 200px; max-width: 100%; box-sizing: border-box;">
								<div class="">
								
									<h3> <?=  $rows[6]?> <span class=""><?=  $rows[2]?> Dh</span></h3>
									<div class="">
								
                  <p><?= $rows[3]?></p>	
								</div>
							</div>
 		          	 </div>
					</div><?php }?>				
			
            
           <form action="operation" method="post" class="php-email-form">
                                        <div class="row gy-4 mt-4">
                                        <div class="col-md-6">
                                            <input type="text" name="id" class="form-control" placeholder="idvoyage" required>
                                          </div>
                                          <div class="col-md-6">
                                            <input type="text" name="id_client" class="form-control" placeholder="idclient" required>
                                          </div>
                                          <div class="col-md-6">
                                            <input type="number" name="adulte" class="form-control" placeholder="Nomber Adulte" required>
                                          </div>
                                          <div class="col-md-6">
                                            <input type="number" name="Enfant" class="form-control" placeholder="Nomber Enfant" required>
                                          </div>
                                          <div class="col-md-6">
                                            <input type="number" name="Man" class="form-control" placeholder="Nomber Homme" required>
                                          </div>
                                          <div class="col-md-6">
                                            <input type="number" name="women" class="form-control" placeholder="Nomber Femme" required>
                                          </div>                                            
                                          <div class="col-md-12 text-center">
                                            <button type="submit" class="btn  w-25 mb-3"name="addreservation" style="background:#90f5d7 ; color: #012970; ">Ajouter
                                            </button>
                                          </div>
                  
                                        </div>
                                      </form>
    	</section>
    

            </div>
</div> 
</main>

        <script  src="views\js\script.js"></script>
          
    
           
</body>
</html>