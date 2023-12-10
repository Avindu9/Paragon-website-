<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/contact.css">
    <title>Contact</title>
    <style>
        #main{
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
            <li><label for="">Contact</label></li>
            <li><a href="bookingrequest.php">Booking Request</a></li>
        </ul>
    </div>
    <!-- container -->

    <div class="a">
        <img src="Images/contact.jpg" style="width: 100%;">
    </div>
    <div class="main-contact">
        <div class="aa">
            <div class="aaa">
                <h1>CONTACT</h1>
                <h1 style="margin-top: -0.7em;"> WE ARE THERE FOR YOU!</h1>
                <hr>

                <li>Do you have any questions about your Ayurveda cure at our hotel or would you like.</li>
                <li>to have a non-binding offer?</li>

                <li> We are here for you! You can reach us by email <a href="">info@paragonsrilanka.com</a> </li>
                <li> or via phone: +94 91 22 831-03/-04/-05. </li>
            </div>
        </div>
        <div class="bb">
            <div class="q">
                <h1>CONTACT DETAILS</h1>
                <hr>
                <div class="qq">
                    <li>Ayurveda Paragon (Pvt.) Ltd.</li>
                    <li>1002, Galle-Matara Road</li>
                    <li>80615 Talpe, Sri Lanka</li>
                    <a href="">info@paragonsrilanka.com</a>

                    <li style="margin-top: 3em;">Front Desk</li>
                    <li>T +94 91 22 83 461</li>

                    <img style="margin-top: 1em;" src="Images/fb.jpg" alt="fb" srcset="">
                    <img src="Images/int.jpg" alt="int" srcset="">
                </div>
            </div>
            <div class="q">
                <div class="q">
                    <h2>FOR RESERVATION</h2>
                    <hr>
                    <div class="qq">
                        <li>T +94 91 22 831-03/-04/-05</li>
                        <a href="">info@paragonsrilanka.com</a>
                        <li>*</li>

                        <li>Reservation Office hours are:</li>
                        <li>Monday to Friday</li>
                        <li>8:30 am - 4.30 pm CET</li>
                        <center> <img class="im" src="Images/nn.gif" alt="" srcset=""></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 
map -->
    <div class="map">
        <div id="googleMap" style="width:100%;height:400px; margin-top: 1em; margin-bottom: 1em;"></div>
    </div>

    <div class="broach" style="background-color: #fadfa0;">
        <center>
            <div class="textt">
                <h2 style="margin-top: 1em;">Would you like to know more about our hotel,</h2>
                <h3 style="margin-top: -1em;">our services or your Ayurveda cure?</h3>
                <p>You can find out all you need to know about your stay in our hotel brochure, which you can download here.</p>
                <p style="margin-top: -1em;">We are also happy to help you by phone or e-mail.</p>
                <button class="btnbroach" type="submit">Download Hotel Brouch</button>
            </div>
        </center>
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

    document.getElementById('time1').value = currenttime;
    document.getElementById('date1').value = currentDate;
</script>
<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(51.508742, -0.120850),
            zoom: 5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</html>