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

<style>
    body{
	background-color: #17D8AC;
}
.container .col-md-4{
	border-top: 4px solid #3c8dbc;
}
h2{
	color: blue;
}
.btn{
	width: 340px;
}
	</style>

</head>
<body>
<div class="container mt-5">
	<div class="col-12 mt-5">
	<div class="row mt-5">
		<div class="col-12">
			
			<center>
				<h2>LOGIN OWNER</h2>
			</center>
		</div>
	</div>
			<div class="row">
				<div class="col"></div>
				<div class="col-md-4 bg-white mt-4 pt-3 pb-4">
					<form action="index.php?page=auth&aksi=authOwner" method="POST">
					  <div class="form-group">
					    <label>Email</label>
					    <input type="text" class="form-control" name="email_owner" placeholder="Masukkan Email Anda">
					  </div>
					  <div class="form-group">
					    <label>PASSWORD</label>
					    <input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda">
					  </div>
					  <div class="form-group form-check">
					  </div>
					  <button type="submit" class="btn btn-primary  btn-lg btn-block">Login</button>
					</form>
				</div>
				<div class="col"></div>
			</div>
			<div class="row mt-4 text-white">
				<div class="col-12">
					<center>
						<p class="text-secondary"><font color='black'>Sistem Informasi Toko Spring Bed</p>
					</center>
				</div>
			</div>
	</div>
</div>
<!-- Optional JavaScript
    jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>