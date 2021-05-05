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

<div class="topnav">
      <a class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Dropdown</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
        </a>
      <a class="active" href="#home">Moxie</a>
     </div> 

     <script>
        function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  } 
    </script>
    
    <nav>
        <div class="wrapper">
            <a href="index.php"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php
                    if (isset($_SESSION["userUid"])) {
                        echo "<li><a href='profile.php'>Profile Page</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                    }
                    else {
                        echo "<li><a href='signup.php'>Sign Up</a></li>";
                        echo "<li><a href='login.php'>Login</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>

<div class="wrapper">