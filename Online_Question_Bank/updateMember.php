<?php
  include 'dbConnection.php';
  $msg = "";
  $id = $_GET['updateid'];
  $sql = "select * from user_details where id=$id";
  $result = mysqli_query($connect,$sql);
  $row =mysqli_fetch_assoc($result);
  $nameWithInitials = $row['nameWithInitials'];
  $fullName = $row['fullName'];
  $dob = $row['dob'];
  $gender = $row['gender'];
  $nic = $row['nic'];
  $phone = $row['phone'];
  $email = $row['email'];
  $reg_no = $row['regNo'];
  $ati = $row['center'];
  $course = $row['course'];
  $username = $row['username'];
  $password = $row['password'];

  if(isset($_POST['submit'])){
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
	if($nameWithInitials==""|| $fullName==""||$dob==""||$dob==""||$gender==""||$nic==""||$phone==""||$email==""||$reg_no==""||$ati==""||$course==""||$username==""||$password==""||$c_password=="")
	{
		$msg = "<div class='alert alert-danger'>All fields are required.</div>";
	}
	else
	{
		if($password!==$c_password)
		{
			$msg = "<div class='alert alert-danger'>password and confirm password do not match!!</div>";
		}
		else
		{
			$sql = "UPDATE user_details SET id=$id,nameWithInitials='$nameWithInitials',fullName='$fullName',dob='$dob',gender='$gender',nic='$nic',phone='$phone',email='$email',regNo='$reg_no',center='$ati',course='$course',username='$username',password='$password' WHERE id=$id";
			$result = mysqli_query($connect,$sql);
			$sql_login = "UPDATE login SET username='$username',password='$password',nic='$nic' WHERE nic=$nic";
			$result1 = mysqli_query($connect,$sql_login);
			$msg = "<div class='alert alert-success'>successfully added to the database !!</div>";
			header("location:display.php");
		}
		
	}
     
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
		<div class="container">
			<div class="title">Student Registration</div>
			<?php echo $msg; ?>
			<form action="#" method="POST">
				<div class="user-details">
					<div class="input-box">
						<span class="details">Name with Initials</span>
						<input type="text" name="namewith_initials" placeholder="Eg : A.M Senavirathne " value=<?php echo $nameWithInitials; ?> required>
					</div>
					<div class="input-box">
						<span class="details">Full Name</span>
						<input type="text" name="fullName" placeholder="Eg : Avindu Matheesha Senavirathne " value=<?php echo $fullName; ?> required>
					</div>
					<div class="input-box">
						<span class="details">Birthday</span>
						<input type="date" name="dob" value=<?php echo $dob; ?>>
					</div>
					<div class="drop-box">
						<span class="details">Gender</span>
						<select name="gender" class="box" required>
							<option value=<?php $gender;?> selected><?php echo $gender; ?></option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="NPS">Not Preferd For Say</option>
						</select>
					</div>
					<div class="input-box">
						<span class="details">NIC</span>
						<input type="text" name="nic" placeholder="Enter NIC Number " value=<?php echo $nic; ?> required>
					</div>
					<div class="input-box">
						<span class="details">Phone</span>
						<input type="text" name="phone" placeholder="Eg : 077 xxx xxxx " value=<?php echo $phone; ?> required>
					</div>
					<div class="input-box">
						<span class="details">Email</span>
						<input type="email" name="email" placeholder="Eg : abc@gamil.com " value=<?php echo $email; ?>>
					</div>
					<div class="input-box">
						<span class="details">Registration Number</span>
						<input type="text" name="regNo" placeholder="Eg : KAN/IT/2020/F/0000" value=<?php echo $reg_no; ?> required>
					</div>
					<div class="drop-box">
						<span class="details">Course</span>
						<select name="courses" class="box" required>
							<option value=<?php $course;?> selected><?php echo $course; ?></option>
							<option value="Accountancy">Accontancy</option>
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
							<option value=<?php $ati;?> selected><?php echo $ati;?></option>
							<option value="Ampara">Ampara</option>
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
						<input type="link" name="image">
					</div>
					<div class="input-box">
						<span class="details">User Name</span>
						<input type="text" name="username" placeholder="Enter Username " value=<?php echo $username; ?> required>
					</div>
					<div class="input-box">
						<span class="details">Password</span>
						<input type="password" name="password" placeholder="Enter Password " value=<?php echo $password; ?> required>
					</div>
					<div class="input-box">
						<span class="details">Confirm Password</span>
						<input type="password" name="c_password" placeholder="Enter Confrim Password " value=<?php echo $password; ?> required>
						<small>Passowrd Do not match</small>
					</div>
				</div>
					<div class="button">
						<input type="submit"name='submit' value='Update Profile'>
					</div>	
			</form>
		</div>
</body>
</html>