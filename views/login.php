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


    <div class=" text-center mt-5  mb-5">
      <h1 class=" fs-3 fw-bold m-5 pb-3 mt-5" style="border-bottom: #DD10C9 3px solid;">login </h1>
    </div>



    <form action="operation" method="POST">

      <div class="mb-4">
        <input type="text" class="form-control  p-3 fw-bold " style="background: #f5f5f5 ;" id="email"
          name="email" value="" placeholder="  Email">

      </div>
      <div class="mb-4">
        <input type="password" class="form-control p-3  fw-bold " id="password" style="background: #f5f5f5 ;"
          name="password" value="" placeholder="mot de passe" id="exampleInputPassword1">

      </div>


      <input type="checkbox" class="mb-4  " name="remember" /> se souvenir de moi
      <a class=" text-decoration-underline ms-5  " style="color: #012970;" href="#"> <span>Mot de passe
          oublié?</span></a>
          <button type="submit" name="loginconnect" class="btn green mT-3">Connexion</button>

        
   
      <div class="mt-3 text-center">

        <a class=" text-decoration-underline" style="color: #012970;" href="inscrire">
          <span>S'inscrire</span></a>
      </div>
    </form>
  </div>
</div>

</main>
</body>
</html>