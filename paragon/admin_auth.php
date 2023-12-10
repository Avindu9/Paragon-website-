<?php
// session_start();
include 'db/confiq.php';

$username = $_REQUEST['uname'];
$password = $_REQUEST['password'];

$sql = 'SELECT * FROM management WHERE admin_name = "'.$username.'";';


$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['admin_name'];
        $pword = $row['password'];

    }

    if($username==$name && $password==$pword){
        header("Location: admindashboard.php?");
    }else{
        header("Location: addminlogin.php?");
    }

}else{
    header("Location: addminlogin.php?");
}
