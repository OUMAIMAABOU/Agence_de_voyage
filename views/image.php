<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
    //   $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      echo $_FILES['image']['tmp_name'];
      echo $file_size =$_FILES['image']['size'];

      
         move_uploaded_file($file_tmp,"views/assets/img/avatar".$file_name);
         echo "Success";
   
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