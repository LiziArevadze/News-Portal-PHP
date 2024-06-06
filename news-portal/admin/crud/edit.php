<?php 
    $id = $_GET['edit'];
    $edit_news_q = mysqli_query($conn, "SELECT * FROM news WHERE id='$id'");
    $data = mysqli_fetch_assoc($edit_news_q);
  
    if(isset($_POST['edit_news'])){
        $description = $_POST['description'];
        $title = $_POST['title'];

        if($_FILES['Img']["name"]!=""){
            $ImgName = $_FILES["Img"]["name"];
            $Img = $_FILES["Img"]["tmp_name"];
            $path = "../pics/".$ImgName;
            move_uploaded_file($Img, $path);

            mysqli_query($conn, "UPDATE news SET img='$ImgName', title='$title', description='$description' WHERE id='$id'");
            
        }else{
            mysqli_query($conn, "UPDATE news SET title='$title', description='$description' WHERE id='$id'");
     
        }
        $url = $_SERVER['REQUEST_URI'];
        header("location: $url");
    }
?>
<form method="post" style="margin-top:15px" enctype="multipart/form-data" class="edit">
    <input name="Img" type="file"><br><br>
    <input name="title" type="text"placeholder="title" value="<?=$data['title']?>"><br><br>
    <textarea name="description" placeholder="Description"><?=$data['description']?></textarea>
    <br><br>
    <button name="edit_news">edit News</button>
</form>
