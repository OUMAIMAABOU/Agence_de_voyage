

  var el = document.getElementById("dashboard");
  var toggleButton = document.getElementById("menu-toggle");

  toggleButton.onclick = function () {
      el.classList.toggle("toggled");
  };
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });



 
    // <?php $femme = $stati->GenreprofesseursF()+$stati->GenreEtudiantF();
    //        $Homme = $stati->GenreprofesseursH()+$stati->GenreEtudiantH() ?>
var xValues = ["Femme","Homme"];
var yValues = [1,3];
var colors=['red','orange'];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: colors,
      borderColor: colors,
      data: yValues
    }]
  },
});
new Chart("myChart1", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: colors,
      borderColor: colors,
      data: yValues
    }]
  },
});

        var el = document.getElementById("dashboard");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
   

