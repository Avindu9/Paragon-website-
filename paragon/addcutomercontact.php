<?php
include 'db/confiq.php';

$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$cutomermessage = $_REQUEST['cutomermessage'];
$time = $_REQUEST['time1'];
$date = $_REQUEST['date1'];

$sql = "INSERT INTO customercontact (`name`, `email`, `message`, `date`, `time`) VALUES ('".$name."', '".$email."', '".$cutomermessage."', '".$date."', '".$time."');";
$result = mysqli_query($conn,$sql);
if($result){
    header('location: index.html');
}