<div id="main" class="main">

	<?php 
		$tbl_name = 'tbl_users';
        $id = $_SESSION['user'];
		$where = "username='$id' OR email='$id'";

		$query = $obj->select_data($tbl_name,$where);
		$res = $obj->execute_query($conn,$query);
		if($res == true)
		{
			$count_rows = $obj->num_rows($res);
			if($count_rows>0)
			{
				while ($row=$obj->fetch_data($res)) {
					$id = $row['id'];
					$user_username = $row['username'];
                    $user_nume = $row['nume'];
					$user_prenume = $row['prenume'];
					$created_at = $row['created_at'];
					$points = $row['points'];
					?>

					<div class="body">
						<h2>Nume de Utilizator: <?php echo $user_username; ?></h2>
						<br>
						<p>
                            <strong>Nume:</strong> <?php echo $user_nume; ?> <br>
							<strong>Prenume:</strong> <?php echo $user_prenume; ?> <br>
							<strong>Puncte:</strong> <?php echo $points; ?> <br>
                            <strong>Data Inregistrarii:</strong> <?php echo $created_at; ?> <br>
							<br>
							<a href="<?php echo SITEURL; ?>index.php?page=edit_user&id=<?php echo $id; ?>" class="btn-success btn-sm"><?php echo $lang['edit'] ?></a> 
							<a href="<?php echo SITEURL; ?>delete.php?page=users&id=<?php echo $id; ?>" class="btn-error btn-sm"><?php echo $lang['delete'] ?></a>
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