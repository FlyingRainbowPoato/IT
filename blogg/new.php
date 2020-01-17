<?php
session_start();
include 'dbconnect.php';

if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['author'])){
  $content = $_POST['content'];
  $title = $_POST['title'];
  $media = $_POST['media'];
  if (is_numeric($_POST['author'])){
    $author = $_POST['author'];
  }
  else{
    die('author has to be numeric');
  }
  if (!(isset($content) && isset($title) && isset($media) && isset($author))) {die("Variables were not set properly. Error 2");}
  $sql = "INSERT INTO post(content,title,author, media) VALUES (\"$content\", \"$title\", $author, \"$media\")";
  $result = mysqli_query($conn, $sql);
  if (!$result){
    die("Request did not go through. Error 1");
  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>New post</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css"  href="style.css">
    <link rel="icon"       type="image/png" hrfe="favicon.png">
  </head>
  <body>
    <?php require_once "nav.php" ?>
    <form action="new.php" method="post">
      <label for="inputTitle">Title</label>
      <input 
        id="inputTitle"
        name="title"
        type="text"
        placeholder="Write a good title here"
      >

      <label for="inputContent">Content</label>
      <textarea 
        id="inputContent"
        name="content"
        type="text"
        placeholder="Text goes here"
      ></textarea>

      <input 
        id="inputAuthor"
        name="author"
        type="hidden"
        <?php echo "value=\"" . $_SESSION["authorid"] ."\"" ?>
      >

      <label for="inputMedia">Media</label>
      <input 
        id="inputMedia"
        name="media"
        type="text"
        placeholder="add an image url here if you want to use image"
      >
      <input type="submit" value="Submit" >
    </form>
  </body>
</html>
<?php include 'dbdisconnect.php' ?>