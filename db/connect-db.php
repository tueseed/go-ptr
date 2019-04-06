<?php
$host = 'us-cdbr-iron-east-03.cleardb.net';
$user ='b502c18a49d64c';
$pass = '662852fa';
$db = 'heroku_ff91becb039f0b6';
$conn = new mysqli($host,$user,$pass,$db);
mysqli_query($conn, "SET NAMES utf8");


?>