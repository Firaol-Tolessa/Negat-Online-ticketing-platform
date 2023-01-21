<?php

$connection = mysqli_connect('localhost','root','','b_ticket');


isset($_POST['userName']);
isset($_POST['password']);

$userName = $_POST['userName'];
$password = $_POST['password'];
$varPassword = isset($_POST['varPassword']);
$email = isset($_POST['email']);
$cc = isset($_POST['cc']);
$date = isset($_POST['date']);
$ccv = isset($_POST['ccv']);
$msg ='';
$id = rand();
$insertQ = "insert into customer(Cust_ID,Name,Email,Bank_Acc,Date,Ccv) values ('$id','$userName','$email','$cc','$date','$ccv')";
$insertQ2 = "insert into user(username,password,User_ID) values ('$userName','$password','$id')";
	
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
if(($_SESSION["LOGGEDIN"])==true){
	header('Refresh:2;url=index.php');
}
if(isset($password) && trim($password)!=''){
	echo 'the password is'.$password;
	if(!$uppercase){
		$msg = '<div id= "msg" style ="background:#d85c86b5;"><img src ="image/icon/ico1.png" >Password should be at least 8 characters in length and should include at least 
		<ul><li> one upper case letter,</li> <li>one number,</li> <li>and one special character.</li></ul> </div>';
		
	}else if($password != $varPassword){
		$msg = '<div id ="msg" style ="background:#d85c86b5;"> <img src ="image/icon/ico1.png" >The passwords you entered dont match! <br>please enter the password again</div>';	
	}
	else{
		$msg = '<div id ="msg" style ="background:#69a156c2;"> <img src ="image/icon/ico2.png" >You will get an activation key email request.</div>';	
		header('Refresh:2;url=login.php');
		if($userName != ''){
			$query = mysqli_query($connection,$insertQ2);
			$query = mysqli_query($connection,$insertQ);
			
		}else{
			echo "<br> No defined username";
		}
	}
}else{
	echo 'the password is empty';
}

?>



<html>
<head>
<link href="css/signUp.css" rel="stylesheet" type="text/css">

<script>
	var pwdBox = document.getElementByName('password');
	var pwdVar = document.getElementByName('varPassword');
	var cc = document.getElementByName('cc');
	var ccv = document.getElementByName('ccv');
	if(pwdBox.value != '' && varBox.value != '' && pwdBox.value != pwdVar.value){
		alert("passwords don't match write again");
	}else if(ccv.value < 0 || ccv.value > 999){
		alert("CCV incorrect write again");
	};
	
	for(var i =0;i<cc.value.length; i++){
		if(true){
			alert(cc.value[i]);
		}
	}
		
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>

	<body>
	<div id="msg"><?php echo $msg?></div>
	<div id = "box" style= " filter:blur(2px)">
	</div>

	<div id = "box">
	<div id="icon">
		<h1><u>NEGAT</u></h1>
	</div>
	<form method="post" action="" >
	
	<input type = "text" name= "userName" placeholder="Username" >
	<br/>
	<input type = "password" name= "password" placeholder="Password" >
	<br/>
	
	 <input type = "password" name= "varPassword" placeholder="Verify Password" >
	<br/>
	
	<input type = "email" name= "email" placeholder="Email" >
	<br/>
	
	<div id="bank">
	<input type = "text" name= "cc" placeholder="CC no" >
	<input type = "number" name= "ccv"  placeholder="CCV" >
	<input type = "date" name= "date" >
	
	</div>
	 
	<input type = "submit" style="width :150px;">
	Login
		
	<div id="footer">
	<hr>
		Contact Us  @
	<label>Negat Ltd</label> 
	
	</div>

	</form>
	
	</div>
	
	
	</body>
</html>