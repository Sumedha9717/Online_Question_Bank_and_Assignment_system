<?php 
    include 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="displayStyle.css">
    <title>Display Details</title>
</head>
<body>
    <div class="container">
        <button class="btn-primary my-2"><a href="student.php" class="text-light">Add New User</a>
        </button>
        <button class="btn-primary my-2"><a href="admindashboard.php" class="text-light">Admin Dashboard</a>
        </button>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Name With Initails</th>
                <th scope="col">Full Name</th>
                <th scope="col">DOB</th>
                <th scope="col">Gender</th>
                <th scope="col">NIC</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Register No</th>
                <th scope="col">Center</th>
                <th scope="col">Course</th>
                <th scope="col">Username</th>
                <th scope="col">User Type</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "select * from user_details";
                    $result = mysqli_query($connect,$sql);
                    if($result)
                    {
                        while($row= mysqli_fetch_assoc($result))
                        {
                            $id=$row['id'];
                            $nameWithInitials = $row['nameWithInitials'];
                            $fullname = $row['fullName'];
                            $dob= $row['dob'];
                            $gender = $row['gender'];
                            $nic = $row['nic'];
                            $phone = $row['phone'];
                            $email = $row['email'];
                            $reg_no = $row['regNo'];
                            $center = $row['center'];
                            $course = $row['course'];
                            $username = $row['username'];
                            $userType = $row['userType'];
                            echo '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$nameWithInitials.'</td>
                            <td>'.$fullname.'</td>
                            <td>'.$dob.'</td>
                            <td>'.$gender.'</td>
                            <td>'.$nic.'</td>
                            <td>'.$phone.'</td>
                            <td>'.$email.'</td>
                            <td>'.$reg_no.'</td>
                            <td>'.$center.'</td>
                            <td>'.$course.'</td>
                            <td>'.$username.'</td>
                            <td>'.$userType.'</td>
                            <td>
                                <button class="btn btn-primary my-2"><a href="updateMember.php?updateid='.$id.'" class="text-light">Update</a></button>
                                <button class="btn btn-danger my-2"><a href="deleteMember.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                            </td>
                            </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>