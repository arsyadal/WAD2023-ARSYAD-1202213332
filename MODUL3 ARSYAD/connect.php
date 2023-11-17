<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->



<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "modul3_wad";


//membuat koneksi database
$connect = mysqli_connect("localhost:8080","root","", "modul3_wad" );

//menjalankan query

  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$connect) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }