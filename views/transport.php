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
                    <table class="table table-striped table align-middle" id="transportable">
                    <thead>
                     
                        <tr class="bg-green merriweather " style=" height: 53px;">
                           
                            <th></th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Tele</th>
                            <th>Ville</th>
                            <th>type</th>
                            <th>Email</th>
                            <th>Nom Agent</th>
                          
                            <th></th>
                        </tr>
                    </thead>
                    <tbody  class="fw-bold" >
                        <?php  $Transport= new TransportController(); 
                        $Transport=$Transport->select();foreach($Transport as $x => $Transport){?>
                            <tr>
                            <td hidden data-target="id"><?= $Transport[0] ?></td>
                                <td><?= $x+1?></td>
                                <td ><?= $Transport[1] ?></td>
                                <td > <?= $Transport[2] ?> </td>
                                <td ><?= $Transport[3] ?></td>
                                <td ><?= $Transport[4] ?></td>
                                <td><?= $Transport[5] ?></td>
                                <td ><?= $Transport[6] ?></td>  
                                <td ><?= $Transport[7] ?></td>                              
                                <td class="d-flex  align-items-start">
                                <a href="#" class="btn btn-outline-primary btn-lg fw-bold update" style="  color:primary;" data-bs-toggle="modal" data-bs-target="#transportModel"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                                <form action="operation" method="POST" class="confirm-submit" data-confirm-msg="etes vous sure de vouloir continuez ?" ><button type="submit" name ="delete" class="btn btn-outline-danger"      
                                style=" margin-left: 10PX;" data-toggle="modal"><input type="text" hidden name="id" value="<?= $Transport[0]?>"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></button></form>    
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
                                            <input type="text" name="name" class="form-control" placeholder="Nom d'agent" required>
                                          </div>
                  
                                          <div class="col-md-6 ">
                                          <select class="form-control" id="ville" name="ville"   required data-parsley-trigger="keyup">
                                          <option value="default">Ville </option> 
                                          <?php $ville =new ClientController(); $ville = $ville->getallville(); foreach($ville as $ville ) {?>
                                            <option value="<?= $ville[1]?>"><?= $ville[1];  } ?></option> </select>                                          </div>
                  
                                          <div class="col-md-6 ">
                                            <input type="text" class="form-control" name="Telephone" placeholder="Telephone" required>

                                          </div>
                                          <div class="col-md-6 ">
                                            <input type="text" class="form-control" name="Adresse" placeholder="Adresse" required>
                                          </div>
                                          
                                          <div class="col-md-6 ">
                                          <select class="form-control" name="Type"   required data-parsley-trigger="keyup">
                                          <option value="default">Type d'agente </option> 

                                           <option value="1">Train </option>
                                           <option value="2">CAR</option>
                                           <option value="5">vole</option>
  
                                           </select>                                          
                                          </div>
                                          <div class="col-md-6 ">
                                          <input type="text" class="form-control" name="Email" placeholder="Email" required>
                               
                                          </div>
    
                                           
                                         
                                       
                                          <div class="col-md-12 text-center">
                                            <button type="addTrasport" class="btn  w-25 mb-3"name="addTrasport" style="background:#90f5d7 ; color: #012970; ">Ajouter
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
            <div class="modal fade" id="transportModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="max-width:769px;">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update  </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">       
                          <form class="form-container" action="operation" method="POST" data-parsley-validate>   
                         <div class="row gy-4 mt-4">
                                     
                         <input type="text" hidden name="id" id="id" class="form-control" placeholder="Nom " required>

                  <div class="col-md-6">
                    <span>Nom d'agence</span>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nom " required>
                  </div>

                  <div class="col-md-6 ">
                  <span>Ville</span>

                  <select class="form-control" id="ville" name="ville"   required data-parsley-trigger="keyup">
                     <option value="default">Ville </option> 
                     <?php $ville =new ClientController(); $ville = $ville->getallville(); foreach($ville as $ville ) {?>
                      <option value="<?= $ville[1]?>"><?= $ville[1];  } ?></option> </select> 
                  </div> 
                  <div class="col-md-6 ">
                  <span>Adresse</span>
                    <input type="text" class="form-control" name="Adresse"  id="Adresse" placeholder="Adresse" required>

                  </div>
                  <div class="col-md-6 ">
                  <span>Telephone</span>
                    <input type="text" class="form-control" name="Telephone"  id="Telephone"  required>
                  </div>
                  
                  <div class="col-md-6 ">
                  <span>email</span>
                    <input type="email" class="form-control" name="Email"  id="email"  required>
                  </div>
                                                         
               
                  <div class="col-md-6 ">
                  <span>Type</span>
                  <select class="form-control" name="Type"  id="type" required data-parsley-trigger="keyup">
                  <option value="default">type  </option> 
                  <option value="car">car </option>
                   <option value="vole">vole </option>
                   <option value="train">train </option>
                   </select>
                  </div>
               
                   <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" name="updateTransport" class="btn btn-warning mT-3">Update</button>
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
<script>
       
       $(document).ready(function()
       {
           $("#transportable").on('click','.update',function()
           {
               var currentRow=$(this).closest("tr"); 
               $('#id').val(currentRow.find("td:eq(0)").text());
               $('#name').val(currentRow.find("td:eq(2)").text());
               $('#ville').val(currentRow.find("td:eq(5)").text());
               $('#Adresse').val(currentRow.find("td:eq(3)").text());
               $('#Telephone').val(currentRow.find("td:eq(4)").text());
               $('#email').val(currentRow.find("td:eq(7)").text());
               $('#type').val(currentRow.find("td:eq(6)").text());

       
       
           })
       })
</script>
</html>

<!-- if(isset($_FILES['image'])){
        
    $file_name = $_FILES['image']['name'];
    $file_tmp =$_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp,"views/assets/images/avatar".$file_name);} -->
