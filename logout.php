<?php
// mengaktifkan logout
session_start();


// menghapus semua session 
session_destroy();

// mengalihkan halaman sambil mengirim pesan logout
header("location:form_login.php?pesan=logout");
?>