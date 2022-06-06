<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Filterable Table</h2>
  <p>Type something in the input field to search the table for first names, last names or emails:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="bg-green merriweather " style=" height: 53px;">
    <thead>
    <th>Matricule</th>
    <th>Nom complet</th>
    <th>Genre</th>
    <th>job</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Options</th>
    </tr>
    </thead>
   
  <tbody  class="fw-bold" id="myTable" >
                  
                  <tr>
                     <td hidden data-target="id"> </td>
                      <td></td>
                      <td data-target="nomcomplet"> ouma </td>
                      <td data-target="genre">aa</td>
                     
                      <td data-target="job">ano</td>
                      <td data-target="adrs">111</td>
                      <td data-target="phone">3232</td>
                      <td class="d-flex  align-items-start">
                      <a href="#" class="btn btn-outline-primary btn-lg fw-bold update" style="  color:primary;" data-bs-toggle="modal" data-bs-target="#myModel"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                      <form action="operation" method="POST" ><button type="submit" name ="deletparent" class="btn btn-outline-danger " style=" margin-left: 10PX;" data-toggle="modal"><input type="text" hidden name="Matricule" value="<?= $rows['Matricule']?>"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></button></form>    
                      </td>
                  </tr>
              
                  <tr>
                     <td hidden data-target="id"> </td>
                      <td></td>
                      <td data-target="nomcomplet"> ama </td>
                      <td data-target="genre">test</td>
                     
                      <td data-target="job">ano</td>
                      <td data-target="adrs">222</td>
                      <td data-target="phone">000</td>
                      <td class="d-flex  align-items-start">
                      <a href="#" class="btn btn-outline-primary btn-lg fw-bold update" style="  color:primary;" data-bs-toggle="modal" data-bs-target="#myModel"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                      <form action="operation" method="POST" ><button type="submit" name ="deletparent" class="btn btn-outline-danger " style=" margin-left: 10PX;" data-toggle="modal"><input type="text" hidden name="Matricule" value="<?= $rows['Matricule']?>"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></button></form>    
                      </td>
                  </tr>                     

              </tbody>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>