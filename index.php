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
    <div class="container__form">
          <form action="auth.php" method="post" class="form">
          <h1 class="title">Вход</h1>
            <input type="text" class="auth__input" name="email" id="email" placeholder="Введите Email">
            <input type="password" class="auth__input" name="pass" id="pass" placeholder="Введите пароль">
            <button type="submit" class="auth__button">Войти</button>
            <span class="regist">Или <a href="register.php">Зарегистрироваться</a></span>
          </form>
     </div>
  </div>
</body>
</html>
