<?php 
session_start();

//hilangkan $_SESSION ["pelanggan"]intinya logout itu ada session destroy
session_destroy();

echo"<script>alert('anda telah logout'); </script>";
echo"<script>location='index.php'; </script>";

 ?>