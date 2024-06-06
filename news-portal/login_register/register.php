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
    <title>Register</title>
    <link rel="stylesheet" href="../styles/register.css">
    <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet'>

</head>
<body>
    <div class="forma">
        <form action="" method="post">
            <div class="content">
                <div class="welcome-text" style="font-family:Bitter;">Welcome to The News</div>
                <div class="sign-text" style="font-family:Bitter;">Activate your account</div>
                <div class="form">
                <div class="input-field">
                        <input type="text" name="firstName" placeholder="First Name">
                    </div>
                    <div class="input-field">
                        <input type="text" name="lastName" placeholder="Last Name">
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="input-field">
                        <input type="password" name="password2" placeholder=" Repeat Password"> <?php echo $errorpasswordMatch?>
                    </div>
                    <div class="button-container">
                        <button name="register" style="font-family:Bitter;">Register</button>
                    </div>
                    <div class="register"  style="font-family:Bitter;">Already have an account? 
                        <a href="login.php">Log In</a>
                    </div>
                </div>
            </div>
        </form>
        <div class="thumbnail">
            <img src="../pics/thenews.png" alt="reg Image">
        </div>
    </div>
</body>
</html>
