<!--navbar-->
<nav class="navbar navbar-default" style="background: pink">
	<div class="container">

		<ul class ="nav navbar-nav">

			
			<!--HOME AJA JIKA SUDAH LOGIN (pelanggan)-->

			<?php if (isset($_SESSION["pelanggan"])): ?>
			<li><a href="index.php">Home</a><li>
			<?php else: ?>
			<?php endif ?>


			<!--LOGOUT AJA JIKA SUDAH LOGIN (pelanggan)-->
			<?php if (isset($_SESSION["pelanggan"])): ?>
			<li><a href="logout.php">Logout</a></li>

			<!--jika blm login tetap muncul login di navbarnya-->
			<?php else: ?>
			<li><a href="login.php">Login</a></li>
			<li><a href="daftar.php">Daftar</a></li>
			<?php endif ?>

			<!--<li><a href="checkout.php">Checkout</a></li>-->
		</ul>
	</div>
</nav>