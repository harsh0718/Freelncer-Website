<?php
if(isset($_FILES['img'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

   echo $file_name = $_FILES['img']['name'];echo "<br>";
   echo $file_type = $_FILES['img']['type'];echo "<br>";
   echo $file_temp_name = $_FILES['img']['tmp_name'];echo "<br>";
   echo $file_size = $_FILES['img']['size'];echo "<br>";

   move_uploaded_file($file_temp_name,"imgp/".$file_name);
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    
    <input type="file" name="img"><br><br>
    <input type="submit" value="submitt">

    </form>
</body>
</html>

