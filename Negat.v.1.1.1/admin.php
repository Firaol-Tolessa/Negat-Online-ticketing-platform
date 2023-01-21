<?php
session_start();
if($_SESSION['LOGGEDIN']==true && $_SESSION['ROLE']=='ADMIN'){
$connect = mysqli_connect('localhost','root','','b_ticket');
error_reporting(E_ERROR | E_PARSE);
$id = $_POST['update'];
$Fid = $_POST['Fupdate'];

$result = ''; 
$result2 = '';

$Playoff = $_POST['Playoff'];
$Stadium = $_POST['Stadium'];
$Date = $_POST['Date'];
$Price = $_POST['Price'];
$Capacity = $_POST['Capacity'];
$Status = $_POST['Status'];
$img1 = $_POST['img1'];
$img2 = $_POST['img2'];
$Description = $_POST['Description'];

$result2 .= !empty($Playoff)? 'Playoff = "'.$Playoff.'",' :' '; 
$result2 .= !empty($Stadium)? 'Stadium = "'.$Stadium.'",' :' '; 
$result2 .= !empty($Date)? 'Date = "'.$Date.'",' :' ';
$result2 .= !empty($Price)? 'Price = "'.$Price.'",' :' ';
$result2 .= !empty($Capacity)? 'Capacity = "'.$Capacity.'",' :' ';
$result2 .= !empty($Status)? 'Status = "'.$Status.'",' :' ';
$result2 .= !empty($img1)? 'img1 = "'.$img1.'",' :' ';
$result2 .=  !empty($img2)? 'img2 = "'.$img2.'",' :' ';
$result2 .= !empty($Description)? 'Description = "'.$Description.'",' :' ';

$aPlayoff = $_POST['aPlayoff'];
$aStadium = $_POST['aStadium'];
$aDate = $_POST['aDate'];
$aPrice = $_POST['aPrice'];
$aCapacity = $_POST['aCapacity'];
$aStatus = $_POST['aStatus'];
$aimg1 = $_POST['aimg1'];
$aimg2 = $_POST['aimg2'];
$aDescription = $_POST['aDescription'];

$Concertname = $_POST['Concertname'];
$presenter = $_POST['Presenter'];
$location = $_POST['Location'];
$capacity= $_POST['Capacity'];
$date = $_POST['Date'];
$Price = $_POST['Price'];
$Status = $_POST['Status'];
$Discount = $_POST['Discount'];
$Description = $_POST['Description'];
$Time = $_POST['Time'];
$Tickets_available = $_POST['Tickets_available'];
$Image = $_POST['Image'];

$Playoff = $_POST['Playoff'];
$Stadium = $_POST['Stadium'];
$Date = $_POST['Date'];
$Price = $_POST['Price'];
$Capacity = $_POST['Capacity'];
$Status = $_POST['Status'];
$img1 = $_POST['img1'];
$img2 = $_POST['img2'];
$Description = $_POST['Description'];


$result.= !empty($Concertname)? 'ConcertName = "'.$Concertname.'",' :' ';
$result.= !empty($presenter)? 'Presenter = "'.$presenter.'",' :' ';
$result.= !empty($location)? 'Location = "'.$location.'",' :' ';
$result.= !empty($capacity)? 'Capacity = "'.$capacity.'",' :' ';
$result.= !empty($date)? 'Date = "'.$date.'",' :' ';
$result.= !empty($Price)? 'Price = "'.$Price.'",' :' ';
$result.= !empty($Status)? 'Status = "'.$Status.'",' :' ';
$result.= !empty($Discount)? 'Discount = "'.$Discount.'",' :' ';
$result.= !empty($Description)? 'Description = "'.$Description.'",' :' ';
$result.= !empty($Time)? 'Time = "'.$Time.',' :' ';
$result.= !empty($Tickets_available)? 't_available = "'.$Tickets_available.'",' :' ';
$result.= !empty($Image)? 'Image = "'.$Image.',' :' ';

echo  $aStadium .'          '.$_SESSION['Prev'];
if(isset($aStadium)){
 $add = "insert into football (Playoff,Stadium,Date,Price,Capacity,Status,img1,img2,Description) 
 values ('$aPlayoff','$aStadium','$aDate ','$aPrice ','$aCapacity','$aStatus','$aimg1','$aimg2','$aDescription')";
 mysqli_query($connect,$add);
 $_SESSION['Prev']= $aStadium;
 header("location: index.php");
 header("location: admin.php");
 echo "<script>console.log('$Fid')</script>";}
// }else if(isset($Stadium)){
//     $parsedS = rtrim($result2, " ,");
//     $query2 = "update  football set $parsedS where  F_ID = \"$Fid\"";
//         mysqli_query($connect,$query2);
//         echo "<script>console.log('$Fid')</script>";
//     }
//     }else{
//         header("location: index.php");
}


