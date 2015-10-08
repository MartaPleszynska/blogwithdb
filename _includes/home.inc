<?php
$sql = "SELECT id, title, author, date_published, content FROM posts ORDER BY date_published DESC LIMIT 0,4";
$result = $conn->query($sql);
if (!$result){
  echo $conn->error . ' Your sql was: ' . $sql;
}

while ($row = $result->fetch_assoc()) {
    ?>
    <div class="mycontenthome">
        <?php
              $postid = $row ['id'];
              $myposttitle = $row ['title'];
              $mypostauthor = $row ['author'];
              $mypostdate = $row ['date_published'];
              $mypostcontent = $row ['content'];
             include "_includes/shortpost.inc"; ?>
    </div>
    <?php
     }
?>
