<?php
include 'koneksi.php';

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="data_mahasiswa.csv"');

$output = fopen("php://output", "w");

// Header kolom
fputcsv($output, ['Nama', 'NIM', 'Prodi', 'Domisili']);

$data = mysqli_query($conn,"SELECT * FROM mahasiswa");

while($row = mysqli_fetch_assoc($data)){
    fputcsv($output, $row);
}

fclose($output);
exit;
?>
