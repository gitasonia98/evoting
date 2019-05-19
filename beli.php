<?php
session_start();

//dapatkan id_produk dari url
$id_produk=$_GET['id'];
if(!isset($_SESSION["pelanggan"]))
{
	echo "<script>alert('silahkan login'); </script>";
	echo "<script> location='login.php';</script>";
}

//jika sudah ada produk itu dikeranjang, maka produk itu jumlahnya +1
if(isset($_SESSION['keranjang'][$id_produk]))
{
	$_SESSION['keranjang'][$id_produk]+=1;
}
//setelah kita klik tombol beli,jika blm ada dikeranjnag maka produk itu dianggap dibeli 1
else
{
	$_SESSION['keranjang'][$id_produk]=1;
}
//echo"<pre>";
//print_r($_SESSION);
//echo"</pre>";
echo"<script>alert('produk telah masuk ke keranjang belanja'); </script>";
echo"<script>location='keranjang.php';</script>";

?>