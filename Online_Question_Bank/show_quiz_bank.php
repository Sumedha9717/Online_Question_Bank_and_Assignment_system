<?php 
    include 'dbConnection.php';
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
        <div>    
            <button name="btnsearch" class="btns"><a href="lecturedashboard.php" style="color:white;">Lecture Dashboard</a></button>
        </div>
        </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Question</th>
                            <th>Correct Answer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from question";
                        $result = mysqli_query($connect,$sql);
                        if($result)
                        {
                            while($row= mysqli_fetch_assoc($result))
                            {
                                $id=$row['qid'];
                                $sid= $row['sid'];
                                $sql_sub = "SELECT * FROM subject where sid=$sid;";
                                $sub_result = mysqli_query($connect,$sql_sub);
                                $row2 = mysqli_fetch_assoc($sub_result);
                                $subject = $row2['sname'];
                                $sql_ans = "SELECT * FROM answer where qid=$id AND status='correct'";
                                $ans_result = mysqli_query($connect,$sql_ans);
                                $row1 = mysqli_fetch_assoc($ans_result);
                                $question = $row['question'];
                                $answer = $row1['answer'];
                                echo '<tr>
                                    <td>'.$subject.'</td>
                                    <td>'.$question.'</td>
                                    <td>'.$answer.'</td>
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