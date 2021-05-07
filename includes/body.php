<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <li><a href="<?php echo SITEURL; ?>"><?php echo $lang['home'] ?></a></li>
  <li><a href="http://localhost/moxie/index.php?page=about"><?php echo $lang['about'] ?></a></li>
  <?php
    if (isset($_SESSION["user"])) {
    	echo "<li><a href='http://localhost/moxie/index.php?page=profile'>Profile Page</a></li>";
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
		if($page=='logout')
		{
			unset($_SESSION['user']);
			header('location:'.SITEURL.'index.php?page=login');
			die();
		}
	}
	else
	{
		$page="home";
	}
	if(isset($_GET['page']) && !empty($_GET['page']))
	{
		$page = $_GET['page'];
	}
	else{
		$page = 'home';
	}

	include('pages/'.$page.'.php')
?>