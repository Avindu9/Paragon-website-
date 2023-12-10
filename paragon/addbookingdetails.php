<?php

include 'db/confiq.php';

$firstname = $_REQUEST['fname'];
$lastname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$telephone = $_REQUEST['phone'];
$arrialdate = $_REQUEST['arrialdate'];
$depaturedate = $_REQUEST['depaturedate'];
$numofguest = $_REQUEST['numofguest'];
$roomcatagory = $_REQUEST['roomcatagory'];
$standerd = $_REQUEST['standerd'];
$message = $_REQUEST['message'];
$time = $_REQUEST['time'];
$date = $_REQUEST['date'];

$sql = "INSERT INTO customerbooking (`firstname`, `lastname`, `email`, `telephone`, `arrialdate`, `depaturedate`, `time`, `date`, `noguest`, `roomcatagory`, `standerd`, `message`) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$telephone."', '".$arrialdate."', '".$depaturedate."', '".$time."', '".$date."', '".$numofguest."', '".$roomcatagory."', '".$standerd."', '".$message."');";

$result = mysqli_query($conn,$sql);
if($result){
    header('location: bookingrequest.php');
}