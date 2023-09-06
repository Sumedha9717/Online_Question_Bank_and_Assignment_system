<?php 
    include 'dbConnection.php';
    $subid = '';
    $total_questions = '';
    $available_questions ='';
    if(isset($_GET['subid']))
    {
        $subid = $_GET['subid'];
        $total_sql = "select * from question where sid=$subid";
        $total_result = mysqli_query($connect,$total_sql);                    
        $total_questions = mysqli_num_rows($total_result);

        //available
        $sql_available = "select * from question where sid=$subid AND active=0";
        $result_available = mysqli_query($connect,$sql_available);
        $available_questions = mysqli_num_rows($result_available);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="css/displaystyle.css">
    <script src="https://kit.fontawesome.com/b41b9ec9a0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="table">
        <div class="table_header">
            <p>Question Bank</p>
            <?php echo'<span style="color:tomato; font-weight:600; font-family:Times New Roman; font-size:30px;">'.$available_questions.' out of '.$total_questions.' questions remaining</span>';?>
        <div>
            <?php echo '<button name="submit" class="btns"><a href="update.php?subid='.$subid.'" style="color:white; margin-right:10px;">Rest All Questions</a></button>'?>
            <button name="btnsearch" class="btns"><a href="lecturedashboard.php" style="color:white;">Lecture Dashboard</a></button>
        </div>
        </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Question</th>
                            <th>Correct Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from question where sid=$subid AND active=0";
                        $result = mysqli_query($connect,$sql);
                        $available_questions = mysqli_num_rows($result);
                        if($result)
                        {
                            while($row= mysqli_fetch_assoc($result))
                            {
                                $id=$row['qid'];
                                $sid= $row['sid'];
                                $sql_ans = "SELECT * FROM answer where qid=$id AND status='correct'";
                                $ans_result = mysqli_query($connect,$sql_ans);
                                $row1 = mysqli_fetch_assoc($ans_result);
                                $question = $row['question'];
                                $answer = $row1['answer'];
                                echo '<tr>
                                    <td>'.$question.'</td>
                                    <td>'.$answer.'</td>
                                    <td><button><a href="create_test.php?qid='.$id.'&sid='.$subid.'"><i class="fa-solid fa-add"></i></a></button></td>
                                </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>