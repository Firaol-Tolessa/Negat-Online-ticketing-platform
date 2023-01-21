<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
if($_SESSION['LOGGEDIN']==true && $_SESSION['ROLE']=='ADMIN'){
$connect = mysqli_connect('localhost','root','','b_ticket');


$Fid = $_POST['Fupdate'];
echo $Fid;
$result2 = '';


echo 'THE RESULT IS '.$result2;

if(isset($aStadium)){
    $add = "insert into football (Playoff,Stadium,Date,Price,Capacity,Status,img1,img2,Description) 
    values ('$aPlayoff','$aStadium','$aDate ','$aPrice ','$aCapacity','$aStatus','$aimg1','$aimg2','$aDescription')";
    mysqli_query($connect,$add);
   
    echo "<script>console.log('$Fid')</script>";
   } if(false){
       $parsedS = rtrim($result2, " ,");
       $query2 = "update  football set $parsedS where  F_ID = \"2\"";
       echo $query2;
           mysqli_query($connect,$query2);
           echo "<script>console.log('$Fid')</script>";
       }
       }else{
           header("location: index.php");
   }
?>

<html>
    <head>
    <style>
            #edit,#add,#edit2,#add2{
                display: none;
            }
            
        </style>
    </head>
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
                   
                    echo '
                        ';    
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
                        
                        <input type= "hidden" value ='.$r2[6].'name= "unique">
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
                    echo '<td><input type="hidden" value='.$r2[6].' name = "hidden"></td> 
                    <td><input type="button"   value=Update name="update" onclick="updateC2()" "/></button>  </td>
                     <td><input type = "button" value= add onclick="addC2()" name="add"></td>'; 
                    echo "</tr></form>";
             }
                ?>
                </form>
        </table>
</html>