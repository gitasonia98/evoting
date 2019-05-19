<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body background="gita.jpg">
	<?php include 'navbar.php'; ?>
	<div class="container">
		<div class="row">
			<div class ="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Daftar Pelanggan</h3>
					</div>
					<div class ="panel-body">
						<form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-md-3">Nama</label>
								<div class="col-md-7">
									<input type="text" class="form-control"name="nama" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Email</label>
								<div class="col-md-7">
									<input type="email" class="form-control"name="email" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Password</label>
								<div class="col-md-7">
									<input type="text" class="form-control"name="password" required>
								</div>
							</div>

							<div class="form-group">
							<label class="control-label col-md-3">No.Telepon </label>
							<div class="col-md-7">
							<input type="text" class="form-control"name="telepon" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Alamat</label>
								<div class="col-md-7">
								<textarea class="form-control" name="alamat" required></textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-7 col-md-offset-3">
									<button class="btn btn-primary" name="daftar">Daftar</button>
								</div>
							</div>
						</form>
						<?php
						//logikanya jika ada tombol daftar maka
					if(isset($_POST["daftar"]))
						{ //ambil isi alamat,email, pass,tlp
							//ambil isian pake post
							$nama=$_POST["nama"];
							$email=$_POST["email"];
							$password=$_POST["password"];
							$telepon=$_POST["telepon"];
							$alamat=$_POST["alamat"];

							//cek apakah email sudah digunakan, cara komputer tau emai itu sudah ada /tdk pake num_rows
				$ambil=$koneksi->query("SELECT*FROM pelanggan WHERE email_pelanggan='$email'");
					$emailcocok=$ambil->num_rows; 
					if($emailcocok==1)
								{
					echo "<script>alert('ganti email, email sudah digunakan'); </script>";
					echo"<script>location='daftar.php';</script>";
							}
							else
							{ //query insert into pelanggan
				$koneksi->query("INSERT INTO pelanggan(email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan,alamat_pelanggan) 
							VALUES('$email','$password','$nama','$telepon','$alamat') ");
							//selama masih di query tanda petik smpe setelah values

							echo "<script>alert('Pendaftaran Sukses, silahkan login'); </script>";
							echo"<script>location='login.php';</script>";

						}

						} 
						?>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>