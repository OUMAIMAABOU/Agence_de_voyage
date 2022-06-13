<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<main>


<div class="login d-flex justify-content-center align-items-center">
  <div class=" w-50 " style=" margin-top: 110px;">


    <div class=" text-center mt-5  mb-5">
      <h1 class=" fs-3 fw-bold m-5  mt-5" style="border-bottom: #20c997 3px solid;">Inscription </h1>
    </div>



    <form class="form-container row" action="operation" method="POST" data-parsley-validate>   
                                  <div class="mb-3 fw-bold" >
                                       <input type="text" hidden class="form-control"  name="type" value="6"  >
                                       
                                   </div>
                                 
                                      <div class="mb-3 col-6 fw-bold" >
                                            <input type="text" class="form-control"  id ="name"  name="nom"  placeholder="Enter name complet" >
                                        </div>
                                        <div class="mb-3 col-6 fw-bold"  >
                                            <input type="text" name="cin"  class="form-control"  placeholder="Enter votre CIN" class="form-label">
                                          
                                        </div>
                               
                                        <div class="mb-3 col-6 fw-bold"  >
                                            <select class="form-control" name="genre" id="genre" >
                                            <option value="default">Genre </option>
                                             <option value="Femme">Femme </option>
                                             <option value="Homme" selected>Homme </option>
                                         </select>
                                        </div>
                                       
                                        <div class="mb-3 col-6 fw-bold"  >
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter votre email">
                                        </div>
                                        
                                        <div class="mb-3 col-6 fw-bold"  >
                                            <input type="text" class="form-control" name="password" id ="password" placeholder="Enter votre password">
                                          
                                        </div>
                                        <div class="mb-3 col-6 fw-bold"  >
                                            <input type="text" class="form-control" id="phone"  name="Phone" placeholder="Enter phone">
                                         
                                        </div>
                                        <div class="mb-3 col-6 fw-bold" >
                                            <input type="text" class="form-control"  name="configpassword"  placeholder="Config Password">
                                        </div>
                                      
                                        <div class="mb-3 col-6 fw-bold" >
                                            <input type="text" class="form-control"  id ="adrees"  name="adresse"  placeholder="Enter Adresse" >
                                        </div>
                                        <div class="mb-3 col-12 fw-bold" >
                                            <input type="file" class="form-control"  id ="image"  name="image"  placeholder="Enter name complet" >
                                        </div>
                                        <button type="submit" name="inscription" class="btn btn-order btn-lg rounded-3 merriweather ">Inscription</button>
                                   
                                </form>              
  </div>
</div>

</main>
</body>
</html>