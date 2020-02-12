<?php 

include "../config.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO `user` (`id`,`nama`,`username`,`password`) VALUES (NULL,'$nama','$username','$password')";
mysqli_query($koneksi,$query);

if($query){
    header("location:/E-Store/login/");
    exit;
}else{
    header("location:r/E-Store/register/");
    exit;
}
// var_dump($query);
dd($query);

?>