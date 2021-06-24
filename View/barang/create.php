<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="main">
<body style="background-color: #CDDEE1">

 <div class="container">
        <div class="card mt-5">
            <div class="card-header" style="background-color:#DEF0FA">
            <center>
                <h2><b>Tambah Barang</b></h2>
                </center>
                <a href="index.php?page=barang&aksi=view" class="btn btn-info float-right">Kembali</a>
            </div>
            
                <div class="card-body bg-light">
                    <form action="index.php?page=barang&aksi=store" method="POST">
                    <div class="col">
                                <label >ID Barang :</label>
                                <input type="text" name="id_barang" class="form-control" value="">
                            </div>
                        <div class="col">
                                <label >Jenis Barang : </label>
                                <select name="nama_jenis_barang" class="form-control" required>
                                        <option value="#"></option>
                            </select>
                        </div>
                        <div class="col">
                                <label >Nama Barang :</label>
                                <input type="text" name="nama_barang" class="form-control" value="">
                            </div>
                        <div class="col">
                                <label >Ukuran :</label>
                                <input type="text" name="ukuran" class="form-control" value="">
                        </div>
                            <div class="col">
                                <label >Harga :</label>
                                <input type="text" name="harga" class="form-control" value="">
                            </div>
                        <div class="col">
                                <label >Tebal Barang :</label>
                                <input type="text" name="tebal_barang" class="form-control" value="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right mt-3">Simpan</button>
                    </form>


                </div>
        </div>
    </div>
    
</body>
</div>
<!-- Optional JavaScript
    jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>