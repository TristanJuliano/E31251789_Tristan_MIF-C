<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$domisili = $_POST['domisili'];

mysqli_query($conn,"INSERT INTO mahasiswa(nama,nim,prodi,domisili)
VALUES('$nama','$nim','$prodi','$domisili')");

header("Location: data.php");
exit;
?>
