<div id="main" class="main">
    <?php

		if(isset($_SESSION['avatar']))
		{
			echo $_SESSION['avatar'];
			unset($_SESSION['avatar']);
		}

		if (isset($_GET['id']) && !empty($_GET['id'])) {
			$id = $_GET['id'];

			$tbl_name = 'tbl_users';
			$where = "id='$id'";

			$query = $obj->select_data($tbl_name,$where);
			$res = $obj->execute_query($conn,$query);
			if($res==true)
			{
				$count_rows = $obj->num_rows($res);
				if($count_rows==1)
				{
					$row = $obj->fetch_data($res);
					$avatar_path = $row['avatar_path'];
				}
			}
		}
		else
		{
			header('location:'.SITEURL.'index.php?page=profile');
		}
        $new_avatar_path = 'avatar/'.$id.'.png';
    ?>
    <div class="body">
    <form method="post" action="">
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['generate']))
        {
            switch ($_POST['q1']) {
                case 0:
                    $a = imagecreatefrompng('avatar/avatar_default.png');
                    break;
                case 1:
                    $a = imagecreatefrompng('avatar/avatar_default.png');
                    break;
                case 2:
                    $a = imagecreatefrompng('avatar/avatar_female.png');
                    break;
            }
            switch ($_POST['q2']) {
                case 0:
                    $b = imagecreatefrompng('avatar/nothing.png');
                    break;
                case 1:
                    $b = imagecreatefrompng('avatar/nothing.png');
                    break;
                case 2:
                    $b = imagecreatefrompng('avatar/hat.png');
                    break;
            }
            switch ($_POST['q3']) {
                case 0:
                    $c = imagecreatefrompng('avatar/nothing.png');
                    break;
                case 1:
                    $c = imagecreatefrompng('avatar/nothing.png');
                    break;
                case 2:
                    $c = imagecreatefrompng('avatar/tie.png');
                    break;
            }
            switch ($_POST['q4']) {
                case 0:
                    $d = imagecreatefrompng('avatar/nothing.png');
                    break;
                case 1:
                    $d = imagecreatefrompng('avatar/nothing.png');
                    break;
                case 2:
                    $d = imagecreatefrompng('avatar/avatar_female.png');
                    break;
            }
            switch ($_POST['q5']) {
                case 0:
                    $e = imagecreatefrompng('avatar/nothing.png');
                    break;
                case 1:
                    $e = imagecreatefrompng('avatar/nothing.png');
                    break;
                case 2:
                    $e = imagecreatefrompng('avatar/avatar_female.png');
                    break;
            }
            
            generate_avatar($new_avatar_path, $a, $b, $c, $d, $e);
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['back']))
        {
            header('location:'.SITEURL.'index.php?page=profile');
        }
        function generate_avatar($new_avatar_path, $a, $b, $c, $d, $e)
        {
            $dest_image = imagecreatetruecolor(WIDTH, HEIGHT);

            imagesavealpha($dest_image, true);

            $trans_background = imagecolorallocatealpha($dest_image, 0, 0, 0, 127);

            //fill the image with a transparent background
            imagefill($dest_image, 0, 0, $trans_background);

            //copy each png file on top of the destination (result) png
            imagecopy($dest_image, $a, 0, 0, 0, 0, WIDTH, HEIGHT);
            imagecopy($dest_image, $b, 0, 0, 0, 0, WIDTH, HEIGHT);
            imagecopy($dest_image, $c, 0, 0, 0, 0, WIDTH, HEIGHT);
            imagecopy($dest_image, $d, 0, 0, 0, 0, WIDTH, HEIGHT);
            imagecopy($dest_image, $e, 0, 0, 0, 0, WIDTH, HEIGHT);

            //send the appropriate headers and output the image in the browser
            imagepng($dest_image, $new_avatar_path);
			ob_start();
			imagepng($dest_image);
			$imagedata = ob_get_contents();
			ob_end_clean();
			echo '<img height=200 width=150 src="data:image/png;base64,'.base64_encode($imagedata).'"/>';
            //destroy all the image resources to free up memory
            imagedestroy($a);
            imagedestroy($b);
            imagedestroy($c);
            imagedestroy($d);
            imagedestroy($e);
            imagedestroy($dest_image);   
        }
    ?>
        <div class="title">
            <label><?php echo $lang['avatargender'] ?>
                <input type="radio" name="q1" value="1"><?php echo $lang['avatarmale'] ?>
                <input TYPE="radio" name="q1" value="2"><?php echo $lang['avatarfemale'] ?>
            </label>
        </div>
        <div class="title">
            <label><?php echo $lang['avatarhat'] ?>
                <input type="radio" name="q2" value="1"><?php echo $lang['avatarno'] ?>
                <input TYPE="radio" name="q2" value="2"><?php echo $lang['avataryes'] ?>
            </label>
        </div>
        <div class="title">
            <label><?php echo $lang['avatarbody'] ?>
                <input type="radio" name="q3" value="1"><?php echo $lang['avatarno'] ?>
                <input TYPE="radio" name="q3" value="2"><?php echo $lang['avataryes'] ?>
            </label>
        </div>
        <div class="title">
            <label><?php echo $lang['avatarpants'] ?>
                <input type="radio" name="q4" value="1"><?php echo $lang['avatarno'] ?>
                <input TYPE="radio" name="q4" value="2"><?php echo $lang['avataryes'] ?>
            </label>
        </div>
        <div class="title">
            <label><?php echo $lang['avatarshoes'] ?>
                <input type="radio" name="q5" value="1"><?php echo $lang['avatarno'] ?>
                <input TYPE="radio" name="q5" value="2"><?php echo $lang['avataryes'] ?>
            </label>
        </div>
			<span class="input-label">
				<input class="btn-primary btn-sm" type="submit" name="back" value="<?php echo $lang['profile'] ?>">
			</span>
            <span class="input-label">
				<input class="btn-primary btn-sm" type="submit" name="generate" value="<?php echo $lang['generate_avatar'] ?>">
			</span>
			<span class="input-label">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input class="btn-primary btn-sm" type="submit" name="submit1" value="<?php echo $lang['edit_user'] ?>">
			</span>
		<br>
	</form>
    </div>
    <?php 
		if(isset($_POST['submit1']))
		{
			$id = $_POST['id'];

			$data = "
				avatar_path='$new_avatar_path'
			";
			$tbl_name='tbl_users';
			$where = "id='$id'";
			$query = $obj->update_data($tbl_name,$data,$where);
			$res = $obj->execute_query($conn,$query);

			if($res==true)
			{
				$_SESSION['profile'] = "<div class='success'>".$lang['edit_success']."</div>";
				header('location:'.SITEURL.'index.php?page=profile');
			}
			else
			{
				$_SESSION['avatar'] = "<div class='error'>".$lang['edit_fail']."</div>";
				header('location:'.SITEURL.'index.php?page=edit_user&id='.$id);
			}
		}
	?>
</div>