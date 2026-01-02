<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Polling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/polling.css">
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
    <h1>SISTEM PEMILIHAN ORGANISASI ITB STIKOM BALI</h1>
    <h5>Silakan Lengkapi Data di Bawah Ini</h5>

    <div class="container-fluid mt-4">
        <div class="row justify-content-center">

            <div class="col-md-8 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-white">
                        Membuat Polling
                    </div>
                    <div class="card-body">
                        <form method="">
                            <div class="mb-3">
                                <label for="polling" class="form-label">Judul Polling</label>
                                <input type="text" class="form-control" id="polling" aria-describedby="polling">
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" aria-describedby="nama">
                            </div>

                            <div class="mb-3">
                                <label for="Jkel" class="form-label">Jenis Kelamin</label>
                                <select class="form-control" name="Jkel" id="Jkel" required>
                                    <option value="">- Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>

                                </select> 
                            </div>

                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Calon Ketua</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                            </div>

                            <button class="btn btn-primary">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header text-white bg-secondary text-center">
                        Tabel Polling
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Pemilihan Ketua Bem</td>
                                        <td>Nanda</td>
                                        <td>Laki-Laki</td>
                                        <td>Foto</td>
                                        <td scope="row">
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>

                                </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>