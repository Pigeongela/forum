<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Форма регистрации</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    a {
      color: #C3073F;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php
      if(@$_COOKIE['users'] == ''):
    ?>
    <div class="container__form">
        <form action="check.php" method="post" class="form">
        <h1 class="title">Регистрация</h1>
        <input type="email" class="auth__input" name="email" id="email" placeholder="Введите Email">
        <input type="text" class="auth__input" name="name" id="name" placeholder="Введите имя">
        <input type="date" class="auth__input" name="date" id="date" placeholder="Введите дату рождения">
        <input type="password" class="auth__input" name="pass" id="pass" placeholder="Введите пароль">
        <button class="auth__button">Зарегистрироваться</button>
        <span class="regist">Или <a href="index.php">Войти</a></span>
        </form>

    </div>
    <?php endif; ?>
    </div>
</body>
</html>
