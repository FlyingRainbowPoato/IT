<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="new.php">New Post</a></li>
    <li class="signUpButton"><a href="sign_up.php">Sign up</a></li>
    <li>
      <?php 
      if (!($_SERVER['REQUEST_URI'] == "/blogg/sign_up.php")) {
        require_once "sign_in.php"; }
      ?>
    </li>
  </ul>
</nav>