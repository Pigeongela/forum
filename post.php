
 <!DOCTYPE html>
 <html lang="ru" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Новая запись</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style.css">
   </head>
   <?php include("header.html") ?>

      <body>
   <div class="container">
     <div class="container__form">
   <form action="post.php" method="post" class="form">
   <center>
     <br/>
     <input type="text" class="auth__input" name="topic_name" placeholder="Тема"><br/>
     <input type="text" class="auth__input" name="topic_creator" placeholder="Автор"><br/>
     <textarea style="resize: none; width: 400px; height: 250px"
     placeholder="Введите текст" class="auth__input" name="con"></textarea><br/>
     <input type="submit" class="auth__button"name="submit" value="Опубликовать">
   </center>
   </form>
 </div>
</div>

   </body>
 </html>
 <?php
  $t_name = @$_POST['topic_name'];
  $t_creator = @$_POST['topic_creator'];
  $content = @$_POST['con'];
  $date = date("d-m-y");
  $mysql = new mysqli('localhost', 'root', '', 'check_users');

  if (isset($_POST['submit'])) {
    if ($t_name && $content) {
      if (@$query = mysqli_query("INSERT INTO `topics`(`topic_id`, 'topic_name', 'topic_content', 'topic_creator', 'date') VALUES ('', '".$t_name."', '".$content."', '".$t_creator."', '".$date."')")) {

    }
echo "Опубликовано";

    } else {
      echo "Заполните все поля";
    }
  }

  ?>
