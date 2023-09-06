<?php
session_start();
include 'log_file.php';
include 'dbConnection.php';
if(isset($_SESSION['username'])){
    $id= $_SESSION['id'];
    $sql_online = "UPDATE user_details set online=1 WHERE id='$id'";
    mysqli_query($connect,$sql_online);
    logdetails($id);
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
        </div>
        <div class="datetime">
            <div class="time">16:50</div>
            <div class="date">Thursday, Nov 10 2022</div>
          </div>
    </section>

    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="#" id="active--link">
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">
                            <div class="usertitle">
                                <div class="usertitle">
                                <span>Lecture Dashboard</span>
                                </div>
                            </div>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="lecturedashboard.php">
                        <span class="icon icon-2"><i class="ri-home-2-line"></i></span>
                        <span class="sidebar--item">HOME</span>
                    </a>
                </li>
                <li>
                    <a href="show_lecture_profile.php">
                        <span class="icon icon-4"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">PROFILE</span>
                    </a>
                </li>
                <li>
                    <a href="display1.php">
                        <span class="icon icon-5"><i class="ri-line-chart-line"></i></span>
                        <span class="sidebar--item">VIEW MEMBERS</span>
                    </a>
                </li>
                <li>
                    <a href="show_quiz_bank.php">
                        <span class="icon icon-5"><i class="ri-line-chart-line"></i></span>
                        <span class="sidebar--item">VIEW QUIZ BANK</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom-items">
                <li>
                    <a href="#">
                        <span class="icon icon-3"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item">ABOUT US</span>
                    </a>
                </li>
                <li>
                    <?php echo'<a href="logout.php?id='.$id.'">
                        <span class="icon icon-7"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">LOGOUT</span>
                    </a>
                    </li>';?>
                </li>
            </ul>
        </div>

        <div class="main--content">
            <div class="overview">
                <div class="cards">  
                    <div class="card card-3">
                        <div class="card--data">
                            <div><a href="add_quiz.php" class="card--content">
                                <h2 class="card--title">UPLOAD QUIZ</h2>
                                <h1>Upload Questions</h1></a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-4">
                        <div class="card--data">
                            <div><a href="show_quiz_subjects.php" class="card--content">
                                <h2 class="card--title">Create Quiz</h2>
                                <h1>Create New Quiz</h1></a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-2">
                        <div class="card--data">
                            <div><a href="show_quiz_subjects2.php" class="card--content">
                                <h2 class="card--title">Start Quiz</h2>
                                <h1>Start Quiz Now</h1></a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-1">
                        <div class="card--data">
                            <div><a href="show_result.php" class="card--content">
                                <h2 class="card--title">Result</h2>
                                <h1>View Quiz Result</h1></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
            let menu = document.querySelector('.menu')
            let sidebar = document.querySelector('.sidebar')
            let mainContent = document.querySelector('.main--content')

            menu.onclick = function() 
            {
                sidebar.classList.toggle('active')
                mainContent.classList.toggle('active')
            }
        </script>
        <script>const timeElement = document.querySelector(".time");
            const dateElement = document.querySelector(".date");
            
            /**
             * @param {Date} date
             */
            function formatTime(date) {
              const hours12 = date.getHours() % 12 || 12;
              const minutes = date.getMinutes();
              const isAm = date.getHours() < 12;
            
              return `${hours12.toString().padStart(2, "0")}:${minutes
                .toString()
                .padStart(2, "0")} ${isAm ? "AM" : "PM"}`;
            }
            
            /**
             * @param {Date} date
             */
            function formatDate(date) {
              const DAYS = [
                "Sunday",
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
              ];
              const MONTHS = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
              ];
            
              return `${DAYS[date.getDay()]}, ${
                MONTHS[date.getMonth()]
              } ${date.getDate()} ${date.getFullYear()}`;
            }
            
            setInterval(() => {
              const now = new Date();
            
              timeElement.textContent = formatTime(now);
              dateElement.textContent = formatDate(now);
            }, 200);</script>
</body>

</html>
<?php
}else
{
    header("Location:index.html");
    exit();
}
?>