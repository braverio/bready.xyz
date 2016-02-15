<!DOCTYPE html>
<html>
<head>
    <title>Bready || Reservations</title>
    <meta name="viewport" content="width=device-width, intial-scale = 1.0">
    <link rel="icon" href="/img/favicon.png">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/navfooter.css">
    <link rel="stylesheet" href="/styles/jquery-ui.min.css">
    <link rel="stylesheet" href="/styles/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="/styles/jquery-ui.structure.min.css">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="/styles/jquery-ui.min.js"></script>
    <script src="reservations.js"></script>
    <noscript>Some features of this website require JavaScript to run. With it disabled, some functional and/or visual features may not work.</noscript>
</head>
<body>
    <nav class="hide-on-mobile">
        <ul> 
            <li><a href="/"><img src="/img/logo-small.svg"></a></li>
            <li>
                <a href="/about">About</a>
                <ul>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/reviews">Reviews</a></li>
                    <li><a href="/loyalty">Loyalty Program</a></li>
                </ul>
            </li>
            <li><a href="/menu">Menu</a></li>
            <li>
                <a href="/contact">Contact</a>
                <ul>
                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="/reservations">Reservations</a></li>
                </ul>
            </li>
	   </ul>
    </nav>
    <nav class="hide-on-desktop">
        <script>
            function toggle(){
                $("#hamburger").toggleClass("hidden");}
        </script>
        <img src="/img/hamburger.svg" id="toggleMenu" onclick="toggle()">
        <ul id="hamburger" class="hidden"> 
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/reviews">Reviews</a></li>
            <li><a href="/loyalty">Loyalty Program</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/contact">Contact Us</a></li>
            <li><a href="/reservations">Reservations</a></li>
	   </ul>
    </nav>
    <div class="navoffset"></div>
    <?php if (isset($_REQUEST['text'])) { ?>
    <div class="row center-text">
        <h2>
            <?php
                echo $_REQUEST["text"];
            ?>
        </h2>
    </div>
    <?php } ?>
    <div class="page" id="1">
        <div class="container">
            <div class="row">
                <h2>Reservations</h2>
                <p>To ensure you get a seat in our busy restaurant, please make a reservation about one hour in advance.</p>
                <p>For reservations more than 20 people, please call us at 714.555.2732</p>
            </div>
            <br><br>
            <div class="row">
                <h2>Hours of Operation</h2>
                <p>Mon. to Sat. 7AM to 9PM</p>
                <p>Sun. 8AM to 6PM</p>
            </div>
        </div>
        <div class="form-container">
            <form method="post" action="process.php">
                <h2>Name</h2><input type="text" name="name" required><br><br>
                <h2>Email</h2><input type="email" name="email" required><br><br>
                <h2>Phone</h2><input type="tel" name="phone" required><br><br>
                <h2>Number of Guests</h2><input type="number" name="guests" min="1" max="20" required><br><br>
                <h2 id="date">Date</h2><input type="text" name="day" id="datepicker" required><br><br>
                <h2 id="time">Time: [please choose a date first]</h2>
                <input type="hidden" id="time-process" name="time_process" required>
		<div class="col-4">
                <h3>Hour</h3>
                <select id="time-hr" name="hr" disabled required>
                    <option value="7">7AM</option>
                    <option value="8">8AM</option>
                    <option value="9">9AM</option>
                    <option value="10">10AM</option>
                    <option value="11">11AM</option>
                    <option value="12">12PM</option>
                    <option value="13">1PM</option>
                    <option value="14">2PM</option>
                    <option value="15">3PM</option>
                    <option value="16">4PM</option>
                    <option value="17">5PM</option>
                    <option value="18">6PM</option>
                    <option value="19">7PM</option>
                    <option value="20">8PM</option>
                </select>
                <br><br>
                </div>
                <div class="col-4">
                <h3>Minute</h3>
                <select id="time-min" name="min" disabled required>
                    <option value="00">00</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="45">45</option>
                </select>
                </div>
                <input type="submit" value="Reserve Now!" class="button">
            </form>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2>Connect with us!</h2><br>
                    <a href="https://facebook.com/breadyxyz" target="_blank"><img src="/img/facebook.svg" class="sm"></a>
                    <a href="https://twitter.com/breadyxyz" target="_blank"><img src="/img/twitter.svg" class="sm"></a>
                    <a href="https://www.instagram.com/breadyxyz/" target="_blank"><img src="/img/instagram.svg" class="sm"></a>
                </div>
                <div class="col-4">
                    <h2>Hours of Operation</h2>
                    <p>Mon. to Sat. 7AM - 9PM</p>
                    <p>Sun. 8AM - 6PM</p>
                    <p id="isOpen"></p>
                    <script>
                        var date = new Date();
                        var hour = date.getHours();
                        var isSunday = (date.getDay == 0);
                        var isOpen = false;
                        if (!isSunday){
                            if (hour >= 7 && hour < 21)
                                isOpen = true;
                            else
                                isOpen = false;
                        }
                        else{
                            if (hour >= 8 && hour <=18)
                                isOpen = true;
                            else
                                isOpen = false;
                        }
                        if (isOpen){
                            document.getElementById("isOpen").innerHTML = "We are currently open! Come in!";
                        }
                        else
                            document.getElementById("isOpen").innerHTML = "We are currently closed for the day!";
                    </script>
                </div>
                <div class="col-4">
                    <h2>Contact us</h2><br>
                    <p><a href="/contact/">Contact form</a></p>
                    <p>714.555.2732</p>
                </div>
            </div>
            <div class="row">
                <p>This website is for the FBLA 2016 Website Design Competition. All products depicted are ficticious.</p>
                <p>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></p>
                <p>Additional photos are used under a CC0 non attribution license and/or created/edited by the authors of this page.</p>
            </div>
        </div>
    </footer>
</body>
</html>
