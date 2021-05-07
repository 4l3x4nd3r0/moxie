<div class="main">
<div class="body">
<section class="signup-form">
    <div class="wrapper">
    <h2>Sign up</h2></br></br>
    <div class="signup-form-form">
       
    <form action="includes/signup.inc.php" method="POST">

        <label> Nume de familie
         <input type="text" name="nume" ></br>
        </label>

        <label> Prenume
         <input type="text" name="prenume" ></br>
        </label>

        <label> Email
         <input type="text" name="email" ></br>
        </label>

        <label> Username
         <input type="text" name="uid" ></br>
        </label>

        <label> Parola
         <input type="password" name="pwd" ></br>
        </label>

        <label> Confirmare parola
         <input type="password" name="pwdrepeat" ></br>
        </label>

        <button type="submit" name="submit" >Sign Up</button>

        </form>
        
        <style>
        body{
            background-color:#FBE8A6;
            text-align: center;
        }
        
        form{
            display: inline-block;
        }

        label, input {
            display: block;
        }

        label {
            margin-bottom: 1px;
        }
        
        button{
	        padding: 5px;
        }
        
        button{
	        border: none;
	        background-color: #474787;
	        color: #d1ccc0;
	        transition: 0.4s all ease;
        }

        button:hover{
	        background-color: #706fd3;
	        transition: 0.4s all ease;
	        cursor: pointer;
        }

      </style>

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