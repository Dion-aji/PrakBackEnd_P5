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
    <div class="container" style="margin-top:8%">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>
                    <center>
                        <h5>Tambah Data Game</h5><hr>
                    </center>
                </p>
                <br>

                <form role="form" method="post" action="input.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <p>
                            <label>
                                <input name="kategori" type="radio" value="action" />
                                <span>Action</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="kategori" type="radio" value="adventure"/>
                                <span>Adventure</span>
                            </label>
                        </p>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input class="form-control" name="harga">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input class="form-control" name="deskripsi">
                    </div>
                    <button type="submit" class="btn green">Simpan</button>
                    <a href="index.php" class="btn red" style="margin-right:1%;">Batal</a>
                </form>
            </div>
        </div>
        <p>
    </div>
    <script src="style/materialize.min.js"></script>
</body>

</html>