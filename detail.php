<?php session_start(); ?>
<?php include 'koneksi.php' ?>
<?php
//mendapatkan id produk dari url 
$id_produk=$_GET["id"];

//ut ambil data dari query
$ambil= $koneksi->query("SELECT*FROM produk WHERE id_produk='$id_produk'");
$detail=$ambil->fetch_assoc();
//echo "<pre>";
//print_r($detail);
//echo "</pre>";


?>



<!DOCTYPE html>
<html>
<head>
	<title>Detail Produk</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>


	<!--navbar--> 
<?php include 'navbar.php'; ?>

<section class="konten">
	<div class="container">
		<div class="row">
			<div class ="col-md-6">
				<img src="foto_produk/<?php echo $detail["foto_produk"];?>"alt="" class="img-responsive">
			</div>

			<div class="col-md-6">
				<h2><?php echo $detail["nama_produk"] ?></h2>
			<h4>Rp.<?php echo number_format($detail["harga_produk"]); ?></h4>

			<p><?php echo $detail["deskripsi_produk"] ?></p>
<!--
			<form method="post">
				<div class ="form-group">
					<div class ="input-group">
						<input type="number" min="1" class="form-control" name="jumlah">
						<div class="input-group-btn">
							<button class ="btn btn-primary" name="beli">Beli</button>
						</div>
					</div>
				</div>
			</form>

			<?php
			//jika klik tombol beli maka
			//if(isset($_POST["beli"]))
			{
				//dapatkan jumlah yg diinpukan
				//dapat dari formulir jadi pake POST
				//$jumlah=$_POST["jumlah"];
				//masuk kekeranjang belanja
			//	$_SESSION["Keranjang"][$id_produk]=$jumlah;

				//echo "<script>alert('produk masuk ke keranjang'); </script>";
			//echo "<script>location='keranjang.php'; </script>";

			}
			?>
		-->
				
			</div>
		</div>
		 
	</div>
</section>

</body>
</html>