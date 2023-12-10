<?php
    include 'db/confiq.php';

    $bookingId = $_REQUEST['Bookingid'];

    $sql = "DELETE FROM customercontact WHERE (`idcustomercontact` = '".$bookingId."');";
    $result = mysqli_query($conn, $sql);

    if($result){
                header('location: admincustomermessage.php');
    }else{
        
    }
?>