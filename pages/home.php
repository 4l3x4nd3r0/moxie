<div id="main" class="main">
<div class="body">
	<div>
		<h1> <?php echo $lang['welcomepageh'] ?> </h1><br>
		<p> <?php echo $lang['welcomepagemessage'] ?> </p><br>
		<h2> <?php echo $lang['lastlecture'] ?> </h2><br>
	</div>
	<?php 


		$tbl_name = 'tbl_posts';
		$where = "is_active='Yes' && is_featured='Yes'";
		$other = "ORDER BY created_at DESC";
		$sn = 1;
		$query = $obj->select_data($tbl_name,$where,$other);
		$res = $obj->execute_query($conn,$query);
		if($res == true)
		{
			$count_rows = $obj->num_rows($res);
			if($count_rows>0)
			{
				while ($row=$obj->fetch_data($res)) {
					$id = $row['id'];
					$post_title = $row['title_'.$_SESSION['lang']];
					$post_description = $row['description_'.$_SESSION['lang']];
					$created_at = $row['created_at'];
					$sn++;
					if($sn > 3)
					{
						break;
					}
					?>

						<div class="body post">
						<h2><?php echo $post_title; ?></h2>
						<br>
						<p>
							<?php echo substr($post_description, 0,400).' ...'; ?>
						</p>
						<br>
						<a href="<?php echo SITEURL; ?>index.php?page=lesson_detail&id=<?php echo $id; ?>">
							<button type="button" class="btn-primary btn-sm"><?php echo $lang['read_more'] ?></button>
						</a>

						</div>

					<?php
				}
			}
			else
			{
				?>
				<div class="error">
					No Posts Found. Try Again.
				</div>
				<?php
			}
		}
	?>
	</div>
</div>