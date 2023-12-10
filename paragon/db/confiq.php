<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "paragon";

    $conn = new mysqli($servername,$username,$password,$dbname);
    
    if($conn->error){
        die("Connection Error - ".$conn->connect_error);
    }

?>