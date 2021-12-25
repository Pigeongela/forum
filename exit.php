<?php
  setcookie('users', $user['name'], time() - 3660, "/");
  header('Location: /index.php');
?>