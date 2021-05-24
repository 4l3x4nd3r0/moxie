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
        $temp_avatar_path = 'avatar/'.$id.'_temp.png';
        $new_avatar_path = 'avatar/'.$id.'.png';
    ?>
    <div class="body">
    <form method="post" action="">
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['generate']))
        {
            $a = imagecreatefrompng('assets/img/avatar_assets/structure.png');
            switch ($_POST['hair']) {
                case 0:
                    $b = imagecreatefrompng('assets/img/avatar_assets/nothing.png');
                    break;
                case 1:
                    $b = imagecreatefrompng('assets/img/avatar_assets/Hair/hair_1.png');
                    break;
                case 2:
                    $b = imagecreatefrompng('assets/img/avatar_assets/Hair/hair_2.png');
                    break;
                case 3:
                    $b = imagecreatefrompng('assets/img/avatar_assets/Hair/hair_3.png');
                    break;
                case 4:
                    $b = imagecreatefrompng('assets/img/avatar_assets/Hair/hair_4.png');
                    break;
                case 5:
                    $b = imagecreatefrompng('assets/img/avatar_assets/Hair/hair_5.png');
                    break;
                case 6:
                    $b = imagecreatefrompng('assets/img/avatar_assets/Hair/hair_6.png');
                    break;
                case 7:
                    $b = imagecreatefrompng('assets/img/avatar_assets/Hair/hair_7.png');
                    break;
                case 8:
                    $b = imagecreatefrompng('assets/img/avatar_assets/Hair/hair_8.png');
                    break;
                case 9:
                    $b = imagecreatefrompng('assets/img/avatar_assets/Hair/hair_9.png');
                    break;
                case 10:
                    $b = imagecreatefrompng('assets/img/avatar_assets/Hair/hair_10.png');
                    break;
                case 11:
                    $b = imagecreatefrompng('assets/img/avatar_assets/Hair/hair_11.png');
                    break;
                case 12:
                    $b = imagecreatefrompng('assets/img/avatar_assets/Hair/hair_12.png');
                    break;
            }
            switch ($_POST['eyes']) {
                case 1:
                    $c = imagecreatefrompng('assets/img/avatar_assets/Eyes/eyes_1.png');
                    break;
                case 2:
                    $c = imagecreatefrompng('assets/img/avatar_assets/Eyes/eyes_2.png');
                    break;
                case 3:
                    $c = imagecreatefrompng('assets/img/avatar_assets/Eyes/eyes_3.png');
                    break;
                case 4:
                    $c = imagecreatefrompng('assets/img/avatar_assets/Eyes/eyes_4.png');
                    break;
                case 5:
                    $c = imagecreatefrompng('assets/img/avatar_assets/Eyes/eyes_5.png');
                    break;
                case 6:
                    $c = imagecreatefrompng('assets/img/avatar_assets/Eyes/eyes_6.png');
                    break;
                case 7:
                    $c = imagecreatefrompng('assets/img/avatar_assets/Eyes/eyes_7.png');
                    break;
                case 8:
                    $c = imagecreatefrompng('assets/img/avatar_assets/Eyes/eyes_8.png');
                    break;
                case 9:
                    $c = imagecreatefrompng('assets/img/avatar_assets/Eyes/eyes_9.png');
                    break;
                case 10:
                    $c = imagecreatefrompng('assets/img/avatar_assets/Eyes/eyes_10.png');
                    break;
                case 11:
                    $c = imagecreatefrompng('assets/img/avatar_assets/Eyes/eyes_11.png');
                    break;
                case 12:
                    $c = imagecreatefrompng('assets/img/avatar_assets/Eyes/eyes_12.png');
                    break;
            }
            switch ($_POST['mouth']) {
                case 1:
                    $d = imagecreatefrompng('assets/img/avatar_assets/Mouths/mouth_1.png');
                    break;
                case 2:
                    $d = imagecreatefrompng('assets/img/avatar_assets/Mouths/mouth_2.png');
                    break;
                case 3:
                    $d = imagecreatefrompng('assets/img/avatar_assets/Mouths/mouth_3.png');
                    break;
                case 4:
                    $d = imagecreatefrompng('assets/img/avatar_assets/Mouths/mouth_4.png');
                    break;
                case 5:
                    $d = imagecreatefrompng('assets/img/avatar_assets/Mouths/mouth_5.png');
                    break;
                case 6:
                    $d = imagecreatefrompng('assets/img/avatar_assets/Mouths/mouth_6.png');
                    break;
                case 7:
                    $d = imagecreatefrompng('assets/img/avatar_assets/Mouths/mouth_7.png');
                    break;
                case 8:
                    $d = imagecreatefrompng('assets/img/avatar_assets/Mouths/mouth_8.png');
                    break;
                case 9:
                    $d = imagecreatefrompng('assets/img/avatar_assets/Mouths/mouth_9.png');
                    break;
                case 10:
                    $d = imagecreatefrompng('assets/img/avatar_assets/Mouths/mouth_10.png');
                    break;
                case 11:
                    $d = imagecreatefrompng('assets/img/avatar_assets/Mouths/mouth_11.png');
                    break;
                case 12:
                    $d = imagecreatefrompng('assets/img/avatar_assets/Mouths/mouth_12.png');
                    break;
                case 13:
                    $d = imagecreatefrompng('assets/img/avatar_assets/Mouths/mouth_13.png');
                    break;
            }
            switch ($_POST['tshirt']) {
                case 1:
                    $e = imagecreatefrompng('assets/img/avatar_assets/TShirts/thsirt_pink.png');
                    break;
                case 2:
                    $e = imagecreatefrompng('assets/img/avatar_assets/TShirts/tshirt_black.png');
                    break;
                case 3:
                    $e = imagecreatefrompng('assets/img/avatar_assets/TShirts/tshirt_darkblue.png');
                    break;
                case 4:
                    $e = imagecreatefrompng('assets/img/avatar_assets/TShirts/tshirt_green.png');
                    break;
                case 5:
                    $e = imagecreatefrompng('assets/img/avatar_assets/TShirts/tshirt_lightblue.png');
                    break;
                case 6:
                    $e = imagecreatefrompng('assets/img/avatar_assets/TShirts/tshirt_orange.png');
                    break;
                case 7:
                    $e = imagecreatefrompng('assets/img/avatar_assets/TShirts/tshirt_purple.png');
                    break;
                case 8:
                    $e = imagecreatefrompng('assets/img/avatar_assets/TShirts/tshirt_red.png');
                    break;
                case 9:
                    $e = imagecreatefrompng('assets/img/avatar_assets/TShirts/tshirt_yellow.png');
                    break;
            }
            switch ($_POST['pants']) {
                case 1:
                    $f = imagecreatefrompng('assets/img/avatar_assets/Pants/pants_black.png');
                    break;
                case 2:
                    $f = imagecreatefrompng('assets/img/avatar_assets/Pants/pants_brown.png');
                    break;
                case 3:
                    $f = imagecreatefrompng('assets/img/avatar_assets/Pants/pants_darkblue.png');
                    break;
                case 4:
                    $f = imagecreatefrompng('assets/img/avatar_assets/Pants/pants_darkgreen.png');
                    break;
                case 5:
                    $f = imagecreatefrompng('assets/img/avatar_assets/Pants/pants_darkpurple.png');
                    break;
                case 6:
                    $f = imagecreatefrompng('assets/img/avatar_assets/Pants/pants_jean.png');
                    break;
                case 7:
                    $f = imagecreatefrompng('assets/img/avatar_assets/Pants/pants_kaki.png');
                    break;
                case 8:
                    $f = imagecreatefrompng('assets/img/avatar_assets/Pants/pants_olive.png');
                    break;
            }
            switch ($_POST['shoes']) {
                case 1:
                    $g = imagecreatefrompng('assets/img/avatar_assets/Shoes/shoes_bordeaux.png');
                    break;
                case 2:
                    $g = imagecreatefrompng('assets/img/avatar_assets/Shoes/shoes_brown.png');
                    break;
                case 3:
                    $g = imagecreatefrompng('assets/img/avatar_assets/Shoes/shoes_darkblue.png');
                    break;
                case 4:
                    $g = imagecreatefrompng('assets/img/avatar_assets/Shoes/shoes_darkgreen.png');
                    break;
                case 5:
                    $g = imagecreatefrompng('assets/img/avatar_assets/Shoes/shoes_darkgrey.png');
                    break;
                case 6:
                    $g = imagecreatefrompng('assets/img/avatar_assets/Shoes/shoes_darkkaki.png');
                    break;
                case 7:
                    $g = imagecreatefrompng('assets/img/avatar_assets/Shoes/shoes_lightblue.png');
                    break;
                case 8:
                    $g = imagecreatefrompng('assets/img/avatar_assets/Shoes/shoes_lightgrey.png');
                    break;
                case 9:
                    $g = imagecreatefrompng('assets/img/avatar_assets/Shoes/shoes_ligthgreen.png');
                    break;
                case 10:
                    $g = imagecreatefrompng('assets/img/avatar_assets/Shoes/shoes_olive.png');
                    break;
                case 11:
                    $g = imagecreatefrompng('assets/img/avatar_assets/Shoes/shoes_orange.png');
                    break;
                case 12:
                    $g = imagecreatefrompng('assets/img/avatar_assets/Shoes/shoes_pink.png');
                    break;
            }
            
            generate_avatar($temp_avatar_path, $a, $b, $c, $d, $e, $f, $g);
        }
        else 
        {
            echo '<div class="profile_avatar">';
            echo '<p>';
            echo '<img height=200 width=150 src="'.$avatar_path.'">';
            echo '</p>';
            echo '</div>';
        }
        function generate_avatar($temp_avatar_path, $a, $b, $c, $d, $e, $f, $g)
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
            imagecopy($dest_image, $f, 0, 0, 0, 0, WIDTH, HEIGHT);
            imagecopy($dest_image, $e, 0, 0, 0, 0, WIDTH, HEIGHT);
            imagecopy($dest_image, $g, 0, 0, 0, 0, WIDTH, HEIGHT);

            //send the appropriate headers and output the image in the browser
            imagepng($dest_image, $temp_avatar_path);
			ob_start();
			imagepng($dest_image);
			$imagedata = ob_get_contents();
			ob_end_clean();
            echo '<div class="profile_avatar">';
            echo '<p>';
			echo '<img height=200 width=150 src="data:image/png;base64,'.base64_encode($imagedata).'"/>';
            echo '</p>';
            echo '</div>';
            //destroy all the image resources to free up memory
            imagedestroy($a);
            imagedestroy($b);
            imagedestroy($c);
            imagedestroy($d);
            imagedestroy($e);
            imagedestroy($f);
            imagedestroy($g);
            imagedestroy($dest_image);
        }
    ?>
    <table>
        <div class="title">
        <tr>
            <th scope="row"><label><?php echo $lang['avatarhat'] ?></th>
                <th><input type="range" name="hair" min="0" max="12" value="0" step="1" onchange="updateHairInput(this.value);"></th>
            </label>
            <th><label> <?php echo $lang['avatarstyle']; echo '<output id="texthair" value="">0</output>' ?> </label></th>
        </tr>
        </div>
        <div class="title">
        <tr>
            <th scope="row"><label><?php echo $lang['avatareye'] ?></th>
                <th><input type="range" name="eyes" min="1" max="12" value="1" step="1" onchange="updateEyesInput(this.value);"></th>
            </label>
            <th><label> <?php echo $lang['avatarstyle']; echo '<output id="texteyes" value="">1</output>' ?> </label></th>
        </tr>
        </div>
        <div class="title">
        <tr>
            <th scope="row"><label><?php echo $lang['avatarmouth'] ?></th>
                <th><input type="range" name="mouth" min="1" max="13" value="1" step="1" onchange="updateMouthInput(this.value);"></th>
            </label>
            <th><label> <?php echo $lang['avatarstyle']; echo '<output id="textmouth" value="">1</output>' ?> </label></th>
        </tr>
        </div>
        <div class="title">
        <tr>
            <th scope="row"><label><?php echo $lang['avatarbody'] ?></th>
                <th><input type="range" name="tshirt" min="1" max="9" value="1" step="1" onchange="updateShirtInput(this.value);"></th>
            </label>
            <th><label> <?php echo $lang['avatarstyle']; echo '<output id="textshirt" value="">1</output>' ?> </label></th>
        </tr>
        </div>
        <div class="title">
        <tr>
            <th scope="row"><label><?php echo $lang['avatarpants'] ?></th>
                <th><input type="range" name="pants" min="1" max="8" value="1" step="1" onchange="updatePantsInput(this.value);"></th>
            </label>
            <th><label> <?php echo $lang['avatarstyle']; echo '<output id="textpants" value="">1</output>' ?> </label></th>
        </tr>
        </div>
        <div class="title">
        <tr>
            <th scope="row"><label><?php echo $lang['avatarshoes'] ?></th>
                <th><input type="range" name="shoes" min="1" max="12" value="1" step="1" onchange="updateShoesInput(this.value);"></th>
            </label>
            <th><label> <?php echo $lang['avatarstyle']; echo '<output id="textshoes" value="">1</output>' ?> </label></th>
        </tr>
        </div>
        </table>
			<span class="input-label">
				<input class="btn-primary btn-sm" type="submit" name="back" value="<?php echo $lang['profile'] ?>">
			</span>
            <span class="input-label">
				<input class="btn-primary btn-sm" type="submit" name="generate" value="<?php echo $lang['generate_avatar'] ?>">
			</span>
			<span class="input-label">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input class="btn-primary btn-sm" type="submit" name="submit1" value="<?php echo $lang['save_avatar'] ?>">
			</span>
		<br>
	</form>
    </div>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['back']))
        {
            header('location:'.SITEURL.'index.php?page=profile');
        }
        else
        {
            if(isset($_POST['submit1']))
		    {
                $id = $_POST['id'];
                copy($temp_avatar_path, $new_avatar_path);
                unlink($temp_avatar_path);
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
                    header('location:'.SITEURL.'index.php?page=avatar&id='.$id);
                }
		    }
        }
	?>
</div>