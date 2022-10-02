<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db,"select * from calon_siswa where nama='$nama' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['nama'] = $nama;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:form_login.php?pesan=gagal");
}
?>