<?php
session_start();
if (empty($_SESSION['token'])) {
	$_SESSION['token'] = md5(mt_rand(1,1000000));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bready || Reviews</title>
    <meta name="viewport" content="width=device-width, intial-scale = 1.0">
    <link rel="icon" href="/img/favicon.png">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/navfooter.css">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
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
        <div class="container">
            <div class="row">
                <h1>Customer reviews</h1>
                <p>Don't just take it from us. Find out why so many customers are ready to eat at Bready.</p><br>
            </div>
            <div class="row">
                <div class="col-4">
                    <blockquote>
                        Before I was ready, my life was a mess. Once this bakery came into my life, I was swept away!<br><br>-Alivery Furdudan
                    </blockquote>
                </div>
                <div class="col-4">
                    <blockquote>
                        The bread is simply fantastic. Even my friends who aren't insane enough to go on strange diets are making the switch to gluten-free foods!<br><br>-Kurcan Hilason
                    </blockquote>
                </div>
                <div class="col-4">
                    <blockquote>
                        Whether you sit down in the bakery's relaxing environment or you take something back home to enjoy, the products here will always bring a smile to your face, and your scale!<br><br>-Banalam Rekapa
                    </blockquote>
                </div>
            </div>
        </div>
    <div class="container">
        <h1>Leave a review</h1>
    </div>
    <div class="form-container"><br>
        <form action="../contact/contact.php" method="POST">
			<input type="hidden" name="token" value="<?php print $_SESSION['token']; ?>" />
            <h2>Your Name</h2><input type="text" name="from"><br><br>
            <h2>Your Email</h2><input type="text" name="email"><br><br>
            <h2>Review</h2><textarea name="message" rows="6"></textarea><br><br>
            <input type="submit" value="Submit" class="button">
        </form>
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