<?php

require 'connect.php';

// (1) Mulai session
session_start();
//

// (2) Ambil nilai input dari form registrasi

// a. Ambil nilai input email
$email = isset($_GET['email']) ? $_GET['email'] : '';
// c. Ambil nilai input username
$username = isset($_GET['username']) ? $_GET['username'] : '';

// d. Ambil nilai input password dan ubah menjadi hash menggunakan password_hash()
$password = isset($_GET['password']) ? $_GET['password'] : '';
//
if (!empty($email) && !empty($username) && !empty($password)) {
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

// (3) Buat dan lakukan query untuk mencari data dengan username yang sama dari nilai input username
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($db, $query);
//

// (4) Buatlah perkondisian ketika tidak ada data username yang sama (gunakan mysqli_num_rows == 0)
if(mysqli_num_rows($result) == 0){
    // a. Buat query untuk melakukan insert data ke dalam database
    $query2 = "INSERT INTO users (name, username, email, password) VALUES ('', '$username', '$email', '$passwordHash')";
    $insert = mysqli_query($db, $query2);
    // b. Buat kondisi setelah query insert berhasil dilakukan untuk menampilkan pesan pendaftaran berhasil
    if($insert) {
        $_SESSION['message'] = 'Pendaftaran sukses, silahkan login';
        $_SESSION['color'] = 'success';
        header('Location: ../login.php');
    } else {
        $_SESSION['message'] = 'Pendaftaran gagal';
        $_SESSION['color'] = 'danger';
        header('Location: ../register.php');
    }
} else {
    // (5) Buat kondisi else untuk menampilkan pesan error karena username sudah terdaftar
    $_SESSION['message'] = 'Username sudah terdaftar';
    $_SESSION['color'] = 'danger';
    header('Location: ../register.php');
}
}       
//
?>
