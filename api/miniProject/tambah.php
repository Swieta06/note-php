<?php
//require 'functions.php';
$conn=mysqli_connect("localhost","root","","mahasiswa_db");
//note: untuk input asumsikan terlebih dahulu apakh butto submit udah di klik apa belum
if(isset($_POST["submit"])){
    //ambil semua data dalam form lalu di submit
    $name=$_POST["name"];
    $class=$_POST["class"];
    $npm=$_POST["npm"];
    $picture=$_POST["picture"];
//query insert data punya dua parameter (koneksi , query)
$query="INSERT INTO mahasiswa VALUES ('','$name','$class','$npm','$picture')";
mysqli_query($conn,$query);
if(mysqli_error($conn)){
    echo mysqli_error($conn);
}else{
    echo "Data has been successfully inserted into the database.";
}

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
    <form action="" method="post">
        <ul>
            <li>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
            </li>
            <li>
                <label for="class">Class:</label>
                <input type="text" name="class" id="class">
            </li>
            <li>
                <label for="npm">Npm:</label>
                <input type="text" name="npm" id="npm">
            </li>
            <li>
                <label for="picture">Picture</label>
                <input type="text" name="picture" id="piture">
            </li>
    <button type="submit" name="submit">Tambah data</button>
</ul>
    </form>
</body>
</html>