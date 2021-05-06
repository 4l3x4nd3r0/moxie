<div class="main">
<div class="body">
<section class="signup-form">
    <div class="wrapper">
    <h2>Sign Up</h2></br></br>
    <div class="signup-form-form">
        <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="nume" placeholder="Nume de Familie..."></br>
        <input type="text" name="prenume" placeholder="Prenume..."></br>
        <input type="text" name="email" placeholder="Email..."></br>
        <input type="text" name="uid" placeholder="Username..."></br>
        <input type="password" name="pwd" placeholder="Password..."></br>
        <input type="password" name="pwdrepeat" placeholder="Repeat Password..."></br>
        <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords don't match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken!</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        }
    }
    ?>
    </div>
    </section>
</div>
</div>