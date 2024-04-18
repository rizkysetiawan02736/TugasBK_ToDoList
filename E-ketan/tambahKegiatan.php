<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $nama_kegiatan = $_POST["nama_kegiatan"];
    $tanggal_awal = $_POST["tanggal_awal"];
    $tanggal_akhir = $_POST["tanggal_akhir"];

    // Query untuk menambahkan data obat ke dalam tabel
    $query = "INSERT INTO kegiatan (nama_keg, tgl_awal, tgl_akhir) VALUES ('$nama_kegiatan', '$tanggal_awal', '$tanggal_akhir')";
    

    // if ($koneksi->query($query) === TRUE) {
    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect kembali ke halaman utama atau sesuaikan dengan kebutuhan Anda
        // header("Location: ../../index.php");
        // exit();
        echo '<script>';
        echo 'alert("Data Kegiatan berhasil ditambahkan!");';
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