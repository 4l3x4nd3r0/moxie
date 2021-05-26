<div id="main" class="main">
	<?php
		if(isset($_GET['id']) && !empty($_GET['id']))
		{
			$id = $_GET['id'];
			$tbl_name = 'tbl_posts';
			$where = "id='$id'";
			$query = $obj->select_data($tbl_name,$where);

			$res = $obj->execute_query($conn,$query);
			if($res == true)
			{
				$count_rows = $obj->num_rows($res);
				if($count_rows==1)
				{
					$row = $obj->fetch_data($res);
					$post_title = $row['title_'.$_SESSION['lang']];
					$post_description = $row['description_'.$_SESSION['lang']];
				}
				else
				{
					header('location:'.SITEURL);
				}
			}
		}
		else
		{
			header('location:'.SITEURL);
		}
	?>
	<?php
		$points_to_add = 50;
		$test_points = 50;
	?>
	<?php 
		$tbl_name = 'tbl_users';
      	$uid = $_SESSION['user'];
		$where = "username='$uid' OR email='$uid'";

		$query = $obj->select_data($tbl_name,$where);
		$res = $obj->execute_query($conn,$query);
		if($res == true)
		{
			$count_rows = $obj->num_rows($res);
			if($count_rows>0)
			{
				$row=$obj->fetch_data($res);
				$uid = $row['id'];
				$points = $row['points'];
         	}
      	}
	?>
	<?php
		$tbl_name = 'tbl_lessons';
		$where = "id='$uid'";
		$query = $obj->select_data($tbl_name,$where);
		$res = $obj->execute_query($conn,$query);
		if($res == true)
		{
			$count_rows = $obj->num_rows($res);
			if($count_rows==1)
			{
				$row = $obj->fetch_data($res);
				$id = $_GET['id'];
				$lesson = $row['lessons_'.$id];
				$test = $row['test_'.$id];
			}
		}
	?>
	<div class="body">
	<a href="<?php echo SITEURL; ?>index.php?page=courses">
        <button type="button" class="btn-primary btn-sm"><?php echo $lang['coursesback'] ?></button>
    </a>
	<form method="post">
    <button type="submit" name="finnish" class="btn-primary btn-sm"><?php echo $lang['finnishcourse'] ?></button>
	</form>
		<h2><?php echo $post_title; ?></h2>
		<br>
		<p>
			<?php echo $post_description; ?>
		</p>
		<?php
		if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['testsubmit']))
			{
				$results_temp = 0;
				$max=0;
				if(isset($_POST['q1']))
				{
					$results = $results_temp + $_POST['q1'];
					$results_temp = $results;
					$max++;
				}
				else
				{
					$max++;
				}
				if(isset($_POST['q2']))
				{
					$results = $results_temp + $_POST['q2'];
					$results_temp = $results;
					$max++;
				}
				else
				{
					$max++;
				}
				if(isset($_POST['q3']))
				{
					$results = $results_temp + $_POST['q3'];
					$results_temp = $results;
					$max++;
				}
				else
				{
					$max++;
				}
				if(isset($_POST['q4']))
				{
					$results = $results_temp + $_POST['q4'];
					$results_temp = $results;
					$max++;
				}
				else
				{
					$max++;
				}
				if(isset($_POST['q5']))
				{
					$results = $results_temp + $_POST['q5'];
					$results_temp = $results;
					$max++;
				}
				else
				{
					$max++;
				}
				if($test !== 999)
				{
					$tbl_name = 'tbl_users';
					$new_points = $points + $test_points;
					$data = "
						points='$new_points'
					";
					$where = "id='$uid'";
					$query = $obj->update_data($tbl_name,$data,$where);
					$res = $obj->execute_query($conn,$query);
					if($res==true)
					{
						$tbl_name = 'tbl_lessons';
						$data = "
							test_$id='$results'
						";
						$where = "id='$uid'";
						$query = $obj->update_data($tbl_name,$data,$where);
						$res = $obj->execute_query($conn,$query);
						if($res==true)
						{
							echo $lang['congrats_test'].' '.$results;
						}
					}
					else
					{
						$tbl_name = 'tbl_lessons';
						$test = $results;
						$data = "
							test_$id='$results'
						";
						$where = "id='$uid'";
						$query = $obj->update_data($tbl_name,$data,$where);
						$res = $obj->execute_query($conn,$query);
						if($res==true)
						{
							echo $lang['congrats_test'].' '.$results.' '.$lang['outof'].' '.$max;
						}
					}
				}
			}
		?>
	</div>
	<?php
		if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['finnish']))
		{
			if($lesson != 1)
			{
				$tbl_name = 'tbl_users';
				$new_points = $points + $points_to_add;
				$data = "
					points='$new_points'
				";
				$where = "id='$uid'";
				$query = $obj->update_data($tbl_name,$data,$where);
				$res = $obj->execute_query($conn,$query);
				if($res==true)
                {
					$tbl_name = 'tbl_lessons';
					$lesson = 1;
					$data = "
						lessons_$id='$lesson'
					";
					$where = "id='$uid'";
					$query = $obj->update_data($tbl_name,$data,$where);
					$res = $obj->execute_query($conn,$query);
					if($res==true)
					{
						header('location:'.SITEURL.'index.php?page=courses');
					}
					else
					{
						header('location:'.SITEURL.'index.php?page=lesson_detail&id='.$id);
					}
                }
			}
			else
			{
				header('location:'.SITEURL.'index.php?page=courses');
			}
		}
		else
		{
			
		}
	?>
</div>