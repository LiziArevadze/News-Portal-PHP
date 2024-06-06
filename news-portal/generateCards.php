<?php
    $orderMode= 'ASC';
    if(isset($_GET["order"])){
        $orderMode=$_GET["order"];
    }
    $news =  mysqli_fetch_all(mysqli_query($conn,  "SELECT  img, title, description,id FROM news order by title $orderMode" ));

    for($i=0; $i<count($news); $i++){
?>
   
    <div class="card">
        <img src="pics/<?=$news[$i][0]?>" alt="image not found">
        <div class="container">
            <h3 style="font-family: IBM Plex Serif;"><b><?=$news[$i][1]?></b></h3>
            <p style="font-family:Nunito Sans; font-size:13px"><?=$news[$i][2]?></p>
        </div>
        <a href="?cardId=<?=$news[$i][3]?>"><button>Read more</button></a>
    </div>

<?php 
    }
?> 