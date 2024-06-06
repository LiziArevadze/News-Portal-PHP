    
    <div class="header">
        <H1 style="font-family: Bitter; font-weight:bold">The News</H1>
    </div>
    <a href="?cardId="><button class="go">Go back</button></a>
        
    <hr style="border-top: 1px rgb(106, 105, 105);">

    <?php
        $id=$_SESSION["cardId"];
        $news=mysqli_fetch_all(mysqli_query($conn,  "SELECT  img, title, description,fullStory,id FROM news where id=$id" ));
    ?>
    <div class="image-container">
        <h1 style="font-family:bitter"><?=$news[0][1]?></h1>
        <img src="pics/<?=$news[0][0]?>" alt="">
        <p style="font-family:bitter; font-size:15px"><?=$news[0][2]?></p>
    </div>

    <div class="text-container">
        <?=$news[0][3]?>  
    </div>

    <?php
        include "comment.php";
    ?>