<div class="main">
 <div class="wrapper">
    <h1> <?php echo $lang['rewardsh'] ?> </h1>
    <br>
    <?php 
			$tbl_name = 'tbl_rewards';
			$query = $obj->select_data($tbl_name);
			$res = $obj->execute_query($conn,$query);
			if($res)
			{
				$count_rows= $obj->num_rows($res);
				if($count_rows > 0)
				{
					$row=$obj->fetch_data($res);
					$id = $row['id'];
                    $hair_1 = $row['hair_1'];
                    $hair_2 = $row['hair_2'];
                    $hair_3 = $row['hair_3'];
                    $hair_4 = $row['hair_4'];
                    $hair_5 = $row['hair_5'];
                    $hair_6 = $row['hair_6'];
                    $hair_7 = $row['hair_7'];
                    $hair_8 = $row['hair_8'];
                    $hair_9 = $row['hair_9'];
                    $hair_10 = $row['hair_10'];
                    $hair_11 = $row['hair_11'];
                    $hair_12 = $row['hair_12'];
                    $eyes_1 = $row['eyes_1'];
                    $eyes_2 = $row['eyes_2'];
                    $eyes_3 = $row['eyes_3'];
                    $eyes_4 = $row['eyes_4'];
                    $eyes_5 = $row['eyes_5'];
                    $eyes_6 = $row['eyes_6'];
                    $eyes_7 = $row['eyes_7'];
                    $eyes_8 = $row['eyes_8'];
                    $eyes_9 = $row['eyes_9'];
                    $eyes_10 = $row['eyes_10'];
                    $eyes_11 = $row['eyes_11'];
                    $eyes_12 = $row['eyes_12'];
                    $mouth_1 = $row['mouth_1'];
                    $mouth_2 = $row['mouth_2'];
                    $mouth_3 = $row['mouth_3'];
                    $mouth_4 = $row['mouth_4'];
                    $mouth_5 = $row['mouth_5'];
                    $mouth_6 = $row['mouth_6'];
                    $mouth_7 = $row['mouth_7'];
                    $mouth_8 = $row['mouth_8'];
                    $mouth_9 = $row['mouth_9'];
                    $mouth_10 = $row['mouth_10'];
                    $mouth_11 = $row['mouth_11'];
                    $mouth_12 = $row['mouth_12'];
                    $mouth_13 = $row['mouth_13'];
                    $pants_1 = $row['pants_1'];
                    $pants_2 = $row['pants_2'];
                    $pants_3 = $row['pants_3'];
                    $pants_4 = $row['pants_4'];
                    $pants_5 = $row['pants_5'];
                    $pants_6 = $row['pants_6'];
                    $pants_7 = $row['pants_7'];
                    $pants_8 = $row['pants_8'];
                    $shoes_1 = $row['shoes_1'];
                    $shoes_2 = $row['shoes_2'];
                    $shoes_3 = $row['shoes_3'];
                    $shoes_4 = $row['shoes_4'];
                    $shoes_5 = $row['shoes_5'];
                    $shoes_6 = $row['shoes_6'];
                    $shoes_7 = $row['shoes_7'];
                    $shoes_8 = $row['shoes_8'];
                    $shoes_9 = $row['shoes_9'];
                    $shoes_10 = $row['shoes_10'];
                    $shoes_11 = $row['shoes_11'];
                    $shoes_12 = $row['shoes_12'];
                    $tshirt_1 = $row['tshirt_1'];
                    $tshirt_2 = $row['tshirt_2'];
                    $tshirt_3 = $row['tshirt_3'];
                    $tshirt_4 = $row['tshirt_4'];
                    $tshirt_5 = $row['tshirt_5'];
                    $tshirt_6 = $row['tshirt_6'];
                    $tshirt_7 = $row['tshirt_7'];
                    $tshirt_8 = $row['tshirt_8'];
                    $tshirt_9 = $row['tshirt_9'];
					}
				}
		?>
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
				$row=$obj->fetch_data($res);
				$id = $row['id'];
				$points = $row['points'];
         }
      }
		?>
<div>
<?php
   echo '<strong>'.$lang['pointsp'].'</strong>'; echo ' '.$points;
