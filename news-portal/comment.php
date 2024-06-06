<?php
    $error = "";
    if(isset($_POST["commentadd"])){
        if(isset($_SESSION["firstname"])){
            $newsid = $news[0][4];
            $usercommentId = $_SESSION["userId"];
            $commenttextadded = $_POST["comment"];
            mysqli_query($conn, "INSERT INTO comment(idnews, idusers, comment) VALUES ('$newsid','$usercommentId','$commenttextadded')");
            header("Location: " . $_SERVER['REQUEST_URI']);
        } else {
            $error = "Log in first to add comment";
        }
    }
?>

<div class="textarea-container">
    <form action="" method="post">
        <textarea rows="4" cols="50" name="comment" placeholder="Write your comment here..."></textarea>
        <button name="commentadd" class="submit">Submit</button>
        <?php if ($error): ?>
            <span class="error-message"><?= $error ?></span>
        <?php endif; ?>
    </form>
</div>

<?php
    include "previousComments.php";
?>
