<?php
$nama     = $_POST['nama'];
$nim      = $_POST['nim'];
$prodi    = $_POST['prodi'];
$golongan = $_POST['golongan'];

$data = "DATA PENDAFTARAN HIMPUNAN MAHASISWA\n";
$data .= "=================================\n";
$data .= "Nama     : $nama\n";
$data .= "NIM      : $nim\n";
$data .= "Prodi    : $prodi\n";
$data .= "Golongan : $golongan\n";

header("Content-Type: text/plain");
header("Content-Disposition: attachment; filename=data_mahasiswa.txt");

echo $data;
exit;
