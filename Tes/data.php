<?php
include 'koneksi.php';

$limit = 8;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$data = mysqli_query($conn,"SELECT * FROM mahasiswa LIMIT $start,$limit");
$total = mysqli_query($conn,"SELECT COUNT(*) as total FROM mahasiswa");
$totalData = mysqli_fetch_assoc($total)['total'];
$totalPage = ceil($totalData / $limit);
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Mahasiswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
.btn-transparent {
    background-color: transparent;
    border: 2px solid #0d6efd;
    color: #0d6efd;
    transition: all 0.3s ease;
}

.btn-transparent:hover {
    background-color: #0d6efd;
    color: white;
}

.btn-transparent-success {
    background-color: transparent;
    border: 2px solid #198754;
    color: #198754;
    transition: all 0.3s ease;
}

.btn-transparent-success:hover {
    background-color: #198754;
    color: white;
}
</style>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container-fluid">
    <img src="hmjti.png.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
<a class="navbar-brand" href="index.php">HMJTI</a>


<ul class="navbar-nav me-auto">
<li class="nav-item">
<a class="nav-link active" href="data.php">Data Mahasiswa</a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
Halaman
</a>
<ul class="dropdown-menu">
<?php for($i=1;$i<=$totalPage;$i++){ ?>
<li><a class="dropdown-item" href="?page=<?=$i?>">Halaman <?=$i?></a></li>
<?php } ?>
</ul>
</li>
</ul>

</div>
</nav>

<div class="container mt-4">
<h3>Data Mahasiswa</h3>

<table class="table table-bordered">
<tr>
<th>No</th>
<th>Nama</th>
<th>NIM</th>
<th>Prodi</th>
<th>Domisili</th>
</tr>

<?php
$no = $start + 1;
while($row = mysqli_fetch_assoc($data)){
?>
<tr>
<td><?=$no++?></td>
<td><?=$row['nama']?></td>
<td><?=$row['nim']?></td>
<td><?=$row['prodi']?></td>
<td><?=$row['domisili']?></td>
</tr>
<?php } ?>
</table>
</div>
<div class="mb-3 d-flex justify-content-center gap-3">
    <a href="index.php" class="btn btn-transparent">
        ⬅ Kembali ke Beranda
    </a>
    
    <a href="export.php" class="btn btn-transparent-success">
        💾 Simpan Data
    </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
