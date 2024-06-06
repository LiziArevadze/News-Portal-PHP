<?php
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $img_path = "../pics/".mysqli_fetch_assoc(mysqli_query($conn, "SELECT img FROM news WHERE id='$id'"))["img"];
        unlink($img_path);
        mysqli_query($conn, "DELETE FROM news WHERE id='$id'");
        $url = $_SERVER['PHP_SELF']."?main=news";
        header("location: $url");
    }
