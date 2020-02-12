<?php 

include "konesi.php";
$nama = $_POST ['nama'];
$kelas = $_POST ['kelas'];
$jurusan = $_POST ['jurusan'];
$query = "INSERT INTO `siswa`(`id_siswa`, `nama`, `kelas`, `jurusan`) VALUES ('id_siswa','$nama','$kelas','$jurusan')";
mysqli_query($konesi,$query);
header ("location:index.php");
?>