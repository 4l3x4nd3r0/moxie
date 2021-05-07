<div class="main">
        <section class="login">
            <form action="includes/login.inc.php" method="POST">
                <div class="title">
                    <h2>Log In</h2><br>
                </div>
                <div class="title"><label>Username/Email
                <input class="full" type="text" name="uid">
                </label></div>
                <div class="title">
                    <label>Password
                        <input class="full" type="password" name="pwd">
                    </label>
                </div>
                <br>
                <button class="btn-primary full" type="submit" name="submit">Log In</button>
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

