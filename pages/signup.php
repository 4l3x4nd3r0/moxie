<div id="main" class="main">
<section class="login">
    <form action="" method="POST">
        <div class="title">
        <h2>Sign up</h2></br>
        </div>
        <div class="title"><label> Nume de familie
         <input class="full" type="text" name="nume" required="true"></br>
        </label></div>

        <div class="title"><label> Prenume
         <input class="full" type="text" name="prenume" required="true"></br>
        </label></div>

        <div class="title"><label> Initiala Tatalui
         <input class="full" type="text" name="initialatata" required="true"></br>
        </label></div>

        <div class="title"><label> Email
         <input class="full" type="text" name="email" required="true"></br>
        </label></div>

        <div class="title"><label> Parola
         <input class="full" type="password" name="password" required="true"></br>
        </label></div>

        <div class="title">
            <label> Confirmare parola
                <input class="full" type="password" name="passwordrepeat" required="true"></br>
            </label>
        </div>
        <label><input type="checkbox" name="GDPR" required="true"> Accept Politica de Protectie a Datelor
        </label>
        <br>
        <button class="btn-primary btn-md full" type="submit" name="submit" >Inregistrare</button>

        </form>
        
        

    <?php 
		if(isset($_POST['submit']))
		{
			$nume = $obj->sanitize($conn,$_POST['nume']);
            $prenume = $obj->sanitize($conn,$_POST['prenume']);
            $initialatata = $obj->sanitize($conn,$_POST['initialatata']);
			$email = $obj->sanitize($conn,$_POST['email']);
			$password = $obj->sanitize($conn,$_POST['password']);
            $passwordrepeat = $obj->sanitize($conn,$_POST['passwordrepeat']);
			$created_at = date('Y-m-d H:i:s');
            $points = 0;
            $username = $nume.'_'.$initialatata.'_'.$prenume;
            $full_name = $nume.' '.$initialatata.' '.$prenume;
            if ($password !== $passwordrepeat) {
                $_SESSION['add'] = "<div class='error'>".$lang['add_fail']."</div>";
				header('location:'.SITEURL.'index.php?page=signup');
            }
            else {
                $securepassword = md5($obj->sanitize($conn,$_POST['password']));
            }
			$data = "
                nume='$nume',
                prenume='$prenume',
				full_name='$full_name',
				email='$email',
				username='$username',
				password='$securepassword',
				created_at='$created_at',
                points='$points'
			";
			$tbl_name='tbl_users';

			$query = $obj->insert_data($tbl_name,$data);
			$res = $obj->execute_query($conn,$query);

			if($res==true)
			{
				$_SESSION['add'] = "<div class='success'>".$lang['add_success']."</div>";
				header('location:'.SITEURL.'index.php?page=login');
			}
			else
			{
				$_SESSION['add'] = "<div class='error'>".$lang['add_fail']."</div>";
				header('location:'.SITEURL.'index.php?page=signup');
			}
		}
	?>
    </section>
</div>