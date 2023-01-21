<?php
$connection = mysqli_connect('localhost','root','','b_ticket');
$userName = $_POST['userName'];
$password = $_POST['password'];
$c1 = "insert into b_user values('','$userName','$password')";
$q1 = mysqli_query($connection,$c1);
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["file"]["name"]);
echo $target_file;
?>

<html>
    <body>
        <h1>Signup</h1>
    <form action="" method="post" enctype="multipart/form-data" >
		<input type = "text" name = "userName" placeholder="User name">
		<input type = "password" name = "password" placeholder="Password">
        <input type = "file" name = "file">
		<input type = "submit" value  = "LOGIN">
	</form>
    </body>
</html>