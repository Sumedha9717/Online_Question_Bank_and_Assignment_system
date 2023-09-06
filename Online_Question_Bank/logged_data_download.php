<?php
include 'dbConnection.php';
header("Content-type: application/vnd-ms-excel");
$filename = "login_data.xls";
header("Content-Disposition: attachment; filename=\"$filename\"");
?>
<table>
                    <thead>
                        <tr>
                            <th style="border:2px solid black;">Username</th>
                            <th style="border:2px solid black;">Name With Initails</th>
                            <th style="border:2px solid black;">User Type</th>
                            <th style="border:2px solid black;">Logged Time</th>
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
                                    <td style="border:2px solid black;">'.$username.'</td>
                                    <td style="border:2px solid black;">'.$nameWithInitials.'</td>
                                    <td style="border:2px solid black;">'.$userType.'</td>
                                    <td style="border:2px solid black;">'.$time.'</td>
                                </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>