<?php
if (!isset($_SESSION["authorid"])){
  echo '
  <form action="signed_in.php" method="POST">
    <label for="inputUsername">Username</label>
    <input type="text" name="username" id="inputUsername">
    <label for="inputPassword">Password</label>
    <input type="password" name="password" id="inputPassword">
    <input type="submit">
  </form>';
}
else {
  echo ' <form action = "sign_out.php">
  <input type="submit" value="Sign out">
  </form>';
}
?>