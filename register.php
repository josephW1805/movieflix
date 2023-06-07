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
                <h3>Sign Up</h3>
                <span>to continue to Movieflix</span>
            </div>

            <form method="post">

                <input type="text" name="firstName" placeholder="First name" required />

                <input type="text" name="lastName" placeholder="Last name" required />

                <input type="text" name="userName" placeholder="User name" required />

                <input type="email" name="email" placeholder="Email" required />

                <input type="email" name="email2" placeholder="Confirm email" required />

                <input type="password" name="password" placeholder="Password" required />

                <input type="password" name="password2" placeholder="Confirm password" required />

                <input type="submit" name="submitButton" value="SUBMIT" />

            </form>

            <a href="login.php" class="signInMessage">Already have account? Sign in here!</a>

        </div>

    </div>

</body>
</html>