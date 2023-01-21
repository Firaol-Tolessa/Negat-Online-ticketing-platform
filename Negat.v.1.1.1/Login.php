<?php
	// this is to supress the warning variables
	error_reporting(E_ERROR | E_PARSE);
	$connection = mysqli_connect('localhost','root','','b_ticket');
	$user = correct($_POST['userName']);
	$password = correct($_POST['password']);
	$errorMsg =' ';
	session_start();
	
	
	$query = "select * from user where username = '$user' and password = '$password' ";
	$q = mysqli_query($connection,$query);

	$role = mysqli_fetch_assoc($q)['Role'];

	
		if(isset($_SESSION["LOGGEDIN"])){
			header('location: index.php');
		}
		else if(mysqli_num_rows($q)==0){
			// we can use this nested if to display texts
			// The trim function checks if inputs are only spaces and will trim from beggining and end side
			echo "<div id= 'msg'>
			<img src='image/icon/ico3.png'>Sorry the username or password you <u>entered</u> is not quite right 
			</div>" ;
			$errorMsg = 'This form needs to be filled';
		}
		else if( (isset($user) &&trim($user) == '') || (isset($password) && trim($password) == '') ){
			echo "<div id= 'msg'>
			<img src='image/icon/ico1.png'>Sorry the user name and password you <u>entered</u> is not quite right. Have you forgotten your <u>password</u>? 
			</div>" ;
		}else if(mysqli_num_rows($q) == 1 && $role == 'USER'){
			echo "<div id= 'msg' style ='background : #6de581b8;'>
			<img src='image/icon/ico2.png'>Login successful, welcome '$user'
			</div>" ;
			//Array association that gives key:value pair
			$row = mysqli_fetch_assoc($q);
			$_SESSION["USERNAME"] = $user;
			$_SESSION["USERID"]= $row['User_ID'];
			$_SESSION["LOGGEDIN"] = true;
			$_SESSION["ROLE"] = $role;
			//jscode to direct flow to index.php
			echo '<script>
			window.setTimeout(function() {
				window.location.href = "index.php";
			}, 2000);
			</script>';
		}else if(mysqli_num_rows($q) == 1 && $role == 'ADMIN'){
			echo "<div id= 'msg' style ='background : #6de581b8;'>
			<img src='image/icon/ico2.png'>Login successful, welcome '$user'
			</div>" ;
			//Array association that gives key:value pair
			$row = mysqli_fetch_assoc($q);
			$_SESSION["USERNAME"] = $user;
			$_SESSION["USERID"]= $row['User_ID'];
			$_SESSION["LOGGEDIN"] = true;
			$_SESSION["ROLE"] = $role;
			echo '<script>
			window.setTimeout(function() {
				window.location.href = "admin.php";
			}, 2000);
			</script>';

		}
		else{
			echo "i dont know what happened $errorMsg;";
		}
	function correct($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	mysqli_close($connection);

?>


<html>
<head>
<link href="css/login.css" rel="stylesheet" type="text/css">
</head>
<body>


</div>

<div id="box">
	<div id="front"><label>NEGAT </label><br/> Welcome to Negat, login to access all of Negat <h1>Hover</h1></div>
	<div id= "back">
		<label><u>Login</u><label>
		
	<form action="" method="post">
		<input type = "text" name = "userName" placeholder="User name"><br/> <?php echo '<label style = "color : white; letter-spacing:1px;font-size:10px;">'.$errorMsg."</label>" ?>
		<input type = "password" name = "password" placeholder="Password"> <br/> <?php echo '<label style = "color : white; letter-spacing:1px;font-size:10px;">'.$errorMsg."</label>" ?>
		<input type = "submit" value  = "LOGIN">
	</form>
	<a href="#"> Forgot password?</a>
	</div>
</div>


</body>
<html>