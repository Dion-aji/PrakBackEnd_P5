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
<div class="container" style="margin-top:7%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h5>Data Game</h5><hr>
				</center>
			</p>
			<br>
			<p>
				<a class="btn btn-primary" href="tambah.php">Tambah</a>
			</p>
			<table class="table table-bordered">
				<tr>
					<th>
						No 
					</th>
					<th>
						Nama 
					</th>
					<th>
						Kategori
					</th>
					<th>
						Harga
					</th>
					<th>
						Deskripsi
					</th>
					<th>
						Opsi
					</th>
				</tr>
					<?php
						include"koneksi.php";
						$no = 1;
						$data = mysqli_query ($koneksi, " select id_game,nama,kategori,harga,deskripsi
														  from konten order by id_game DESC");
						while ($row = mysqli_fetch_array ($data))
						{
					?>
				<tr>
					<td>
						<?php echo $no++; ?>
					</td>
					<td>
						<?php echo $row['nama']; ?>
					</td>
					<td>
						<?php echo $row['kategori']; ?>
					</td>
					<td>
						<?php echo $row['harga']; ?>
					</td>
					<td>
						<?php echo $row['deskripsi']; ?>
					</td>
					<td>
						<a class="btn orange" href="detail.php?id=<?php echo $row['id_game']; ?>">Detail</a> 
						<a class="btn green" href="edit.php?id=<?php echo $row['id_game']; ?>">Edit</a> 
						<a class="btn red" href="hapus.php?id=<?php echo $row['id_game']; ?>">Hapus</a>
					</td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>
</div>
</body>
</html>