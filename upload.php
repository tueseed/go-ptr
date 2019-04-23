<?php
 
/*foreach ($_FILES["images"]["error"] as $key => $error) {
  if ($error == UPLOAD_ERR_OK) {
    $name = $_FILES["images"]["name"][$key];
    move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "uploads/" . $_FILES['images']['name'][$key]);
  }
}*/
$target_path = "./images/{$_FILES['images']['name']}";
$result = move_uploaded_file( $_FILES['images']['tmp_name'], $target_path);
$file = $_FILES["images"]["name"];
echo "<img src='$target_path'/>";
