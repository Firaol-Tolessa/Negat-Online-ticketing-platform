<?php
error_reporting(E_ERROR | E_PARSE);
$connection = mysqli_connect('localhost','root','','b_ticket');
session_start();
?>
<html>
    <head>
    <link href="css/football.css" rel="stylesheet" type="text/css">
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <link href="css/foot.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <header>
        <h2>Negat</h2>
        <ul>
            <li><a href="concert.php">Concert </a></li>
            <li><a href="match.php">Match </a></li>
            li><a href="index.php">Home </a></li>
            <?php
                session_start(); 
                $_SESSION['ConcertID'] = 1;
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
        <div id = "holder">
                <div class= "news">
                </div>
            

            <div id= "ads">
            </div>
        </div>

        <div id="match_slide">     
               <?php 
                       $c1 = "select * from football";
                       $q1 = mysqli_query($connection,$c1);
                       while($row = mysqli_fetch_assoc($q1)){
                           $status = '';
                           if($row['Status'] ==  'Available'){
                               $status = '<h2 style="color:green">'.$row['Status'].'</h2>';
                           }else if($row['Status'] ==  'Canceled'){
                               $status = '<h2 style="color:red">'.$row['Status'].'</h2>';
                           }elseif($row['Status'] ==  'Postponed'){
                               $status = '<h2 style="color:gray">'.$row['Status'].'</h2>';
                           }else{
                               $status = '<h2 style="color:white">'.$row['Status'].'</h2>';
                           }
                           echo '
                           <div class="match">
                               <div id="image" style="background:url("'.$row['Date'].'")">
                               </div>
                               <div id="description">
                                   <h1>'.$row['Playoff'].'</h1>
                               </div>
                           </div>';
                       }
                   ?>
            </div>

            <div id="matches">
                <?php 
                    $c1 = "select * from football";
                    $q1 = mysqli_query($connection,$c1);
                    while($row = mysqli_fetch_assoc($q1)){
                        $status = '';
                        if($row['Status'] ==  'Available'){
                            $status = '<h2 style="color:green">'.$row['Status'].'</h2>';
                        }else if($row['Status'] ==  'Canceled'){
                            $status = '<h2 style="color:red">'.$row['Status'].'</h2>';
                        }elseif($row['Status'] ==  'Postponed'){
                            $status = '<h2 style="color:gray">'.$row['Status'].'</h2>';
                        }else{
                            $status = '<h2 style="color:white">'.$row['Status'].'</h2>';
                        }
                        echo '<a href="match.php?CID='.$row['F_ID'].'">
                        <div class="match">
                            <div id="image" style="background:url("'.$row['image'].'")">
                            </div>
                            <div id="description">
                                <h1>'.$row['ConcertName'].'</h1>
                                <p>'.$row['Description'].'</p>
                                '.$status.' 
                            </div>
                        </div></a>';
                    }
                    ?>
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