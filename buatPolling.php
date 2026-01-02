<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include 'database/conn.php';

$judulPolling = "";
$nama = "";
$jenisKelamin = "";
$foto = "";
$sukses = "";
$error = "";
$op = "";


// proses masukan data

if (isset($_POST['simpan'])) {
    $judulPolling = $_POST['judulPolling'];
    $nama = $_POST['nama'];
    $jenisKelamin = $_POST['Jkel'];

    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    if ($judulPolling && $nama && $jenisKelamin && $foto) {
        move_uploaded_file($file_tmp, "gambar/" . $foto);

        $sql1 = "INSERT INTO tb_polling 
        (judul_polling, nama, Jkel, foto_calon, jumlah_suara) 
        VALUES 
        ('$judulPolling', '$nama', '$jenisKelamin', '$foto', 0)";

        $q1 = mysqli_query($conn, $sql1);

        if ($q1) {
            $sukses = "Data berhasil dimasukkan";
        } else {
            $error = "Gagal memasukkan data";
        }
    } else {
        $error = "Silakan lengkapi semua data";
    }
}
// }else {
//     if (!empty($foto)) {
//         move_uploaded_file($file_tmp, "gambar/" . $foto);
//         $sql1 = "insert into tb_polling (judul_polling, nama, Jkel, foto_calon) values ('$judulPolling', '$nama', '$jenisKelamin', '$foto')";
//         try {
//             $q1 = mysqli_query($conn, $sql1);
//             if ($q1) {
//                 $sukses = "Data Berhasil Dimasukan";
//             } else {
//                 $error = "Gagal Memasukan Data";
//             }
//         } catch (Exception $e) {
//             if ($e->getCode() == 1062) {
//                 $error = "Data Sudah Ada";
//             } else {
//                 $error = "Terjadi error : " . $e->getMessage();
//             }
//         }
//     } else {
//         $error = "Silakan Masukan Semua Data";
//     }
// }
?>

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
                        <form method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="polling" class="form-label">Judul Polling</label>
                                <input type="text" class="form-control" id="judulPolling" name = "judulPolling" aria-describedby="polling" value="<?php echo $judulPolling ?>">
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" value="<?php echo $nama ?>">
                            </div>

                            <div class="mb-3">
                                <label for="Jkel" class="form-label">Jenis Kelamin</label>
                                <select class="form-control" name="Jkel" id="Jkel" required>
                                    <option value="">- Jenis Kelamin -</option>
                                    <option value="Laki-Laki" <?php if ($jenisKelamin == "Laki-laki") echo "selected" ?>>Laki-laki</option>
                                    <option value="Perempuan" <?php if ($jenisKelamin == "Perempuan") echo "selected" ?>>Perempuan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Calon Ketua</label>
                                <?php 
                                // if($op == 'edit' && $foto){
                                //     echo '<img src="gambar/'. $foto.'" style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 10px;" alt="Foto Saat ini"><br>';
                                //     echo '<small class="text-muted">Kosongkan Jika tidak Ingin Mengganti Foto.</small>';
                                // }
                                ?>
                                <input type="file" class="form-control" id="foto" name="foto" value="<?php echo $foto ?>">
                            </div>

                            <div class="col-12">
                                <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                            </div>
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
                                        <th scope="col">#</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Organisasi</th>
                                        <th scope="col">foto</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                <tbody>
                                    <?php
                                    $sql2 = "select * from tb_polling order by id_polling desc";
                                    $q2 = mysqli_query($conn, $sql2);
                                    $urut = 1;
                                    while ($r2 = mysqli_fetch_array($q2)){
                                        $id_polling = $r2['id_polling'];
                                        $judulPolling = $r2['judul_polling'];
                                        $nama = $r2['nama'];
                                        $jenisKelamin = $r2['Jkel'];
                                        $foto = $r2['foto_calon'];
                                    

                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $urut++?></th>
                                        <td scope="row"><?php echo $judulPolling ?></td>
                                        <td scope="row"><?php echo $nama ?></td>
                                        <td scope="row"><?php echo $jenisKelamin ?></td>
                                        <td scope="row">
                                            <img src="gambar/<?php echo $foto ?>"  style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                        </td>
                                        <td scope="row">
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <?php
                                 }
                                 ?>
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