echo 'updated'.$result;
$aConcertname = $_POST['aConcertname'];
$apresenter = $_POST['aPresenter'];
$alocation = $_POST['aLocation'];
$acapacity= $_POST['aCapacity'];
$adate = $_POST['aDate'];
$aPrice = $_POST['aPrice'];
$aStatus = $_POST['aStatus'];
$aDiscount = $_POST['aDiscount'];
$aDescription = $_POST['aDescription'];
$aTime = $_POST['aTime'];
$aTickets_available = $_POST['aTickets_available'];
$aimage = $_POST['aImage'];
if(isset($aConcertname)){
    $addQ = "insert into concert(Concert_ID,ConcertName,Presenter,Location,Capacity,Date,Price,Status,Discount,Description,Time,t_available,image) 
    values('$aConcertname', '$apresenter', '$alocation','$acapacity', '$adate','$aPrice', 
    ' $Status','$aDiscount','$aDescription','$aTime','$aTickets_available','$aimage','$aimage')";
    mysqli_query($connect,$addQ);
    header("location: index.php");
    header("location: admin.php");
}else if(isset($Concertname)){
$parsedS = rtrim($result, " ,");
$query = "update  concert set $parsedS where  Concert_ID = \"$id\"";

 mysqli_query($connect,$query);
}

?>


<html>
    <head>
        <title>ADMIN PAGE</title>
        <link href="css/style0.css" rel="stylesheet" type="text/css">
        <link href="css/header.css" rel="stylesheet" type="text/css">
    
        <style>
            #edit,#add,#edit2,#add2{
                display: none;
            }
            
        </style>
        <script>
           
            function show1(){
                document.getElementById('concert').style.display = "none";
                document.getElementById('user').style.display = "block";  
            }

            function show2(){
                // document.getElementById('match').style.display = "none";
                document.getElementById('user').style.display = "none"; 
                document.getElementById('concert').style.display = "block";  
            }

            function show3(){
                document.getElementById('user').style.display = "none";  
                document.getElementById('concert').style.display = "none";
                // document.getElementById('match').style.display = "block";
            }

            function closeSide(){  
                document.getElementById('container').style.display = "none";
                document.getElementById('show').style.display = "block";
                document.getElementById('head').style.display = 'none';
            }
            function showSide(){
                document.getElementById('container').style.display = "block";
                document.getElementById('show').style.display = "none";
                document.getElementById('head').style.display = 'block';
            }
         function updateC(){
            document.getElementById("edit").style.display = "inline";
            document.getElementById("add").style.display = "none";
         
        }
        function addC(){
            document.getElementById("add").style.display = "inline";
            document.getElementById("edit").style.display = "none";
          
        }
        function updateC2(){
            document.getElementById("edit2").style.display = "inline";
            document.getElementById("add2").style.display = "none";
         
        }
        function addC2(){
            document.getElementById("add2").style.display = "inline";
            document.getElementById("edit2").style.display = 'none';
          
        }

        </script>
    </head>
    <body>
    <header id='head'>
        <h2>Negat</h2>
        <ul>
            <li><a href="index.php">Home </a></li>
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
        
           
        </ul>
    </header>

            <div id="container">
                <h1>Adminstrator</h1>

                    <ul>
                        <li><button id ='close' onclick="closeSide()">close</button></li>
                    <li><button style = "width :auto;"onclick="show1()">USER</button></li>
                    <li><button style = "width :auto;"onclick="show2()">Events</button></li>
                   <!-- <li> <button style = "width :auto;"onclick="show3()">MATCHES</button><li> -->
                        </ul>
        
            </div>
            <button id="show" onclick="showSide()">Menu</button></li>
