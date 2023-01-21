<?php
include "qrlib.php";  
$text= 'efefefef';
 $folder="../";
 $file_name="qr.png";
 $file_name=$folder.$file_name;
 QRcode::png($text,$file_name);
 echo"<img src='images/qr.png'>";
 ?>