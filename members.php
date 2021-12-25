<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Участники</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include("header.html") ?>
    <h1 class="title">Участники</h1>
  </body>
</html>

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysql = new mysqli('localhost', 'pigeoonlin_forum', 'Angel2002', 'pigeoonlin_forum');

echo "<center>";
$query = "SELECT * FROM `users` WHERE id";
@$result = $mysql->query($query);
while ($row = $result->fetch_assoc()) {
  $id = $row['id'];
  echo "<a href='profile.php?id=$id'>".$row["name"], " (", $row["email"],")"."</a><br/>";
  }
echo "</center>";
?>