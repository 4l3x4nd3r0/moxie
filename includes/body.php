<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <li><a href="<?php echo SITEURL; ?>"><?php echo $lang['home'] ?></a></li>
  <?php
    if (isset($_SESSION["userUid"])) {
    	echo "<li><a href='profile.php'>Profile Page</a></li>";
        echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
		include('menu.php');
    }
    else {
        echo "<li class='right'><a href='http://localhost/moxie/index.php?page=signup'>Sign Up</a></li>";
		echo "<li class='right'><a href='http://localhost/moxie/index.php?page=login'>Login</a></li>";
    }
	?>
	<li><a href="<?php echo SITEURL; ?>index.php?page=about"><?php echo $lang['about'] ?></a></li>
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