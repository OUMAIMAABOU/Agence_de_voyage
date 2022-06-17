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
      <div class=" w-25 " style=" margin-top: 110px;">
     

     


      <div class="login d-flex justify-content-center align-items-center">
  <div class="  " style=" margin-top: 110px;">


    <div class=" text-center mt-5  mb-5">
      <h1 class=" fs-3 fw-bold m-5  mt-5" style="border-bottom: #20c997 3px solid;">Connexion </h1>
    </div>

        <form class="form-container row" action="operation" method="POST" data-parsley-validate>
          <div class="mb-3 fw-bold">
            <input type="email" class="form-control" name="email"  placeholder="Enter votre email">
          </div>
          <div class="mb-3 fw-bold">
            <input type="text" class="form-control" name="password"  placeholder="Enter votre password">
          </div>
          <div class="mb-3 fw-bold col-12">
                      <button type="submit" name="loginconnect" class="btn btn-order btn-lg rounded-3 merriweather ">Connexion</button>
          </div>
        </form>
       
          <div class="mt-3 text-center">
            <a class=" text-decoration-underline" style="color: #012970;" href="inscrire">
              <span>S'inscrire</span></a>
          </div>
      </div>
    </div>
      </div>
    </div> 

  </main>
</body>

</html>