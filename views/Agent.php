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
            <div class="container-fluid px-2 pt-2 pe-4">
              <?php include ('./views/includes/header.php');?>
              <div class="row">
                <div class="table-wrapper">
                 <div class="d-flex align-items-baseline  justify-content-between">
                    <form class="col-sm-6 input-group mb-3 mt-5" method="POST" style="max-width:500px;">            
                     </form>
                      <a href="formreservation" class="btn btn-order  btn-lg fs-3 mb-1 mx-4 rounded-3 merriweather" > + </a></div>
                    <div class="table-responsive">
                    <table class="table table-striped table align-middle" id="agenttable">
                    <thead>
                     
                        <tr class="bg-green merriweather " style=" height: 53px;">
                           
                            <th></th>
                            <th>image</th>
                            <th>Nom </th>
                            <th>Etoile </th>
                            <th>Ville</th>
                            <th>Adresse</th>
                            <th>telephone</th>
                            <th>Restaurant</th>
                            <th>Agente</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody  class="fw-bold" >
                        <?php  $hotel= new HotelController(); 
                        $hotel=$hotel->select();foreach($hotel as $x => $hotel){?>
                            <tr>
                            <td hidden data-target="id"><?= $hotel[0] ?></td>
                                <td><?= $x+1?></td>
                                <td data-target="image"><?= $hotel[1] ?></td>
                                <td data-target="nom complet"> <?= $hotel[2] ?> </td>
                                <td data-target="Email"><?= $hotel[3] ?></td>
                                <td data-target="Genre"><?= $hotel[4] ?></td>
                                <td data-target="Type"><?= $hotel[5] ?></td>
                                <td data-target="password"><?= $hotel[6] ?></td>
                                <td data-target="Phone"><?= $hotel[7] ?></td>
                                <td data-target="Phone"><?= $hotel[8] ?></td>
                                <td class="d-flex  align-items-start">
                                <a href="#" class="btn btn-outline-primary btn-lg fw-bold update" style="  color:primary;" data-bs-toggle="modal" data-bs-target="#agentModel"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                                <form action="operation" method="POST" class="confirm-submit" data-confirm-msg="etes vous sure de vouloir continuez ?" > <button type="submit" name ="delete" class="btn btn-outline-danger" style=" margin-left: 10PX;" data-toggle="modal"><input type="text" hidden name="id" value="<?= $hotel[0]?>"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></button></form>    
                              </td>
                            </tr>
                             <?php }?>
                    </tbody>
                    </table>
                </div>
             
        </div>
     
     
     
        <div class="col-sm6 mt-3 " style="float: right;">
            <div class="modal fade" id="agentModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="max-width:769px;">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update  </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">       <form class="form-container" action="operation" method="POST" data-parsley-validate>   
                         <div class="row gy-4 mt-4">
                  
                  <div class="col-md-6">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nom de Hotel" required>
                  </div>

                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="ville"  id="ville" placeholder="Ville" required>
                  </div>

                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="Adresse"  id="Adresse" placeholder="Adresse" required>

                  </div>
                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="Telephone"  id="Telephone" placeholder="Telephone" required>
                  </div>
                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="Prix" id="Prix" placeholder="Prix" required>
                  </div>
                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email"  id="email" placeholder="email" required>
                  </div>
                  <div class="col-md-6 ">
                  <select class="form-control" name="Etoile" id="Etoile"  required data-parsley-trigger="keyup">
                  <option value="default">Etoile </option> 

                   <option value="2">2 </option>
                   <option value="3">3 </option>
                   <option value="4">4 </option>

                   </select>                                          
                  </div>
                  <div class="col-md-6 ">
                  <select class="form-control" name="Chamber"  id="Chamber" required data-parsley-trigger="keyup">
                  <option value="default">type Chamber </option> 
                  <option value="2">2 </option>
                   <option value="3">3 </option>
                   <option value="4">4 </option>
                   </select>
                  </div>
                   <div class="col-md-6 ">

                   <select class="form-control" name="Restauran"  id="Restauran"  required data-parsley-trigger="keyup">
                   <option value="default">Restaurant </option> 
                   <option value="OUI">OUI </option>
                   <option value="NON">NON </option>
                   </select>
                   </div>
                   <div class="col-md-6 ">
                   <input type="file" class="form-control" name="image"  required>

                   </div>
                   <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" name="update" class="btn btn-warning mT-3">Update</button>
                    </div>
                </div>
            </form> 
                               
                        </div>           
                        </div>
                        <div class="modal-footer">
                      
                    </div>
                </div>
            </div>
            <script src="views/assets/bootstrap.bundle.min.js" ></script>
            <script src="views/assets/js/bootstrap.bundle.min.js" ></script>


            </div>
        </div>
        </main> 
        <script  src="views\js\script.js"></script>
      
</body>
</html>

<!-- if(isset($_FILES['image'])){
        
    $file_name = $_FILES['image']['name'];
    $file_tmp =$_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp,"views/assets/images/avatar".$file_name);} -->
