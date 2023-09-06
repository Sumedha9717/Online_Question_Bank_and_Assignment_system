<?php
session_start();
include 'dbConnection.php';
    $msg ='';
    $id= $_SESSION['id'];
    $sql = "SELECT * FROM user_details WHERE id=$id";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    $nameWithInitials = $row['nameWithInitials'];
    $email = $row['email'];
    $phone = $row['phone'];
    $dob = $row['dob'];
    $reg = $row['regNo'];
    $password = $row['password'];
    
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/checkstyle.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Eidt Profile Page</title>
</head>
<body style="background-image: url(./img/Profile/pr-bg.png);">
<center>
<div class="box">
    <form action="#" method="POST">
        <input type="file" id="file" name="image" >
        <img src="./img/Profile/pr-bg.png" width="100%" height="100%">
        <label for="file">EDIT PIC</label>
        <input type="email" placeholder="Email" name="email" value=<?php echo $email?>>
        <input type="text" placeholder="Phone Number" name="phone" value=<?php echo $phone?>>
        <input type="text" placeholder="Date of Birth" name="dob" value=<?php echo $dob?>>
        <input type="text" placeholder="NIC" name="regNo" value=<?php echo $reg?>>
        <input type="password" placeholder="Password"name="password"value=<?php echo $password?>>
        <input type="password" placeholder="Confirm Password" name="cPassword" value=<?php echo $password?>>
        <button style="float: left;margin: 10px 0 0 18.2%;"><a href="lecturedashboard.php" style="color: white;">CANCEL</a></button>
        <button name="submit" style="float: right;margin:10px 18.2% 0 0;">DONE</button>
    </form>
</div>


</center>

</body>
</html>