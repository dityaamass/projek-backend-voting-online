<?php

include "database/conn.php";

$query = mysqli_query($conn, "
    SELECT 
        tb_polling.id_polling,
        tb_polling.nama,
        tb_polling.Jkel,
        tb_polling.foto_calon,
        COUNT(tb_vote.id_vote) AS jumlah_vote
    FROM tb_polling
    LEFT JOIN tb_vote 
        ON tb_polling.id_polling = tb_vote.id_polling
    GROUP BY tb_polling.id_polling
");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Voting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/hasilVote.css">
</head>

<body>
    <ul class="nav justify-content-end bg-light fw-semibold p-2 shadow-sm">
        <li class="nav-item me-auto">
            <img src="gambar/Go Vote! (1).png" alt="logo" widht="50" height="50" class="rounded">
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="adminHome.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="buatPolling.php">Create Vote</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="hasilVote.php">Hasil Vote</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="login.php">Logout</a>
        </li>
    </ul>

    <h1>- HASIL VOTING -</h1>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm mx-auto">
                    <div class="card-header text-white bg-secondary text-center">
                        Tabel Suara
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Jumlah Vote</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($query)) {
                                    ?>

                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['nama']; ?></td>
                                            <td><?= $data['Jkel']; ?></td>
                                            <td>
                                                <img src="gambar/<?= $data['foto_calon']; ?>" width="80">
                                            </td>
                                            <td>
                                                <span class="badge bg-success fs-6">
                                                    <?= $data['jumlah_vote']; ?>
                                                </span>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>