<?php
if (isset($_POST["submitButton"])) {
    echo "Form was submitted";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Movieflix</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
</head>
<body>

    <div class="signInContainer">

        <div class="column">

            <div class="header">
                <img src="assets/images/logo.png" alt="logo" />
                <h3>Sign In</h3>
                <span>to continue to Movieflix</span>
            </div>

            <form method="post">

                <input type="text" name="userName" placeholder="User name" required />

                <input type="password" name="password" placeholder="Password" required />

                <input type="submit" name="submitButton" value="SUBMIT" />

            </form>

            <a href="register.php" class="signInMessage">Need an account? Sign up here!</a>

        </div>

    </div>

</body>
</html>