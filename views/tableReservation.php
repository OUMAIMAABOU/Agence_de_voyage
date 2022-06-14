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
                    <?php include('views/includes/sidebar.php'); ?>
                </div>
                <div class="container-fluid px-2 pt-2 pe-4">
                    <?php include('./views/includes/header.php'); ?>
                    <div class="row">
                        <div class="table-wrapper">
                            <div class="d-flex align-items-baseline  justify-content-between">
                                <form class="col-sm-6 input-group mb-3 mt-5" method="POST" style="max-width:500px;">
                                </form>
                                <a href="#addetud" class="btn btn-order  btn-lg fs-3 mb-1 mx-4 rounded-3 merriweather" data-bs-toggle="modal" data-bs-target="#exampleModal"> + </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table align-middle">
                                    <thead>

                                        <tr class="bg-green merriweather " style=" height: 53px;">

                                            <th>nom Client</th>
                                            <th>Destination</th>
                                            <th>Email</th>
                                            <th>Telephone</th>
                                            <th>Nomber Adulte</th>
                                            <th>Nomber Enfant</th>
                                            <th>Transport</th>
                                            <th>Local</th>
                                            <th>Date de depart</th>
                                            <th>Date de retour</th>
                                            <th>Date de reservation</th>



                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-bold" id="myTable">
                                        <?php $reservation = new ResrvationController();
                                        $reservation = $reservation->select();
                                        foreach ($reservation as $x => $reservation) { ?>
                                            <tr>
                                                <td hidden data-target="id"><?= $reservation[0] ?></td>
                                                <td><?= $x + 1 ?></td>
                                                <td data-target="image"><?= $reservation[1] ?></td>
                                                <td data-target="nom complet"> <?= $reservation[2] ?> </td>
                                                <td data-target="Email"><?= $reservation[3] ?></td>
                                                <td data-target="Genre"><?= $reservation[4] ?></td>
                                                <td data-target="Type"><?= $reservation[5] ?></td>
                                                <td data-target="password"><?= $reservation[6] ?></td>
                                                <td data-target="Phone"><?= $reservation[7] ?></td>
                                                <td class="d-flex  align-items-start">
                                                    <a href="#" class="btn btn-outline-primary btn-lg fw-bold update" style="  color:primary;" data-bs-toggle="modal" data-bs-target="#myModel">Accepte </a>
                                                    <form action="operation" method="POST" class="confirm-submit" data-confirm-msg="etes vous sure de vouloir continuez ?">
                                                        <button type="submit" name="deletparent" class="btn btn-outline-danger" style=" margin-left: 10PX;" data-toggle="modal"><input type="text" hidden name="id" value="<?= $reservation['id'] ?>">refuse</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                           


                           
                        </div>

           
               
                        <script src="views/assets/js/script.js"></script>





    </main>

   


</body>

</html>