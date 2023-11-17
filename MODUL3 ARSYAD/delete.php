<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
if(isset($_GET['id'])) {
$id_mobil = $_GET['id'];

    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    $query = mysqli_query($connect, "DELETE FROM showroom_mobil WHERE id = '$id_mobil'");

    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if($query) {
        echo "<script>alert('Data berhasil dihapus')</script>";
    } else {
        echo "<script>alert('Gagal menghapus data')</script>";
    }
}
// Tutup koneksi ke database setelah selesai menggunakan database
$connect->close();
?>
