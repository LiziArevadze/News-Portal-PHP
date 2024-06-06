<?php 
    $query_news = "SELECT * FROM news ORDER BY id DESC";
    $result_news = mysqli_query($conn, $query_news);
    if(isset($_GET["delete"])){
        include "delete.php";
    }

?>
<div class="news">
    <form action="" method="get">
        <button ><a href="?addPanel=show">Show ADD panel</a></button>
        <button name="?addPanel=hide">Hide ADD panel </button>
        <button name="main=news&&delete=''">Close EDIT panel</button>
    </form>
    <?php
        if(isset($_GET["addPanel"]) && $_GET["addPanel"]=="show"){
            include "add.php";
        }

        if(isset($_GET['edit'])){
            include "edit.php";
        }
    ?>
    <table class="data" style="font-family:bitter; font-size:15px; border-collapse: separate; border: 1px solid gray; border-radius: 10px;">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Show Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php 
            while($data_news = mysqli_fetch_assoc($result_news)){
        ?>
        <tr>
            <td><?=$data_news["id"]?></td>
            <td><?=$data_news["img"]?></td>
            <td><img src="../pics/<?=$data_news["img"]?>" alt=""></td>
            <td><?=$data_news["title"]?></td>
            <td><?=$data_news["description"]?></td>
            <td><a href="?main=news&&edit=<?=$data_news["id"]?>" style="text-decoration:none; color:black">Edit</a></td>
            <td><a href="?main=news&&delete=<?=$data_news["id"]?>" style="text-decoration:none; color:black">Delete</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</div>
