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
                <h2 class="display-6 "><i class="fas fa-user-edit mr-2"></i><b> Owner </b>
        <small class="font-italic" style="color:#7B949F">Pemilik Sistem</small>
      </h2><hr style="background-color: #7B949F">
                <center>
            <div class="card mt-4" style="width : 80%;">
                <div class=" card-header " style="background-color:#DEF0FA">
                    <h2 ><b>Profil</b></h2>
                </div>
                <div class="card-body" style="background-color: #44778D;">
                    <div class="row ml-4" >
                        <div class="form-inline" >
                            <label class="form-control mr-sm-2 col-form-label" style="background-color: #CDDEE1;"><span><b>Email Owner</b></span> : <?=$data['nip']?> </label>
                        </div>
                    </div>
                    <div class="row ml-4 mt-2">
                        <div class="form-inline">
                            <label class="form-control mr-sm-2 col-form-label" style="background-color: #CDDEE1;"><span><b>Password</b></span> : <?=$data['password']?></label>
                        </div>
                    </div>
                    <div class="row ml-4 mt-2">
                        <div class="form-inline">
                            <label class="form-control mr-sm-2 col-form-label" style="background-color: #CDDEE1;"><span><b>Nama Owner</b></span> : <?=$data['nama_Owner']?> </label>
                        </div>
                    </div>
                    <div class="row ml-4 mt-2">
                        <div class="form-inline">
                            <label class="form-control mr-sm-2 col-form-label" style="background-color: #CDDEE1;"><span ><b>No.Telp Owner</b></span> : <?=$data['notelp_Owner']?> </label>
                        </div>
                    </div>
                </div>
            </div>
        </center>
        </div>
    </body>
        </div>
</nav>

    <!-- Optional JavaScript
    jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>