<?php
include"koneksi.php";


$query = "DELETE FROM konten WHERE id_game ='$_GET[id]' ";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');

?>

