<?php
    $connect = mysqli_connect('localhost','root','','b_ticket');

    session_start();

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
    // header("refresh:2");
?>