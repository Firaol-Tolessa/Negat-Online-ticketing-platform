<?php
//  error_reporting(E_ERROR | E_PARSE);
   $connection = mysqli_connect('localhost', 'root','','b_ticket');
  session_start();
    $_SESSION['USERNAME'];
    $_SESSION['BOOKED'] == true;
  // $_SESSION['CONCERTNAME'];
  $c1 = 'select * from concert where Concert_ID = '.$_SESSION['ConcertID'].'';
  $q1 = mysqli_query($connection,$c1);
  $row = mysqli_fetch_assoc($q1); 

  $price = $row['Price'];
  $rate = 5;
  $quantity = $_SESSION['QUANTITY']= (int)$_POST['quantity'];
  
  $q = "select * from concert";
  $query = mysqli_query($connection,$q);
  $row1 = mysqli_fetch_assoc($query);

  $tickets = $row['t_available'];
  
  $current_t = (int)($tickets-$quantity);
  if($tickets > 0  and  $current_t > 0 and isset($quantity)){
    $q2= 'UPDATE concert SET t_available = '.$current_t.' WHERE Concert_ID = "'.$_SESSION['ConcertID'].'"';
    mysqli_query($connection,$q2);
    header('Location:ticket.php');
  }
  ?>

<?php


?>



<html>
  <head>
    <title>Booking</title>
    <link href="css/booking.css" type = "text/css" rel="stylesheet">
    <link href="css/toggle.css" type="text/css" rel="stylesheet">
    <link href="css/header.css" type="text/css" rel="stylesheet">
    <style>
      #toggle{
        position: absolute;
         top:40%;left:80%; 
         display:inline;}
         #toggle h3{
          position: absolute;
          left: -50%;
          font-size: 200%;
         }
         #toggle h4{
          position: absolute;
          left: 115%;
         }
      </style>
      <script>

  window.onload = function () {
    var input = document.querySelector('input[type=checkbox]');
    
    function check() {
        var a = input.checked ? <?php echo $price*$rate; ?> : <?php echo $price ?> ;
        document.getElementsByClassName('plan-price')[0].innerHTML = a;
        var b = input.checked ? <?php echo $price*$rate*1.25; ?> : <?php echo $price ?> ;
        document.getElementsByClassName('plan-price')[1].innerHTML = b;
    }
    input.onchange = check;
    check();
}
</script>
  </head>
  <body>
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



    <section class="layer plans" style="position: absolute;margin-top:-10%">
    <section>

    <section class="third lift plan-tier" onclick="location.href='#';">
       <h4>NORMAL</h4>
      <h5><sup class="superscript">$</sup><span class="plan-price"><?php echo $price?></span></h5>


      <p class="early-adopter-price">choice is fun</p><br>
      <del>$10</del>


      <ul>
        <li><strong>The most affordable</strong> choice</li>
        <li><strong>Refundability</strong>guaranteed</li>
        <li> High discount rates <strong>. dont miss it</strong></li>
      </ul>
      
      <li><form method="POST"  >
        <center><label>Quantity :<input type ='number' name="quantity"></label></center>
        <br>
        <input type = "submit" min=1 style = "padding : 10px;background :rebeccapurple">

      </form>
              </li>
    </section>

    <section class="third lift plan-tier callout" onclick="location.href='#';">

      <h6>RECOMMENDED</h6>
      <h4>VIP</h4>
      <h5><sup class="superscript">$</sup><span class="plan-price"><?php echo (int)($price*1.25)?></span></h5>


      <p class="early-adopter-price">Enjoy life package!</p><br>
      <del>$40</del>


      <ul>
      <li>Access to<strong> Primium </strong> !</li>
      <li>Food and<strong>Drinks </strong>are available for <strong>free</strong></li>
      <li><form method="POST"  >
        <center><label>Quantity :<input type ='number' name="quantity"></label></center>
        <br>
        <input type = "submit" min=1 style = "padding : 10px;background :rebeccapurple">

      </form>
              </li>
      </ul>

    </section>


    <div id="toggle" >
      <h3>$</h3>
      <h4>birr</h4>
      <label class="switch">
      <input type="checkbox" name="currency" onclick="change(this)">
      <span class="slider round"></span>
      </label>
    </div>
    </section>
    </section>
</body>

</html>