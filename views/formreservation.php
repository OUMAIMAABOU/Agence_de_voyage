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
                 <form class="mt-5">
  <div class="row mb-4 ">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Nom de tour</label>
      </div>
    </div>
    <div class="form-outline col">
    <input type="text" id="form6Example3" class="form-control" />
    <label class="form-label" for="form6Example3">destination</label>
  </div>
  </div>
  <div class="row mb-4 ">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Enfant</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Adulte</label>
      </div>
    </div>
    <div class="form-outline col">
    <input type="text" id="form6Example3" class="form-control" />
    <label class="form-label" for="form6Example3">chambre</label>
  </div>
  </div>

  <div class="row mb-4 ">
       
    <div class="form-outline col">
    <input type="text" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">nomber de jour</label>
  </div>

  <div class="form-outline col">
    <input type="email" id="form6Example5" class="form-control" />
    <label class="form-label" for="form6Example5">Nombre de personne</label>
  </div>

  <div class="form-outline col">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">discription</label>
  </div>
    
  </div>


  <div class="row mb-4">
  <div class="form-outline col">
    <input class="form-control" id="form6Example7" >
    <label class="form-label" for="form6Example7">transport</label>
  </div>
  <div class="form-outline col">
    <input class="form-control" id="form6Example7" >
    <label class="form-label" for="form6Example7">hotel</label>
  </div>
  <div class="form-outline col">
    <input class="form-control" id="form6Example7" >
    <label class="form-label" for="form6Example7">prix</label>
  </div>

  </div>
  <div class="form-outline col-12 mb-4">
  <textarea class="form-control" rows='3'></textarea>
    <label class="form-label" for="form6Example7">prix</label>
  </div>
  

  <button type="submit" class="btn btn-order btn-lg rounded-3 merriweather mb-4">Place order</button>
</form>
     
     
            </div>
            <script src="views/assets/bootstrap.bundle.min.js" ></script>
            <script src="views/assets/js/bootstrap.bundle.min.js" ></script>


            </div>
        </div>
        </main> 
        <script  src="views\js\script.js"></script>
          
    
           
</body>
</html>