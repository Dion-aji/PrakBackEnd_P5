<?php
include"koneksi.php";

$id = $_POST['id_game'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

$query = "UPDATE konten SET nama = '$nama',kategori = '$kategori',
                              harga = '$harga',deskripsi = '$deskripsi' WHERE id_game = '$id'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');

?>

