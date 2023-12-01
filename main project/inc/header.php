<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "robots" content = "noindex, nofollow">
    <meta name = "description" content = "header-page">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <div id="logo">
        <img src="../img/logo1.jpg" alt="fake-logo">
        </div>
        
        <?php
        session_start(); // Start or resume a session

        if (isset($_SESSION['user_id'])) {
          
            echo '<div id="navigation">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>';
        } else {
  
            echo '<div id="navigation">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </div>';
        }
        ?>
    </header>
