<?php
    include 'dbConnection.php';
    if(isset($_GET['recoverid']))
    {
        $id = $_GET['recoverid'];
        $sql = "UPDATE user_details SET active_status=1 WHERE id=$id";
        $result = mysqli_query($connect,$sql);
        if($result)
        {
            header('location:displayDelete.php');
        }
        else
        {
            die(mysqli_error($connect));
        }
    }
?>