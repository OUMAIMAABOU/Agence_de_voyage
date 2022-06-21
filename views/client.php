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

                <div class="table-wrapper mt-5">
                 <div class="d-flex align-items-baseline  justify-content-between">
                   
                    </div>
                    <div class="table-responsive mt-5">
                    <table class="table table-striped table align-middle" id="myTable">
                    <thead>
                     
                        <tr class="bg-green merriweather " style=" height: 53px;">
                           
                            <th></th>
                            <th>Nom complet</th>
                            <th>CIN</th>
                            <th>Email</th>
                            <th>Genre</th>
                            <th>Phone</th>
                            <th>Adresse</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody  class="fw-bold" >
                        <?php  $admines=ClientController::select();foreach($admines as $x => $admine){?>
                            <tr>
                           <!-- <?php echo $_SESSION['role'];?> -->
                            <td hidden class="id"><?= $admine['id'] ?></td>
                                <td><?= $x+1?></td>
                                <td class="nom"> <?= $admine['name'] ?> </td>
                                <td class="CIN"> <?= $admine['CIN'] ?> </td>
                                <td class="Email"><?= $admine['email'] ?></td>
                                <td class="Genre"><?= $admine['genre'] ?></td>
                                <td class="Phone"><?= $admine['Phone'] ?></td>
                                <td class="adres"><?= $admine['adresse'] ?></td>
                                <td class="d-flex  align-items-start">
                                <form action="operation" method="POST" class="confirm-submit" data-confirm-msg="etes vous sure de vouloir continuez ?" >
                                    <button type="submit" name ="deleclient" class="btn btn-outline-danger" 
                                    
                                style=" margin-left: 10PX;" data-toggle="modal"><input type="text" hidden name="id" value="<?= $admine['id']?>"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></button></form>    
                                </td>
                            </tr>
                             <?php }?>
                    </tbody>
                    </table>
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

