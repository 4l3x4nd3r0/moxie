<div id="main" class="main">

	<?php 
		$tbl_name = 'tbl_users';
        $id = $_SESSION['user'];
		$where = "username=$id";

		$query = $obj->select_data($tbl_name,$where);
		$res = $obj->execute_query($conn,$query);
		if($res == true)
		{
			$count_rows = $obj->num_rows($res);
			if($count_rows>0)
			{
				while ($row=$obj->fetch_data($res)) {
					$id = $row['id'];
					$post_title = $row['full_name'];
					$created_at = $row['created_at'];
					?>

					<div class="body">
						<h2><?php echo $post_title; ?></h2>
						<br>
						<p>
							<?php echo $created_at; ?>
						</p>
						<br>
					</div>

					<?php
				}
			}
			else
			{
				?>
				<div class="error">
					No Users Found. Try Again.
				</div>
				<?php
			}
		}
	?>
</div>