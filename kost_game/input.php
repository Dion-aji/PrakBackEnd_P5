<?php
include"koneksi.php";



$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

$query = "insert INTO konten SET nama = '$nama', kategori = '$kategori', 
                                 harga = '$harga', deskripsi = '$deskripsi'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');

?>

