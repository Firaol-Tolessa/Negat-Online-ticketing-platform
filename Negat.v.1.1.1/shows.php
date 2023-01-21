<?php
 session_start();
 error_reporting(E_ERROR | E_PARSE);
 $connection = mysqli_connect('localhost','root','','b_ticket');
    if(isset($_GET['CID'])){
     $_SESSION['ConcertID']=$_GET['CID'];
    }

    $c1 = 'select * from concert where Concert_ID = '.$_SESSION['ConcertID'].'';
    $q1 = mysqli_query($connection,$c1);
    $row = mysqli_fetch_assoc($q1); 
    $_SESSION['CONCERTNAME'] = $row['Concertname'];
?>

<html>
    <head>
        <title></title>
        <link href="css/show.css" rel="stylesheet" type="text/css">
        <link href="css/header.css" rel="stylesheet" type="text/css">
        <link href="css/foot.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
        <h2>Negat</h2>
        <ul>
            <li><a href="index.php">HOME </a></li>
            <li><a href="concert.php">Concert </a></li>
            <li><a href="match.php">Match </a></li>
            <?php
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
            <li><a href="#contactUs">Contact </a></li>
        </ul>
    </header>
        <div id="info">
            
            <div id="side"> 
                <?php echo '<div id = "image" style="background: url(image/presenters/'.$row['image'].');background-size:cover;"> </div> '.$row['Status'].''?>
                <?php echo  '<div id="text"><h2>'.$row['Presenter'].'</h2></div>'?>
            </div>
            <?php echo'
            <div id="block">
                
                <h1>'.$row['ConcertName'].'</h1>
                <p>'.$row['Description'].'</p>
                
            </div>'?>
        </div>
        
        <div id="video">
            <div id="video_container">
                <iframe  src="<?php echo $row['video']?>" width="100%" height="100%" controls ></iframe >
            </div>
            <?php 
               echo '<div id="description">
               <p>'.$row['video_descr'].'</p>
                </div>'
            ?>
        </div>

        
        <div id="buy">
            <?php echo '<a href="booking.php?CID='.$_SESSION['ConcertID'].'"><button>Buy ticket</button></a>' ?>
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

    </body>
</html>