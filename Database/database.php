<?php
    $alert   = "<p style ='color: red;'>Connected to database</p>";
    $connect = new mysqli("localhost", "root", "", "user_info");
    if($connect->connect_error){
        die("Cannot connect to database!" . $connect->connect_error);
    }
    else{
        echo $alert;       
    }
?>