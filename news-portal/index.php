<?php
  include "conn.php";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The News</title>
  <link rel="stylesheet" href="styles/style.css">
  <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=IBM Plex Serif' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
</head>
<body>
<?php
    if(isset($_SESSION["firstname"])){
  ?>
    <div class="header-container">
      <div class="welcome-message">Hello <?php echo $_SESSION["firstname"]; ?></div>
      <a href="?logout=1"><button type="button" class="signup">Log out</button></a>
    </div>
    <?php
      if(isset($_GET["logout"]) && $_GET["logout"]==1){
        unset($_SESSION["firstname"]);
        unset($_SESSION["userId"]);
        header("Location: " . $_SERVER['REQUEST_URI']);
      }
      }else{
    ?>
    <div class="buttons">
      <a href="login_register/login.php"><button type="button" class="login">Log In</button></a>
      <a href="login_register/register.php"><button type="button" class="signup">Sign Up</button></a>
    </div>
    <?php
      }
    ?>
    <hr class="line">
    
    <?php
      if( isset($_GET["cardId"])&& $_GET["cardId"]!=""){
        $_SESSION["cardId"]=$_GET["cardId"];
        include "news.php";
      }else{
        include "main.php";
      }
    ?>

      <div class="footer">
        <hr style="border-top: 1px #CECECE solid">
        <div class="copyright"style="">© 2024 The Telegraph Company </div>
        <div class="right" style="color: #7A7A7A; font-size: 9px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Contact Us | Work With Us |  Advertise  |  Your Ad Choices |   Privacy  |  Terms of Service  |  Terms of Sale  |  Site Information  |  Navigation  |   Site Map  |  HelpSite  |  Feedback  |  Subscriptions</div>
      </div>
</body>
</html>