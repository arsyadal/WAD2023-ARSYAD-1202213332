<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
//include('conn[ect.php');
    if ($_POST){
        $nama = $_POST['nama_mobil'];
        $brand = $_POST['brand_mobil'];
        $warna = $_POST['warna_mobil'];
        $tipe = $_POST['tipe_mobil'];
        $harga = $_POST['harga_mobil'];


        $query = mysqli_query($connect, "INSERT INTO showroom_mobil VALUES('$nama','$brand', '$warna', '$tipe', '$harga')");

        // (5) Buatkan kondisi jika eksekusi query berhasil
    if($query) {
        echo "<script>alert('Berhasil dieksekusi')<script>";
    
        // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
    } else {
        echo "<script>alert('Gagal dieksekusi')<script>";
    }
    }

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil  
    //$nama = $_POST['nama_mobil'];
    // b. Ambil data brand mobil
    //$brand = $_POST['brand_mobil'];
    // c. Ambil data warna mobil
    //$warna = $_POST['warna_mobil'];
    // d. Ambil data tipe mobil
    //$tipe = $_POST['tipe_mobil'];
    // e. Ambil data harga mobil
    //$harga = $_POST['harga_mobil'];
    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)


// (7) Tutup koneksi ke database setelah selesai menggunakan database
    $mysqli -> close();
?>
