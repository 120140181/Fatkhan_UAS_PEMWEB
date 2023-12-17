<?php
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_brg = $_POST["nama_brg"];
    $jumlah = $_POST["jumlah"];
    $berat = isset($_POST["berat"]) ? "Kg" : "";
    $jenisBarang = $_POST["jenisBarang"];
    $tgl_masuk = $_POST["tgl_masuk"];

    // Prepared statement untuk menghindari SQL Injection
    $sql = "INSERT INTO barang (nama_brg, jumlah, berat, jenis, tgl_masuk)
    VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sisss", $nama_brg, $jumlah, $berat, $jenisBarang, $tgl_masuk);

    if ($stmt->execute()) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup pernyataan
    $stmt->close();

    header("Location: kelola.php");
    exit();
} else {
    echo "Permintaan tidak valid.";
}
?>
