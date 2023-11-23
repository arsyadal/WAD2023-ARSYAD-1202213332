<?php 
// (1) Hapus cookie dengan key id 
session_unset();
// 

// (2) Mulai session
session_start();
//

// (3) Hapus semua session yang berlangsung
session_destroy();
//

// (4) Lakukan redirect ke halaman login awal
header('Location: ../login.php');
//

exit;
?>
