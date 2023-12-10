<?php
    include 'db/confiq.php';

    $bookingId = $_REQUEST['bookingID'];
    $date = $_REQUEST['date'];
    $time = $_REQUEST['time'];

    $sql = "UPDATE customerbooking SET `acceptation` = 'canceled' WHERE (`bookingid` = '$bookingId');";
    // echo $sql;
    $result = mysqli_query($conn, $sql);

    $sql1 = "INSERT INTO bookingstatus (`status`, `date`, `time`, `bookingid`) VALUES ('canceled', '".$date."', '".$time."', '".$bookingId."');";
    $result1 = mysqli_query($conn,$sql1);

    if($result1){
                header('location: admindashboard.php');
    }else{
        
    }
?>