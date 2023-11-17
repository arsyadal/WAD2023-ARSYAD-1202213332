<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    function update($connect, $id, $nama, $brand, $warna, $tipe, $harga) {

        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $nama = $_POST['nama_mobil'];
        $brand = $_POST['brand_mobil'];
        $warna = $_POST['warna_mobil'];
        $tipe = $_POST['tipe_mobil'];
        $harga = $_POST['harga_mobil'];
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        $query = "UPDATE showroom_mobil SET nama_mobil='$nama', brand_mobil='$brand', warna_mobil='$warna', tipe_mobil='$tipe', harga_mobil='$harga' WHERE id_mobil=$id";

        // Eksekusi perintah SQL
        $result = mysqli_query($connect, $query);

        // Buatkan kondisi jika eksekusi query berhasil
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        if($result) {
            echo "Data berhasil diperbarui";
        } else {
            echo "Gagal memperbarui data";
        }
    }
    // Panggil fungsi update dengan data yang sesuai
    update($connect, $id, $_POST['nama_mobil'], $_POST['brand_mobil'], $_POST['warna_mobil'], $_POST['tipe_mobil'], $_POST['harga_mobil']);
}
// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($connect);

?>
