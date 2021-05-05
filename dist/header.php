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
    <style type="text/css">


body {
	font-family: arial, helvetica, serif;
}

ul { /* all lists */
    background: #000000;
    padding: 15px 15px 15px 5px;
	margin: 0;
	list-style: none;
}

li { /* all list items */
	float: left;
	position: relative;
	width: 10em;
    list-style-type: none;
}

li ul { /* second-level lists */
	display: none;
	position: absolute;
	top: 1em;
	left: 0;
}

li>ul { /* to override top and left in browsers other than IE, which will position to the top right of the containing li, rather than bottom left */
	top: auto;
	left: auto;
}

li:hover ul, li.over ul { /* lists nested under hovered list items */
	display: block;
}

#content {
	clear: left;
}

</style>
<script type="text/javascript">
    startList = function() {
    if (document.all&&document;.getElementById) {
    navRoot = document.getElementById("nav");
    for (i=0; i<navRoot.childNodes.length; i++) {
    node = navRoot.childNodes;
    if (node.nodeName=="LI") {
    node.onmouseover=function() {
    this.className+=" over";
    }
    node.onmouseout=function() {
    this.className=this.className.replace(" over", "");
    }
    }
    }
    }
    }
    window.onload=startList;
</script>
</head>
<body>
    <nav>
        <div class="wrapper">
            <li><img src="assets/images/menu.png" alt="Meniu" width="100" height="75">
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
            </li>
        </div>
    </nav>
<div class="wrapper">