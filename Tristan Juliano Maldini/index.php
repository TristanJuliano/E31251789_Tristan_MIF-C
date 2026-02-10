<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Himpunan Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #00FFFF; /* cyan */
        }

        .welcome-card {
            width: 40rem;
            border-radius: 20px;
            overflow: hidden; /* biar border bagian atas & bawah rapi */
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        .welcome-card {
    background-color: #ffffffaa; /* semi transparan */
    border-radius: 20px;
}


        .welcome-top {
            background-color: #ffffffaa;
            color: #000;
            padding: 30px;
            text-align: center;
            border-bottom: 3px solid #000080; /* navy */
        }

        .welcome-bottom {
            background-color: #ffffffaa;
            color: #000;
            padding: 30px;
            text-align: center;
            border-top: 3px solid #000080; /* navy */
        }

        .btn-navy {
            background-color: #000080;
            color: #fff;
            border: none;
        }

        .btn-navy:hover {
            background-color: #000066;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <div class="welcome-card">

        <!-- BAGIAN ATAS -->
        <div class="welcome-top">
            <h3>Selamat Datang Para Calon Pengurus HMJTI 2027</h3>
        </div>

        <!-- BAGIAN BAWAH -->
        <div class="welcome-bottom">
            <p class="mb-4">Mari menjadi bagian dari Para Pengurus HMJTI 2027 dengan mengklik tombol berikut</p>
            <a href="daftar.php" class="btn btn-navy px-4 py-2">Daftar Sekarang</a>
        </div>

    </div>
</div>

</body>
</html>
