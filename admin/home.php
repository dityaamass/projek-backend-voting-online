<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <ul class="nav justify-content-end bg-light p-2 shadow-sm">
        <li class="nav-item me-auto">
            <img src="gambar/Stikom Bali.png" alt="logo" widht="50" height="50" class="rounded">
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="buatPolling.php">Create Vote</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="vote.php">Vote</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="hasilVote.php">Hasil Vote</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="login.php">Logout</a>
        </li>
    </ul>

    <h1 class="judul">- Selamat Datang -</h1>
    <h3 class="subjudul">SISTEM PEMILIHAN ORGANISASI ITB STIKOM BALI</h3>
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="gambar/Stikom Bali.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="gambar/Stikom Bali.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="gambar/Stikom Bali.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-md-7">
                <h3 class="about-title">About Us</h3>
                <hr class="about-line">
                <p class="about-text">
                    Sistem Pemilihan Organisasi ITB STIKOM Bali merupakan aplikasi berbasis website yang digunakan
                    untuk mendukung proses pemilihan pengurus organisasi mahasiswa secara online.
                    Sistem ini bertujuan untuk meningkatkan efisiensi, transparansi, dan keamanan pemungutan suara,
                    serta memudahkan mahasiswa dan panitia dalam pelaksanaan dan pengelolaan proses pemilihan.
                </p>

                <p>Keuntungan yang didapat adalah paperless, meminimalisir kecurangan dan real time result.</p>

                <div class="row feature-list mt-4">
                    <div class="col-md-4 feature-item">
                        <div class="feature-box">
                            <img src="gambar/Stikom Bali.png" alt="logo" width="60" height="60" class="rounded">
                            <span>Efisien & Efektif</span>
                        </div>
                    </div>

                    <div class="col-md-4 feature-item">
                        <div class="feature-box">
                            <img src="gambar/Stikom Bali.png" alt="logo" width="60" height="60" class="rounded">
                            <span>Penghitungan suara lebih cepat</span>
                        </div>
                    </div>

                    <div class="col-md-4 feature-item">
                        <div class="feature-box">
                            <img src="gambar/Stikom Bali.png" alt="logo" width="60" height="60" class="rounded">
                            <span>Tidak ada duplikasi data pemilih</span>
                        </div>
                    </div>

                    <div class="col-md-4 feature-item">
                        <div class="feature-box">
                            <img src="gambar/Stikom Bali.png" alt="logo" width="60" height="60" class="rounded">
                            <span>Tidak ada suara rusak</span>
                        </div>
                    </div>

                    <div class="col-md-4 feature-item">
                        <div class="feature-box">
                            <img src="gambar/Stikom Bali.png" alt="logo" width="60" height="60" class="rounded">
                            <span>Akurasi hitungan suara tinggi</span>
                        </div>
                    </div>

                    <div class="col-md-4 feature-item">
                        <div class="feature-box">
                            <img src="gambar/Stikom Bali.png" alt="logo" width="60" height="60" class="rounded">
                            <span>Menghemat biaya jangka panjang</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="cta-section">
        <h3>- Ayo Buat Polling -</h3>
        <p>
            Mari berpartisipasi dalam proses pemilihan organisasi mahasiswa secara online
            yang transparan, aman, dan terpercaya.
            Gunakan hak suara Anda untuk menentukan kepengurusan organisasi yang lebih baik.
        </p>
        <a href="buatPolling.php" class="btn btn-primary">Buat Polling</a>
    </div> -->

</body>

</html>