<?php
   if(isset($_FILES['uploadFile'])){
     move_uploaded_file($_FILES['uploadFile']['tmp_name'],"upload/". $_FILES['uploadFile']['name']);
     echo "Success";
   }else{
     echo "Choose file!";
   }
?>
<html>
   <body>
      <form action="" method="POST" enctype="multipart/form-data">
        <label for="uploadFileId">Choose your file</label>
         <input type="file" name="uploadFile" id="uploadFileId">
         <input type="submit" value="upload">
      </form>
   </body>
</html>