<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pay</title>





</head>

<body class="row">

  <main>
    <div class="d-flex" id="dashboard">




      <div id="page-content-dashboard">

        <div class=" px-0 ">
          <div class="d-flex justify-content-between border-bottom">
            <?php include('views/includes/sidebar.php'); ?>

          </div>





          <div class="container-fluid px-5 pt-3">
            <?php include('./views/includes/header.php'); ?>

            <div class="row">
              <div class="table-wrapper">
                <div class="container-fluid px-4">
                  <div class="row my-2 d-flex justify-content-center">
                    <div class="col-lg-3 col-md-5 mb-4 ">
                      <div class="p-1 flex-column  shadow-sm d-flex justify-content-around align-items-center bg-light" style="height: 300px;">
                        <div>
                          <p class="fs-4 text-center Secondary-text">Partenariat</p>
                          <hr>
                          </hr>
                        </div>
                        <h3 class="fs-5"><canvas id="myChart" style="width:100%;max-width:700px ;"></canvas> </canvas>
                        </h3>
                      </div>
                    </div>

                    <div class="col-lg-3  col-md-5  mb-4 ">
                      <div class="p-1 flex-column  shadow-sm d-flex justify-content-around align-items-center bg-light" style="height: 300px;">
                        <div>
                          <p class="fs-4 text-center Secondary-text">Client</p>
                          <hr>
                          </hr>
                          <h3 class="fs-5"><canvas id="Chart" style="width:100%;max-width:700px ;"></canvas> </canvas>

                        </div>
                      </div>
                    </div>

                    <div class=" col-lg-3  col-md-5  mb-4">
                      <div class="p-1 flex-column  shadow-sm d-flex justify-content-around align-items-center bg-light" style="height: 300px;">
                        <div>
                          <p class="fs-4 text-center  Secondary-text">Genre</p>
                          <hr>
                          </hr>
                          <h3 class="fs-5"><canvas id="myChart1" style="width:100%;max-width:700px ;"></canvas> </canvas>

                            <hr>
                            </hr>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-5  mb-4">
                      <div class="p-1 text-center flex-column  shadow-sm d-flex justify-content-around align-items-center bg-light" style="height: 300px">
                        <div>
                          <p class="fs-4">Réservation</p>
                          <hr>
                          </hr>
                          <h3 class="fs-5"><canvas id="Reservation" style="width:100%;max-width:700px ;"></canvas> </canvas>

                            <hr>
                            </hr>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class=" col-12">
                    <div class="p-1 flex-column  shadow-sm d-flex justify-content-around align-items-center bg-light" style="height: 400px;">
                      <div>
                        <p class="fs-4 text-center  Secondary-text">Voyage</p>
                        <hr>
                        </hr>


                        <h3 class="fs-5"><canvas id="myChart3" style="width:100%;max-width:700px ;"></canvas> </canvas>

                          <hr>
                          </hr>
                      </div>
                    </div>
                  </div>


                </div>
                <script src="views/assets/js/bootstrap.bundle.min.js"></script>




              </div>

            </div>




            <div class="modal-footer">

            </div>
          </div>
        </div>
      </div>







  </main>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="views/assets/js/script.js"></script>
<script>
  var xValues = ["Hotel", "Transport",];

  var yValues = [<?= count(HotelController::select());?>, <?= count(TransportController::select());?>, 0];
  var barColors = ["red", "green", ];
  new Chart("myChart", {
    type: "bar",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      legend: {
        display: false
      },
     
    }
  });
</script>
<script>
  var xValues = ["Etudiant", "Professeur", "Class"];

  var yValues = [3, 1, 4, 0];
  var barColors = ["red", "green", "blue"];
  new Chart("myChart1", {
    type: "bar",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      legend: {
        display: false
      },
      title: {
        display: true,
        text: "Ecole"
      }
    }
  });
</script>
<script>
  var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
  var yValues = [55, 49, 44, 24, 15];
  var barColors = [
    "#b91d47",
    "#00aba9",
    "#2b5797",
    "#e8c3b9",
    "#1e7145"
  ];

  new Chart("myChart3", {
    type: "doughnut",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      title: {
        display: true,
        text: "World Wide Wine Production 2018"
      }
    }
  });
  </script>
  <script>
var xValues = ["Client", "Agent", "Admin"];
var yValues = [<?=count(ClientController::select())?>, 49, 44];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",

];

new Chart("Chart", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
 
});
</script>
<?php $voyage = new VoyageController();?>
                    
<script>
    var xValues = ["Voyage", "reservation"];
  var yValues = [<?=  $voyage->Afficher();?>, <?= ResrvationController::select()?>, 0];
  var barColors = [
    "#b91d47",
    "#00aba9",
    "#2b5797",
    
  ];
  new Chart("Reservation", {
  
    type: "doughnut",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      title: {
        display: true,
        text: "World Wide Wine Production 2018"
      }
    }
  });
</script>