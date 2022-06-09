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
			  <form action="" method="POST">
<h1 class="mt-5 mx-5">Welcome <span>OUMAIMA</span> </h1>
<div class="container mt-5" >
<div class="row gutters mt-5">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">

	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile d-flex flex-column align-items-center">
				<div class="user-avatar">
                    <img src="views\assets\images\client\ulzzangs.jpg" alt="Admin" style="width: 219px; height: 149px; margin-left: 7px;">
				</div>
				<h5 class="fs-3" style="color: #c076b6; margin-top: 41px;">OUMAIMA ABOU EL HAITAM</h5>
				<h6 class="fs-3" style="color: #79316feb;">ouma@gmail.com</h6>
			</div>
			
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 " style="font-size: xx-large; color:#c076b6;">Personal Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="nom" class="fs-5" style="margin-top: 41px;font-weight: 500;">Full Name</label>
					<input type="text" class="form-control" name="nom" value="OUMAIMA" disabled>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="date" class="fs-5" style="font-weight: 500; margin-top:41px;">Signup date</label>
					<input type="text" class="form-control" name ="date"id="date" value="1998:07:09" disabled >
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="lastlogin" class="fs-5" style="font-weight: 500;">last login</label>
					<input type="text" class="form-control" id="lastlogin" name="lastlogin" value="11:12:2021"disabled >
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="email" class="fs-5" style="font-weight: 500;">Email</label>
					<input type="email" class="form-control" id="email" name="email" value="OUMAIMA" disabled>
				</div>
			</div>
		</div>
		
	
	</div>
</div>
</div>
</div>
</div>

</form>
              </div>
				<script src="views/assets/bootstrap.bundle.min.js" ></script>
				<script src="views/assets/js/bootstrap.bundle.min.js" ></script>


            </div>
        </div>
     
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