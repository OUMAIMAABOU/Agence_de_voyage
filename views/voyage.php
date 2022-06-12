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
                     <a href="#" class="btn btn-order  btn-lg fs-3 mb-1 mx-4 rounded-3 merriweather" data-bs-toggle="modal" data-bs-target="#exampleModal" > + </a></div>
                    <div class="table-responsive">
                    <table class="table table-striped table align-middle" id="Voyagetable">
                    <thead>
                     
                        <tr class="bg-green merriweather " style=" height: 53px;">
                           
                            <th></th>
                            <th>image</th>
                            <th>Durée</th>
                            <th>Date de depart</th>
                            <th>Prix</th>
                            <th>Food</th>
                            <th>Etat</th>
                            <th>Hotol</th>
                            <th hidden></th>
                            <th ></th>
                        </tr>
                    </thead>
                    <tbody  class="fw-bold" >
                        <?php  $voyage= new VoyageController(); 
                        $voyage=$voyage->Afficher();foreach($voyage as $x => $voyage){?>
                            <tr>
                            <td hidden data-target="id"><?= $voyage[0] ?></td>
                                <td><?= $x+1?></td>
                                <td data-target="image"><?= $voyage[6] ?></td>
                                <td data-target="Duree"> <?= $voyage[1] ?> </td>
                                <td data-target="depart"><?= $voyage[2] ?></td>
                                <td data-target="prix"><?= $voyage[3] ?></td>
                                <td data-target="food"><?= $voyage[5] ?></td>
                                <td data-target="etat"><?= $voyage[7] ?></td>
                                <td data-target="hotel"><?= $voyage[9] ?></td>
                                <td data-target="discription" hidden ><?= $voyage[4] ?></td>

                                <td class="d-flex  align-items-start">
                                <a href="#" class="btn btn-outline-primary btn-lg fw-bold update" style="  color:primary;" data-bs-toggle="modal" data-bs-target="#VoyageModel"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                                <form action="operation" method="POST" class="confirm-submit" data-confirm-msg="etes vous sure de vouloir continuez ?" >
                                    <button type="submit" name ="Voyagedelete" class="btn btn-outline-danger" 
                                    
                                style=" margin-left: 10PX;" data-toggle="modal"><input type="text" hidden name="id" value="<?= $voyage[0]?>"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></button></form>    
                                </td>
                            </tr>
                             <?php }?>
                    </tbody>
                    </table>
                </div>
             
        </div>
     
        <div class="col-sm6 mt-3 " style="float: right;">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter Transport </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="operation" method="post" class="php-email-form">
                                        <div class="row gy-4 mt-4">
                  
                                          <div class="col-md-6">
                                            <input type="text" name="duree" class="form-control" placeholder="Durée" required>
                                          </div>
                                          <div class="col-md-6 ">
                                           <input type="date" class="form-control" name="date" placeholder="Date de depart" required>
                                          </div>
                                          <div class="col-md-6 ">
                                            <input type="text" class="form-control" name="prix" placeholder="Prix" required>
                                          </div>
                                          
                                          <div class="col-md-6 ">
                                            <select class="form-control" name="Hotel"   required data-parsley-trigger="keyup">
                                            <option value="default">Hotel </option> 
                                             <?php $hotel=new HotelController();
                                               $hotel=$hotel->select(); foreach($hotel as  $hotel){?>
                                              <option value="<?= $hotel[0]?>"><?= $hotel[1]?> </option> 
                                              <?php }?>
                                           </select>                                          
                                          </div>
                                          
                                          <div class="col-md-6 ">
                                              <select class="form-control" name="food"   required data-parsley-trigger="keyup">
                                              <option value="default">Food </option> 
                                              <option value="oui">Oui </option>
                                              <option value="non">Non</option>
                                              </select>
                                          </div>
                                          <div class="col-md-6 ">
                                            <select class="form-control" name="etat"   required data-parsley-trigger="keyup">
                                              <option value="default">Etats </option> 
                                              <option value="Enable">Enable </option>
                                              <option value="disable">disable</option>   
                                           </select>
                                           </div>
                                           <div class="col-md-6 ">
                                          <input type="file" class="form-control" name="image" placeholder="Image" required>
                                          </div>
                                          <div class="col-md-12 ">
                                             <textarea id="Discription" name="Discription" rows="3" cols="60" required>  </textarea>
                                          </div>                                          
                                          </div>
                                          
                                        
    
                                           
                                         
                                       
                                          <div class="col-md-12 text-center">
                                            <button type="addTrasport" class="btn  w-25 mb-3"name="addVoyage" style="background:#90f5d7 ; color: #012970; ">Ajouter
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
            <div class="modal fade" id="VoyageModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="max-width:769px;">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update  </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="operation" method="post" class="php-email-form">
                                        <div class="row gy-4 mt-4">
                                        <input type="text" name="id" id="id" hidden class="form-control" required>

                                          <div class="col-md-6">
                                            <span>Durér</span>
                                            <input type="text" name="duree" id="duree" class="form-control" required>
                                          </div>
                                          <div class="col-md-6 ">
                                            <span>Date</span>
                                           <input type="date" class="form-control" id="date" name="date"  required>
                                          </div>
                                          <div class="col-md-6 ">
                                            <span>Prix</span>
                                            <input type="text" class="form-control" name="prix" id="prix"  required>
                                          </div>
                                          
                                          <div class="col-md-6 ">
                                          <span>Hotel</span>
                                            <select class="form-control" name="Hotel" id="hotel"   required data-parsley-trigger="keyup">
                                            <option value="default">Hotel </option> 
                                             <?php $hotel=new HotelController();
                                               $hotel=$hotel->select(); foreach($hotel as  $hotel){?>
                                              <option value="<?= $hotel[0]?>"><?= $hotel[1]?> </option> 
                                              <?php }?>
                                           </select>                                          
                                          </div>
                                          
                                          <div class="col-md-6 ">
                                            <span>Food</span>
                                              <select class="form-control" name="food" id="food"  required data-parsley-trigger="keyup">
                                              <option value="default">Food </option> 
                                              <option value="Oui">Oui </option>
                                              <option value="Non">Non</option>
                                              </select>
                                          </div>
                                          <div class="col-md-6 ">
                                          <span>etat</span>
                                            <select class="form-control" name="etat" id="etat"   required data-parsley-trigger="keyup">
                                              <option value="default">Etats </option> 
                                              <option value="Enable">Enable </option>
                                              <option value="disable">disable</option>   
                                           </select>
                                           </div>
                                           
                                          <div class="col-md-12 ">
                                            <span>Discription</span>
                                            <input type="text" class="form-control" id="Discrip" name="Discription"   required style="height: 152px;">
                                          </div>                                          
                                          </div>
                                          <div class="col-md-12 mt-3 text-center">
                                            <button type="UPDATEVoyage" class="btn  w-25 mb-3"name="UPDATEVoyage" style="background:#90f5d7 ; color: #012970; ">Updare
                                            </button>
                                          </div>
                  
                                        </div>
                                      </form>
                        </div>
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
<script>
       
       $(document).ready(function()
       {
           $("#Voyagetable").on('click','.update',function()
           {
               var currentRow=$(this).closest("tr"); 
               $('#id').val(currentRow.find("td:eq(0)").text());
               $('#duree').val(currentRow.find("td:eq(3)").text());
               $('#date').val(currentRow.find("td:eq(4)").text());
               $('#prix').val(currentRow.find("td:eq(5)").text());
               $('#hotel').val(currentRow.find("td:eq(8)").text());
               $('#food').val(currentRow.find("td:eq(6)").text());
               $('#etat').val(currentRow.find("td:eq(7)").text());
               $('#Discrip').val(currentRow.find("td:eq(9)").text());


       
       
           })
       })
</script>

<!-- if(isset($_FILES['image'])){
        
    $file_name = $_FILES['image']['name'];
    $file_tmp =$_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp,"views/assets/images/avatar".$file_name);} -->