<div class="main">
        <section class="login">
            <form action="includes/login.inc.php" method="POST">
                <div class="title">
                    <h2>Log In</h2><br>
                </div>
                <div class="title"><label>Username/Email
                <input class="full" type="text" name="uid" required="true">
                </label></div>
                <div class="title">
                    <label>Password
                        <input class="full" type="password" name="pwd" required="true">
                    </label>
                </div>
                <br>
                <input class="btn-primary btn-md full" type="submit" name="submit" value="<?php echo $lang['btn_login'] ?>">
            </form>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect Credentials!</p>";
                }
            }
            ?>
            </div>
        </section>
</div>

