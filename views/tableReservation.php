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
                      <a href="#addetud" class="btn btn-order  btn-lg fs-3 mb-1 mx-4 rounded-3 merriweather" data-bs-toggle="modal" data-bs-target="#exampleModal" > + </a></div>
                    <div class="table-responsive">
                    <table class="table table-striped table align-middle">
                    <thead>
                     
                        <tr class="bg-green merriweather " style=" height: 53px;">
                           
                            <th></th>
                            <th>image</th>
                            <th>Nom complet</th>
                            <th>Email</th>
                            <th>Genre</th>
                            <th>type</th>
                            <th>password</th>
                            <th>Phone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody  class="fw-bold" id="myTable" >
                        <?php  $admine = new AdministrateurController(); $admines=$admine->getAllAdmin();foreach($admines as $x => $admine){?>
                            <tr>
                            <td hidden data-target="id"><?= $admine['id'] ?></td>
                                <td><?= $x+1?></td>
                                <td data-target="image"><?= $admine['image'] ?></td>
                                <td data-target="nom complet"> <?= $admine['name'] ?> </td>
                                <td data-target="Email"><?= $admine['email'] ?></td>
                                <td data-target="Genre"><?= $admine['genre'] ?></td>
                                <td data-target="Type"><?= $admine['type'] ?></td>
                                <td data-target="password"><?= $admine['password'] ?></td>
                                <td data-target="Phone"><?= $admine['Phone'] ?></td>
                                <td class="d-flex  align-items-start">
                                <a href="#" class="btn btn-outline-primary btn-lg fw-bold update" style="  color:primary;" data-bs-toggle="modal" data-bs-target="#myModel"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                                <form action="operation" method="POST" class="confirm-submit" data-confirm-msg="etes vous sure de vouloir continuez ?" >
                                    <button type="submit" name ="deletparent" class="btn btn-outline-danger" 
                                    
                                style=" margin-left: 10PX;" data-toggle="modal"><input type="text" hidden name="id" value="<?= $admine['id']?>"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></button></form>    
                                </td>
                            </tr>
                             <?php }?>
                    </tbody>
                    </table>
                </div>
                <div class="col-sm6 mt-3 " style="float: right;">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter Amdin </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form class="form-container" action="operation" method="POST" data-parsley-validate>  
                                        <div class="mb-3 fw-bold" >
                                            <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                                            <input type="text" class="form-control"  name="nom" placeholder="Enter name complet" style="margin-bottom: 32px;"data-parsley-length="[4, 20]" parsley-error data-parsley-trigger="keyup" required>
                                        </div>
                               
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">Genre</label>
                                            <select class="form-control" name="genre" >
                                             <option value="Femme">Femme </option>
                                             <option value="Homme" selected>Homme </option>
                                         </select>
                                        </div>
                                       
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter votre email"  required data-parsley-trigger="keyup">
                                        </div>
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">Type</label>
                                            <select class="form-control" name="type"  required data-parsley-trigger="keyup">
                                           
                                         <option value="1">admin general </option>
                                         <option value="2">admin secondaire </option>
                                         <option value="5">Agent </option>

                                         </select>
                                        </div>
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">password</label>
                                            <input type="text" class="form-control" name="password" placeholder="Enter le Job"  required data-parsley-trigger="keyup">
                                            <p id="img2" style="margin-bottom: -1rem;"></p>
                                            <span id="Jobid" style="color:red; font-weight: bold;"></span>
                                        </div>
                                        <div class="mb-3  fw-bold" >
                                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                            <textarea class="form-control"  name="adres" rows="3"  required data-parsley-trigger="keyup"></textarea>
                                        </div>
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                            <input type="text" class="form-control"  name="Phone" placeholder="Enter phone"  required data-parsley-trigger="keyup">
                                           
                                        </div>
             
                                    <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="saveadmin" class="btn btn-warning mT-3">Save</button>
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
            <div class="modal fade" id="myModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update  </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="mb-3 fw-bold" >
                                            <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                                            <input type="text" class="form-control"  id ="name" name="nome" placeholder="Enter name complet" style="margin-bottom: 32px;">
                                        </div>
                               
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">Genre</label>
                                            <select class="form-control" name="genre" id="genre" >
                                             <option value="Femme">Femme </option>
                                             <option value="Homme" selected>Homme </option>
                                         </select>
                                        </div>
                                       
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter votre email">
                                        </div>
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">Type</label>
                                            <select class="form-control" name="type" id="type">
                                           
                                         <option value="1">admin general </option>
                                         <option value="2">admin secondaire </option>
                                         <option value="5">Agent </option>

                                         </select>
                                        </div>
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">password</label>
                                            <input type="text" class="form-control" name="password" id ="password" placeholder="Enter votre password">
                                          
                                        </div>
                                        <div class="mb-3  fw-bold" >
                                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                            <textarea class="form-control"  name="adres" id="adress" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                            <input type="text" class="form-control" id="phone"  name="Phone" placeholder="Enter phone">
                                         
                                        </div>
             
                                    <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="update" class="btn btn-warning mT-3">Update</button>
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
     
            <!-- <script>
                $(document).ready(function()
                {
                    $("#myTable").on('click','.update',function()
                    {
                        var currentRow=$(this).closest("tr"); 
                        $('#id').val(currentRow.find("td:eq(0)").text());
                        $('#nom').val(currentRow.find("td:eq(3)").text());
                        $('#genre').val(currentRow.find("td:eq(5)").text());
                        $('#email').val(currentRow.find("td:eq(4)").text());
                        $('#type').val(currentRow.find("td:eq(6)").text());
                        $('#password').val(currentRow.find("td:eq(7)").text());
                        // $('#adress').val(currentRow.find("td:eq(6)").text());
                        $('#Phone').val(currentRow.find("td:eq(8)").text());

     
                    })
               })
            </script> -->
            <script>
                    $(document).ready(function() {
        $("#myTable").on('click', '.update', function() {
            var currentRow = $(this).closest("tr");
            colM = currentRow.find("td:eq(0)").text();
            col0 = currentRow.find("td:eq(2)").text();
            col1 = currentRow.find("td:eq(3)").text();
            col3 = currentRow.find("td:eq(4)").text();
            $('#matricule').val(colM);
            $('#nome').val(col0);
            $('#gen').val(col1);
            $('#dateN').val(col3);
            $('#Email').val(currentRow.find("td:eq(5)").text());
            $('#NAMEP').val(currentRow.find("td:eq(6)").text());
            $('#ads').val(currentRow.find("td:eq(7)").text());
            $('#cla').val(currentRow.find("td:eq(8)").text());
        })
    })
            </script>
            <script src="views/assets/js/script.js"></script>
                       
           
   
     
    
   </main> 

   <script>
                document.querySelectorAll('.confirm-submit').forEach(form=>{
                    form.addEventListener('submit',(e)=>{
                        if(!confirm(e.target.dataset.confirmMsg)){
                            e.preventDefault();
                        }
                    });
                })
                // document.querySelectorAll('.confirm-submit').forEach(form=>{
                //     form.addEventListener('click',(e)=>{
                //         if(!confirm(e.target.dataset.confirmMsg)){
                //             e.preventDefault();
                //         }
                //     });
                // })

            </script>
      <script>
        var el = document.getElementById("dashboard");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
           
</body>
</html>