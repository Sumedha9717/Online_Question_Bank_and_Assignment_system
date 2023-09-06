<?php
	if(isset($_POST['submit']))
	{
		$name = $_POST['uploadfile'];
		if(empty($name))
		{
			header("location:addMembers.php?err=empty");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Members</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/addMembers.css">
</head>
<body>
    <div class="container">
        <div class="title"><h1>Add New Members</h1></div>
        <div>
            <h4 style="color: tomato;"><?php if(isset($_GET['err'])){ echo 'Please attach Excel File'; } ?></h4>
        </div>
        <form action="importExcel.php" method="POST" enctype="multipart/form-data">
            <label>Select User Type</label><br>
            <select name="userType" required>
                <option value="Student" selected>Student</option>
                <option value="Lecture">Lecture</option>
            </select><br><br><br>
            <label>Choose Excel File</label><br>
            <input type="file" name="uploadfile" class="choose-file">
            <br><br><br>
            <a href="student.php">Or do you want to add single member?</a>
            <br><br>
            <input type="submit" name="submit" value="Add Members" class="btn btn-success">
          </form>
          <div>
            <button style="margin-top: 30px; background-color:darkcyan; padding:5px; border-radius:10px; margin-right:400px;"><a href="admindashboard.php" style="color:#ffffff;">Back To Dashboard</a></button>
          </div>
    </div>    
</body>
</html>