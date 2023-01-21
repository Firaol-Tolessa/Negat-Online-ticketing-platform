<?php 
    $connect = mysqli_connect('localhost','root','','b_ticket');
    if(isset($_GET['CID'])){
        $_SESSION['ConcertID']=$_GET['CID'];
       }   
?>
<html>
    <head>
        <link href="css/match.css" rel="stylesheet" type="text/css">
        <link href="css/header.css" rel="stylesheet" type="text/css">
        <link href="css/foot.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <header>
        <h2>Negat</h2>
        <ul>
        
            <li><a href="concert.php">Concert </a></li>
            <li><a href="index.php">Home </a></li>
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
                          <li><a href="signup.php">Signup </a></li>
                          <li><a href="index.php">HOME </a></li>';
                }
            ?>
            <li><a href="#contactUs">Contact </a></li>
        </ul>
    </header>

    <div id="vs">
        <div id="team_1">
            <?php
                $c1 = "select image from f_clubs where name = 'st.george'";
                $q1 = mysqli_query($connect,$c1);
                $row1 = mysqli_fetch_assoc($q1);
                echo '<style> #team_1{background:url("'.$row1['image'].'");background-size:contain;}</style>';
            ?>
        </div>
        <h1> vs </h1>
        <div id="team_2">
        <?php
                $c1 = "select image from f_clubs where name = 'st.george'";
                $q1 = mysqli_query($connect,$c1);
                $row1 = mysqli_fetch_assoc($q1);
                echo '<style> #team_2{background:url("image/match/Giorgis/bunna.png");background-size:contain;}</style>';
            ?>
        </div>
        </div>
    </div>
    <div id="players">
        <div id="players_1">
                <!-- image  -->
                <?php 
                    $c2 = "select * from players";
                    $q2 = mysqli_query($connect,$c2);
                    while($row = mysqli_fetch_assoc($q2)){
                        $name = $row['name'];
                        $image = $row['image'];
                        echo '<div class="player">
                                <img src = "'.$image.'"  style=" width:100%;
                                height:100%;position:relative;z-index:0;">
                                <p>'.$name.'</p>
                            </div>';
                    }  
            ?>
                
            
           
        </div>
          
        
        <div id="players_2">
        <?php 
                $connect = mysqli_connect('localhost','root','','b_ticket');
                $c1 = "select * from players";
                $q1 = mysqli_query($connect,$c1);
                while($row = mysqli_fetch_assoc($q1)){
                    $name = $row['name'];
                    $image = $row['image'];
                    echo '<div class="player">
                            <img src = "'.$image.'"  style=" width:100%;
                            height:100%;position:relative;z-index:0;">
                            <p>'.$name.'</p>
                        </div>';
                }  
            ?>
    </div>

    <div id="table">
        <table border="1">
            <tr >
                <th>Stadium</th>
                <th>Clubs</th>
                <th>League</th>
                <th>Match day</th>
            </tr>
            <tr>
                <td>Adama National</td>
                <td>snt Georg</td>
                <td>priemer league</td>
                <td></td>
            </tr>
            <tr>
                <td>BahirDar int.</td>
                <td>et.Coffee</td>
                <td>priemer league</td>
                <td></td>
            </tr>
            <tr>
                <td>AdeyAbeba int</td>
                <td>bahirdar fc</td>
                <td>priemer league</td>
                <td></td>
            </tr>
            <tr>
                <td>AbebeBikela</td>
                <td>fasil.fc</td>
                <td>priemer league</td>
                <td></td>
            </tr>

            <tr>
                <td>Mekele</td>
                <td>70 enderta</td>
                <td>national league</td>
                <td></td>
            </tr>
            <tr>
                <td>Hawassa Nl</td>
                <td>Mekelakeya</td>
                <td>priemer league</td>
                <td></td>
            </tr>

            <tr>
                <td>Hawassa Nl</td>
                <td>Addisabeba fc</td>
                <td>priemer league</td>
                <td></td>
            </tr>

            <tr>
                <td>Hawassa Nl</td>
                <td>Arbaminc fc</td>
                <td>priemer league</td>
                <td></td>
            </tr>

            <tr>
                <td>Hawassa Nl</td>
                <td>wolkitie fc</td>
                <td>priemer league</td>
                <td></td>
            </tr>

            <tr>
                <td>Hawassa Nl</td>
                <td>sidama coffee fc</td>
                <td>priemer league</td>
                <td></td>
            </tr>

            <tr>
                <td>Hawassa Nal</td>
                <td>sebeta fc</td>
                <td>priemer league</td>
                <td></td>
            </tr>

            <tr>
                <td>Hawassa Nl</td>
                <td>diredawa fc</td>
                <td>priemer league</td>
                <td></td>
            </tr>

            <tr>
                <td>Hawassa Nl</td>
                <td>jimma fc</td>
                <td>priemer league</td>
                <td></td>
            </tr>

            <tr>
                <td>Hawassa Nl</td>
                <td>ehtioMedihn fc</td>
                <td>National league</td>
                <td></td>
            </tr>

            <tr>
                <td>Hawassa National</td>
                <td>Mekelakeya</td>
                <td>priemer league</td>
                <td></td>
            </tr>
        </table>
    </div>

    <div id="buy">
        <a href="ticket.php"><button>Buy ticket</button></a>
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
