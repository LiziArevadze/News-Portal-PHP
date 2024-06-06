<?php
  include "../conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="adminStyles.css">
</head>
<body>
  <div class="buttons">
    <a href="../index.php"><button type="button" class="logout">Main Page</button></a>
  </div>
  <hr class="line">

<div class="header">
  <H1 style="font-family: Bitter; font-weight:bold">The News</H1>
</div>

<hr style="border-top: 1px rgb(106, 105, 105);">
  <br><br><br>
  <?php
    include "crud/getalldata.php"
  ?>
    <div class="footer">
    <hr style="border-top: 1px #CECECE solid">
    <div class="copyright" style="">© 2017 The Telegraph Company </div>
    <div class="right"
      style="color: #7A7A7A; font-size: 9px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Contact Us |
      Work With Us | Advertise | Your Ad Choices | Privacy | Terms of Service | Terms of Sale | Site Information |
      Navigation | Site Map | HelpSite | Feedback | Subscriptions</div>
  </div>
</body>
</html>