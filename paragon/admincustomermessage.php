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
            background-color: red;
        }

        .table-btn:hover {
            /* background-color: #fff; */
            color: black;
        }
    </style>
</head>

<body>
    <div class="header">
        <ul>
            <img class="logo" src="Images/N.jpg">
            <li><a href="admindashboard.php">Customer Booking</a></li>
            <li><label for="">Customer Message</label></li>
            <li><a href="">Staffmembers</a></li>
            <li><a href="">Booking Details</a></li>
            <li><a href="">Kitchen Inventory</a></li>
        </ul>
    </div>
    <!-- table customer messages -->
    <section id="tab-history" class="tab-history">
        <h2 style="margin-left: 1em;margin-top: 1em; color: #2e3047;">Customer Messages</h2>

        <center>
            <div class="table-flow">
                <table class="table" style="width:95vw;">
                    <thead class="table" style="background-color:#2e3047; color: #fff;">
                        <tr>
                            <th scope="col" style="width: 5%; height: 2em;">ID</th>
                            <th scope="col" style="width: 10%;">Customer Name</th>
                            <th scope="col" style="width: 25%;">Email</th>
                            <th scope="col" style="width: 10%;">Date</th>
                            <th scope="col" style="width: 10%;">Time</th>
                            <th scope="col" style="width: 20%;">Message</th>
                            <th scope="col" style="width: 10%;">Delete</th>

                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        include 'db/confiq.php';
                        // $bookingId = $_REQUEST['bookingId'];
                        $i = 0;

                        $sql = "SELECT * FROM customercontact;";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $i++;

                                $id = $row['idcustomercontact'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $date = $row['date'];
                                $time = $row['time'];
                                $message = $row['message'];

                        ?>

                                <tr style="height: 1.5em; font-size: 20px; background-color: #fadfa0;">
                                    <th scope="row"><?php echo $id ?></th>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><?php echo $date ?></td>
                                    <td><?php echo $time ?></td>
                                    <td><?php echo $message ?></td>
                                    <form action="deletecustomermessage.php" method="post">
                                        <td>
                                            <center><Button class="table-btn">Delete</Button></center>
                                            <input type="hidden" name="Bookingid" value="<?php echo $id ?>">
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

</html>