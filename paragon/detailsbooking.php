<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
    <link rel="stylesheet" href="Css/detailsbooking.css">
</head>

<body>
<!-- header -->
<div class="header">
        <ul>
            <img class="logo" src="Images/N.jpg">
            <li><a href="admindashboard.php">Customer Booking</a></li>
            <li><a href="admincustomermessage.php">Customer Message</a></li>
            <li><a href="">Staffmembers</a></li>
            <li><label for="">Booking Details</label></li>
            <li><a href="">Kitchen Inventory</a></li>
        </ul>
    </div>



    <?php
    include 'db/confiq.php';
    $id = $_REQUEST['bookingid'];

    if (isset($id)) {
        $sqlBookingDetails = "SELECT * FROM customerbooking  WHERE bookingid = '$id';";
        $resultBookingDetails = mysqli_query($conn, $sqlBookingDetails);

        if (mysqli_num_rows($resultBookingDetails) > 0) {
            while ($row = mysqli_fetch_assoc($resultBookingDetails)) {
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
                $telephone = $row['telephone'];
                $arrialdate = $row['arrialdate'];
                $depaturedate = $row['depaturedate'];
                $noguest = $row['noguest'];
                $roomcatageory = $row['roomcatagory'];
                $standerd = $row['standerd'];
                $date = $row['date'];
                $time = $row['time'];
                $message = $row['message'];
            }
        }
    }

    if (isset($id)) {
    ?>
        <div class="details">
            <center>
                <h2>Booking Details</h2>
            </center>
            <div class="row">
                <div class="col">
                    <label for="" id="menu">Booking Id -</label>
                    <label for="" style="margin-left: 3em; font-size: 20px; font-family: 'Times New Roman', Times, serif;"><?php echo $id ?></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="" id="menu">Customer Name -</label>
                    <label for="" style="margin-left: 1em; font-size: 20px; font-family: 'Times New Roman', Times, serif;"><?php echo $firstname ?><?php echo $lastname ?></label>
                </div>
            </div>
            <div class="row">
                <div class="col"><label for="" id="menu">Email -</label>
                    <label for="" style="margin-left: 5em; font-size: 20px; font-family: 'Times New Roman', Times, serif;"><?php echo $email ?></label>
                </div>

            </div>
            <div class="row">
                <div class="col"><label for="" id="menu">Arrial Date -</label>
                    <label for="" style="margin-left: 2.8em; font-size: 20px; font-family: 'Times New Roman', Times, serif;"><?php echo $arrialdate ?></label>
                </div>

            </div>
            <div class="row">
                <div class="col"><label for="" id="menu">Depature Date -</label>
                    <label for="" style="margin-left: 1.5em; font-size: 20px; font-family: 'Times New Roman', Times, serif;"><?php echo $depaturedate ?></label>
                </div>

            </div>
            <div class="row">
                <div class="col"><label for="" id="menu">Telephone -</label>
                    <label for="" style="margin-left: 3.2em; font-size: 20px; font-family: 'Times New Roman', Times, serif;"><?php echo $telephone ?></label>
                </div>

            </div>
            <div class="row">
                <div class="col"><label for="" id="menu">No of guest -</label>
                    <label for="" style="margin-left: 3em; font-size: 20px; font-family: 'Times New Roman', Times, serif;"><?php echo $noguest ?></label>
                </div>

            </div>
            <div class="row">
                <div class="col"><label for="" id="menu">Room catagory -</label>
                    <label for="" style="margin-left: 1.3em; font-size: 20px; font-family: 'Times New Roman', Times, serif;"><?php echo $roomcatageory ?></label>
                </div>

            </div>
            <div class="row">
                <div class="col"><label for="" id="menu">standerd -</label>
                    <label for="" style="margin-left: 4em; font-size: 20px; font-family: 'Times New Roman', Times, serif;"><?php echo $standerd ?></label>
                </div>

            </div>
            <div class="row">
                <div class="col"><label for="" id="menu">Date -</label>
                    <label for="" style="margin-left: 5.3em; font-size: 20px; font-family: 'Times New Roman', Times, serif;"><?php echo $date ?></label>
                </div>

            </div>
            <div class="row">
                <div class="col"><label for="" id="menu">Time -</label>
                    <label for="" style="margin-left: 5em; font-size: 20px; font-family: 'Times New Roman', Times, serif;"><?php echo $time ?></label>
                </div>
            </div>
            <div class="row">
                <div class="col"><label for="" id="menu">Message -</label>
                    <label for="" style="margin-left: 3.5em; font-size: 20px; font-family: 'Times New Roman', Times, serif;"><?php echo $message ?></label>
                </div>
            </div>
            <form action="admindashboard.php" method="post">
                <center><button type="submit" id="closebtn">Close</button></center>
            </form>
        <?php
    }
        ?>
        </div>
        <div class="container" style="margin-top: 60vh;">
            <img src="Images/bg.jpg" alt="" srcset="" style="width: 100%; ">
        </div>
</body>

</html>