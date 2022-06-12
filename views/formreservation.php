<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
    <body class="row">
      <main>
        <div id="page-content-dashboard">
            <div class=" px-0 ">
                <div class="d-flex justify-content-between border-bottom">
                    <?php include ('views/includes/sidebar.php'); ?> 
                </div>
            <div class="container px-2 pt-2 pe-4">
              <?php include ('./views/includes/header.php');?>
              <div class="row vogare-item mt-5">
                 <div class="d-flex align-items-baseline  justify-content-center ">
               
     
     
            </div>
            <script src="views/assets/bootstrap.bundle.min.js" ></script>
            <script src="views/assets/js/bootstrap.bundle.min.js" ></script>
            <form action="operation" method="post" class="php-email-form">
                                        <div class="row gy-4 mt-4">
                  
                                          <div class="col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Nom de Hotel" required>
                                          </div>
                  
                                          <div class="col-md-6 ">
                                          <option value="default">Ville </option> 
                                          <select class="form-control" id="ville" name="ville"   required data-parsley-trigger="keyup">
                                            <option value="default">Ville </option> 
                                            <?php $ville =new ClientController(); $ville = $ville->getallville(); foreach($ville as $ville ) {?>
                                              <option value="<?= $ville[1]?>"><?= $ville[1];  } ?></option> </select> 
                                          </div>
                  
                                          <div class="col-md-6 ">
                                            <input type="text" class="form-control" name="Adresse" placeholder="Adresse" required>

                                          </div>
                                          <div class="col-md-6 ">
                                            <input type="text" class="form-control" name="Telephone" placeholder="Telephone" required>
                                          </div>
                                          <div class="col-md-6 ">
                                            <input type="text" class="form-control" name="Prix" placeholder="Prix" required>
                                          </div>
                                          <div class="col-md-6 ">
                                            <input type="email" class="form-control" name="email" placeholder="email" required>
                                          </div>
                                          <div class="col-md-6 ">
                                          <select class="form-control" name="Etoile"   required data-parsley-trigger="keyup">
                                          <option value="default">Etoile </option> 

                                           <option value="1">2 </option>
                                           <option value="2">3 </option>
                                           <option value="5">4 </option>
  
                                           </select>                                          
                                          </div>
                                          <div class="col-md-6 ">
                                          <select class="form-control" name="Chamber" required data-parsley-trigger="keyup">
                                          <option value="default">type Chamber </option> 
                                          <option value="1">2 </option>
                                           <option value="2">3 </option>
                                           <option value="5">4 </option>
                                           </select>
                                          </div>
                                           <div class="col-md-6 ">

                                           <select class="form-control" name="Restauran"  required data-parsley-trigger="keyup">
                                           <option value="default">Restaurant </option> 
                                           <option value="1">OUI </option>
                                           <option value="2">NON </option>
                                           </select>
                                           </div>
                                           <div class="col-md-6 ">
                                           <input type="file" class="form-control" name="image"  required>

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
        </main> 
        <script  src="views\js\script.js"></script>
          
    
           
</body>
</html>