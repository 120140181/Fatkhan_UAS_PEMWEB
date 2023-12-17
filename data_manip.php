<?php
require_once 'koneksi.php';

class ManipulateData
{
    private $conn;

    // Konstruktor kelas yang menerima koneksi database sebagai parameter
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Metode untuk menambahkan data baru ke dalam tabel
    public function addData($nama_brg, $jumlah, $jenis, $tgl_masuk)
    {
        $sql = "INSERT INTO barang (nama_brg, jumlah, jenis, tgl_masuk) 
                VALUES ('$nama_brg', '$jumlah', '$jenis', '$tgl_masuk')";

        return $this->conn->query($sql);
    }

     // Metode untuk mengambil semua data dari tabel
    public function getAllData()
    {
        $sql = "SELECT * FROM barang";
        $result = $this->conn->query($sql);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }

    
    // Metode untuk memperbarui data dalam tabel berdasarkan ID
    public function updateData($id, $newName)
    {
        $sql = "UPDATE invens SET nama_brg='$newName' WHERE id=$id";

        return $this->conn->query($sql);
    }

}

$manipulator = new ManipulateData($conn);

// Menggunakan metode getAllData untuk mendapatkan semua data dari tabel dan menampilkannya
$data = $manipulator->getAllData();
foreach ($data as $row) {
    echo "Nama Barang : " . $row['nama_brg'] . ", Jumlah : " . $row['jumlah'] . ", Jenis : " . $row['jenis'] . ", Tanggal Masuk : " . $row['tgl_masuk'] . "<br>";
}


?>