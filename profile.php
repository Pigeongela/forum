<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Страница участника</title>
    <style>
      b {
      color: white;
    }
    h1 {
      color: white;
    }
    em {
      color: #C3073F;
    }
    </style>
  </head>
  <body>

  </body>
</html>

<?php
include("header.html");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysql = new mysqli('localhost', 'pigeoonlin_forum', 'Angel2002', 'pigeoonlin_forum');

$query = "SELECT * FROM `users` WHERE id='".$_GET['id']."'";
@$result = $mysql->query($query);
while ($row = $result->fetch_assoc()) {
  echo "<center>";
  echo "<h1>".$row["name"]."</h1><br/><img src='".$row['profile_pic']."' width='50' height='50'><br/>", "<b>Дата рождения: ".$row['date'].
  "<br/>", "Email: ".$row['email']."</b><br/>", "<em>Ответы: ".$row['replies']."<br/>",
   "Опубликованные записи: ".$row['topics']."<br/>", "Количество записей:
   ".$row['score']."</em><br/>";
  }
echo "</center>";
?>