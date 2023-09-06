<?php
include 'dbConnection.php';
if(isset($_POST['btnsubmit']))
{
  $name = $_POST['name'];
  $reg = $_POST['reg'];
  $satisfy = $_POST['service'];
  $answer = $_POST['getAnswer'];
  $feedback = $_POST['txtMsg'];
  $email = $_POST['TxtEmail'];
  $rate = $_POST['rate'];

  $sql = "INSERT INTO feedbacks(name,email,reg_no,satisfy,getAnswer,rate,feedback) VALUES('$name','$email','$reg','$satisfy','$answer',$rate,'$feedback')";
  $result = mysqli_query($connect,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
 <link rel="stylesheet" href="css/Feedbackstyle.css"> 

<body>
    <div class="container feedback-form">
    <div class="feedback-image">
      <img src="img/feedback_img/Feed.png" alt="">
    </div>
    <form method="POST">
      <h3>Drop Us A Feedback</h3>
      <div class="row">
        <div class="col-md-6">

         <div class="form-group">
          <input type="text" class="form-control" placeholder="Yor Name" name="name">
         </div>

         <div class="form-group">
            <input type="text" class="form-control" placeholder="Yor Number" name="reg">
           </div>

           <div class="form-group">
            <p>Did you get Your Answer</p>
            Yes<input type="radio" name="getAnswer" value="Yes">
            No<input type="radio" name="getAnswer" value="No">
           </div>

           <textarea name="txtMsg" class="form-control" placeholder="Your Message or Suggestion" style="width: 600px; height: 150px; margin-bottom: 8px;">
           </textarea>

           <div class="form-group">
            <input type="submit" name="btnsubmit" class="btnfeedback" value="Send Feedback" style="outline: none;">
           </div>

        </div>

        <div class="col-md-6">
            <div class="form-group">
               <input type="email" name="TxtEmail" class="form-control" placeholder="Your Email">

               <p>Did you satisfy with our service</p>
               Yes<input type="radio" name="service" value="Yes">
               No<input type="radio" name="service" value="No">
            </div>

            <div class="form-group">
               <P>What Number you Given Us out of 10</P>
                (1)<input type="radio" name="rate" value=1>
                (2)<input type="radio" name="rate" value=2>
                (3)<input type="radio" name="rate" value=3>
                (4)<input type="radio" name="rate" value=4>
                (5)<input type="radio" name="rate" value=5>
                (6)<input type="radio" name="rate" value=6>
                (7)<input type="radio" name="rate" value=7>
                (8)<input type="radio" name="rate" value=8>
                (9)<input type="radio" name="rate" value=9>
                (10)<input type="radio" name="rate" value=10>
             </div>
        </div>
      </div>
    </form>
    <div class="form-group">
            <button class="btn btn-success m-auto w-100" style="outline: none;"><a href="memberdashboard.php" style="color: white;">Back to Dashboard</a></button>
    </div>
    </div>
</body>
</html>