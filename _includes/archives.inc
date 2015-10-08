<div class="mycontent">
  <div class="mypostcontent">
    <ul class="list">
      <?php
      $sql = "SELECT id, title, date_published FROM posts ORDER BY date_published DESC";
      $result = $conn->query($sql);
      if (!$result){
        echo $conn->error . ' Your sql was: ' . $sql;
      }

      while ($row = $result->fetch_assoc()) {
        $postid = $row ['id'];
        $myposttitle = $row ['title'];
        $mypostdate = $row ['date_published'];
      ?>
      <li class="archive"><?php echo $mypostdate;?><a href="post.php?postid=<?php echo $postid;?>"><?php echo $myposttitle;?></a></li>
          <?php
           }
      ?>
    </ul>
  </div>
</div>
