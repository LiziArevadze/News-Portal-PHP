<?php
    if(isset($news[0][4])){
        $newsid= $news[0][4];
        $commentQuery = mysqli_query($conn,  "SELECT  idusers,time,comment FROM comment where idnews='$newsid' order by time DESC");
        $newscomments=mysqli_fetch_all($commentQuery);
        $commenters=[];
        for($i=0;$i<count($newscomments);$i++){
            $newscommentsindex=$newscomments[$i][0];
            $fnLn= mysqli_fetch_all(mysqli_query($conn,  "SELECT  firstname, lastname FROM users where userId='$newscommentsindex'"));
            $fn=$fnLn[0][0]; 
            $ln=$fnLn[0][1];
            $commenters[$i]=$fn."  ". $ln; 
        }

        for($i=0;$i<count($newscomments);$i++){
?>
        <div class="comment">
            <div class="name">Comment created by <?=$commenters[$i]?></div>
            <div class="time">time at <?=$newscomments[$i][1]?></div>
            <p class="commenttext">
                <?=$newscomments[$i][2]?>
            </p>
        </div>
<?php
        }
    }
?>