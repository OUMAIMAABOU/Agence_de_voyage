<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Happy travel</title>
</head>

<body>


  <section class=" d-flex justify-content-center align-items-center pt-5">

    <section class="mt-5 " id="Voyage">
      <div class="container mt-5">
        <div class="text-center mt-5">
          <h2 class="mt-5">Reservation </h2>
        </div>
        <div class="mt-5">
          <div class="row ">
            <?php $controller = new VoyageController();
            $controller = $controller->select();
            foreach ($controller as  $rows) {
             ?>
              <div class="col bg-light vogare-item ">
                <div class="d-flex">
                  <img src="views/assets/img/voyage/<?= $rows[4] ?>" alt="package-place" style=" BORDER-RADIUS: 40px; width: 100%;height: 250px; max-width: 50%; box-sizing: border-box;">
                  <div class="p-2">
                 
                    <input type="text" value="<?=  $_SESSION['voyage']?>">
                    <h3> <?= $rows[6] ?> <span class=""><?= $rows[2] ?> Dh</span></h3>
                    <div class="">
                      <p><?= $rows[3] ?></p>
                    </div>
                  </div>
                </div>
              </div><?php } ?>
            <form>
              <label>Commantaire</label>
              <div class="col-md-6">
                <p>Ajouter commantaire:</p>

                <textarea id="story" name="story" rows="5" cols="100"> </textarea>
                <button type="submit" class="btn  w-25 mb-3" name="Addcommantaire" style="background:#90f5d7 ; color: #012970; ">Add reservation</button>

              </div>
            </form>
            <hr style="    color: #14e2a5; height: 2px;">


            <form action="operation" method="post" class="php-email-form" data-parsley-validate>
              <div class="row gy-4 mt-4">
                <div class="col-md-6">
                  <input type="number" name="adulte" max="30" min="1" class="form-control" placeholder="Nomber Adulte" required data-parsley-trigger="change"data-parsley-type="digits">
                </div>
                <div class="col-md-6">
                  <input type="number" max="30" min="0" name="Enfant" class="form-control" placeholder="Nomber Enfant" required data-parsley-trigger="change"data-parsley-type="digits">

                </div>


                <div class="col-md-6">
                  <select class="form-control " name="transport">
                    <option value="default">Transport</option>
                    <option value="Non">Non</option>
                    <option value="train">train</option>
                    <option value="car">car</option>
                    <option value="car">vol</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <select class="form-control" name="Local">
                    <option value="default">Local</option>
                    <option value="Hotel">Hotel</option>
                    <option value="villa">villa</option>
                    <option value="Maison">Maison</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <input type="date" name="date_depart" class="form-control"  min="2022-06-20">
                </div>
              
                <div class="col-md-6">
                  <input type="date" name="date_retour" class="form-control">
                </div>
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn  w-25 mb-3" name="addreservation" style="background:#90f5d7 ; color: #012970; ">Add reservation
                  </button>
                </div>

              </div>
            </form>
    </section>

  </section>




  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type=" text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>

</body>

</html>