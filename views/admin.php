<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pay</title>
 




</head>

    <body class="row">
     
    <main>

      

        <div id="page-content-dashboard">
          
    

            <div class=" px-0 ">
                  <div class="d-flex justify-content-between border-bottom">
                 <?php include ('views/includes/sidebar.php'); ?> 

                  </div>



            <div class="container-fluid px-5 pt-3">
            <?php include ('./views/includes/header.php');?>

    
              <div class="row">
                <div class="table-wrapper">
                    
                 <div class="d-flex align-items-baseline  justify-content-between">
                    <form class="col-sm-6 input-group mb-3 mt-5" method="POST" style="max-width:500px;">
                                 
                     </form>
                      <a href="#addetud" class="btn btn-order  btn-lg fs-3 mb-1 rounded-3 merriweather" data-bs-toggle="modal" data-bs-target="#exampleModal" > + </a></div>
      
                    <div class="table-responsive">
                    <table class="table table-striped table align-middle">
                    <thead>
                     
                        <tr class="bg-green merriweather " style=" height: 53px;">
                           
                            <th>Matricule</th>
                            <th>Nom complet</th>
                            <th>Genre</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>type</th>
                            <th>password</th>
                            <th>Phone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody  class="fw-bold" id="myTable" >
                  
                        <tr>
                           <td hidden data-target="id"> </td>
                            <td></td>
                            <td data-target="nomcomplet"> ouma </td>
                            <td data-target="genre">aa</td>
                           
                            <td data-target="job">ano</td>
                            <td data-target="adrs">111</td>
                            <td data-target="phone">3232</td>
                            <td data-target="phone">3232</td>
                            <td data-target="phone">3232</td>
                            
                            <td class="d-flex  align-items-start">
                            <a href="#" class="btn btn-outline-primary btn-lg fw-bold update" style="  color:primary;" data-bs-toggle="modal" data-bs-target="#myModel"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                            <form action="operation" method="POST" ><button type="submit" name ="deletparent" class="btn btn-outline-danger " style=" margin-left: 10PX;" data-toggle="modal"><input type="text" hidden name="Matricule" value="<?= $rows['Matricule']?>"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></button></form>    
                            </td>
                        </tr>
                    
                        <tr>
                           <td hidden data-target="id"> </td>
                            <td></td>
                            <td data-target="nomcomplet"> ama </td>
                            <td data-target="genre">test</td>
                           
                            <td data-target="job">ano</td>
                            <td data-target="adrs">222</td>
                            <td data-target="phone">000</td>
                            <td class="d-flex  align-items-start">
                            <a href="#" class="btn btn-outline-primary btn-lg fw-bold update" style="  color:primary;" data-bs-toggle="modal" data-bs-target="#myModel"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                            <form action="operation" method="POST" ><button type="submit" name ="deletparent" class="btn btn-outline-danger " style=" margin-left: 10PX;" data-toggle="modal"><input type="text" hidden name="Matricule" value="<?= $rows['Matricule']?>"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></button></form>    
                            </td>
                        </tr>                     
      
                    </tbody>
                    </table>
                </div>
                <div class="col-sm6 mt-3 " style="float: right;">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter les parents </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form class="form-container" action="operation" method="POST" onsubmit="return validation()">  
                                        <div class="mb-3 fw-bold" >
                                            <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                                            <input type="text" class="form-control"  name="nom" placeholder="Enter name complet" style="margin-bottom: 32px;">
                                            <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                                            <span id="nomid" class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                        </div>
                               
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">Genre</label>
                                            <select class="form-control" name="genre" >
                                             <option value="Femme">Femme </option>
                                             <option value="Homme" selected>Homme </option>
                                         </select>
                                        </div>
                                       
                               
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">Job</label>
                                            <input type="text" class="form-control" name="Job" placeholder="Enter le Job">
                                            <p id="img2" style="margin-bottom: -1rem;"></p>
                                            <span id="Jobid" style="color:red; font-weight: bold;"></span>
                                        </div>
                                        <div class="mb-3  fw-bold" >
                                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                            <span id="addressid"  class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                            <textarea class="form-control"  name="adres" rows="3"></textarea>
                                            <p id="img4" style="margin-bottom: -1rem;"></p> <span id="addid" style="color:red; font-weight: bold;"></span>
                                        </div>
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                            <input type="text" class="form-control"  name="Phone" placeholder="Enter phone">
                                            <p id="img2" style="margin-bottom: -1rem;"></p>
                                            <span id="Phoneid" style="color:red; font-weight: bold;"></span>
                                        </div>
             
                                    <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="saveparent" class="btn btn-warning mT-3">Save</button>
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
                        <form class="form-container" action="operation" method="POST" >  
                        <div class="mb-3 fw-bold" >
                                            <input type="text" hidden class="form-control" id="matricule" name="matricule"  style="margin-bottom: 32px;">
                                            <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                                            <span id="nomid" class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                        </div>
                                        <div class="mb-3 fw-bold" >
                                            <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                                            <input type="text" class="form-control" id="nom" name="nom"  style="margin-bottom: 32px;">
                                            <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                                            <span id="nomid" class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                        </div>
                               
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">Genre</label>
                                            <select class="form-control" id="genre"  name="genre" >
                                             <option value="Femme">Femme </option>
                                             <option value="Homme" selected>Homme </option>
                                         </select>
                                        </div>
                                        
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">Job</label>
                                            <input type="text" class="form-control" id="Job" name="Job" placeholder="Enter le Job">
                                            <p id="img2" style="margin-bottom: -1rem;"></p>
                                            <span id="Jobid" style="color:red; font-weight: bold;"></span>
                                        </div>
                                        <div class="mb-3  fw-bold" >
                                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                            <span id="addressid"  class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                            <textarea class="form-control" id="adress" name="adres" rows="3"></textarea>
                                            <p id="img4" style="margin-bottom: -1rem;"></p> <span id="addid" style="color:red; font-weight: bold;"></span>
                                        </div>
                                        <div class="mb-3  fw-bold"  >
                                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="Phone" placeholder="Enter phone">
                                            <p id="img2" style="margin-bottom: -1rem;"></p>
                                            <span id="Phoneid" style="color:red; font-weight: bold;"></span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="bntupdate" class="btn btn-primary">update</button>
                                        </div>
                                        </div>
                                  
                                </form>              
                        </div>
                        <div class="modal-footer">
                      
                    </div>
                </div>
            </div>
            <script src="views/assets/bootstrap.bundle.min.js" ></script>
            <script src="views/assets/js/bootstrap.bundle.min.js" ></script>


            </div>
        </div>
     
            <script>
                $(document).ready(function()
                {
                    $("#myTable").on('click','.update',function()
                    {
                        var currentRow=$(this).closest("tr"); 
                        $('#matricule').val(currentRow.find("td:eq(0)").text());
                        $('#nom').val(currentRow.find("td:eq(2)").text());
                        $('#genre').val(currentRow.find("td:eq(3)").text());
                        $('#Job').val(currentRow.find("td:eq(4)").text());
                        $('#adress').val(currentRow.find("td:eq(5)").text());
                        $('#phone').val(currentRow.find("td:eq(6)").text());
     
                    })
               })
            </script>
            <script src="views/assets/js/script.js"></script>

           
   
     
    
   </main> 
</body>
</html>