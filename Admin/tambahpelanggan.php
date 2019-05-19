<h2>Tambah Data Pelanggan</h2>


<form method="POST" enctype="multipart/form-data">
	<div class="from-group">
		<label>email</label>
		<input type="text" class="form-control" name="email">
	</div>

	<div class="from-group">
		<label>password)</label>
		<input type="text" class="form-control" name="password">
	</div>

	<div class="from-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>

	<div class="form-group">
		<label>No Telepon</label>
		<input type="number" class="form-control" name="no_tlp">
	</div>


<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	
	$koneksi->query("INSERT INTO pelanggan (email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan)   VALUES ('$_POST[email]','$_POST[password]','$_POST[nama]','$_POST[no_tlp]')");

	echo "<div class='alert alert-info'>data Tersimpan</div>";
	echo"<meta http-equiv='refresh' content ='1;url=index.php?halaman=pelanggan'>";
	
}
?>

