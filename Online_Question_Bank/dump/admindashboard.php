<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>dash board</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
</head>
<body>
    <div class="welcome-msg">
        <h1>Welcome Admin</h1>
    </div>
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="glasses-outline"></ion-icon></span>
                    <span class="title">SLIATE MINDS</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                    <span class="title">DASH BOARD</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">HOME PAGE</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="title">SETTINGS</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                    <span class="title">GET QUIZ</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="information-circle-outline"></ion-icon></span>
                    <span class="title">ABOUT US</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">SIGN OUT</span>
                </a>
            </li>
        </ul>
        <div class="toggle"></div>
    </div>
    <div class="board" align="center">
        <table border="0">
            <tr>
                <td width="500px">
                    <div class="col">
                        <div class="qq">
                            <img width="90px" height=" 100px" src="img/sp.png" />
                            <h2>Register Members</h2><br>
                            <p> Add new Members to the System</p>
                            <a href="addMembers.php" class="btn">Add Members</a>
                        </div>
                    </div>
                </td>
                <td width="500px">
                    <div class="col">
                        <div class="sumery">
                            <img width="90px" height=" 100px" src="img/uq.png" //>
                            <h2>Check Quiz</h2><br>
                            <p> View and Approve Pending Questinos</p>
                            <a href=" #" class="btn">Add Questions</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col">
                        <div class="dq">
                            <img width="90px" height=" 100px" src="img/sum.png"/>
                            <h2>UPLOAD QUIZ</h2><br>
                            <p> Upload Question</p>
                            <a href=" #" class="btn"> UPLOAD QUIZ</a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="col">
                        <div class="settings">
                            <img width="90px" height=" 100px" src="img/settings.png" />
                            <h2>View Members</h2><br>
                            <p>Edit Profiles</p>
                            <a href="display.php" class="btn">PROFILE</a>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
        

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
            let navigation = document.querySelector('.navigation');
            let toggle = document.querySelector('.toggle');
            toggle.onclick = function () {
                navigation.classList.toggle('active')
            }
        </script>
</body>
</html>