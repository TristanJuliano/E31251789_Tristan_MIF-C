<?php
$nama     = $_POST['nama'];
$nim      = $_POST['nim'];
$prodi    = $_POST['prodi'];
$golongan = $_POST['golongan'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            Data Mahasiswa
        </div>
        <div class="card-body">
            <p><strong>Nama :</strong> <?= htmlspecialchars($nama); ?></p>
            <p><strong>NIM :</strong> <?= htmlspecialchars($nim); ?></p>
            <p><strong>Program Studi :</strong> <?= htmlspecialchars($prodi); ?></p>
            <p><strong>Golongan :</strong> <?= htmlspecialchars($golongan); ?></p>

            <form action="download.php" method="post">
                <input type="hidden" name="nama" value="<?= $nama ?>">
                <input type="hidden" name="nim" value="<?= $nim ?>">
                <input type="hidden" name="prodi" value="<?= $prodi ?>">
                <input type="hidden" name="golongan" value="<?= $golongan ?>">

                <button type="submit" class="btn btn-success">
                    Download Data
                </button>

                <a href="index.php" class="btn btn-secondary ms-2">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
