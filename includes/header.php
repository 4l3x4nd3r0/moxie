<!DOCTYPE html>
<html>
<head>
	<title><?php echo $lang['meta_title'] ?></title>
	<meta charset="utf-8">
	<meta title="description" content="<?php echo $lang['meta_description'] ?>">
	<meta title="keywords" content="<?php echo $lang['meta_keywords'] ?>">
	<meta title="Author" content="<?php echo $lang['author'] ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo SITEURL; ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script language="Javascript">
	function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
	}

	function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft= "0";
	}
    </script>
</head>

<body>
	<header class="header">
		<div class="wrapper">
			<div class="dropdown">
				<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
				<a class="logo" href="<?php echo SITEURL; ?>"><h1><?php echo $lang['logo'] ?></h1></a>
			</div>
			<div class="menu">
				<ul>
					<?php
						if (isset($_SESSION["user"])) {
							$user = $_SESSION['user'];
							echo "<li class='right'><a href='http://localhost/moxie/includes/logout.php'>Logout</a></li>";
							echo "<li class='right'><a href='http://localhost/moxie/includes/logout.php'>Welcome, $user</a></li>";
						}
						else {
							echo "<li class='right'><a href='http://localhost/moxie/index.php?page=signup'>Sign Up</a></li>";
							echo "<li class='right'><a href='http://localhost/moxie/index.php?page=login'>Login</a></li>";
						}
					?>
				</ul>
			</div>

			<div class="clearfix"></div>
		</div>
	</header>