<?php include 'dbconnect.php'; 
session_start();

$sql = "SELECT author.name, post.content, post.title, post.time, post.media FROM post, author WHERE author.id = post.author ORDER BY time DESC";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css"  href="style.css">
    <link rel="icon"       type="image/png" hrfe="favicon.png">
  </head>
  <?php require_once "nav.php" ?>
  <body>
    <table>
      <?php
        if ($result){
          while ($row = mysqli_fetch_assoc($result)){
            $filename = $row["media"];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            $bilde = array('gif','png','jpg','bmp','jpeg','svg','tiff','webp','ico','apng','cur','jfif','pjpeg','pjp');
          echo "<article>" .
            "<h1>" . $row["title"] . "</h1>" . 
            "<p>" . $row["name"] . "</p>" . 
            "<p>" . $row["time"] . "</p>" .
            "<p>" . $row["content"] . "</p>";
            if (in_array($ext, $bilde)){
              echo "<img src=\"" . $filename . "\" alt = picture>";
            }
            echo "</article>";
          }
        }
        else {echo "no posts yet. Add one under \"New Post\"";}
      ?>
    </table>
  </body>
</html>

<?php include 'dbdisconnect.php'; ?>