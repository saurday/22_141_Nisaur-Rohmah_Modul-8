<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$dosen = $_POST['dosen'];
$status = $_POST['status'];
$ket = $_POST['ket'];
 
// update data ke database
mysqli_query($koneksi,"update datamhs set nim='$nim', nama='$nama', dosen='$dosen', status='$status', ket='$ket' where id='$id'");
 
// mengalihkan halaman kembali ke konten.php
header("location:konten.php");
 
?>