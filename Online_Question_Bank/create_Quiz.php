<?php 
    include 'dbConnection.php';
    $sid='';
    if(isset($_GET['subid']))
    {
        $sid = $_GET['subid'];
    }
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
                        $sql_qst = "SELECT * FROM question WHERE sid=$sid and active = 1";
                        $qst_result = mysqli_query($connect,$sql_qst);
                        $number_of_questinos = mysqli_num_rows($qst_result);

                        $sql = "select * from subject where sid=$sid";
                        $result = mysqli_query($connect,$sql);

                        if($result && $number_of_questinos>0)
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
                                $no_questions = $number_of_questinos;
                                echo '<tr>
                                    <td>'.$course.'</td>
                                    <td>'.$subject_name.'</td>
                                    <td>'.$no_questions.'</td>
                                    <td>'.$status.'</td>
                                    <td>
                                        <a  class="btn btn-success" href="active_Quiz.php?activeid='.$id.'"><i class="fa-solid fa-hourglass-start"></i></a>
                                        <a  class="btn btn-danger" href="active_Quiz.php?deactiveid='.$id.'"><i class="fa-solid fa-stop"></i></a>
                                        <a  class="btn btn-secondary" href="update.php?delsubid='.$sid.'"><i class="fa-solid fa-trash"></i></a>
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