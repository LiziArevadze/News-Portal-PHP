<?php
    include "../conn.php";
    include "validate/validate.php";
    include "userVerification/verify.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="../styles/login.css">
    <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet'>

</head>
<body>
    <div class="forma">
            <div class="content">
                <div class="welcome-text" style="font-family:Bitter;">Welcome to The News</div>
                <div class="sign-text" style="font-family:Bitter;">Sign into your account</div>
                <div class="form">
                <form method="post">
                    <div class="input-field">
                        <input type="email" name="loginemail" placeholder="e.g. name@email.com">
                    </div>
                    <div class="input-field">
                        <input type="password" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="button-container">
                        <button name="loginbutton" style="font-family:Bitter;">Log In</button>
                    </div>
                    <?php
                        echo $incorrectLogin;
                    ?>
                    <div class="register"  style="font-family:Bitter;">Don't have an account? 
                        <a href="register.php">Register</a>
                    </div>
                </form>
                </div>
            </div>
    
        <div class="thumbnail">
            <img src="../pics/thenews.png" alt="Login Image">
        </div>
    </div>
</body>
</html>
