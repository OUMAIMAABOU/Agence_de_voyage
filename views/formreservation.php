<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Happy travel</title>
</head>

<body>


	<section class=" d-flex justify-content-center align-items-center pt-5">
			</div>
      <section class="mt-5" id="Voyage">
      <div class="container mt-5 ">
        <div class="text-center mt-5">
          <h2 class="mt-5">Reservation </h2>
        </div>
        <div class="mt-5">
          <div class="row ">
            <?php $controller = new VoyageController();
            $controller = $controller->select();
            foreach ($controller as  $rows) { $_SESSION['id_voyage']=$rows[0];?>
              <div class="col bg-light vogare-item ">
                <div class="">
                  <img src="views/assets/images/packages/<?= $rows[4] ?>" alt="package-place" style=" BORDER-RADIUS: 40px; width: 100%;height: 200px; max-width: 100%; box-sizing: border-box;">
                  <div class="">
                    <h3> <?= $rows[6] ?> <span class=""><?= $rows[2] ?> Dh</span></h3>
                    <div class="">
                      <p><?= $rows[3] ?></p>
                    </div>
                  </div>
                </div>
              </div><?php } ?>
            <form action="operation" method="post" class="php-email-form">
              <div class="row gy-4 mt-4">
                <div class="col-md-6">
                  <input type="number" name="adulte" class="form-control" placeholder="Nomber Adulte" required>
                </div>
                <div class="col-md-6">
                  <input type="number" name="Enfant" class="form-control" placeholder="Nomber Enfant" required>
                </div>
              
                <div class="col-md-6">
                  <select class="form-control " name="transport">
                    <option value="default">Transport</option>
                    <option value="Non">Non</option>
                    <option value="train">train</option>
                    <option value="car">car</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <select class="form-control"  name="Local">
                    <option value="default">Local</option>
                    <option value="Non">Hotel</option>
                    <option value="train">villa</option>
                    <option value="car">Maison</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <input type="date"  name="date_depart"  class="form-control">
                </div>
                <div class="col-md-6">
                  <input type="date"  name="date_retour" class="form-control">
                </div>
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn  w-25 mb-3" name="addreservation" style="background:#90f5d7 ; color: #012970; ">Add reservation
                  </button>
                </div>

              </div>
            </form>
    </section>

	</section>






</body>

</html>