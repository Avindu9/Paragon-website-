<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/srilanka.css">
    <title>Srilanka</title>
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
            <li><label for="">Srilanka</label></li>
            <li><a href="">News</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="bookingrequest.php">Booking Request</a></li>
        </ul>
    </div>

    <!-- container -->

    <div class="a">
        <img src="Images/srilanka.jpg" alt="" srcset="" style="width: 102%;">
    </div>
    <div class="b">
        <div class="bb">
            <p>TRAVEL DESTINATION SRI LANKA</p>
        </div>
        <div class="bbb">
            <li>Sri Lanka is one of the countries of origin of Ayurveda and will delight you with dreamlike beaches, lush</li>
            <li>vegetation, millennia-old cultural sites and last but not least distinctive hospitality.</li>
        </div>
        <div class="bbb">
            <li>Sri Lanka - the small tropical paradise in the Indian Ocean - has had many names in its long history: The</li>
            <li>Greeks called it Taprobans, the Arabs - Serendip, first colonial rulers from Portugal - Ceilao, the English -</li>
            <li>Ceylon. Today, the people proudly call their country Sri Lanka - the royal shining country.</li>
        </div>
        <div class="bbbb">
            <div class="bb">
                <p>Island state and tropical paradise</p>
            </div>
            <div class="bbb">
                <li>The island nation of Sri Lanka is 700 km north of the equator, stretches for about 400 km from north to</li>
                <li>south and 220 km from east to west. The average temperature on the coast is 30 °C, in the central</li>
                <li>highlands at around 2,000 meters it is around 16 °C. </li>
            </div>
            <div class="bbb">
                <li>With 65,610 sq km slightly smaller than Bavaria, Sri Lanka offers everything you could want from a tropical</li>
                <li>paradise in the smallest of spaces: dreamlike, palm-lined beaches, lush vegetation inland, rice fields in the</li>
                <li>richest shades of green, millennia-old cultural sites, mystical temples, friendly people, Asian Hospitality and</li>
                <li>much much more ... Marco Polo described Sri Lanka as "the most beautiful island of its size" for a reason.</li>
                <li>Anyone who has visited this beautiful country will never forget it.</li>
            </div>
        </div>
        <div class="fv">
            <img src="Images/sl.jpg" alt="" srcset="">
            <img src="Images/b.jpg" alt="" srcset="">
        </div>
        <div class="mb">
            <div class="bb">
                <p>What to know about Sri Lanka: official language and social diversity</p>
            </div>
            <div class="bbb">
                <li>Sri Lanka is an ethnically very heterogeneous country with a population of approximately 22 million people.</li>
                <li>Around 74.9 percent, and thus the vast majority, are Sinhalese, with 15.4% the Tamil group is the largest</li>
                <li>minority in the country. About eight percent of the population are descendants of Arab and Malay Muslims.</li>
                <li>There are also the Veddahs, former indigenous people of Sri Lanka, who are, however, only estimated at a</li>
                <li>few thousand. The Burgher, a formerly extremely influential group of Eurasians of mixed Dutch or Portuguese</li>
                <li>descent, now live mostly abroad. In Sri Lanka, they make up less than one percent of the population.</li>
            </div>
            <div class="bbb">
                <li>The division of religions is just as diverse as the ethnic groups. The majority of the Sinhalese and thus also</li>
                <li>the entire population of Sri Lanka are committed to Buddhism (70.2 percent). The majority of the Tamils </li>
                <li>belong to Hinduism (12.6 percent). There are also 9.7 percent Muslims and 7.4 percent Christians.</li>
            </div>
            <div class="bbb">
                <li>Social diversity is also reflected in the language: Sinhala, Tamil and English are the official languages.</li>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="card"><img src="Images/p.jpg">
            <div class="info">
                <p>Ayurveda - the knowledge of a healthy and long life - has a tradition going back thousands of years. As a
                    holistic naturopathy, Ayurvedic teaching relies on cause-related treatments and actively involves people
                    in the individual healing process.</p>
                <button>Your Ayurveda cure ></button>
            </div>
        </div>
        <div class="card"><img src="Images/R.JPG">
            <div class="info">
                <p>Health and vitality are priceless. Nevertheless, we would be happy to tell you what an Ayurveda cure
                    in our spa hotel costs. Here you will find our current price list, attractive offers and useful
                    information about booking your stay.</p>
                <button>Prices & booking ></button>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="card"><img src="Images/mm.jpg">
            <div class="info">
                <p>Why Ayurveda in Sri Lanka? Sri Lanka is one of the countries of origin of Ayurveda.
                    The tropical climate, the well-founded training of doctors and therapists and,
                    last but not least, the wonderfully peaceful surroundings make the island state the
                    perfect place for your Ayurveda cure.</p>
                <button>Our Ayurveda hotel ></button>
            </div>
        </div>
        <div class="card"><img src="Images/o.jpg">
            <div class="info">
                <p>Ayurveda under palm trees: Only two hours by car (alternatively 130 km)
                    from the airport in Colombo and located directly on the Indian Ocean, our spa hotel
                    with its own herb garden and state-certified
                    pharmacy is the perfect place for your Ayurveda cure in Sri Lanka.</p>
                <button>Zum Hotel ></button>
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