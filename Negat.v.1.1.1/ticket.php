<html>
    <script src="js/html2canvas.js"></script>
    <link href="css/ticket.css" type="text/css" rel="stylesheet">
    <link href="css/header.css" type="text/css" rel="stylesheet">
    <script>
      
              // Define the function 
        // to screenshot the div
        function takeshot() {
            // Use the html2canvas
            // function to take a screenshot
            // and append it
            // to the output div
        
            html2canvas(document.getElementsByClassName('ticket')[0], { scale: 5 }).then(
                function (canvas) {
                    document.getElementById('output').appendChild(canvas);
                })
        }
       
        </script>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    // error_reporting(E_ERROR | E_PARSE);
    session_start();
    if(!isset($_SESSION["LOGGEDIN"])){
        header('location: login.php');
    }
    // if($_SESSION["BOOKED"]==true && $_SESSION["LOGGEDIN"]==true){
        $quantity = $_SESSION['QUANTITY'];
        $connection = mysqli_connect('localhost', 'root','','b_ticket');
        $q = 'select * from concert where Concert_ID = '.$_SESSION['ConcertID'].'';
        $query = mysqli_query($connection,$q);
        $row = mysqli_fetch_assoc($query);
        //get session from previous and check quantity
    
        include "dependancies/QR/qrlib.php";
        $randId = rand();  
        $text= rand().'User_id'.$_SESSION["USERID"].'User_name:'.$_SESSION['USERNAME'].'Quantity: '.$quantity;
        echo $text;
        $folder="image/qr/";
        $file_name=$randId.".png";
        $file_name=$folder.$file_name;
        echo $file_name;
        QRcode::png($text,$file_name);
        // echo"<img src='images/qr.png'>";
 
        $c1 = 'select * from concert where Concert_ID = '.$_SESSION['ConcertID'].'';
        $q1 = mysqli_query($connection,$c1);
        $row = mysqli_fetch_assoc($q1); 
    // }else if($_SESSION["LOGGEDIN"]==false){
    //    // header("Location: login.php");
    // }
    ?>

    <body>
       <button value="capture" onclick="takeshot()"/> Take</button>
       <header>
        <h2>Negat</h2>
        <ul>
            <li><a href="#about">About </a></li>
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
            <li><a href="#contact">Contact </a></li>
        </ul>
    </header>
        <div class="ticket" >
            <div class="left">
           <?php echo '<div class="image" style="overflow: hidden;background: url(image/presenters/'.$row['image'].');background-size:cover;"';?>
                <p class="admit-one">
                    <span>ADMIT ONE</span>
                    <span>ADMIT ONE</span>
                    <span>ADMIT ONE</span>
                </p>
                <div class="ticket-number">
                    <p>
                        #20030220
                    </p>
                </div>
            </div>
            <div class="ticket-info">
                <p class="date">
                    <?php echo $row["Date"];?>
                </p>
                <div class="show-name">
                    <h1><?php echo $row["ConcertName"]?> </h1>
                    <h2><?php echo $row["Presenter"]?></h2>
                </div>
                <div class="time">
                    <?php echo $row["Time"];?>
                </div>
                <p class="location"><span><?php echo $row["Location"]?></span>
                    <span class="separator"><i class="far fa-smile"></i></span><span><?php echo $row["Capacity"].'+ tickets' ?></span>
                </p>
            </div>
            </div>
            <div class="right">
            <p class="admit-one">
                <span>ADMIT ONE</span>
                <span>ADMIT ONE</span>
                <span>ADMIT ONE</span>
            </p>
            <div class="right-info-container">
                <div class="show-name">
                    <h1>SOUR Prom</h1>
                </div>
                <div class="time">
                <?php echo $row["Time"];?>
                </div>
                <div class="barcode">
                   <?php echo '<img src="image/qr/'.$randId.'.png">'?>
                </div>
                <p class="ticket-number">
                    #20030220
                </p>
            </div>
            </div>
        </div>
        <div id ="output">

        </div>
        <?php
        session_destroy();
        ?>
    </body>

</html>