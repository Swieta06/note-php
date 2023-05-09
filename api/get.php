<?php

echo("Test");
$mahasiswa = [
    [
    "name"=>"Swieta Nh",
    "npm" => "16118887",
    "class" => "Ka22",
    "picture" => "swieta.png"
    ]
    ,
[
    "name"=>"Chica",
    "npm" => "16118888",
    "class" => "Ka22",
    "picture" => "chica.jpg"
]
]
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
    <?php foreach($mahasiswa as $mhs){?>
    <ul>
        <li><img src="img/<?= $mhs["picture"]?>" width="50" alt="<?=$mhs["picture"]?>"></li>
        <li><a href="detilget.php?
        picture=<?= $mhs["picture"]?>
        &name=<?= $mhs["name"]?> 
        &npm=<?= $mhs["npm"]?> 
        &class=<?=$mhs["class"]?>"><?=$mhs["name"]?></a>
</li>
    </ul>
    <?php } ?>
    
</body>
</html>