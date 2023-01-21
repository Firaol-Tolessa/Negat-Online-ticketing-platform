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

$parsedS = rtrim($result, " ,");
echo $parsedS;
$query = "update  'concert' set  $parsedS where  Concert_ID = 1";
echo $query;
//  mysqli_query($connect,$query);
// header('Location: '.$_SERVER["PHP_SELF"], true, 303);
?>