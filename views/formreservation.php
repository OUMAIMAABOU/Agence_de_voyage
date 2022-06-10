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
            <form action="" method="post" class="php-email-form">
                                        <div class="row gy-4 mt-4">
                  
                                          <div class="col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Nom de Hotel" required>
                                          </div>
                  
                                          <div class="col-md-6 ">
                                            <input type="email" class="form-control" name="email" placeholder="Ville" required>
                                          </div>
                  
                                          <div class="col-md-6 ">
                                            <input type="email" class="form-control" name="email" placeholder="Adresse" required>

                                          </div>
                                          <div class="col-md-6 ">
                                            <input type="email" class="form-control" name="email" placeholder="Telephone" required>
                                          </div>
                                          <div class="col-md-6 ">
                                            <input type="email" class="form-control" name="email" placeholder="Prix" required>
                                          </div>
                                          <div class="col-md-6 ">
                                          <select class="form-control" name="Etoile" placeholder="Etoile"  required data-parsley-trigger="keyup">
                                           
                                           <option value="1">2 </option>
                                           <option value="2">3 </option>
                                           <option value="5">4 </option>
  
                                           </select>                                          
                                          </div>
                                          <div class="col-md-6 ">
                                          <select class="form-control" name="type Chamber" required data-parsley-trigger="keyup">
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
                                         
                                       
                                          <div class="col-md-12 text-center">
                                            <button type="submit" class="btn  w-25 mb-3" style="background:#90f5d7 ; color: #012970; ">Modifier
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