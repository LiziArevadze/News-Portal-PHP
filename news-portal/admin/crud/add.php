<form method="post" style="margin-top:15px" enctype="multipart/form-data">
    <input name="Img" type="file"><br><br>
    <input name="title" type="text" name="name" placeholder="title"><br><br>
    <textarea name="description" placeholder="Description"></textarea>
    <br><br>
    <button name="add_news">ADD News</button>
</form>
<?php

    if(isset($_POST['add_news'])){
        $ImgName = $_FILES["Img"]["name"];
        $Img = $_FILES["Img"]["tmp_name"];
        $path = "../pics/".$ImgName;
        move_uploaded_file($Img, $path);

        $title = $_POST['title'];
        $description = $_POST['description'];
        mysqli_query($conn, "INSERT INTO news(img, title, description) VALUES ('$ImgName','$title','$description')");
        $url = $_SERVER['REQUEST_URI'];
        header("location: $url");
    }
?>