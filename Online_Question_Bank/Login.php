<?php
	$msg = "";
	include 'dbConnection.php';
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$username = strtoupper($_POST["username"]);
		$password = $_POST["password"];
		if(empty($username)||empty($password))
		{
			$msg = "<div class='alert alert-danger'>All Fields are Required !!</div>";
		}
		else
		{
			$sql = "select * from user_details where username='".$username."' AND password='".$password."' AND active_status=1";
			$result = mysqli_query($connect,$sql);
			$row = mysqli_fetch_array($result);
			if($row)
			{
				if($row["userType"]=="student")
				{
					$_SESSION["username"]=$row['username'];
					$_SESSION["id"] = $row['id'];
					$_SESSION["nic"] = $row['nic'];
					header("location:memberdashboard.php");
				}
				elseif($row["userType"]=="lecture")
				{
					$_SESSION["id"] = $row['id'];
					$_SESSION["username"]=$row['username'];
					header("location:lecturedashboard.php");
					
				}
				elseif($row["userType"]=="admin")
				{
					$_SESSION["id"] = $row['id'];
					$_SESSION["username"]=$row['username'];
					header("location:admindashboard.php");
				}
				else
				{
					$msg = "<div class='alert alert-danger'>Invalid Username Or Password !!</div>";
				}
			}
			else
			{
				$msg = "<div class='alert alert-danger'>Invalid Username Or Password !!</div>";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/LoginStyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="home-btn"><a href="index.php"><button style="padding: 10px; border-radius:5px; background-color:skyblue;color:white;cursor:pointer">Home</button></a></div>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg1.svg">
		</div>
		<div class="login-content">
			<form action="#" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
				<?php echo $msg; ?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
				
			</form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
