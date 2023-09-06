<?php
include 'dbConnection.php';
$subid = '';
if(isset($_GET['subid']))
{
    $subid = $_GET['subid'];
    $sql = "UPDATE question SET active=0 WHERE sid=$subid";
	$result = mysqli_query($connect,$sql);
    $sql2 = "DELETE FROM test WHERE sid=$subid";
    $result2 = mysqli_query($connect,$sql2);
    if($subid==1)
    {
        header("location:show_category_quiz.php?subid=1");
    }
    if($subid==2)
    {
        header("location:show_category_quiz.php?subid=2");
    }
    if($subid==3)
    {
        header("location:show_category_quiz.php?subid=3");
    }
    if($subid==4)
    {
        header("location:show_category_quiz.php?subid=4");
    }
}
if(isset($_GET['delsubid']))
{
    $subid = $_GET['delsubid'];
    $sql = "UPDATE question SET active=0 WHERE sid=$subid";
	$result = mysqli_query($connect,$sql);

    $sql_deactivate = "UPDATE subject SET active_status=0 WHERE sid=$subid";
    mysqli_query($connect,$sql_deactivate);

    $sql2 = "DELETE FROM test WHERE sid=$subid";
    $result2 = mysqli_query($connect,$sql2);
    if($subid==1)
    {
        header("location:create_Quiz.php?subid=1");
    }
    if($subid==2)
    {
        header("location:create_Quiz.php?subid=2");
    }
    if($subid==3)
    {
        header("location:create_Quiz.php?subid=3");
    }
    if($subid==4)
    {
        header("location:create_Quiz.php?subid=4");
    }
}
?>