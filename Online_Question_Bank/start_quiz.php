<?php 
    include 'dbConnection.php';
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
            <a href="lecturedashboard.php" class="btn btn-primary mt-2" style="float: right; margin-right: 40px;">Lecture Dashboard</a>
            <div>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Subject Name</th>
                            <th>Available No Of Questions</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from question where active=1";
                        $result1 = mysqli_query($connect,$sql);
                        $no_qst = mysqli_num_rows($result1);
                        $row1 = mysqli_fetch_array($result1);
                        if($result1)
                        {                 
                            //$sub_id = $row1['sid'];

                            $sql2 = "select * from subject";
                            $result = mysqli_query($connect,$sql2);
                            if($result)
                            {
                                while($row= mysqli_fetch_assoc($result))
                                {
                                    $id=$row['sid'];
                                    $subject_name = $row['sname'];
                                    $course = $row['course'];
                                    $status = '';
                                    $active_status = $row['active_status'];
                                    if($active_status == 1)
                                    {
                                        //$status = "Active";
                                        $status =  '<span class="badge text-bg-success">Active</span>';
                                    }
                                    else{
                                        //$status = "Not-Actived";
                                        $status =  '<span class="badge text-bg-danger">Not-Actived</span>';
                                    }
                                    //$no_questions = 10;
                                    echo '<tr>
                                        <td>'.$course.'</td>
                                        <td>'.$subject_name.'</td>
                                        <td>'.$no_qst.'</td>
                                        <td>'.$status.'</td>
                                        <td>
                                            <a  class="btn btn-success" href="active_quiz.php?activeid1='.$id.'"><i class="fa-solid fa-hourglass-start"></i></a>
                                            <a  class="btn btn-danger" href="active_quiz.php?deactiveid1='.$id.'"><i class="fa-solid fa-stop"></i></a>
                                        </td>
                                    </tr>';
                                }
                            }
                        }
                        else{
                            echo '
                            <div>
                                <h1 style="text-align:center; color:brown; margin-top:200px; font-size:60px; margin-right:300px;">No Quizes Available :( </h1>
                            </div>';    
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>