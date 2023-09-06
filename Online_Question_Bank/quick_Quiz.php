<?php
include 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/do_quizStyle.css">
</head>
<body>
    <div class="container">
    <div><a onclick="checker();" href="memberdashboard.php" class="btn btn-primary" style="float: right; margin-right:20px; margin-top:10px;">Dashboard</a></div>
        <h1 class="text-center" style="color: white; font-family:'Times New Roman', Times, serif; font-weight: bold;">Welcome to quiz</h1>
        <h2 class="text-center" style="color: red; font-family:'Times New Roman', Times, serif"><?php if(isset($_GET['err'])){ echo 'Please answer at least one question!!';} ?></h2>
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 m-auto d-block">
        <!-- <div class="card">
            <h3 class="text-center card-header" style="color: darkblue;">Time Left: <span id="countdown"></span></h3>
            <script src="./js/timeScript.js"></script>
        </div>
        <br><br> -->
        <form action="check_Quick_Quiz_ans.php" method="POST">
        <?php
         $q = "SELECT * FROM question;";
         $query = mysqli_query($connect,$q);
         $row1 = mysqli_fetch_assoc($query);
         $start = $row1['qid'];
         $end = $start+19; //should change this line
         $count = 1;
            for($i=$start; $i<=$end; $i++,$count++)
            {
                $q = "SELECT * FROM question where qid=$i";
                $query = mysqli_query($connect,$q);

                while($rows = mysqli_fetch_array($query))
                {
        ?>
                <div class="card">
                    <h4 class="card-header"> <?php echo $count.") ".$rows['question'] ?> </h4>
                    <?php
                         $q = "SELECT * FROM answer where qid=$i";
                         $query = mysqli_query($connect,$q);
             
                         while($rows = mysqli_fetch_array($query))
                         {
                            ?>
                            <div class="card-body">
                                <input type="radio" name="quizcheck[<?php echo $rows['qid']?>]" value="<?php echo $rows['aid']; ?>">
                                <?php echo $rows['answer'];?>
                            </div>
                            
        <?php
            }
        }
        }
        ?>
        <div class="card-body m-auto">
        <input type="submit" name="submit" class="btn btn-success m-auto">
        </div>
        </form>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        function checker(){
            let result = confirm('Are you sure want to Leave Quiz?');
            if(result == false)
            {
                event.preventDefault();
            }
        }
    </script>
</body>
</html> 