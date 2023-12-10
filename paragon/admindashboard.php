<?php

include 'db/confiq.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admindashboard</title>
    <link rel="stylesheet" href="Css/admindashboard.css">
    <style>
        .table-flow {
            height: 80vh;
            overflow-y: scroll;
        }

        .table-btn {
            width: 80%;
            height: 2em;
            cursor: pointer;
            color: #fff;
            border-radius: 5px;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            font-size: 16px;
        }

        .table-btn:hover {
            background-color: #fff;
            color: black;
        }


    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>

<body>
    <div class="header">
        <ul>
            <img class="logo" src="Images/N.jpg">
            <li><label for="">Customer Booking</label></li>
            <li><a href="admincustomermessage.php">Customer Message</a></li>
            <li><a href="">Staffmembers</a></li>
            <li><a href="">Booking Details</a></li>
            <li><a href="">Kitchen Inventory</a></li>
        </ul>
    </div>
    <!-- table customer messages -->
    <section id="tab-history" class="tab-history">
        <h2 style="margin-left: 1em;margin-top: 1em; color: #2e3047;">Customer Booking</h2>

        <center>
            <div class="table-flow">
                <table class="table" style="width:97vw;">
                    <thead class="table" style="background-color:#2e3047; color: #fff;">
                        <tr>
                            <th scope="col" style="width: 2%; height: 2em;">ID</th>
                            <th scope="col" style="width: 8%;">Customer Name</th>
                            <th scope="col" style="width: 5%;">Email</th>
                            <th scope="col" style="width: 5%;">Arrial Date</th>
                            <th scope="col" style="width: 5%;">Depature Date</th>
                            <th scope="col" style="width: 5%;">Accept</th>
                            <th scope="col" style="width: 5%;">Cancel</th>
                            <th scope="col" style="width: 5%;">Details</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        include 'db/confiq.php';
                        // $bookingId = $_REQUEST['bookingId'];
                        $i = 0;

                        $sql = "SELECT * FROM customerbooking WHERE acceptation = 'waiting';";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $i++;

                                $id = $row['bookingid'];
                                $fname = $row['firstname'];
                                $lname = $row['lastname'];
                                $email = $row['email'];
                                $arrialdate = $row['arrialdate'];
                                $depaturedate = $row['depaturedate'];
                        ?>

                                <tr style="height: 2em; font-size: 20px; background-color: #fadfa0;">
                                    <th scope="row"><?php echo $id ?></th>
                                    <td><?php echo $fname ?> <?php echo $lname ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><?php echo $arrialdate ?></td>
                                    <td><?php echo $depaturedate ?></td>
                                    <form action="bookingacceptation.php" method="post">
                                        <td>
                                            <center><button class="table-btn" style="background-color: blue;">Accept</button></center>
                                        </td>
                                        <input type="hidden" name="date" id="date">
                                        <input type="hidden" name="time" id="time">
                                        <input type="hidden" name="bookingID" value="<?php echo $id ?>">
                                    </form>
                                    <form action="cancelbooking.php" method="post">
                                        <td>
                                            <center><button class="table-btn" style="background-color: red;">Cancel</button></center>
                                            <input type="hidden" name="date" id="date">
                                            <input type="hidden" name="time" id="time">
                                            <input type="hidden" name="bookingID" value="<?php echo $id ?>">
                                        </td>
                                    </form>
                                    <form action="detailsbooking.php" method="post">
                                        <td>
                                            <center><button type="submit" class="table-btn" style="background-color: green;">Details</button></center>
                                            <input type="hidden" name="bookingid" value="<?php echo $id ?>">
                                        </td>
                                    </form>
                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </center>
    </section>
</body>
<script>
    // date & time
    n = new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    hh = n.getHours();
    mm = n.getMinutes();
    ss = n.getSeconds();

    document.getElementById("date").value = y + "-" + m + "-" + d;
    document.getElementById("time").value = hh + ":" + mm + ":" + ss;
</script>

</html>