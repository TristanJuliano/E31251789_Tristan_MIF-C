<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Himpunan Mahasiswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{background-color:#00FFFF;}
.card-custom{
    width:40rem;
    border-radius:20px;
    box-shadow:0 8px 20px rgba(0,0,0,0.3);
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container-fluid">
<a class="navbar-brand" href="#">HMJTI</a>
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="data.php">Data Mahasiswa</a>
</li>
</ul>
</div>
</nav>

<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
<div class="card card-custom text-center p-4">
<h3>Selamat Datang Para Calon Pengurus HMJTI 2027</h3>
<hr>
<p>Mari menjadi bagian dari HMJTI 2027</p>
<a href="form.php" class="btn btn-primary">Get Started</a>
</div>
</div>

</body>
</html>
