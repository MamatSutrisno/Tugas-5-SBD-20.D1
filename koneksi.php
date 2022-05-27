<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010082";
$db = "klinik_312010082";
$conn = mysqli_connect('$host','$user','$pass','$db');

if ($conn == false)
{

	echo "Koneksi ke server gagal.";
	die();
}
?>