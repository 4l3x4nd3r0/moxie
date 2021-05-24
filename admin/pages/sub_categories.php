<div class="body">
	<h2><?php echo $lang['categories'] ?></h2>
	<br>

	<?php 
		if(isset($_SESSION['add']))
		{
			echo $_SESSION['add'];
			unset($_SESSION['add']);
		}
		if(isset($_SESSION['edit']))
		{
			echo $_SESSION['edit'];
			unset($_SESSION['edit']);
		}
		if(isset($_SESSION['delete']))
		{
			echo $_SESSION['delete'];
			unset($_SESSION['delete']);
		}
	?>

	<table class="tbl-responsive">
		<tr>
			<td colspan="5">
				<a href="<?php echo SITEURL; ?>admin/index.php?page=add_sub_category">
					<button class="btn-primary btn-sm"><?php echo $lang['add'] ?></button>
				</a>
			</td>
		</tr>

		<tr>
			<th><?php echo $lang['sn'] ?></th>
			<th><?php echo $lang['title'] ?></th>
			<th><?php echo $lang['actions'] ?></th>
		</tr>

		<?php 
			$tbl_name = 'tbl_sub_categories';
			$query = $obj->select_data($tbl_name);
			$res = $obj->execute_query($conn,$query);
			$sn = 1;

			if($res)
			{
				$count_rows= $obj->num_rows($res);
				if($count_rows > 0)
				{
					while ($row=$obj->fetch_data($res)) {
						$id = $row['id'];
						$title = $row['subcategory_name_'.$_SESSION['lang']];
						?>

						<tr>
							<td><?php echo $sn++; ?>. </td>
							<td><?php echo $title; ?></td>
							<td>
								<a href="<?php echo SITEURL; ?>admin/pages/delete.php?page=sub_categories&id=<?php echo $id; ?>" class="btn-error btn-sm"><?php echo $lang['delete'] ?></a>
							</td>
						</tr>

						<?php
					}
				}
				else
				{
					echo "<tr><td colspan='5' class='error'>No Sub Categories Found.</td></tr>";
				}
			}
		?>
		
	</table>
</div>