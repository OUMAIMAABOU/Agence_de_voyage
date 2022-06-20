<main>
        <div id="page-content-dashboard">
            <div class=" px-0 ">
                
                <div class="container-fluid px-2 pt-2 pe-4">
                    <div class="row mt-5">
                        <div class="table-wrapper mt-5">
                           
                            <div class="table-responsive mt-5">
                                <table class="table table-striped table align-middle">
                                    <thead>

                                        <tr class=" merriweather " style=" height: 53px;background: #93f7da">
                                           <th>#</th>
                                            <th>Destination</th>
                                            <th>Nomber Adulte</th>
                                            <th>Nomber Enfant</th>
                                            <th>Prix par personne</th>
                                            <th>Total</th>
                                            <th>Transport</th>
                                            <th>Local</th>
                                            <th>Date de depart</th>
                                            <th>Date de retour</th>
                                            <th>Date de reservation</th>
                                            <th>Etat</th>
                                            <th>Annule</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-bold" id="myTable">
                                        <?php $reservation = ResrvationController::select();
                                        foreach ($reservation as $x => $reservation) { ?>
                                            <tr>
                                                <td hidden class="id"><?= $reservation[0] ?></td>
                                                <td><?= $x + 1 ?></td>
                                                <td ><?= $reservation[15] ?></td>
                                                <td ><?= $reservation[1] ?></td>
                                                <td><?= $reservation[2] ?></td>
                                                <td><?= $reservation['prix']?></td>
                                                <td><?= ($reservation['prix']* $reservation[1])+(($reservation['prix']/2)*$reservation[2])?></td>
                                                <td ><?= $reservation['transport'] ?></td>
                                                <td > <?= $reservation['local'] ?> </td>
                                                <td ><?= $reservation[6] ?></td>
                                                <td><?= $reservation[7] ?></td>
                                                <td ><?= $reservation[9] ?></td>
                                                <td ><?= $reservation[10] ?></td>
                                            
                                               <td>  <form action="operation" method="POST" class="confirm-submit" data-confirm-msg="etes vous sure de vouloir continuez ?">
                                               <?php  if($reservation[10]=='en attend'){
                                                echo "<button type='submit' name='Annuler' class='btn btn-outline-info' ><input type='text' hidden name='id' value=' $reservation[0]'>Annuler</button>"; }else
                                                echo '<img src ="views\assets\img\pngwing.com.png" style="width: 29px;">'?>                                         
                                             
                                            </td> 
                                             
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                           


                           
                        </div>

           
               
                        <script src="views/assets/js/script.js"></script>





    </main>