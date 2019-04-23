<?php
    $obj_file = scandir("./images/");
    foreach ($obj_file as $value) {
        echo "file : $value <br>";
    }