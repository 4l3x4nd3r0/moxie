<?php
	$site = SITEURL;
	$format = '<li><a href="%sindex.php?page=%s">%s</a></li>';
?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <?php echo sprintf($format, $site,'home', $lang['home']);?>
  <?php echo sprintf($format, $site,'about', $lang['about']);?>
  <?php
    if (isset($_SESSION["user"])) {
		echo sprintf($format, $site,'profile', $lang['profile']);
		echo sprintf($format, $site,'courses', $lang['courses']);
		echo sprintf($format, $site,'assignments', $lang['assignments']);
		echo sprintf($format, $site,'digitallibrary', $lang['digitallib']);
		echo sprintf($format, $site,'community', $lang['community']);
		echo sprintf($format, $site,'rewards', $lang['rewards']);
		echo sprintf($format, $site,'howtouse', $lang['howtouse']);
		echo sprintf($format, $site,'logout', $lang['logout']);
		
    }
    else {
		echo sprintf($format, $site,'login', $lang['login']);
		echo sprintf($format, $site,'signup', $lang['signup']);
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