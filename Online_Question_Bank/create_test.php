<?php
include 'dbConnection.php';
if(isset($_GET['qid'])&&isset($_GET['sid'])){

    $qid = $_GET['qid'];
    $sid = $_GET['sid'];
    $getResultSql = "SELECT * FROM question WHERE qid=$qid";
    $getResult = mysqli_query($connect,$getResultSql);
    $row = mysqli_fetch_array($getResult);
    $subid = $row['sid'];
    $question = $row['question'];
    $ans_id = $row['ans_id'];
    
    //update status
    $updateSql = "UPDATE question SET active=1 WHERE qid=$qid";
    $updateResult = mysqli_query($connect,$updateSql);

    //insert into test table
    $sql = "INSERT INTO test(qid,sid,question,ans_id) VALUES($qid,$subid,'$question',$ans_id)";
    $result = mysqli_query($connect,$sql);
    if($result)
    {
        header("location:show_category_quiz.php?subid=$sid");
    }

}
else{
    echo 'error!!';
}
?>