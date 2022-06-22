<!DOCTYPE html>
<html lang="fr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  
</head>

<body class="row">
  <main>
    <div id="page-content-dashboard">
      <div class=" px-0 ">
        <div class="d-flex justify-content-between border-bottom">
          <?php include('views/includes/sidebar.php'); ?>
        </div>
        <div class="container-fluid px-2 pt-2 pe-4">
          <?php include('./views/includes/header.php'); ?>
          <div class="row">
            <div class="table-wrapper">
              <div class="d-flex align-items-baseline  justify-content-between">
                <form class="col-sm-6 input-group mb-3 mt-5" method="POST" style="max-width:500px;">
                </form>
                <a href="#addetud" class="btn btn-order  btn-lg fs-3 mb-1 mx-4 rounded-3 merriweather" data-bs-toggle="modal" data-bs-target="#exampleModal"> + </a>
              </div>
              <div class="table-responsive">
                <table class="table table-striped table align-middle" id="agentHotel">
                  <thead>

                    <tr class="bg-green merriweather " style=" height: 53px;">

                      <th></th>
                      <th>Nom </th>
                      <th>Email </th>
                      <th>Ville</th>
                      <th>Adresse</th>
                      <th>telephone</th>
                      <th>Type</th>
                      <th>Etoile</th>
                      <th>Restaurant</th>
                      <th>Agente</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="fw-bold">
                    <?php ;
                    $hotel = HotelController::select();
                    foreach ($hotel as $x => $hotel) { ?>
                      <tr>
                        <td hidden data-target="id"><?= $hotel[0] ?></td>
                        <td><?= $x + 1 ?></td>
                        <td class="name"><?= $hotel['name'] ?></td>
                        <td class="email">  <?= $hotel['email'] ?> </td>
                        <td class="ville"><?= $hotel['ville'] ?></td>
                        <td class="adrs"><?= $hotel['adresse'] ?></td>
                        <td class="tele"><?= $hotel['telephone'] ?></td>
                        <td class="type"><?= $hotel['type'] ?></td>
                        <td class="etoil"><?= $hotel['etoile'] ?></td>
                        <td class="rest"><?= $hotel['restaurant'] ?></td>
                        <td class="usrname"><?= $hotel['username'] ?></td>
                        <td class="d-flex  align-items-start">
                          <a href="#" class="btn btn-outline-primary btn-lg fw-bold update" data-bs-toggle="modal" data-bs-target="#hotelModel"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                          <form action="operation" method="POST" class="confirm-submit" data-confirm-msg="etes vous sure de vouloir continuez ?"> <button type="submit" name="deleteHotel" class="btn btn-outline-danger btn-lg ms-2" data-toggle="modal"><input type="text" hidden name="id" value="<?= $hotel[0] ?>"><img src="https://img.icons8.com/color/20/000000/delete-forever.png" /></button></form>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>

            </div>
            <div class="col-sm6 mt-3 " style="float: right;">
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content" style="width: 552px;">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Ajouter Hotel </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="operation" method="post" class="php-email-form">
                        <div class="row gy-4 mt-4">

                          <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Nom de Hotel" required>
                          </div>
                          <div class="col-md-6 ">
                            <select class="form-select" name="type" required data-parsley-trigger="keyup">
                              <option value="default">Type </option>
                              <option value="Hotel">Hotel</option>
                              <option value="Maison">Maison </option>
                              <option value="Villa">Villa</option>

                            </select>
                          </div>
                          <div class="col-md-6 ">
                          <select class="form-control" id="ville" name="ville" required data-parsley-trigger="keyup">
                          <option value="default">Choisir une ville </option>

                              <?php $ville = new ClientController();
                              $ville = $ville->getallville();
                              foreach ($ville as $ville) { ?>
                                <option value="<?= $ville["ville"] ?>"><?= $ville["ville"]?></option>
                                                            <?php  } ?>
                            </select>
                          </div>

                          <div class="col-md-6 ">
                            <input type="text" class="form-control" name="Adresse" placeholder="Adresse" required>

                          </div>
                          <div class="col-md-6 ">
                            <input type="text" class="form-control" name="Telephone" placeholder="Telephone" required>
                          </div>

                          <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="email" required>
                          </div>
                          <div class="col-md-6 ">
                            <select class="form-control" name="Etoile" required data-parsley-trigger="keyup">
                              <option value="default">Etoile </option>
                              <option value="1">1</option>
                              <option value="2">2 </option>
                              <option value="3">3 </option>
                              <option value="4">4 </option>
                              <option value="5">5 </option>

                            </select>
                          </div>
                          <div class="col-md-6 ">

                            <select class="form-control" name="Restauran" required data-parsley-trigger="keyup">
                              <option value="default">Restaurant </option>
                              <option value="OUI">OUI </option>
                              <option value="NON">NON </option>
                            </select>
                          </div>
                        

                          <div class="col-md-12 text-center">
                            <button type="submit" class="btn  w-25 mb-3" name="addHotel" style="background:#90f5d7 ; color: #012970; ">Ajouter
                            </button>
                          </div>

                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">

                    </div>
                  </div>
                </div>

              </div>
            </div>



            <div class="col-sm6 mt-3 " style="float: right;">
              <div class="modal fade" id="hotelModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="max-width:769px;">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Update </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form class="form-container" action="operation" method="POST" data-parsley-validate>
                        <div class="row gy-4 mt-4">
                          <input type="text" name="id" id="id" hidden class="form-control" required>

                          <div class="col-md-6">
                            <span>Nom</span>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nom de Hotel" required>
                          </div>

                          <div class="col-md-6 ">
                            <span>Ville</span>
                            <select class="form-control" id="ville" name="ville" required data-parsley-trigger="keyup">
                              <option value="default">Ville </option>
                              <?php $ville = new ClientController();
                              $ville = $ville->getallville();
                              foreach ($ville as $ville) { ?>
                                <option value="<?= $ville[0] ?>"><?= $ville[0];
                                                              } ?></option>
                            </select>
                          </div>

                          <div class="col-md-6 ">
                            <span>Adresse</span>
                            <input type="text" class="form-control" name="Adresse" id="Adresse" placeholder="Adresse" required>

                          </div>
                          <div class="col-md-6 ">
                            <span>Telephone</span>
                            <input type="text" class="form-control" name="Telephone" id="Telephone" placeholder="Telephone" required>
                          </div>

                          <div class="col-md-6 ">
                            <span>Email</span>
                            <input type="email" class="form-control" name="email" id="emaill" placeholder="email" required>
                          </div>
                          <div class="col-md-6 ">
                            <span>Etoile</span>
                            <select class="form-control" name="Etoile" id="Etoile" required data-parsley-trigger="keyup">
                              <option value="default">Etoile </option>
                              <option value="2">2 </option>
                              <option value="3">3 </option>
                              <option value="4">4 </option>
                            </select>
                          </div>
                          <div class="col-md-12">
                            <span>Restaurant</span>
                            <select class="form-control" name="Restauran" id="Restauran" required data-parsley-trigger="keyup">
                              <option value="default">Restaurant </option>
                              <option value="OUI">OUI </option>
                              <option value="NON">NON </option>
                            </select>
                          </div>
                          <div class="col-md-6 ">
                            <select class="form-control" name="type" id="typ" required data-parsley-trigger="keyup">
                              <option value="default">Type </option>
                              <option value="Hotel">Hotel</option>
                              <option value="Maison">Maison </option>
                              <option value="Villa">Villa</option>

                            </select>
                          </div>
                      
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="updateHotel" class="btn btn-warning mT-3">Update</button>
                          </div>
                        </div>
                      </form>

                    </div>
                  </div>
                  <div class="modal-footer">

                  </div>
                </div>
              </div>
              <script src="views/assets/bootstrap.bundle.min.js"></script>
              <script src="views/assets/js/bootstrap.bundle.min.js"></script>


            </div>
          </div>
  </main>
  <script src="views\js\script.js"></script>

</body>

</html>

<!-- if(isset($_FILES['image'])){
        
    $file_name = $_FILES['image']['name'];
    $file_tmp =$_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp,"views/assets/images/avatar".$file_name);} -->