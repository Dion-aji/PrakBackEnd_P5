<html>
<title>CRUD</title>
<head>
<link rel="stylesheet" href="style/materialize.min.css" />
</head>
<body>
<nav>
        <div class="nav-wrapper blue">
        <div class="container">
          <a href="index.php" class="brand-logo center white-text">KOSTGAME</a>
        </div>
        </div>
</nav>

<?php
	include"koneksi.php";
	$no = 1;
	$data = mysqli_query ($koneksi, " select id_game,nama, kategori, harga, deskripsi
									  from konten where id_game = $_GET[id]");
	$row = mysqli_fetch_array ($data);
	
?>
<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h5>Detail <?php echo $row['nama']; ?> </h5><hr>
				</center>
			</p>
			<br>
			<p>
				<a class="btn red lighten-2" href="index.php">Kembali</a>
			</p>
			<table class="table table-stripped">
				<tr>
					<td style="width:10%;">
						Nama 
					</td>
					<td>
						: <?php echo $row['nama']; ?>
					</td>
				</tr>
				<tr>
					<td style="width:10%;">
						Kategori
					</td>
					<td>
						: <?php echo $row['kategori']; ?>
					</td>
				</tr>
				<tr>					
					<td>
						Harga
					</td>
					<td>
						: <?php echo $row['harga']; ?>
					</td>
				</tr>
				<tr>		
					<td>
						Deskripsi
					</td>
					<td>
						: <?php echo $row['deskripsi']; ?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>