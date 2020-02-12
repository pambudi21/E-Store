<?php 
	include "konesi.php";
	$id_siswa = $_POST['id_siswa'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$jurusan = $_POST['jurusan'];
	$query = "UPDATE siswa set nama='$nama',kelas='$kelas',jurusan='$jurusan' WHERE id_siswa='$id_siswa'";
	mysqli_query($konesi,$query);
	header ("location:index.php");
?>