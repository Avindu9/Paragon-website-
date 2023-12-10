<?php
// session_start();
include 'db/confiq.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/bookingrequest.css">
    <title>BookingRequest</title>
    <style>
        #main {
            width: 46%;
        }
    </style>
</head>

<body>
    <div class="header">
        <ul>
            <img class="logo" src="Images/N.jpg">
            <li><a href="Index.html">Home</a></li>
            <li><a href="ayurvedacure.php">Ayurveda Crue</a></li>
            <li><a href="srilanka.php">Srilanka</a></li>
            <li><a href="">News</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><label for="">Booking Request</label></li>
        </ul>
    </div>


    <!-- conatiner -->
    <div class="a">
        <img src="Images/bookingrequest.jpg" style="width: 100%;">
    </div>

    <!-- text-form -->

    <center>
        <div class="container">
            <form action="addbookingdetails.php" method="post">
                <div class="text">
                    <h1>WE LOOK FORWARD</h1>`
                    <h1 style="margin-top: -1em;">HEARING FROM YOU</h1>
                    <hr>
                    <h3>Your inquiry</h3>
                    <input type="text" name="fname" id="" placeholder="First Name" style="width: 40%;" required>
                    <input type="text" name="lname" placeholder="Last Name" style="width: 40%;" required>
                    <input type="text" name="email" id="" placeholder="Email" style="width: 40%;" required>
                    <input type="text" name="phone" placeholder="Phone" style="width: 40%;" required>
                    <input type="date" name="arrialdate" placeholder="Arrial Date" style="width: 19%;">
                    <input type="date" name="depaturedate" placeholder="Depature Date" style="width: 20%;">
                    <input type="number" name="numofguest" id="" placeholder="No Guest" style="width: 20%;">
                    <select name="roomcatagory" id="" style="width: 20%; height: 2.5em;">
                        <option value="Room Catagory">Room Catagory</option>
                        <option value="Standerd Room">Standerd Room</option>
                        <option value="Rooftop Room">Rooftop Room</option>
                        <option value="Junior suite">Junior suite</option>
                    </select>
                    <select name="standerd" id="" style="width: 50%; height: 2.5em; margin-bottom: 0.5em;">
                        <option value="">Have an Standerd at Ayurveda Peragon</option>
                        <option value="yes">yes</option>
                        <option value="no">no</option>
                    </select>
                    <textarea name="message" style="width: 82%; height: 10em; margin-bottom: 0.5em;">Your Massage</textarea><br>

                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style=" width: 2%;">
                    <label for="vehicle1" style="font-size: 17px;text-align: center;">I agree that my data will be saved in the course of my request. you can more
                        information in our <a href="">privacy policy & Theme of use</a></label>
                    <input type="hidden" name="time" id="time">
                    <input type="hidden" name="date" id="date">
                    <div class="btn">
                        <div class="btn">
                            <button class="button button1" type="submit">Request Booking</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </center>
    <div class="a">
        <img src="Images/booking.jpg" style="width: 100%;">
    </div>


    <!-- contact -->

    <center>
        <form action="addcutomercontact.php" method="post">
            <div class="contact">
                <h2>Contact us</h2>
                <input id="main" name="name" type="text" placeholder="First Name,Last Name" required>
                <input id="main" name="Email" type="text" placeholder="Email" style="margin-left: 1em;" required>
                <textarea name="cutomermessage" required>Your Massage</textarea>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1">I agree that my data will be saved in the course of my request. you can more
                    information in our <a href="">privacy policy & Theme of use</a></label>
                <input type="hidden" name="time1" id="time1">
                <input type="hidden" name="date1" id="date1">
                <div class="btn">
                    <button id="subbtn" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </center>

    <!-- footer -->
    <div class="ft" style="background-color: #fadfa0;">
        <div class="in">
            <h3>Paragon</h3>
            <img src="Images/fb.jpg" alt="Fb" srcset="">
            <img src="Images/int.jpg" alt="Int" srcset="">
        </div>
        <div class="m">
            <div class="k">
                <h4>CONTACT</h4>
                <li>1002, Galle-Matara Road</li>
                <li>80615 Talpe, Sri Lanka</li>
                <li>T +94 91 228 3461</li>
                <a href="">info@paragonsrilanka.com</a>
            </div>
        </div>
        <div class="n">
            <div class="k">
                <h4>AYURVEDA PARAGON</h4>
                <li>Hotel</li>
                <li>Ayurveda health center</li>
                <li>Course of your cure</li>
                <li>Treatment methods</li>
                <li>Prices & Booking</li>
            </div>
        </div>
        <div class="o">
            <div class="k">
                <h4>NEWSLETTER</h4>
                <li>Don't miss a thing! Info, news and offers</li>
                <li>directly from Sri Lanka.</li>
            </div>
            <div class="oo">
                <input type="text" placeholder="Email">
                <button class="ooo">Sign in</button>
            </div>
        </div>
    </div>
</body>
<script>
    const date = new Date();

    let day = date.getDate();
    let month = date.getMonth() + 1;
    let year = date.getFullYear();

    let hour = date.getHours();
    let min = date.getMinutes();
    let sec = date.getSeconds();

    // This arrangement can be altered based on how we want the date's format to appear.
    let currentDate = `${year}-${month}-${day}`;
    let currenttime = `${hour}:${min}:${sec}`;

    document.getElementById('time').value = currenttime;
    document.getElementById('date').value = currentDate;

    document.getElementById('time1').value = currenttime;
    document.getElementById('date1').value = currentDate;
</script>

</html>