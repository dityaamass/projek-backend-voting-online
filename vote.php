<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/vote.css">
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

    <div class="container text-center mt-5">
        <h1 class="judul">Voting</h1>
        <h5 class="mb-4">Ayo Gunakan Suaramu dan Pilih Calon Ketua yang Tepat</h5>

        <div class="row justify-content-center g-4">

            <div class="col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="gambar/Stikom Bali.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Kandidat 1</h5>
                        <p class="card-text">Nama</p>
                        <button class="btn btn-primary">Vote</button>
                    </div>
                </div>
            </div>

            
                <div class="col-md-4 col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="gambar/Stikom Bali.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Kandidat 2</h5>
                            <p class="card-text">Nama</p>
                            <button class="btn btn-primary">Vote</button>
                        </div>
                    </div>
                </div>

                
                    <div class="col-md-4 col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="gambar/Stikom Bali.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Kandidat 3</h5>
                                <p class="card-text">Nama</p>
                                <button class="btn btn-primary">Vote</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
</body>

</html>