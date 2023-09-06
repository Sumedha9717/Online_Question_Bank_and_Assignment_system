<?php
include 'dbConnection.php';
$sub_id = '';
if(isset($_GET['subid']))
{
   $sub_id = $_GET['subid'];
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
        <form action="check_ans.php" method="POST">
        <?php
         $subjectID=$sub_id;
         $sql_qst = "SELECT * FROM question where sid=$sub_id and active=1";
         $result = mysqli_query($connect,$sql_qst);
         //$row1 = mysqli_fetch_assoc($query);
         //$num_qstions = mysqli_num_rows($query);
         //$start = $row1['qid'];
         //$end = $num_qstions; //should change this line
         $question = array();
         while($row1 = mysqli_fetch_assoc($result))
         {
            $question[] = $row1;
         }
         $count = 0;
            foreach( $question as $i){
            $count++;
            //$q = "SELECT * FROM question where qid=$qid and active=1";
            //$query = mysqli_query($connect,$q);

            //while($rows = mysqli_fetch_array($query))
            //{
        ?>


                <div class="card">
                    <h4 class="card-header"> <?php echo $count.") ".$i['question'] ?> </h4>
                    <?php
                         $qid = $i['qid'];
                         $q = "SELECT * FROM answer where qid=$qid";
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
        ?>
        <div class="card-body m-auto">
        <input type="text" name="subid" value="<?php echo $sub_id;?>" size="1" hidden>
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