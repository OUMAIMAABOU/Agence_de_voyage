<main>
        <div id="page-content-dashboard">
            <div class=" px-0 ">
                
                <div class="container-fluid px-2 pt-2 pe-4">
                    <div class="row mt-5">
                        <div class="table-wrapper mt-5">
                           
                            <div class="table-responsive mt-5">
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
                                        <?php $reservation = ResrvationController::select();
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
                                                                                        
                                               
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                           


                           
                        </div>

           
               
                        <script src="views/assets/js/script.js"></script>





    </main>