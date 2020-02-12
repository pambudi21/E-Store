<?php 
	include "konesi.php";
	$id_siswa = $_GET['id_siswa'];
	$konesi = mysqli_query($konesi, "DELETE FROM siswa WHERE id_siswa=$id_siswa");
	mysqli_query($konesi,$query);
	header ("location:index.php");
?>