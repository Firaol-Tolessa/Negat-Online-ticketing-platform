<?php
$connection = mysqli_connect('localhost','root','','b_ticket');
$userName = $_POST['userName'];
$password = $_POST['password'];
$c1 = "select  * from b_user where username = '$userName' and password = '$password'";
$q1 = mysqli_query($connection,$c1);
if(mysqli_num_rows($q1)==0){
    echo 'doesnt exist';
}else{
    echo 'logged in';
}
?>


<html>
    <body>
        <h1>Login</h1>
    <form action="" method="post">
		<input type = "text" name = "userName" placeholder="User name">
        <input type = "password" name = "password" placeholder="password">
		<input type = "submit" value  = "LOGIN">
	</form>
    </body>
</html>