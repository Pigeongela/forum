<?php
  $email = filter_var(trim($_POST['email']),
  FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);
  $date = filter_var(trim($_POST['date']),
  FILTER_SANITIZE_STRING);

  if (mb_strlen($email) < 6) {
    echo "Недопустимая длина Email";
    exit();
  } else if (mb_strlen($name) < 2 || mb_strlen($name) > 30) {
    echo "Недопустимая длина имени";
    exit();
  } else if (mb_strlen($pass) < 6) {
    echo "Пароль должен быть длиной более 6 символов";
    exit();
  }

  $pass = md5($pass."ddssaaee123");

  $mysql = new mysqli('localhost', 'pigeoonlin_forum', 'Angel2002', 'pigeoonlin_forum');
  
  $mysql->query("INSERT INTO `users` (`email`, `pass`, `name`, `date`)
  VALUES('$email', '$pass', '$name', '$date')");
  setcookie('users', $user['name'], time() + 3600, "/");
  $mysql->close();

  header('Location: /index.php');
?>