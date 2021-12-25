<?php
  $email = filter_var(trim(@$_POST['email']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim(@$_POST['pass']),
  FILTER_SANITIZE_STRING);

  $pass = md5($pass."ddssaaee123");

  $mysql = new mysqli('localhost', 'pigeoonlin_forum', 'Angel2002', 'pigeoonlin_forum');

  $query = "SELECT * FROM `users` WHERE `email` =
  '$email' AND `pass` = '$pass'";
  $result = $mysql->query($query);
  $user = $result->fetch_assoc();
  if(@count($user) == 0) {
      echo "Пользователь не найден";
      exit();
  }

  setcookie('users', $user['name'], time() + 3600, "/");


  $mysql->close();

  header('Location: /main.php');

?>