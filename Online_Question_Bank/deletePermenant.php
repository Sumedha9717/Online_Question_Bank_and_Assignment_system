<?php
    include 'dbConnection.php';
    if(isset($_GET['deleteid']))
    {
        $id = $_GET['deleteid'];
        $sql = "DELETE FROM user_details WHERE id=$id";
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
    if(isset($_GET['deleteresultid']))
    {
        $id = $_GET['deleteresultid'];
        $sql = "DELETE FROM result WHERE id=$id";
        $result = mysqli_query($connect,$sql);
        if($result)
        {
            header('location:show_result.php');
        }
        else
        {
            die(mysqli_error($connect));
        }
    }
?>