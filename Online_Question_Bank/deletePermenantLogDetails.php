<?php
    include 'dbConnection.php';
    if(isset($_GET['deleteid']))
    {
        $id = $_GET['deleteid'];
        $sql = "DELETE FROM log_file WHERE id=$id";
        $result = mysqli_query($connect,$sql);
        if($result)
        {
            header('location:displayLogFile.php');
        }
        else
        {
            die(mysqli_error($connect));
        }
    }
    if(isset($_GET['all']))
    {
        $sql_delete = "DELETE FROM log_file";
        $result = mysqli_query($connect,$sql_delete);
        if($result)
        {
            header('location:displayLogFile.php');
        }
        else{
            die(mysqli_error($connect));
        }
    }
?>