<?php
 
/*foreach ($_FILES["images"]["error"] as $key => $error) {
  if ($error == UPLOAD_ERR_OK) {
    $name = $_FILES["images"]["name"][$key];
    move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "uploads/" . $_FILES['images']['name'][$key]);
  }
}*/
move_uploaded_file( $_FILES["images"]["tmp_name"], "images/" . basename($_FILES['images']['name']));
$file = $_FILES["images"]["tmp_name"];
 
echo "<h2>".$file."</h2>";