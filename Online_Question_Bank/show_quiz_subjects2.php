<?php
include 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>

    <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>SLIATE<span> MINDS</span></h2>
            <button style="padding:5px;background-color:darkblue; border-radius:8px; margin-left:180px; width:200px;"><a style="color:white" href="lecturedashboard.php">Back To Dashboard</a></button>
        </div>
    </section>

    <section class="main">
        <div class="main--content">
            <div class="overview">
                <div class="cards">
                    <?php 
                    $i=1;
                    $sql = "SELECT * FROM subject";
                    $result = mysqli_query($connect,$sql);
                    $no = mysqli_num_rows($result);
                    if($no>0)
                    {
                        while($row = mysqli_fetch_assoc($result)){
                            $sid = $row['sid'];
                            $sname = $row['sname'];
                            echo'<div class="card card-'.$i.'">
                            <div class="card--data">
                                <div><a href="create_quiz.php?subid='.$sid.'" class="card--content">
                                    <h2 class="card--title">Start Quiz</h2>
                                    <h1>'.$sname.'</h1></a>
                                </div>
                                    </div>
                                </div>
                            </div>';
                            $i++;
                        }
                    }
                    else
                    {
                        echo '
                            <div>
                                <h1 style="text-align:center; color:brown; margin-top:200px; font-size:60px; margin-right:300px;">No Quizes Available :( </h1>
                            </div>';
                    }
                ?>
            </div>
    </section>
</body>

</html>