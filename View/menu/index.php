<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #1A99E2;">
        <a class="navbar-brand font-italic"><b>Sistem Informasi Penjualan Spring Bed</b></a>
        <div class="form-inline ml-auto">
            <label class="form-control mr-sm-2 " style="background-color: #CDDEE1">Owner : <?= $_SESSION['owner']['nama_owner']?> </label>
            <a class=" btn btn-danger" href="index.php?page=auth&aksi=login">Logout</a>
        </div>
    </nav>

        <div class="sidebar bg-dark md-2 mt-5 ">
            <ul class="nav flex-column ml-3">
                <li class="nav-item active">
                <a class="nav-link active text-blue" href="index.php?page=owner&aksi=view"><i class="fas fa-user-circle mr-3"></i>Owner</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                <a class="nav-link text-blue" href="index.php?page=pembeli&aksi=view"><i class="fas fa-users mr-3"></i>Pembeli</a><hr class="bg-secondary">
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-blue" href=""><i class="fas fa-cart-plus mr-3"></i></i>Transaksi</a><hr class="bg-secondary">
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-blue" href="index.php?page=barang&aksi=view"><i class="fas fa-store-alt mr-3"></i>Barang</a><hr class="bg-secondary">
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-blue" href="index.php?page=jenis&aksi=view"><i class="fas fa-store-alt mr-3"></i>Jenis Barang</a><hr class="bg-secondary">
                </li>
            </ul>
        </div>

<!-- Optional JavaScript
    jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>