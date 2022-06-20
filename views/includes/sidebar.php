<!-- <link href="../assets/css/bootstrap.min.css" rel="stylesheet" > -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="./views/assets/css/style.css" />
<link href="./views/assets/css/dashboord.css" rel="stylesheet">
<link href="./views/assets/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<?php
//  if(empty($_SESSION['role'])) header("Location:Acueille");?>
<div class="d-flex m-3" id="dashboard">
    <div class="bg" id="sidebar-dashboard">


        <div class=" redressed fw-bolder m-2 dark-text fs-5 fw-bold border-start border-3 px-2">
            <h1 class="text-light"> <span style="color:#90f5d7;">Happy</span>Travel</a></h1>

        </div>
        <div class="list-group ">
            <img src="views\assets\images\client\ulzzangs.jpg" alt="profile picture" class=" profile img-fluid rounded-circle mx-auto my-2   d-block" style="height: 116px;width: 153px;">
            <div class="text-center ">
                <h2 class="fs-4 merriweather " style="color : #dcdcdc"> <?=  $_SESSION['name'] ?></h2> 
                <span class="fs-4 merriweather green "><?=  $_SESSION['role']?></span>
            </div>

            <a href="chart" class="list-group-item mx-5 border-0  merriweather bg-transparent mt-3" style="color:#90f5d7;">
                <span style="<?php if(basename($_SERVER['REQUEST_URI']) == "chart") echo 'color:#90f5d7;'; else echo 'color:white ;' ?>"><i class="fas fa-home"></i><span> Home</span></a></span>
                <?php if($_SESSION['role']=='Admin'){
           echo' <a href="admin" class="list-group-item  mx-5 border-0 merriweather bg-transparent ">
          <span style="color:white;"> <i class="far fa-bookmark"></i> Admin </span> </a>';
         }?>
         <!-- <a href="admin" class="list-group-item  mx-5 border-0 merriweather bg-transparent ">
           <span style="color:#90f5d7 ;"><i class="far fa-bookmark"></i> Admin</span> </a> -->
            <a href="Hotel" class="list-group-item mx-5 merriweather border-0 bg-transparent rounded-3">
              <span style="<?php if(basename($_SERVER['REQUEST_URI']) == "Hotel") echo 'color:#90f5d7;'; else echo 'color:white ;' ?> "><i class="fas fa-graduation-cap"></i>Hotel</a></span> 
            <a href="transport" class="list-group-item mx-5 merriweather border-0 bg-transparent rounded-3">
            <span style="<?php if(basename($_SERVER['REQUEST_URI']) == "transport") echo 'color:#90f5d7;'; else echo 'color:white ;' ?>"> <i class="fas fa-graduation-cap"></i>transport</a></span>
            <a href="voyage" class="list-group-item mx-5 merriweather border-0 bg-transparent rounded-3">
            <span style="<?php if(basename($_SERVER['REQUEST_URI']) == "voyage") echo 'color:#90f5d7;'; else echo 'color:white ;' ?>">  <i class="fas fa-graduation-cap"></i>voyage</a></span>
            <a href="tableReservation" class="list-group-item merriweather mx-5 border-0 bg-transparent">
            <span style="<?php if(basename($_SERVER['REQUEST_URI']) == "tableReservation") echo 'color:#90f5d7;'; else echo 'color:white ;' ?>"><i class="fas fa-dollar-sign "></i> Reservation </a></span>
            <a href="client" class="list-group-item mx-5 border-0  merriweather bg-transparent ">
             <span style="<?php if(basename($_SERVER['REQUEST_URI']) == "client") echo 'color:#90f5d7;'; else echo 'color:white ;' ?>"><i class="far fa-file-alt"></i> client </a></span>    
             <a href="Acueille" class="list-group-item mx-5 border-0 merriweather bg-transparent ">
             <span style="<?php if(basename($_SERVER['REQUEST_URI']) == "setting") echo 'color:#90f5d7;'; else echo 'color:white ;' ?>"><i class="fas fa-sliders-h"></i> Acueille</a></span>   
          <form method="POST" action="operation"><button type="submit"  name="logout" class="list-group-item mx-5 border-0 merriweather bg-transparent  mt-4 mb-2 ">
         <span style="color:white ;"><i class="fas fa-sign-out-alt">Logout </i></span>   </button></form>   
        </div>





    </div>