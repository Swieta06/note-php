<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Post</title>
  </head>
  <body>
    <!-- form defaultnya get -->
    <form action="post.php" method="post">
      masukan nama:
      <!-- name disini akan menjadi key dari $_post -->
      <input type="text" name="name" id="" />
      <br />
      <button type="submit" name="subimt">Kirim</button>
    </form>
    <?php

    if(isset($_POST["submit2"])): ?>
     <h1>  selamat datang, <?=$_POST["inputName"]?></h1>
   <?php endif ?>

    <form action="" method="post">
      Input nama yang akan tampil:
    <input type="text" name="inputName" id="">
    <button type="submit" name="submit2">Kirim</button>
    </form>
  </body>
</html>
