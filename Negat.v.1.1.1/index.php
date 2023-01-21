<?php
$connection  = mysqli_connect('localhost','root','','b_ticket');
$c1 = 'select * from concert';
$q1 = mysqli_query($connection,$c1);
$row = mysqli_fetch_assoc($q1);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/foot.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <h2>Negat</h2>
        <ul>
            <li><a href="#about">About </a></li>
            <li><a href="concert.php">Concert </a></li>
            <li><a href="match.php">Match </a></li>
            <?php
                session_start(); 
                if(isset($_SESSION["LOGGEDIN"])&& $_SESSION["ROLE"]=='USER'){
                    echo '<label>welcome, <u>'.$_SESSION["USERNAME"].'</u></label> <li><a href= "logout.php"> Logout </a></li>';
                }else if(isset($_SESSION["LOGGEDIN"]) && $_SESSION["ROLE"]=='ADMIN'){
                    echo '<label>welcome, <u>'.$_SESSION["USERNAME"].'
                    </u></label> <li><a href= "logout.php"> Logout </a></li>
                    <li><a href= "admin.php"> ADMIN </a></li>';
                }else{
                    echo '<li><a href="Login.php">Login </a></li>
                          <li><a href="signup.php">Signup </a></li>';
                }
            ?>
            <li><a href="#contact">Contact </a></li>
        </ul>
    </header>
    <div class="window" >
        
        <div class="mySlides fade">
            <img src="image/background/bg2.jfif" style="width:100%;height:100vh">
            <div class="text"><h1>Music Festival 2022</h1></div>
            <div class="descr"><h1>concert for humanity</h1><br>
                <center>December 2018</center> 
            </div>
            <div class="block">
                <div class="date">
                    <label id="day">24</label><br>
                    <p>December 2018 <br>
                    Days left!!</p>
                </div>
                <div class="descr">
                    <ul>
                        <li>25 speakers</li>
                        <li>255+ tickets</li>
                    </ul>
                 </div>
            </div>
        </div>

        <div class="mySlides fade"> 
            <img src="image/foot2.jpg" style="width:100%;height:100vh">
            <div class="text"><h1>ticketing made easy</h1></div>
            <div class="descr"><h1>concert for humanity</h1><br>
                <center>December 2018</center> 
            </div>
            <div class="block">
                <div class="date">
                    <label id="day">10</label><br>
                    <p>December 2022 <br>
                    Days left!!</p>
                </div>
                <div class="descr">
                    <ul>
                        <li>200 speakers</li>
                        <li>350+ tickets</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="image/foot1.jpg" style="width:100%;height:100vh">
            <div class="text"><h1>Who will win? get tickets now</h1></div>
            <div class="descr"><h1>football in our blood</h1><br>
                <center>December 2018</center> 
            </div>
            <div class="block">
                <div class="date">
                    <label id="day">18</label><br>
                    <p>December 2018 <br>
                    Days left!!</p>
                </div>
                <div class="descr">
                    <ul>
                        <li>25 speakers</li>
                        <li>255+ tickets</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
        <br>

    <div class="dots" style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>


    <div id="about">
        <h1>About Negat</h1>
        <p>Are you tired of waiting inline to get ticket? 
            Well why spoil the joy of the event. Use Negat </p>
        <p>Negat is an <u style="color:brown">Ethiopian</u> brewed website that is based in BahirDar.</p>
        <p>It is an online platform of ticketing with ease access and use features.</p>
        <h3> Why stay in the shadows of line-waiting when you could step into the <u style="color:#f94f0e">light with Negat</u></h3>
        <img src="image/icon/logo.png" width="15%" >

    </div>

    <div id = "reviews">
        <div class="review">
            <div id="image">
                <img src="image/promo/m1.jpg">
            </div>
            <div id="content">
                <p>"This is one of the best websites I have seen. Rich with content and live updates"</p>
            </div>
        </div>
        <div class="review">
        <div id="image">
                <img src="image/promo/m2.jpg">
                <div id="content">
                <p>"Love it to the core, Best Experience ever"</p>
            </div>
            </div>
        </div>
        <div class="review">
        <div id="image">
                <img src="image/promo/m3.jpg">
                <div id="content">
                <p>"This is one of the best websites I have seen. Rich with content and live updates"</p>
            </div>
            </div>
        </div>
    </div>

    <div id="contact">
        <div id="info">
            <h2> Email : Negat@sales.com</h2>
            <h2> phone :+251946372894</h2>
            <h2> phone-2 :+251943602837 </h2>
        </div>
        <h1>Contact us</h1>
    </div>

    </div>
    <div class="cookie" id="d">
        <h2><u>Welcome,</u></h2>
        <p>By using this website, you automatically agree to the term and conditions of the site. </p>
        <a onclick="purecookieDismiss();" >Understood</a>
    </div>

    <footer>
        <div id="contactUs">
            <h2> Email : Negat@sales.com</h2>
            <h2> phone :+251946372894</h2>
            <h2> phone-2 :+251943602837 </h2>
        </div>
        <div id = "infoUs">
        <p>Are you tired of waiting inline to get ticket? 
            Well why spoil the joy of the event. Use Negat </p>
        <p>Negat is an <u style="color:brown">Ethiopian</u> brewed website that is based in BahirDar.</p>
        <p>It is an online platform of ticketing with ease access and use features.</p>
        </div>
    </footer>


<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}

function purecookieDismiss(){
    document.querySelector('.cookie').style.display="none";
}
</script>

</body>
</html> 
