<?php
$msg = "";
include 'dbConnection.php';
include 'validation.php';
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
	$nameWithInitials = $_POST['namewith_initials'];
    $fullName = $_POST['fullName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $nic = $_POST['nic'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $reg_no = $_POST['regNo'];
    $ati = $_POST['ati'];
    $course = $_POST['courses'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $c_password= $_POST['c_password'];
    $user_type = "student";
	$active = 1;
	if($nameWithInitials==""|| $fullName==""||$dob==""||$dob==""||$gender==""||$nic==""||$phone==""||$email==""||$reg_no==""||$ati==""||$course==""||$username==""||$password==""||$c_password=="")
	{
		$msg = "<div class='alert alert-danger'>All fields are required.</div>";
	}
	else
	{
		$nicCheck = checkNic($nic);
		if($nicCheck)
		{
			$msg = "<div class='alert alert-danger'>Please Check Your NIC!!</div>";
		}else
		{
			$checkExistRegNo = checkRegNo($reg_no);
			if($checkExistRegNo)
			{
				$msg = "<div class='alert alert-danger'>This Register Number Already Exist!!</div>";
			}
			else
			{
				$checkReg = checkValidRegNo($reg_no,$ati,$course);
				if(!$checkReg)
				{
					$msg = "<div class='alert alert-danger'>Please Enter Correct Register Number !!</div>";
				}
				else
				{
					if($password!==$c_password)
					{
						$msg = "<div class='alert alert-danger'>password and confirm password do not match!!</div>";
					}
					else
					{
						$sql = "INSERT INTO user_details(nameWithInitials,fullName,dob,gender,nic,phone,email,regNo,center,course,username,password,userType,active_status) VALUES('$nameWithInitials','$fullName','$dob','$gender','$nic','$phone','$email','$reg_no','$ati','$course','$username','$password','$user_type','$active');";
						$result = mysqli_query($connect,$sql);
						$sql_login = "INSERT INTO login(username,password,userType,nic) VALUES('$username','$password','$user_type','$nic');";
						$result1 = mysqli_query($connect,$sql_login);
						$msg = "<div class='alert alert-success'>successfully added to the database !!</div>";
						header("location:admindashboard.php");
					}
				}
			}
		}		
	}
     
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
		<div class="container">
			<div>
				<a href="index.php" class="btn btn-primary">Home Page</a></button>
			</div>
			<div class="title">Member Registration</div>
			<?php echo $msg; ?>
			<form action="#" method="POST">
				<div class="user-details">
					<div class="input-box">
						<span class="details">Name with Initials</span>
						<input type="text" name="namewith_initials" placeholder="Eg : A.M Senavirathne " required>
					</div>
					<div class="input-box">
						<span class="details">Full Name</span>
						<input type="text" name="fullName" placeholder="Eg : Avindu Matheesha Senavirathne " required>
					</div>
					<div class="input-box">
						<span class="details">Birthday</span>
						<input type="date" name="dob">
					</div>
					<div class="drop-box">
						<span class="details">Gender</span>
						<select name="gender" class="box" required>
							
							<option value="Male" selected>Male</option>
							<option value="Female">Female</option>
							<option value="NPS">Not Preferd For Say</option>
						</select>
					</div>
					<div class="input-box">
						<span class="details">NIC</span>
						<input type="text" name="nic" placeholder="Enter NIC Number " required>
					</div>
					<div class="input-box">
						<span class="details">Phone</span>
						<input type="text" name="phone" placeholder="Eg : 077 xxx xxxx " required>
					</div>
					<div class="input-box">
						<span class="details">Email</span>
						<input type="email" name="email" placeholder="Eg : abc@gamil.com ">
					</div>
					<div class="input-box">
						<span class="details">Registration Number</span>
						<input type="text" name="regNo" placeholder="Eg : KAN/IT/2020/F/0000" required>
					</div>
					<div class="drop-box">
						<span class="details">Course</span>
						<select name="courses" class="box" required>
							
							<option value="Accountancy" selected>Accontancy</option>
							<option value="Agriculture">Agriculture</option>
							<option value="Business Finance">Business Finance</option>
							<option value="Consumer Science and Product">Consumer Science and Product</option>
							<option value="Engineering">Engineering </option>
							<option value="Engineering (Building Services)">Engineering (Building Services)</option>
							<option value="Engineering (Mechanical)">Engineering (Mechanical)</option>
							<option value="English">English</option>
							<option value="Food Technology">Food Technology</option>
							<option value="Information Technology">IT</option>
							<option value="Management">Management</option>
							<option value="Tourism And Hospitality Management">THM</option>
							<option value="Quantity Survey">Quantity Survey</option>
                		</select>
					</div>
					<div class="drop-box">
						<span class="details">Center</span>
						<select name="ati" class="box" required>
							
							<option value="Ampara" selected>Ampara</option>
							<option value="Badulla">Badulla</option>
							<option value="Dehiwala">Dehiwala</option>
							<option value="Galle">Galle</option>
							<option value="Gampaha">Gampaha </option>
							<option value="Jaffna">Jaffna</option>
							<option value="Kandy">Kandy</option>
							<option value="Kegalle">Kegalle</option>
							<option value="Colombo">Colombo</option>
							<option value="Trincomalee">Trincomalee</option>
							<option value="Rathnapura">Rathnapura</option>
							<option value="Sammanthurai">Sammanthurai</option>
							<option value="Tangalle">Tangalle</option>
							<option value="Vauniya">Vavuniya</option>
							<option value="Nawalapitiya">Nawalapitiya</option>
							<option value="Mannar">Mannar</option>
							<option value="Anuradhapura">Anuradhapura</option>
							<option value="Batticaloa">Batticaloa</option>
                		</select>
					</div>
					<div class="input-box">
						<span class="details">Red Book Image</span>
						<input type="text" name="image" placeholder="Paste your Red-Book Image link here...">
					</div>
					<div class="input-box">
						<span class="details">User Name</span>
						<input type="text" name="username" placeholder="Enter Username " required>
					</div>
					<div class="input-box">
						<span class="details">Password</span>
						<input type="password" name="password" placeholder="Enter Password " required>
					</div>
					<div class="input-box">
						<span class="details">Confrim Password</span>
						<input type="password" name="c_password" placeholder="Enter Confrim Password " required>
						<small>Passowrd Do not match</small>
					</div>
				</div>
					<div class="button">
						<input type="submit"name='submit' value='Register'>
					</div>	
			</form>
		</div>
</body>
</html>