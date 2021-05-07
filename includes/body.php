<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <li><a href="<?php echo SITEURL; ?>"><?php echo $lang['home'] ?></a></li>
  <li><a href="http://localhost/moxie/index.php?page=about"><?php echo $lang['about'] ?></a></li>
  <?php
    if (isset($_SESSION["userUid"])) {
    	echo "<li><a href='profile.php'>Profile Page</a></li>";
		include('menu.php');
		echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
    }
    else {
		echo "<li class='right'><a href='http://localhost/moxie/index.php?page=login'>Login</a></li>";
		echo "<li class='right'><a href='http://localhost/moxie/index.php?page=signup'>Sign Up</a></li>";
    }
	?>
</div>
<?php 
	if(isset($_GET['page']) && !empty($_GET['page']))
	{
		$page = $_GET['page'];
	}
	else{
		$page = 'home';
	}

	include('pages/'.$page.'.php')
?>