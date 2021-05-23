<div class="main">
 <div class="wrapper">
   <h1> <?php echo $lang['coursesh'] ?></h1>
   <form action="" method="POST">
   <select name="category">
   <option value="0">None</option>
				<?php 
					$tbl_name = 'tbl_categories';
					$query = $obj->select_data($tbl_name);
					$res = $obj->execute_query($conn,$query);
					if($res==true)
					{
						$count_rows = $obj->num_rows($res);
						if($count_rows>0)
						{
							while ($row=$obj->fetch_data($res)) {
								$id=$row['id'];
								$title=$row['category_name_'.$_SESSION['lang']];
								?>
								<option value="<?php echo $id; ?>"><?php echo $title; ?></option>
								<?php
							}
						}
						else{
							?>

							<?php 
						}
					}
				?>
			</select>
   <select name="subcategory">
   <option value="0">None</option>
				<?php 
					$tbl_name = 'tbl_sub_categories';
					$query = $obj->select_data($tbl_name);
					$res = $obj->execute_query($conn,$query);
					if($res==true)
					{
						$count_rows = $obj->num_rows($res);
						if($count_rows>0)
						{
							while ($row=$obj->fetch_data($res)) {
								$sid=$row['id'];
								$stitle=$row['subcategory_name_'.$_SESSION['lang']];
								?>
								<option value="<?php echo $sid; ?>"><?php echo $stitle; ?></option>
								<?php
							}
						}
						else{
							?>

							<?php 
						}
					}
				?>
			</select>
   <input id="filter" type="submit" name="filter" value="Filter">
   <input name="searchtext" type="text" placeholder="<?php echo $lang['search']; ?>">
   <input id="submit" type="submit" name="search" value="Search">
   </form>
    <?php
      if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['filter']))
      {
         $filtercategory = $obj->sanitize($conn,$_POST['category']);
         $filtersubcategory = $obj->sanitize($conn,$_POST['subcategory']);
         $sn = 0;
         $tbl_name = "tbl_posts";
         if($filtercategory != 0 AND  $filtersubcategory != 0)
         {
            $where = "category=$filtercategory && subcategory=$filtersubcategory";
         }
         else
         {
            $where = "category=$filtercategory OR subcategory=$filtersubcategory";
         }
         $query = $obj->select_data($tbl_name,$where);
         $res = $obj->execute_query($conn,$query);
         $count_rows = $obj->num_rows($res);
         if($count_rows>0)
         {
            while ($row=$obj->fetch_data($res)) {
               $id = $row['id'];
               $post_title = $row['title_'.$_SESSION['lang']];
               $post_description = $row['description_'.$_SESSION['lang']];
               $created_at = $row['created_at'];
               $sn++;
            ?>
               <div class="body">
                  <h2><?php echo $post_title; ?></h2>
                  <br>
                  <p>
                     <?php echo substr($post_description, 0,400).' ...'; ?>
                  </p>
                  <br>
                  <a href="<?php echo SITEURL; ?>index.php?page=blog_detail&id=<?php echo $id; ?>">
                     <button class="btn-primary btn-sm"><?php echo $lang['read_more'] ?></button>
                  </a>
               </div>
               <?php if($sn > 3) {
                        echo '<br>';
                        $sn = 0;
                     } ?>
                     <?php
                  }
               }
               else
               {
                  echo "<div class = 'error'>".$lang['add_fail_password_not_match']."</div>";
               }
         }
      else if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['search']))
      {
         //echo "Click";
         $search = $obj->sanitize($conn,$_POST['searchtext']);
         $sn = 0;
         $tbl_name = "tbl_posts";
         $where = "title_en LIKE '%{$search}%' OR title_ro LIKE '%{$search}%' OR description_en LIKE '%{$search}%' OR description_ro LIKE '%{$search}%'";

         $query = $obj->select_data($tbl_name,$where);
         $res = $obj->execute_query($conn,$query);
         $count_rows = $obj->num_rows($res);
         if($count_rows>0)
         {
            while ($row=$obj->fetch_data($res)) {
               $id = $row['id'];
               $post_title = $row['title_'.$_SESSION['lang']];
               $post_description = $row['description_'.$_SESSION['lang']];
               $created_at = $row['created_at'];
               $sn++;
            ?>
               <div class="body">
                  <h2><?php echo $post_title; ?></h2>
                  <br>
                  <p>
                     <?php echo substr($post_description, 0,400).' ...'; ?>
                  </p>
                  <br>
                  <a href="<?php echo SITEURL; ?>index.php?page=blog_detail&id=<?php echo $id; ?>">
                     <button class="btn-primary btn-sm"><?php echo $lang['read_more'] ?></button>
                  </a>
               </div>
               <?php if($sn > 3) {
                        echo '<br>';
                        $sn = 0;
                     } ?>
                     <?php
                  }
               }
               else
               {
                  echo "<div class = 'error'>".$lang['add_fail_password_not_match']."</div>";
               }
         }
         else
         {
            $tbl_name = "tbl_posts";
            $sn = 0;
            $where = "is_active='Yes' && is_featured='Yes'";
            $other = "ORDER BY created_at DESC";
            $query = $obj->select_data($tbl_name,$where,$other);
            $res = $obj->execute_query($conn,$query);
            $count_rows = $obj->num_rows($res);
            if($count_rows>0)
            {
               while ($row=$obj->fetch_data($res))
                  {
                     $id = $row['id'];
                     $post_title = $row['title_'.$_SESSION['lang']];
                     $post_description = $row['description_'.$_SESSION['lang']];
                     $created_at = $row['created_at'];
                     $sn++;
                     ?>
   
                     <div class="body">
                        <h2><?php echo $post_title; ?></h2>
                        <br>
                        <p>
                           <?php echo substr($post_description, 0,400).' ...'; ?>
                        </p>
                        <br>
                        <a href="<?php echo SITEURL; ?>index.php?page=blog_detail&id=<?php echo $id; ?>">
                           <button class="btn-primary btn-sm"><?php echo $lang['read_more'] ?></button>
                        </a>
                     </div>
                     <?php if($sn > 3) {
                        echo '<br>';
                        $sn = 0;
                     } ?>

                     <?php
                  }
               }
               else {
                  echo "<div class = 'error'>".$lang['add_fail_password_not_match']."</div>";
               }
            }
         ?>
 </div>
</div>