<?php
include 'dbConnection.php';
session_start();
$id = $_SESSION['id'];
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Availabel Quiz</title>
    <!-- <link rel="stylesheet" href="css/displaystyle.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b41b9ec9a0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div>
            <a href="memberdashboard.php" class="btn btn-primary mt-2" style="float: right; margin-right: 40px;">Dashboard</a>
            <div>
                <table class="table table-striped text-center">
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
                        $sql_user = "SELECT * FROM user_details WHERE id='$id'";
                        $user_rsult = mysqli_query($connect,$sql_user);
                        $row1 = mysqli_fetch_assoc($user_rsult);
                        $user = $row1['username'];
                        $sql_result = "SELECT * FROM result WHERE username='.$user.'";
                        $result_val = mysqli_query($connect,$sql_result);
                        if($result_val)
                        {
                            while($row= mysqli_fetch_assoc($result_val))
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
                        else{

                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>