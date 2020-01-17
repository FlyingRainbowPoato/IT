<?php 
include 'dbconnect.php';

if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['epost']) && isset($_POST['password'])){
  $username = $_POST['username'];
  $epost = $_POST['epost'];
  $name = $_POST['name'];
  $password = $_POST['password'];
  
  $sql = "INSERT INTO author(username,password,epost, name) VALUES (\"$username\", SHA2(\"$password\", 256), \"$epost\", \"$name\")";
  $result = mysqli_query($conn, $sql);
  if (!$result){
    die("No result");
  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>New user</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css"  href="style.css">
    <link rel="icon"       type="image/png" hrfe="favicon.png">
  </head>
  <body>
    <?php require_once "nav.php" ?>
    <form action="sign_up.php" method="post">
      <label for="inputUsername">Username</label>
      <input 
        id="inputUsername"
        name="username"
        type="text"
        placeholder="xXx_King1_xXx"
      >

      <label for="inputPassword">Password</label>
      <input 
        id="inputPassword"
        name="password"
        type="password"
        placeholder="Hunter2"
      ></input>

      <label for="inputEpost">Epost</label>
      <input 
        id="inputEpost"
        name="epost"
        type="text"
        placeholder="yourname@email.com"
      >

      <label for="inputName">Full Name</label>
      <input 
        id="inputName"
        name="name"
        type="text"
        placeholder="John Doe"
      >
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
<?php include 'dbdisconnect.php' ?>