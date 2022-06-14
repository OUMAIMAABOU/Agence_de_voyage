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
                    <div class="row mt-5">
                        <div class="table-wrapper mt-5">
                           
                            <div class="table-responsive">
                                <table class="table table-striped table align-middle">
                                    <thead>

                                        <tr class="bg-green merriweather " style=" height: 53px;">
                                           <th>#</th>
                                            <th>nom Client</th>
                                            <th>Adresse</th>
                                            <th>Destination</th>
                                            <th>Email</th>
                                            <th>Nomber Adulte</th>
                                            <th>Nomber Enfant</th>
                                            <th>Transport</th>
                                            <th>Local</th>
                                            <th>Date de depart</th>
                                            <th>Date de retour</th>
                                            <th>Date de reservation</th>
                                            <th>Etat</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-bold" id="myTable">
                                        <?php $reservation = new ResrvationController();
                                        $reservation = $reservation->select();
                                        foreach ($reservation as $x => $reservation) { ?>
                                            <tr>
                                                <td hidden class="id"><?= $reservation[0] ?></td>
                                                <td><?= $x + 1 ?></td>
                                                <td > <?= $reservation[11] ?> </td>
                                                <td > <?= $reservation[12] ?> </td>
                                                <td ><?= $reservation[15] ?></td>
                                                <td><?= $reservation[13] ?></td>
                                                <td ><?= $reservation[1] ?></td>
                                                <td><?= $reservation[2] ?></td>
                                                <td ><?= $reservation[4] ?></td>
                                                <td > <?= $reservation[5] ?> </td>
                                                <td ><?= $reservation[6] ?></td>
                                                <td><?= $reservation[7] ?></td>
                                                <td ><?= $reservation[9] ?></td>
                                                <td ><?= $reservation[10] ?></td>
                                                                                        
                                                <td class="d-flex  align-items-start">
                                                    <form action="operation" method="POST" class="confirm-submit" data-confirm-msg="etes vous sure de vouloir continuez ?">
                                                    <button type="submit" name="Refuse" class="btn btn-outline-danger" ><input type="text" hidden name="id" value="<?= $reservation['id'] ?>">Refuse</button>
                                                    <button type="submit" name="Accepte" class="btn btn-outline-primary" ><input type="text" hidden name="id" value="<?= $reservation['id'] ?>">Accepte</button>
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