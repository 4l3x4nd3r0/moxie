<div class="main">
<section class="login">
    <form action="includes/signup.inc.php" method="POST">
        <div class="title">
        <h2>Sign up</h2></br>
        </div>
        <div class="title"><label> Nume de familie
         <input class="full" type="text" name="nume" ></br>
        </label></div>

        <div class="title"><label> Prenume
         <input class="full" type="text" name="prenume" ></br>
        </label></div>

        <div class="title"><label> Email
         <input class="full" type="text" name="email" ></br>
        </label></div>

        <div class="title"><label> Username
         <input class="full" type="text" name="uid" ></br>
        </label></div>

        <div class="title"><label> Parola
         <input class="full" type="password" name="pwd" ></br>
        </label></div>

        <div class="title">
            <label> Confirmare parola
                <input class="full" type="password" name="pwdrepeat" ></br>
            </label>
        </div>
        <br>
        <button class="btn-primary btn-md full" type="submit" name="submit" >Sign Up</button>

        </form>
        
        

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
    </section>
</div>