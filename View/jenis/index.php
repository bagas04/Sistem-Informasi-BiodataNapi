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
        <h2 class="display-6"><b> Jenis </b>
        <small style="color:#7B949F">Hukuman</small>
        <a href="index.php?page=jenis&aksi=create" class=" btn btn-warning float-right">Tambah Jenis</a>
        </h2><hr style="background-color: #7B949F">
        <center>
            <div class="card mt-4">
                <div class=" card-header" style="background-color:#DEF0FA">
                <h2 ><b>Data Jenis Hukuman</b></h2>
                </div>
                <div class="card-body bg-light" >
                    <table class="table table-striped table-bordered" >
                        <thead class="table-dark">
                            <tr>
                                <th>No.</th>
                                <th>Jenis Hukuman</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1;
                            foreach($data as $row):?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$row['nama_jenis'];?></td>
                                <td>
                                    <a href="index.php?page=jenis&aksi=edit&id_jenis=<?=$row['id_jenis']?>" class="btn btn-info">Edit</a>
                                    <a href="index.php?page=jenis&aksi=delete&id_jenis=<?=$row['id_jenis'];?>" class="btn btn-danger">Hapus</a>                             
                                </td>
                            </tr>
                            <?php $no++;
                            endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </center>
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