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
                <h2><b>Tambah Data </b></h2>
            </center>
                <a href="index.php?page=transaksi&aksi=view" class="btn btn-info float-right">Kembali</a>
            </div>
            <div class="card-body bg-light">
                <form action="index.php?page=transaksi&aksi=store" method="POST">
                    <div class="form-group">
                            <label >Nama Barang : </label>
                            <div>
                            <select name="id_barang" class="form-control" required>
                            <?php foreach ($data_barang as $row) :?>
                                    <option value="<?=$row['id_barang']?>"><?=$row['nama_barang']?> (Rp <?=$row['harga']?>)</option>   
                            <?php endforeach; ?>
                            </select>
                            </div>
                    </div>
                    <div class="form-group">
                            <label >Nama Pembeli : </label>
                            <div>
                            <select name="id_pembeli" class="form-control" required>
                            <?php foreach ($data_pembeli as $row) :?>
                                    <option value="<?=$row['id_pembeli']?>"><?=$row['nama']?></option>   
                            <?php endforeach; ?>
                            </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Transaksi : </label>
                        <input type="date" class="form-control" name="tgl_transaksi">
                    </div>
                    <div class="form-group">
                        <label> Jumlah Barang: </label>
                        <input type="text" class="form-control" name="jumlah_barang">
                    </div>
                    <div class="form-group">
                        <label> Jumlah Bayar: </label>
                        <input type="text" class="form-control" name="jumlah_bayar">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block">Daftar</button>
                </form>
            </div>
        </div>
    </div>   
</body>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>