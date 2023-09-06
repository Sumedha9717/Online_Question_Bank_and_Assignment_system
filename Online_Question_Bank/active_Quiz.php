<?php
include 'dbConnection.php';
if(isset($_GET['activeid']))
{
    $id = $_GET['activeid'];
    $sql = "UPDATE subject SET active_status=1 WHERE sid=$id";
    $result = mysqli_query($connect,$sql);
    if($result)
    {
        header("location:create_quiz.php?subid=$id");
    }
    else{
        die(mysqli_error($connect));
    }
}
if(isset($_GET['deactiveid']))
{
    $id = $_GET['deactiveid'];
    $sql = "UPDATE subject SET active_status=0 WHERE sid=$id";
    $result = mysqli_query($connect,$sql);
    if($result)
    {
        header("location:create_quiz.php?subid=$id");
    }
    else{
        die(mysqli_error($connect));
    }
}



if(isset($_GET['activeid1']))
{
    $id = $_GET['activeid1'];
    $sql = "UPDATE subject SET active_status=1 WHERE sid=$id";
    $result = mysqli_query($connect,$sql);
    if($result)
    {
        header("location:start_quiz.php");
    }
    else{
        die(mysqli_error($connect));
    }
}
if(isset($_GET['deactiveid1']))
{
    $id = $_GET['deactiveid1'];
    $sql = "UPDATE subject SET active_status=0 WHERE sid=$id";
    $result = mysqli_query($connect,$sql);
    if($result)
    {
        header("location:start_quiz.php");
    }
    else{
        die(mysqli_error($connect));
    }
}
?>