<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/ayurveda.css">
    <title>Ayurveda cure Paragon</title>
</head>

<body>
    <div class="header">
        <ul>
            <img class="logo" src="Images/N.jpg">
            <li><a href="Index.html">Home</a></li>
            <li><label for="">Ayurveda Crue</label></li>
            <li><a href="srilanka.php">Srilanka</a></li>
            <li><a href="">News</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="bookingrequest.php">Booking Request</a></li>
        </ul>
    </div>
    <div class="ac">
        <img src="Images/ayurvedacure.jpg" alt="" srcset="" style="width: 100%;">
    </div>
    <div class="a">
        <div class="aa">
            <h5 style="margin-top: 1em;">AUTHENTIC AYURVEDA CURES IN</h5>
            <p>THE AYURVEDA PARAGON HOTEL</p>
            <li>Highly qualified, experienced Ayurveda doctors, our certification as Ayurveda Hospital, our own</li>
            <li>herb garden, a state-certified pharmacy in the house and last but not least the beautiful location</li>
            <li>directly at the Indian Ocean - the Ayurveda Paragon Hotel is the ideal place for your Ayurveda cure.
            </li>
        </div>
        <div class="aa">
            <p>Focus on your Ayurveda cure</p>
            <li>We want you to be able to concentrate on your regeneration, well-being and health during your</li>
            <li>Ayurveda treatment. For this reason, a stay in our spa hotel is reserved exclusively for Ayurvedic spa
            </li>
            <li>guests. Our team of specially trained employees can focus on your personal course and recovery</li>
            <li>without having to deal with tourism issues. This focus on your Ayurveda cure shapes the character of
            </li>
            <li>Ayurveda Paragon.</li>
        </div>
        <div class="aa">
            <p>Duration of your Ayurveda cure</p>
            <li>Ayurveda takes time. Our experience has shown that a duration of three to four weeks is ideal to</li>
            <li>recover and regenerate sustainably as part of an Ayurveda cure. If this is not possible, you should</li>
            <li>plan at least 14 days for your stay at the Ayurveda Paragon Hotel. Use this time to not think about</li>
            <li>your everyday life and treat yourself to the luxury of doing nothing. Your body and soul will thank</li>
            <li>you.</li>
        </div>

    </div>
    <div class="b">
        <div class="card"><img src="Images/abc.jpg">
            <div class="info">
                <p>Highly qualified, experienced and happy to be there for you: Five
                    Ayurveda doctors take care of your well-being at the
                    Ayurveda Paragon Hotel and ensure that your Ayurveda cure is successful.</p>
                <div class="bb">
                    <button>Our Ayurveda Doctors ></button>
                </div>
            </div>
        </div>
        <div class="card"><img src="Images/abd.jpg">
            <div class="info">
                <p>Heat treatments, Panchakarma treatments, Ayurvedic massages… As a
                    method of a thousand steps, Ayurveda includes countless
                    treatment methods that our doctors put together individually for each individual spa guest.</p>
                <div class="bb">
                    <button>Ayurvedic treatment methods ></button>
                </div>
            </div>
        </div>
        <div class="card"><img src="Images/abe.jpg">
            <div class="info">
                <p>Heat treatments, Panchakarma treatments, Ayurvedic massages… As a method of a
                    thousand steps, Ayurveda includes countless
                    treatment methods that our doctors put together individually for each individual spa guest.</p>
                <div class="bb">
                    <button>Ayurvedic treatment methods ></button>
                </div>
            </div>
        </div>
        <div class="card"><img src="Images/abf.jpg">
            <div class="info">
                <p>As individual as our spa guests: Our doctors and therapists tailor the
                    course of your Ayurveda cure to your personal needs.
                    Learn more about the course of the treatment at Ayurveda Paragon here.</p>
                <div class="bb">
                    <button>Course of your Ayurveda cure ></button>
                </div>
            </div>
        </div>
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

</html>