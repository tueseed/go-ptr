<?php
 
/*foreach ($_FILES["images"]["error"] as $key => $error) {
  if ($error == UPLOAD_ERR_OK) {
    $name = $_FILES["images"]["name"][$key];
    move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "uploads/" . $_FILES['images']['name'][$key]);
  }
}*/
$filename  = $_FILES['images']['name'];
$ext = pathinfo($filename,PATHINFO_EXTENSION);
$target_path = "./images/". basename($_FILES['images']['name']).".".$ext;
$result = @move_uploaded_file( $_FILES['images']['tmp_name'], $target_path);
$file = $_FILES["images"]["name"];
echo "<h2>".$file."</h2>";
