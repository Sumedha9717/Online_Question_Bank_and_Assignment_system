<?php
    include 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b41b9ec9a0.js" crossorigin="anonymous"></script>
    <title>Summary</title>
</head>
<body>
    <div>
        <a href="admindashboard.php" class="btn btn-primary" style="float:right; margin-right:10px;">Dashboard</a>
        <h1 style="text-align: center; margin-top: 50px; margin-bottom: 50px;">Summary</h1>
    </div>
    <div class="container" style="margin-top:50px;">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-center">Members Online <span><i class="fa-solid fa-circle" style="color:green;"></i></span></h5>
                      <?php
                        $sql_online = "SELECT * FROM user_details WHERE online=1";
                        $online_result = mysqli_query($connect,$sql_online);
                        $delte_row = mysqli_fetch_assoc($online_result);
                        $no_online_members = mysqli_num_rows($online_result);
                        echo '<center>
                        <p style="font-family:Times New Roman; font-size:50px; color:green;">'.$no_online_members.'</p>';
                      ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-center">Number of Delete Users</h5>
                      <?php
                        $sql_delete = "SELECT * FROM user_details WHERE active_status=0";
                        $delete_result = mysqli_query($connect,$sql_delete);
                        $delte_row = mysqli_fetch_assoc($delete_result);
                        $no_delete_members = mysqli_num_rows($delete_result);
                        echo '<center>
                        <p style="font-family:Times New Roman; font-size:50px; color:darkblue;">'.$no_delete_members.'</p>';
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
    <div class="container">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0 mt-5">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-center">Total Members</h5>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Students</th>
                            <th scope="col">Lectures</th>
                            <th scope="col">Admin</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $student_sql = 'SELECT * FROM user_details WHERE userType="student"';
                        $student_result = mysqli_query($connect,$student_sql);
                        $row1 = mysqli_fetch_array($student_result);
                        $noOfStudent = mysqli_num_rows($student_result);

                        $lecture_sql = 'SELECT * FROM user_details WHERE userType="lecture"';
                        $lec_result = mysqli_query($connect,$lecture_sql);
                        $row2 = mysqli_fetch_array($lec_result);
                        $noOfLectuers = mysqli_num_rows($lec_result);

                        $admin_sql = 'SELECT * FROM user_details WHERE userType="admin"';
                        $admin_result = mysqli_query($connect,$admin_sql);
                        $row3 = mysqli_fetch_array($admin_result);
                        $noOfAdmin = mysqli_num_rows($admin_result);
                          echo '<tr>
                            <th scope="row">1</th>
                            <td>'.$noOfStudent.'</td>
                            <td>'.$noOfLectuers.'</td>
                            <td>'.$noOfAdmin.'</td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>';
                        ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mt-5">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-center">Question Bank</h5>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Subject</th>
                            <th scope="col">No of Questions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql_subject = "SELECT * FROM subject";
                          $result_subject = mysqli_query($connect,$sql_subject);
                          $no_of_subjects = mysqli_num_rows($result_subject);
                          $no = 1;
                          while($row = mysqli_fetch_assoc($result_subject))
                          {
                            $subject = $row['sname'];

                            $sql_question = "SELECT * FROM question where sid=$no";
                            $result_question = mysqli_query($connect,$sql_question);
                            $no_question = mysqli_num_rows($result_question);
                            echo '<tr>
                                  <th scope="row">'.$no.'</th>
                                  <td>'.$subject.'</td>
                                  <td>'.$no_question.'</td>
                                <tr>';
                            $no++;
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <button class="btn btn-primary" style="margin-left:48%; width:100px; margin-top: 50px;" onclick="window.print()">Print</button>
    </div>
</body>
</html>