<?php
$connect = mysqli_connect('localhost','root','','b_ticket');

$id = $_POST['update'];
$result = ''; 
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

echo $result;
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

$addQ = "insert into concert values( 4, '$aConcertname', '$apresenter', '$alocation','$acapacity', '$adate','$aPrice', 
' $Status','$aDiscount','$aDescription','$aTime','$aTickets_available','$aimage','$aimage')";
mysqli_query($connect,$addQ);

$parsedS = rtrim($result, " ,");
$query = 'update  concert set $parsedS where  Concert_ID = "2" ';

 mysqli_query($connect,$query);
// header('Location: '.$_SERVER["PHP_SELF"], true, 303);
?>

<html>
    <head>
        <title>Admin Panel</title>
        <style>
            .edit,.add{
                display: none;
            }
            
        </style>
        <script>
         function updateC(){
            document.getElementsByClassName("edit")[0].style.display = "inline";
            document.getElementsByClassName("add")[0].style.display = "none";
         
        }
        function addC(){
            document.getElementsByClassName("add")[0].style.display = "inline";
            document.getElementsByClassName("edit")[0].style.display = "none";
          
        }
        
        </script>
    </head>
    <body>
        <header>
            <ul>
                <li><a href="#" >Match </a></li>
                <li><a href="#">Concert </a></li>
                <li><a href="#">users </a></li>
            </ul>
        </header>
        <!-- <div class="notification">
            <?php
            $connect = mysqli_connect('localhost','root','','b_ticket');
                $notificationq = "select * from notification";
                $query1 = mysqli_query($connect,$notificationq);
                
                $row = mysqli_fetch_row($query1);
               
               // $row[0];
            ?>
        </div> -->

    <table border="2">
    <form action="" method="post">
        <tr>
            <?php
                // $c1 = "SELECT COLUMN_NAME
                // FROM INFORMATION_SCHEMA.COLUMNS
                // WHERE TABLE_NAME = N'concert' ";
                $c2 = "select * from concert";
                
                // $q1 = mysqli_query($connect,$c1);
                $q2 = mysqli_query($connect,$c2);

            
                
                while($r2= mysqli_fetch_row($q2)){
                    echo "<tr>";
                        foreach($r2 as $element){
                        echo "<td>$element</td>";
                           
                    }
                    echo  '<div class="edit">
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
                echo  '<div class="add">
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
                        <input type = "text" name="aTime" placeh older="Time">
                        <input type = "text" name="aTickets_available" placeholder="tickets_available">
                        <input type = "text" name="aImage" placeholder="Image">
                        <button type="submit"  name="aupdate" ">ADD</button>
                    
                </div>';     
                     echo '<td><button type="button" value='.$r2[0].'  name="update" onclick="updateC()" "/>update</button>  </td>
                     <td><input type = "button" value= "add" onclick="addC()" name="edit"></td>';    
                    
                      
                        
                    echo "</tr></form>";
                }
                ?>
            
            <!-- <input type = "button" value= "add" onclick="addC()" name="edit"> -->
        
    </form>
     </table>

<!-- /**********users********** */ -->
<p>Users:</p>
<br>
<br>
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
                     <button type="submit" name="resetPassword" value='.$row[2].' onclick= "reset()""/>Reset password</button>
                     <input type="submit" name="X" value="reset"/><br></td></tr>';
            }
         ?>
        
    </form>
     </table>
</div>
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

            // header("Refresh:1");
            echo '<h2> Password Reseted </h2>';
            $qemail = mysqli_query($connect,"select * from customer where Cust_ID = 1");
            
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
            $sentEmail = mail($email,$subject,$message,$header);
        
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
    <script>
        function remove(){
           var result = "<?php resetPassword($_POST['resetPassword']); ?>";
            document.write(result);
        }
        function reset(){
                var result = "<?php delete($_POST['delete']); ?>";
                document.write(result);
        }
        
    </script>
</html>