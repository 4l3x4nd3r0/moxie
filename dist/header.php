<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>moxie</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/ui.js"></script>
    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" href="/assets/images/logo-96x96.png">
    <meta name="apple-mobile-web-app-status-bar" content="#FFE1C4">
    <meta name="theme-color" content="#FFE1C4">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="wrapper">
            <a href="index.php"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<li><a href="profile.php">Profile Page</a></li>";
                        echo "<li><a href="includes/logout.inc.php">Logout</a></li>";
                    }
                    else {
                        echo "<li><a href="signup.php">Sign Up</a></li>";
                        echo "<li><a href="login.php">Login</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>

<div class="wrapper">