<div id="display">
    <div id="user">
     <table border="2">
        <form action="" method="post">
            <tr>
            
            <?php
                $connect = mysqli_connect('localhost','root','','b_ticket');
                $q = "select * from user";
                $query = mysqli_query($connect,$q);
            while($row = mysqli_fetch_row($query)){
                echo '<tr><td>'.$row[0].'</td><td> 
                    '.$row[1].' </td><td>   
                        '.$row[2].'</td><td>
                        <button type="submit" name="delete" value="'.$row[2].' "onclick= "remove()"/>Remove</button>
                        <button type="submit" name="resetPassword" value='.$row[2].' onclick= "reset()""/>Reset password</button>';
                }
            ?>
            
            </form>
        </table>
    </div>
     
    <div id="concert">
        <table border="2">
            <form action="" method="post">
                <tr>
                    <?php
                $c2 = "select * from concert";
                $q2 = mysqli_query($connect,$c2);
     
                while($r2= mysqli_fetch_row($q2)){
                    echo "<div ><tr>";
                        foreach($r2 as $element){
                        echo "<td>$element</td>";   
                       }
                       echo  '<div id="edit">
                       <form method="post">
                           <input type = "text" name="Concertname"  placeholder="concertname">
                           <input type = "text" name="Presenter"  placeholder="Presenter">
                           <input type = "text" name="Location" placeholder="Location ">
                           <input type = "text" name="Capacity" placeholder="Capacity">
                           <input type = "text" name="Date" placeholder="Date">
                           <input type = "text" name="Price" placeholder="Price">
                           <input type = "text" name="Status"  placeholder="Status">
                           <input type = "text" name="Discount" placeholder="Discount">
                           <input type = "text" name="Description"placeholder="Description">
                           <input type = "text" name="Time" placeholder="Time">
                           <input type = "text" name="Tickets_available" placeholder="tickets_available">
                           <input type = "text" name="Image" placeholder="Image">
                           <button type="submit" value='.$r2[0].'  name="update" ">save</button>
                        </div>';
                        echo  '<div id="add">
                        <form method="post">
                            <input type = "text" name="aConcertname"  placeholder="concertname">
                            <input type = "text" name="aPresenter"  placeholder="Presenter">
                            <input type = "text" name="aLocation" placeholder="Location ">
                            <input type = "text" name="aCapacity" placeholder="Capacity">
                            <input type = "text" name="aDate" placeholder="Date">
                            <input type = "text" name="aPrice" placeholder="Price">
                            <input type = "text" name="aStatus"  placeholder="Status">
                            <input type = "text" name="aDiscount" placeholder="Discount">
                            <input type = "text" name="aDescription"placeholder="Description">
                            <input type = "text" name="aTime" placeholder="Time">
                            <input type = "text" name="aTickets_available" placeholder="tickets_available">
                            <input type = "text" name="aImage" placeholder="Image">
                            <button type="submit" value='.$r2[0].'  name="update" ">save</button>
                         </div>';
                        echo '<td><button type="button" value='.$r2[0].'  name="update" onclick="updateC()" "/>update</button>  </td>
                        <td><input type = "button" value= "add" onclick="addC()" name="add"></td>';    
                       echo "</tr></form>";
                }
                ?>
        </div>

                
        </div>

        <table border="2">
            <form action="" method="post">
                <tr>
                    <?php
                $c2 = "select * from football";
                $q2 = mysqli_query($connect,$c2);
     
                while($r2= mysqli_fetch_row($q2)){
                    echo "<div ><tr>";
                        foreach($r2 as $element){
                        echo "<td>$element</td>";

                           
                    }
                   
                    echo  '<div id="edit2">
                    <form method="post">
                        <input type = "text" name="Playoff"  placeholder="Playoff">
                        <input type = "text" name="Stadium"  placeholder="Stadium">
                        <input type = "text" name="Date" placeholder="Date ">
                        <input type = "text" name="Price" placeholder="Price">
                        <input type = "text" name="Capacity" placeholder="Capacity">
                        <input type = "text" name="Status" placeholder="Status">
                        <input type = "text" name="img1"  placeholder="image 1">
                        <input type = "text" name="img2" placeholder="image 2">
                        <input type = "text" name="Description"placeholder="Description">
                        <input type= "hidden" value ='.$r2[6].'name= "footId">
                        <button type="submit" value='.$r2[6].'  name="Fupdate" ">save</button>
                     </div>';
                     echo  '<div id="add2">
                     <form method="post">
                     <input type = "text" name="aPlayoff"  placeholder="Playoff">
                     <input type = "text" name="aStadium"  placeholder="Stadium">
                     <input type = "text" name="aDate" placeholder="Date ">
                     <input type = "text" name="aPrice" placeholder="Price">
                     <input type = "text" name="aCapacity" placeholder="Capacity">
                     <input type = "text" name="aStatus" placeholder="Status">
                     <input type = "text" name="aimg1"  placeholder="image 1">
                     <input type = "text" name="aimg2" placeholder="image 2">
                     <input type = "text" name="aDescription"placeholder="Description">
                         <button type="submit" value='.$r2[6].'  name="Fupdate" ">save</button>
                      </div>';
                     echo '<td><button type="button" value='.$r2[6].'  name="Fupdate" onclick="updateC2()" "/>update</button>  </td>
                     <td><input type = "button" value= Add onclick="addC2()" name="add"></td>';    
                    echo "</tr></form>";
             }
                ?>
                </form>
        </table>
