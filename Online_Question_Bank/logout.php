<?php
session_start();
include 'dbConnection.php';
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "UPDATE user_details SET online=0 where id=$id";
    mysqli_query($connect,$sql);
}
session_unset();
session_destroy();
header("location:index.php");
?>