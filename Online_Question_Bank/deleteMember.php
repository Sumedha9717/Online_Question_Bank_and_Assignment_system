<?php
    include 'dbConnection.php';
    if(isset($_GET['deleteid']))
    {
        $id = $_GET['deleteid'];
        $sql = "UPDATE user_details SET active_status=0 WHERE id=$id";
        $result = mysqli_query($connect,$sql);
        if($result)
        {
            header('location:display.php');
        }
        else
        {
            die(mysqli_error($connect));
        }
    }
?>