<?php
        function delete($user){
            $connect = mysqli_connect('localhost','root','','b_ticket');
            $query = 'delete from  user where User_ID = '.$user.'';
            $q = mysqli_query($connect,$query);

            if($q){
                header("Refresh:1");
                echo '<h1> '.$user.'deleted </h1>';
            }
        }

        function resetPassword($user){
        
            //make a connection
            $connect = mysqli_connect('localhost','root','','b_ticket');
            //create and set a  random reset password
            $resetedPass = rand();
            $email  = '';
            $query = 'update user set password = '.$resetedPass.' where User_ID ='.$user.'';
            $q = mysqli_query($connect,$query);

            header("Refresh:1");
            echo '<h2> Password Reseted </h2>';
            $qemail = mysqli_query($connect,"select * from customer where Cust_ID = $user");
            
            while($row = mysqli_fetch_row($qemail)){
                $email = $row[3];
                $name = $row[1];
            }

            //********Email content*********** */
            $subject = "This is about your resetted password.";
            $message = "<h2 style='background : red;'>Hello ,$name</h2>
            <b>Your password has been reseted to $resetedPass </b>";

            $header = "From:Negat.support@gmail.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
                
            // sending mail  // 
            $sentEmail = mail ($email,$subject,$message,$header);
        
            if( $sentEmail == true ) {
                echo "Message sent successfully...";
            }else {
                echo "Message could not be sent...";
            }
            
        }
        


        if(array_key_exists('delete',$_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
            delete($_POST['delete']); 
        }
        if(array_key_exists('resetPassword',$_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
            resetPassword($_POST['resetPassword']);
        }
      
    ?>
   



       
    </body>
</html>