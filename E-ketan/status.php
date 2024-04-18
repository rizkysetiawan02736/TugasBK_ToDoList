<?php
include 'koneksi.php';

$id_kegiatan = $_GET['id_keg'];
$status = $_GET['status'];
$query = "UPDATE kegiatan SET status = $status WHERE id_keg = $id_kegiatan";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header('location:index.php');
} else {
    header('location:index.php');
}
?>