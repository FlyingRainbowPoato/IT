<?php 
  session_start();

  if (isset($_POST['password']) && isset($_POST['username'])){
    $authorpassword = $_POST['password'];
    $authorusername = $_POST['username'];
    include 'dbconnect.php';
    $sql = "SELECT id, username, password FROM author WHERE username = \"$authorusername\" AND password = SHA2(\"$authorpassword\",256)";
    $result = mysqli_query($conn, $sql);
    if(!$result){
      die( "login failed" );
      session_destroy();
    }
    if (mysqli_num_rows($result) == 1 ) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION["username"] = $authorusername;
      $_SESSION["authorid"] = $row["id"];
      echo "welcome " . $authorusername . " with id: " . $_SESSION["authorid"];
    }
    else {
      echo "num of rows returned: " . mysqli_num_rows($result) . ". In other words: Failed to sign in.";
      session_destroy();
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Signed in</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css"  href="style.css">
    <link rel="icon"       type="image/png" hrfe="favicon.png">
    <meta http-equiv="refresh" content="1; url='index.php'">
  </head>
  <body>
    
  </body>
</html>