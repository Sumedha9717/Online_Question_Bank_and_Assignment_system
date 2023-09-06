<?php
function logdetails($id)
{
    require 'dbConnection.php';
    $sql = "SELECT * FROM user_details WHERE id=$id;";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result);

    $user = $row['username'];
    $name = $row['nameWithInitials'];
    $userType = $row['userType'];
    $sql_add = "INSERT INTO log_file(username,nameWithInitials,userType,dateAndTime) VALUES('$user','$name','$userType',now());";
    $result_add = mysqli_query($connect,$sql_add);
}
?>