<?php
   if(isset($_FILES['image'])){
      $file_name = $_FILES['image']['name'];
      $file_tmp =$_FILES['image']['tmp_name'];
      move_uploaded_file($file_tmp,"views/assets/img/avatar/".$file_name);   

   }
   
?>
<html>
   <body>
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>