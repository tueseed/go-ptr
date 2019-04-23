<?php
 
/*foreach ($_FILES["images"]["error"] as $key => $error) {
  if ($error == UPLOAD_ERR_OK) {
    $name = $_FILES["images"]["name"][$key];
    move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "uploads/" . $_FILES['images']['name'][$key]);
  }
}
move_uploaded_file( $_FILES["images"]["tmp_name"], "images/" . basename($_FILES['images']['name']));
$file = $_FILES["images"]["tmp_name"];
 
echo "<h2>".$file."</h2>";*/
if(!empty($_FILES['images']))
{
  $path = "images/";
  $path = $path . basename( $_FILES['images']['name']);
  if(move_uploaded_file($_FILES['images']['tmp_name'], $path)) {
    echo "The file ".  basename( $_FILES['images']['name']). 
    " has been uploaded";
  } else{
      echo "There was an error uploading the file, please try again!";
  }
}