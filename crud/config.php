<?php
//  konfigurasi database (host,username,password,database)
$conn=mysqli_connect("localhost","root","","mahasiswa_db");
// Mengecek apakah koneksi berhasil atau tidak
if(!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
// untuk mengambil tiap data dalam bentuk array
function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;

    }
    return $rows;
}
?>