<?php
include 'dbConnection.php';
if(isset($_POST['submit']))
{
  $course = $_POST['course'];
  $subject = $_POST['subject'];
  $category = $_POST['category'];
  $sem = $_POST['semester'];
  if(empty($course)||empty($subject)||empty($category)||empty($sem))
  {
    header("location:add_quiz.php?err=empty");
  }
  else{
  $sql = "INSERT INTO subject(sname,category,course,semester) VALUES('$subject','$category','$course','$sem');";
  $result = mysqli_query($connect,$sql);
  $getid = "SELECT * FROM subject WHERE sid = last_insert_id()";
  $getResult = mysqli_query($connect,$getid);
  $row = mysqli_fetch_assoc($getResult);
  $subid = $row['sid'];
  header('location:add_quiz2.php?sid='.$subid.'');
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/add_quiz_style.css">
    <title>Document</title>
</head>
<body>
<div class="title">
    <h1>Add Course And Subject</h1>
</div>
<div class="container w-50">
  <h1><?php if(isset($_GET['err'])){echo 'Please Enter All Details';} ?></h1>
<form action="#" method="post">
  <label for="exampleInputEmail1">Select Course</label>
  <select name="course" class="custom-select mt-10">
    <option selected disabled>Select Course</option>
    <option value="HNDIT">HNDIT</option>
    <option value="HNDA">HNDA</option>
    <option value="HNDM">HNDM</option>
  </select>
  <label for="exampleInputEmail1">Select Subject</label>
  <select name="subject" class="custom-select mt-10">
  <option selected disabled>Select Subject</option>
    <option value="VAP">Visual Application Programming</option>
    <option value="Web">Web Design</option>
    <option value="CNS">Computer and Network Systems</option>
    <option value="MIS">Information Management and Information Systems</option>
  </select>
  <label for="exampleInputEmail1">Select Category</label>
  <select name="category" class="custom-select mt-10">
    <option selected disabled>Select Category</option>
    <option value="none">None</option>
    <option value="Web">Web Design</option>
    <option value="CNS">Computer and Network Systems</option>
    <option value="MIS">Information Management and Information Systems</option>
  </select>
  <label for="exampleInputEmail1">Select Semester</label>
  <select name="semester" class="custom-select mt-10">
    <option selected disabled>Select Semester</option>
    <option value="semester1">Semester I</option>
    <option value="semester2">Semester II</option>
    <option value="semester3">Semester III</option>
    <option value="semester4">Semester IV</option>
  </select>
  <button type="submit" name="submit" class="btn btn-primary mt-2">Next</button>
</form>
<div>
<button style="margin-top: 10px; background-color:skyblue; border-radius:8px; padding:5px; margin-left:500px;"><a href="lecturedashboard.php" style="color: white;">Back To Dashboard</a></button>
</div>
</div>
</body>
</html>