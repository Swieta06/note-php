<?php
//isset digunakan untuk sebuah variable yang sudah pernah didefinisikan
if(!isset($_GET["name"])||
!isset($_GET["npm"])||
!isset($_GET["class"])||
!isset($_GET["picture"])){
    header("Location:get.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <li><img src="img/<?= $_GET["picture"]?>" width="50" alt=""></li>
    <li><?= $_GET["name"]?></li>
    <li><?= $_GET["npm"]?></li>
    <li><?= $_GET["class"]?></li>
</ul>
    
</body>
</html>