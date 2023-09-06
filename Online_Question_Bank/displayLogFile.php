<?php 
    include 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Members</title>
    <!--<link rel="stylesheet" href="css/displaystyle.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b41b9ec9a0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="table">
        <div class="table_header">
            <p style="margin-top:10px; margin-left:20px; font-weight:600;">User Detials</p>
            <a href="deletePermenantLogDetails.php?all" class="btn btn-danger" style="float:right; margin-right:20px;">Delete All</a>
            <a href="logged_data_download.php" class="btn btn-success" target="_blank" style="float:right; margin-right:20px;">Data Export To Excel</a>
            <a href="admindashboard.php" class="btn btn-primary" style="float:right; margin-right:20px;">Admin Dashboard</a></button>
        </div>
        </div>
            <div>
            <table class="table table-striped text-center mt-5">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Name With Initails</th>
                            <th>User Type</th>
                            <th>Logged Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from log_file";
                        $result = mysqli_query($connect,$sql);
                        if($result)
                        {
                            while($row= mysqli_fetch_assoc($result))
                            {
                                $id=$row['id'];
                                $username = $row['username'];
                                $nameWithInitials = $row['nameWithInitials'];
                                $userType = $row['userType'];
                                $time = $row['dateAndTime'];
                                echo '<tr>
                                    <td>'.$username.'</td>
                                    <td>'.$nameWithInitials.'</td>
                                    <td>'.$userType.'</td>
                                    <td>'.$time.'</td>
                                    <td>
                                        <button><a href="deletePermenantLogDetails.php?deleteid='.$id.'"><i class="fa-solid fa-trash"></i></a></button>
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