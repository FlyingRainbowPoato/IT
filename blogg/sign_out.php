<?php 
session_start();
session_unset();
session_destroy();

echo "successfully logged out."
?>
!<!DOCTYPE html>
<html>
  <head>
    <title>Log out</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css"  href="style.css">
    <link rel="icon"       type="image/png" hrfe="favicon.png">
    <meta http-equiv="refresh" content="1; url='index.php'">
  </head>
  <body>
    
  </body>
</html>