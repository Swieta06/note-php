<?php
//koneksi database(host,username,password,database)

require 'functions.php';
//ambil data dari table mahasiswa/query data
//$result=mysqli_query($conn,"SELECT * FROM mahasiswa");
$result=query("SELECT * FROM mahasiswa");
// while($mhs=mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Halaman Admin</title>
</head>
<div class="mx-auto p-2" style="width: 600px;">
<body>

    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah +</a>
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>name</th>
            <th>class</th>
            <th>picture</th>
        </tr>
        <?php $i=1?>
        <?php foreach ($result as $mahasiswa):?>
        <tr>
            <td><?php echo $i ?></td>
            <td>
                <a href="">ubah</a>
                |
                <a href="">hapus</a>
            </td>
            <td><?= $mahasiswa["name"]?></td>
            <td><?php echo $mahasiswa["class"]?></td>
            <td><img src="../img/<?php echo $mahasiswa["picture"]?>" alt="<?php echo $mahasiswa["picture"]?>" width="50"></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    
</body>
</div>
</html>