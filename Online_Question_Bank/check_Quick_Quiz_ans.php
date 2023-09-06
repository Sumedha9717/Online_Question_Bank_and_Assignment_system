<?php
include 'dbConnection.php';
session_start();
if(isset($_POST['submit']))
{
    if(!empty($_POST['quizcheck']))
    {
        $count = count($_POST['quizcheck']);
        //echo "Out of 5, you have selected ".$count."Options!!";

        $result = 0;
        $questionid = "SELECT * FROM question";
        $resultqid = mysqli_query($connect,$questionid);
        $rowid = mysqli_fetch_array($resultqid);
        $countQid = $rowid['qid'];
        $i=$countQid;
        $selected = $_POST['quizcheck'];
        //print_r($selected);
        $q = "SELECT * FROM question";
        $query = mysqli_query($connect,$q);
        while($rows = mysqli_fetch_array($query))
        {
            //print_r($rows['ans_id']);
            if(!empty($selected[$i])){
            $checked = $rows['ans_id'] == $selected[$i];
            if($checked)
            {
                $result+=5;
            }
        }
            $i++;
        }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/showresult.css">
</head>
<body>
<div class="container w-60">
    <div class="title">
        <h1>Result</h1>
    </div>
<table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><?php echo $_SESSION['username']; ?></th>
      <th scope="col"></th>
      <th scope="col"><?php echo $count; ?> out of 20 Questions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><span class="text">Score</span></td>
      <td><span class="text"><?php echo $result;?>/100</span></td>
      <td></td>
    </tr>
  </tbody>
</table>
<div>
    <button class="btn btn-success"><a href="memberdashboard.php">Back To Dashboard</a></button>
</div>
</div>
</body>
</html>
<?php
   }
   else
   {
       header('location:quick_Quiz.php?err=empty');
   }
}
//$finalresult = "INSERT INTO user(username,totalques,answerscorrect) VALUES('Tom','5','$result');";
//$queryresult = mysqli_query($connect,$finalresult);
?>