?>
</div>
<div style="overflow-x:auto;">
<table>
   <tr>
   <?php $sn = 0; ?>
      <td rowspan="4"><?php echo $lang['avatarhat'] ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
   </tr>
   <tr>
      <td><?php echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_0.png">'; ?></td>
      <td><?php if($hair_1 != 1) { echo '<div style="filter: blur(8px);-webkit-filter: blur(8px);">'; echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_1.png">'; echo '</div>'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_1.png">'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_2.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_2.png">'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_3.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_3.png">'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_4.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_4.png">'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_5.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_5.png">'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_6.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_6.png">'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_7.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_7.png">'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_8.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_8.png">'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_9.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_9.png">'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_10.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_10.png">'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_11.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_11.png">'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_12.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_12.png">'; } ?></td>
   </tr>
   <tr>
      <td><output><?php echo $lang['itemowned']; ?></output></td>
      <td><?php if($hair_1 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
   </tr>
   <tr>
      <td></td>
      <td><?php if($hair_1 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair1" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair2" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair3" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair4" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair5" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair6" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair7" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair8" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair9" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair10" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair11" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair12" value='.$lang['btn_buy'].'>'; } ?></td>
   </tr>
</table>
</div>
<br>
<br>
<div style="overflow-x:auto;">
<table>
   <tr>
   <?php $sn = 0; ?>
      <td rowspan="4"><?php echo $lang['avatarhat'] ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
   </tr>
   <tr>
      <td><?php echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_0.png">'; ?></td>
      <td><?php if($hair_1 != 1) { echo '<div style="filter: blur(8px);-webkit-filter: blur(8px);">'; echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_1.png">'; echo '</div>'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_1.png">'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_2.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_2.png">'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_3.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_3.png">'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_4.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_4.png">'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_5.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_5.png">'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_6.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_6.png">'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_7.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_7.png">'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_8.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_8.png">'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_9.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_9.png">'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_10.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_10.png">'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_11.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_11.png">'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_12.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_12.png">'; } ?></td>
   </tr>
   <tr>
      <td><output><?php echo $lang['itemowned']; ?></output></td>
      <td><?php if($hair_1 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
   </tr>
   <tr>
      <td></td>
      <td><?php if($hair_1 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair1" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair2" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair3" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair4" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair5" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair6" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair7" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair8" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair9" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair10" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair11" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair12" value='.$lang['btn_buy'].'>'; } ?></td>
   </tr>
</table>
</div>
<br>
<br>
<div style="overflow-x:auto;">
<table>
   <tr>
   <?php $sn = 0; ?>
      <td rowspan="4"><?php echo $lang['avatarhat'] ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
   </tr>
   <tr>
      <td><?php echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_0.png">'; ?></td>
      <td><?php if($hair_1 != 1) { echo '<div style="filter: blur(8px);-webkit-filter: blur(8px);">'; echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_1.png">'; echo '</div>'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_1.png">'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_2.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_2.png">'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_3.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_3.png">'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_4.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_4.png">'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_5.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_5.png">'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_6.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_6.png">'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_7.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_7.png">'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_8.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_8.png">'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_9.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_9.png">'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_10.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_10.png">'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_11.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_11.png">'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_12.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_12.png">'; } ?></td>
   </tr>
   <tr>
      <td><output><?php echo $lang['itemowned']; ?></output></td>
      <td><?php if($hair_1 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
   </tr>
   <tr>
      <td></td>
      <td><?php if($hair_1 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair1" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair2" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair3" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair4" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair5" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair6" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair7" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair8" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair9" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair10" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair11" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair12" value='.$lang['btn_buy'].'>'; } ?></td>
   </tr>
</table>
</div>
<br>
<br>
<div style="overflow-x:auto;">
<table>
   <tr>
   <?php $sn = 0; ?>
      <td rowspan="4"><?php echo $lang['avatarhat'] ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
   </tr>
   <tr>
      <td><?php echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_0.png">'; ?></td>
      <td><?php if($hair_1 != 1) { echo '<div style="filter: blur(8px);-webkit-filter: blur(8px);">'; echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_1.png">'; echo '</div>'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_1.png">'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_2.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_2.png">'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_3.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_3.png">'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_4.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_4.png">'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_5.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_5.png">'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_6.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_6.png">'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_7.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_7.png">'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_8.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_8.png">'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_9.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_9.png">'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_10.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_10.png">'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_11.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_11.png">'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_12.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_12.png">'; } ?></td>
   </tr>
   <tr>
      <td><output><?php echo $lang['itemowned']; ?></output></td>
      <td><?php if($hair_1 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
   </tr>
   <tr>
      <td></td>
      <td><?php if($hair_1 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair1" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair2" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair3" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair4" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair5" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair6" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair7" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair8" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair9" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair10" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair11" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair12" value='.$lang['btn_buy'].'>'; } ?></td>
   </tr>
</table>
</div>
<br>
<br>
<div style="overflow-x:auto;">
<table>
   <tr>
   <?php $sn = 0; ?>
      <td rowspan="4"><?php echo $lang['avatarhat'] ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
      <td><?php echo $lang['generalstyle'].$sn++ ?></td>
   </tr>
   <tr>
      <td><?php echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_0.png">'; ?></td>
      <td><?php if($hair_1 != 1) { echo '<div style="filter: blur(8px);-webkit-filter: blur(8px);">'; echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_1.png">'; echo '</div>'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_1.png">'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_2.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_2.png">'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_3.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_3.png">'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_4.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_4.png">'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_5.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_5.png">'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_6.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_6.png">'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_7.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_7.png">'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_8.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_8.png">'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_9.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_9.png">'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_10.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_10.png">'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_11.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_11.png">'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_12.png">'; } else { echo '<img height=200 width=150 src="assets/img/avatar_assets/Hair/hair_12.png">'; } ?></td>
   </tr>
   <tr>
      <td><output><?php echo $lang['itemowned']; ?></output></td>
      <td><?php if($hair_1 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<output>'.$lang['itemnotowned'].'</output>'; } else { echo '<output>'.$lang['itemowned'].'</output>'; } ?></td>
   </tr>
   <tr>
      <td></td>
      <td><?php if($hair_1 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair1" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_2 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair2" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_3 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair3" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_4 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair4" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_5 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair5" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_6 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair6" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_7 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair7" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_8 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair8" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_9 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair9" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_10 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair10" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_11 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair11" value='.$lang['btn_buy'].'>'; } ?></td>
      <td><?php if($hair_12 != 1) { echo '<input class="btn-primary btn-md full" type="submit" name="hair12" value='.$lang['btn_buy'].'>'; } ?></td>
   </tr>
</table>
</div>
<br>
 </div>
</div>