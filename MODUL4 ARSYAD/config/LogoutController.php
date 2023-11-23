<?php 

// (1) Hapus cookie dengan key id 
session_unset();
// 

// (2) Mulai session
session_start();
//

// (3) Hapus semua session yang berlangsung
sesion_destry();
//

// (4) Lakukan redirect ke halaman login awal
header('Location    : C:\xampp\htdocs\MODUL4ARSYAD\views\login.php');
//

exit;

?>