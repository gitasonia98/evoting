
<?php
include 'koneksi.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> Nota Pembelian</title>
 	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
 </head>
 <body background="gita.jpg">
 	
 	<!--navbar--> 
	<?php include 'navbar.php'; ?>
 <section class ="konten">
	<div class="container">

		<!--copy dari detail admin-->
		<h2>Detail Pembelian</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]' ");
$detail=$ambil->fetch_assoc();
?>

<!--<pre><?php //print_r($detail); ?></pre>-->

<!--<strong> <br>-->
<!--<p>
	<?php //echo $detail['telepon_pelanggan']; ?> <br> 
	<?php //echo $detail['runkit_class_emancipate(classname)l_pelanggan']; ?>
</p>
-->
<p>
	Tanggal :<?php echo $detail['tanggal_pembelian']; ?> <br>
	Total :<?php echo $detail['total_pembelian']; ?>
</p>

<div class="row">
	<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3>Pelanggan</h3>
			<strong><?php echo $detail['nama_pelanggan']; ?></strong><br>
			<p>
	<?php echo $detail['telepon_pelanggan']; ?> <br> 
	<?php echo $detail['email_pelanggan']; ?><br>
	No Pembelian : <?php echo $detail['id_pembelian']; ?><br>
	
</p>


		</div>
		<div class ="col-md-4">
			<h3>Pengiriman</h3>
			<strong><?php echo $detail['nama_kota']; ?></strong><br>
			Ongkos Kirim : Rp. <?php echo number_format($detail['tarif']); ?><br>
			Alamat Pengiriman : <?php echo($detail['alamat_pengiriman']); ?><br>
		</div>

	</div>
<!--</div>-->
<table class ="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Berat</th>
			<th>Jumlah</th>
			<th>Subberat</th>
			<th>SubTotal</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk WHERE id_pembelian='$_GET[id]'"); ?>
		<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?> </td>
			<td ><?php echo $pecah['nama']; ?></td>
			<td>Rp. <?php echo number_format($pecah['harga']); ?></td>
			<td><?php echo $pecah['berat']; ?></td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td><?php echo $pecah['subberat']; ?></td>
			<td>Rp. <?php echo number_format($pecah['subharga']); ?></td>  
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<div class ="row">
	<div class ="col-md-7">
		<div class="alert alert-info">
			<p>
				SILAHKAN MELAKUKAN PEMBAYARAN Rp. <?php echo number_format($detail['total_pembelian']) ; ?> ke <br>
				<strong>e438-001922-7694 AN. Gita Sonia Indriani</strong>
			</p>
		</div>
	 </div>
	

</div>





 </body>
 </html>