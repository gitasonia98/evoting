<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>login pelanggan</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
	<font color="#FF0000"></font>
	<!--navbar--> 
	<?php include 'navbar.php'; ?>

<div class="container">
	<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class ="panel-title">Login Pelanggan</h3>	
			</div>

<div class="panel-body">

	<form method="post">
	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" name="email">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" class="form-control" name="password">	
	</div>
	<button class="btn btn-primary" name="simpan">Login</button>
	</form>



</div>

		</div>
	</div>
		
	</div>
	
</div>	
<?php
if(isset($_POST["simpan"]))
{
	$email=$_POST["email"];
	$password=$_POST["password"];
	//cek akun pelanggan di db
	$ambil=$koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password'");

	//hitung akun yang terambil

	$akuncocok=$ambil->num_rows;
	//jika 1 akun cocok maka loginkan 
	if($akuncocok==1)
	{
		//anda sudah login
		$akun=$ambil->fetch_assoc();
		//simpan di session pelanggan
		$_SESSION["pelanggan"]=$akun;
		echo "<script>alert('anda sukses login') </script>";
		echo "<script>location='index.php' ; </Script>";
	}
	else
	{
		//gagal login
		echo "<script>alert('anda gagal login, periksa akun anda') </script>";
		echo "<script>location='login.php' ; </Script>";

	}

}

?>
</body>
</html>