<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 50%;
            height: auto;
            background-color: rgb(210, 210, 210);
        }

        .text input {
            height: 2em;
            margin-bottom: 0.5em;
        }

        .text hr {
            width: 20%;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #4b86f3;
            width: 20%;
            height: 3em;
            margin-bottom: 2em;
        }

        .button1:hover {
            background-color: #fdcc44;
            color: white;
        }




        .details {
            width: 40%;
            height: 26em;
            background-color: azure;
            position: absolute;
            border-radius: 10px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        #menu{
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            margin-left: 3em;
            margin-right: 2em;
           
        }
        .col{
            margin-bottom: 0.5em;
        }

        /* .loginform label {
            font-size: 22px;
            font-family: 'Times New Roman', Times, serif;
            margin-bottom: 0.15em;
            margin-right: 10em;

        } */

    </style>
</head>

<body>
    <div class="container">
        <center>
            <div class="text">
                <h1>WE LOOK FORWARD</h1>`
                <h1 style="margin-top: -1em;">HEARING FROM YOU</h1>
                <hr>
                <h3>Your inquiry</h3>
                <input type="text" name="" id="" placeholder="First Name" style="width: 40%;" required>
                <input type="text" placeholder="Last Name" style="width: 40%;" required>
                <input type="text" name="" id="" placeholder="Email" style="width: 40%;" required>
                <input type="text" placeholder="Phone" style="width: 40%;" required>
                <input type="date" placeholder="Arrial Date" style="width: 19%;">
                <input type="date" placeholder="Depature Date" style="width: 20%;">
                <input type="number" name="" id="" placeholder="No:of Guest" style="width: 20%;">
                <select name="cars" id="cars" style="width: 20%; height: 2.5em;">
                    <option value="volvo">Room Catagory</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
                <select name="car" id="car" style="width: 50%; height: 2.5em; margin-bottom: 0.5em;">
                    <option value="">Have an Standerd at Ayurveda Peragon</option>
                    <option value="">yes</option>
                    <option value="">no</option>
                </select>
                <textarea style="width: 82%; height: 10em; margin-bottom: 0.5em;">Your Massage</textarea><br>
                <div class="btn">
                    <button class="button button1">INQUIRY</button>
                </div>
            </div>
        </center>
    </div>
    </div>
    <h1>My First Google Map</h1>

    <div id="googleMap" style="width:100%;height:400px;"></div>



    <div class="log">
       
            <!-- </center> -->
        </div>
    </div>

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
</body>

</html>