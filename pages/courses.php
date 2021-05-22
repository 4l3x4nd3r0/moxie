<div class="main">
 <div class="wrapper">
    <form action="" method="POST">
   <input name="searchtext" type="text" placeholder="<?php echo $lang['search']; ?>">
   <input id="submit" type="submit" name="search" value="Search">
   <h1> <?php echo $lang['coursesh'] ?></h1>
   </form>
    <?php 
      if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['search']))
      {
         //echo "Click";
         $search = $obj->sanitize($conn,$_POST['searchtext']);

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