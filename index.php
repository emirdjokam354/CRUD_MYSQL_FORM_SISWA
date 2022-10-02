<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK NEGERI 7 BALEENDAH</title>
</head>

<body>
<!-- cek apakah sudah login -->
<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:form_login.php?pesan=belum_login");
}
?>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>FORM PENDAFTARAN SISWA BARU</h1>
        <h4>Selamat Datang, <?php echo $_SESSION['nama']; ?> SEKOLAH</h4>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    
<?php endif; ?>

    <a href="logout.php">LOGOUT</a>


    </body>
</html>