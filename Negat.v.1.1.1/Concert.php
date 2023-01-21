<?php
$connection = mysqli_connect('localhost','root','','b_ticket');
session_start();
?>
<html>
    <head>
        <title></title>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <link href="css/header.css" rel="stylesheet" type="text/css">
        <link href="css/foot.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <header>
        <h2>Negat</h2>
        <ul>
            <li><a href="index.php">Home </a></li>
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
       
            <div id="window">
                <div id="text">
                    <h1>Concert</h1>
                    <h3>Live concert tickets</h3>
                </div>
                    
            </div>
            <div id="concerts">
                <?php 
                    $c1 = "select * from concert";
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
                        $var = 'image/presenters';
                        echo '<a href="shows.php?CID='.$row['Concert_ID'].'">
                        <div class="concert">
                            <div id="image" style="background:url(image/presenters/'.$row['image'].'); background-size: cover;">
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
            <div id="concert_slide">
               
            <?php 
                    $c1 = "select * from concert";
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
                        <div class="concert">
                            <div id="image" style="background:url("'.$row['image'].'")">
                            </div>
                            <div id="description">
                                <h1>'.$row['ConcertName'].'</h1>
                            </div>
                        </div>';
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