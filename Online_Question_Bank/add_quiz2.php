<?php
include 'dbConnection.php';
if(isset($_GET['sid'])&&isset($_POST['submit']))
{
    $sid = $_GET['sid'];
    $question = $_POST['qst'];
    $ans1 = $_POST['ans1'];
    $ans2 = $_POST['ans2'];
    $ans3 = $_POST['ans3'];
    $ans4 = $_POST['ans4'];
    $correct = $_POST['correctans'];
    $answers = [];
    $status=[];
    if(empty($question)||empty($ans1)||empty($ans2)||empty($ans3)||empty($ans4))
    {
      header("lcoation:add_quiz2.php?err=empty");
    }
    else{
    $answers[0] = $ans1;
    $answers[1] = $ans2;
    $answers[2] = $ans3;
    $answers[3] = $ans4;
    $status[0]  = 'incorrect';
    $status[1]  = 'incorrect';
    $status[2]  = 'incorrect';
    $status[3]  = 'incorrect';

    $sqlsecond = "INSERT INTO question(sid,question) VALUES('$sid','$question');";
    $resultsecond = mysqli_query($connect,$sqlsecond);


    $getid = "SELECT * FROM question WHERE qid = last_insert_id()";
    $getResult = mysqli_query($connect,$getid);
    $row = mysqli_fetch_assoc($getResult);
    $qid = $row['qid'];
    if($correct ==1)
    {
        $status[0] = "correct";
    }
    else if($correct ==2)
    {
        $status[1] = "correct";
    }
    else if($correct == 3)
    {
        $status[2] = "correct";
    }
    else if($correct == 4)
    {
        $status[3] = "correct";
    }
    else
    {
         echo'not found';
    }
    for($i=0; $i<4; $i++)
    {
       
      $sqlans = "INSERT INTO answer(answer,qid,status) VALUES('$answers[$i]','$qid','$status[$i]')";
      $ansresult = mysqli_query($connect,$sqlans);
    }
    $answer = "SELECT * FROM answer WHERE qid=$qid AND status='correct'";
    $result = mysqli_query($connect,$answer);
    $row1 = mysqli_fetch_assoc($result);
    $a_id = $row1['aid'];
    if($result)
    {
      $c_ans = "UPDATE question SET ans_id=$a_id WHERE qid=$qid";
      $c_ans_result = mysqli_query($connect,$c_ans);
    }
    else{
      echo 'result not found!!';
    }
    echo 'Successfully added to the database!!';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/add_quiz_style.css">
</head>
<body>
<div class="title">
    <h1>Add Question And Answers</h1>
</div>
<div class="container w-50">
<h1><?php if(isset($_GET['err'])){echo 'Please Enter All Details';} ?></h1>
<form action="#" method="POST">
  <div class="form-group">
    <label>Enter Question</label>
    <input type="text" name="qst"class="form-control" placeholder="Enter Question">
  </div>
  <div class="form-group">
    <input type="text" name="ans1" class="form-control" placeholder="Enter Answer 1">
  </div>
  <div class="form-group">
    <input type="text" name="ans2" class="form-control" placeholder="Enter Answer 2">
  </div>
  <div class="form-group">
    <input type="text" name="ans3" class="form-control" placeholder="Enter Answer 3">
  </div>
  <div class="form-group">
    <input type="text" name="ans4" class="form-control" placeholder="Enter Answer 4">
  </div>
  <label for="exampleInputEmail1">Select Correct Answer</label>
  <select name="correctans" class="custom-select mt-10">
    <option selected disabled>Select Correct Answer</option>
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=3>3</option>
    <option value=4>4</option>
  </select>
  <button type="submit" name="submit" class="btn btn-primary mt-2">Add Question</button>
</form>
<div>
  <button style="margin-top: 10px; background-color:skyblue; border-radius:8px; padding:5px; margin-left:500px;"><a href="lecturedashboard.php" style="color: white;">Back To Dashboard</a></button>
</div>
</div>
</body>
</html>