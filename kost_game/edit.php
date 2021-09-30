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
	$data = mysqli_query ($koneksi, " select id_game,nama,kategori,harga,deskripsi
									  from konten where id_game = $_GET[id]");
	$row = mysqli_fetch_array ($data);
	
?>
    <div class="container" style="margin-top:8%">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>
                    <center>
                        <h5>Edit Data <?= $row['nama'] ; ?></h5>
                        <hr>
                    </center>
                </p>
                <br>

                <form role="form" method="post" action="update.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id_game" value="<?php echo $row['id_game'] ; ?>">
                        <input class="form-control" name="nama" value="<?php echo $row['nama'] ; ?>">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <p>
                            <label>
                                <input name="kategori" type="radio" value="action" 
                                <?php if($row['kategori']=='action'){ ; ?> checked <?php } ?>/>
                                <span>Action</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="kategori" type="radio" value="adventure" 
                                <?php if($row['kategori']=='adventure'){ ; ?> checked <?php } ?>/>
                                <span>Adventure</span>
                            </label>
                        </p>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input class="form-control" name="harga" value="<?php echo $row['harga'] ; ?>">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input class="form-control" name="deskripsi" value="<?php echo $row['deskripsi'] ; ?>">
                    </div>
                    <button type="submit" class="btn green">Perbarui</button>
                    <a href="index.php" class="btn red" style="margin-right:1%;">Batal</a>
                </form>
            </div>
        </div>
    </div>
    <script src="style/materialize.min.js"></script>
</body>

</html>