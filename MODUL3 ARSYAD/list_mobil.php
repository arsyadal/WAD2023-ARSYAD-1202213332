<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
        $query = "SELECT * FROM showroom_mobil"
            
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
        mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) { 
        while($row = mysqli_fetch_assoc($result)) { 
            echo "id: " . $id["id"]. " - Nama : " . $nama["nama mobil"]. " " . $brand["brand mobil"]. " " . $warna["warna mobil"]. " " . $tipe ["tipe mobil"]. "" . $harga["harga mobil"]. " <br>"; 
        } 
        } else { 
        echo "0 hasil"; 
        }
        
        $target = "form_detail_mobil.php";
        $id = "id"

        link($target, id);
            







            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            if ($mysqli -> connect_errno) {
                echo "tidak ada dalam tabel " . $mysqli -> connect_error;
                exit();
              }
            
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
