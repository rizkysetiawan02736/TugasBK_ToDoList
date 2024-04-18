<?php 
$koneksi = mysqli_connect("localhost","root","","to_do_list");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>