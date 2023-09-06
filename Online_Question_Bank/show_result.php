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
            <p>Student Result</p>
        <div>    
            <button name="btnsearch" class="btns"><a href="lecturedashboard.php" style="color:white;">Lecture Dashboard</a></button>
        </div>
        </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Register No</th>
                            <th>No Of Answered Questions</th>
                            <th>Total Questions</th>
                            <th>No Of Correct Answers</th>
                            <th>Total Score</th>
                            <th>Date and Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from result";
                        $result = mysqli_query($connect,$sql);
                        if($result)
                        {
                            while($row= mysqli_fetch_assoc($result))
                            {
                                $id=$row['id'];
                                $subject = $row['subject'];
                                $username = $row['username'];
                                $nca = $row['no_answered_questions'];
                                $nq = $row['no_questions'];
                                $correct_ans = $row['no_correct_answer'];
                                $total = $row['Total'];
                                $dateTime = $row['dateTime'];
                                echo
                                 '<tr>
                                    <td>'.$subject.'</td>
                                    <td>'.$username.'</td>
                                    <td>'.$nca.'</td>
                                    <td>'.$nq.'</td>
                                    <td>'.$correct_ans.'</td>
                                    <td>'.$total.'</td>
                                    <td>'.$dateTime.'</td>
                                    <td>
                                    <button><a href="deletePermenant.php?deleteresultid='.$id.'"><i class="fa-solid fa-trash"></i></a></button>
                                    </td>
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