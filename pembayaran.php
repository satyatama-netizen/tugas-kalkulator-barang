<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>KALKULATOR BARANG</title>
</head>
<body>
    <div class="main">
        <h1>KALKULATOR BARANG</h1>

        <form method="POST" action="pembayaran.php">

        <div>
            <label for="">Nama barang : </label>
            <input type="text" name="NamaBarang">
        </div>
        <div>
            <label>Harga satuan : </label>
            <input type="number" name="HargaSatuan">    
        </div>
        <div>
            <label>Jumlah Barang : </label>
            <input type="number" name="JumlahBarang">
        </div>

        <div class="btnSubmit">
        <button type="submit" name="TmblSubmmit">HITUNG</button>
        </div>

    </form>
    </div>


<?php
//validasi input lalu pangil valuenya
    if (isset($_POST['HargaSatuan'], $_POST['JumlahBarang'], $_POST['NamaBarang'])) {
        $hargasatuan = $_POST['HargaSatuan'];
        $jumlahbarang = $_POST['JumlahBarang'];
        $namabarang = $_POST['NamaBarang'];

        $totalharga = $hargasatuan * $jumlahbarang;
    };


    if ($hargasatuan < 0) {
        echo 'Harga tidak bisa negatif <br>';
    } elseif ($jumlahbarang < 1) {
        echo 'barang pembelian harus lebih dari satu <br>';
    } else {
        echo "HARGA SATUANNYA : $hargasatuan <br>";
        echo "HARGA TOTAL : $totalharga <br>";
        echo "BARANG : $namabarang <br>";
        echo "JUMLAH BARANG : $jumlahbarang <br>";
    }
    

    if ($totalharga >= 500000) {
        $diskon = $totalharga * 0.2;
        echo "Dapat Diskon 20% : $diskon <br>";
    } elseif ($totalharga >= 250000 && $totalharga <= 500000) {
        $diskon = $totalharga * 0.1;
        echo "Dapat Diskon 10% : $diskon <br>";
    } else {
        $diskon = $totalharga;
        echo "Tidak Dapat Diskon <br>";
    }
?>

</body>
</html>