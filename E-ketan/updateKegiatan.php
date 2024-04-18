<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $id = $_POST["id_kegiatan"];
    $nama = $_POST["nama_kegiatan"];
    $tg1 = $_POST["tanggal_awal"];
    $tg2 = $_POST["tanggal_akhir"];

    // Query untuk melakukan update data obat
    $query = "UPDATE kegiatan SET 
        nama_keg = '$nama', 
        tgl_awal = '$tg1', 
        tgl_akhir = '$tg2' 
        WHERE id_keg = '$id'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect kembali ke halaman index atau sesuaikan dengan kebutuhan Anda
        echo '<script>';
        echo 'alert("Data Kegiatan berhasil diubah!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

// Tutup koneksi
mysqli_close($koneksi);
?>