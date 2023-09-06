<?php
include 'dbConnection.php';
header("Content-type: application/vnd-ms-excel");
$filename = "delete_users.xls";
header("Content-Disposition: attachment; filename=\"$filename\"");
?>
<table>
                    <thead>
                        <tr>
                            <th style="border:2px solid black;">Name With Initails</th>
                            <th style="border:2px solid black;">Full Name</th>
                            <th style="border:2px solid black;">DOB</th>
                            <th style="border:2px solid black;">Gender</th>
                            <th style="border:2px solid black;">NIC</th>
                            <th style="border:2px solid black;">Phone</th>
                            <th style="border:2px solid black;">Email</th>
                            <th style="border:2px solid black;">Register No</th>
                            <th style="border:2px solid black;">Center</th>
                            <th style="border:2px solid black;">Course</th>
                            <th style="border:2px solid black;">Username</th>
                            <th style="border:2px solid black;">User Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from user_details where active_status=0";
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
                                    <td style="border:2px solid black;">'.$nameWithInitials.'</td>
                                    <td style="border:2px solid black;">'.$fullname.'</td>
                                    <td style="border:2px solid black;">'.$dob.'</td>
                                    <td style="border:2px solid black;">'.$gender.'</td>
                                    <td style="border:2px solid black;">'.$nic.'</td>
                                    <td style="border:2px solid black;">'.$phone.'</td>
                                    <td style="border:2px solid black;">'.$email.'</td>
                                    <td style="border:2px solid black;">'.$reg_no.'</td>
                                    <td style="border:2px solid black;">'.$center.'</td>
                                    <td style="border:2px solid black;">'.$course.'</td>
                                    <td style="border:2px solid black;">'.$username.'</td>
                                    <td style="border:2px solid black;">'.$userType.'</td>
                                </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>