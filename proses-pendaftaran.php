<?php

session_start();

include("config.php");



// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // buat query
    $sql = "INSERT INTO calon_siswa (nama,password,alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama','$password', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

// $cek = mysqli_num_rows($query);

// if($cek > 0){
// 	$_SESSION['nama'] = $nama;
// 	$_SESSION['status'] = "login";
// 	header("location:index.php");
// }else{
// 	header("location:form_login.php?pesan=gagal");
// }

?>