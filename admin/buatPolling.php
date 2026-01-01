<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Polling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="polling.css">
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
                                <label for="organisasi" class="form-label">ORGANISASI</label>
                                <select class="form-control" name="organisasi" id="organisasi" required>
                                    <option value="">- Pilih Organisasi</option>

                                    <!-- ORMAWA INTI -->
                                    <option value="DPM (Dewan Perwakilan Mahasiswa)">DPM (Dewan Perwakilan Mahasiswa)
                                    </option>
                                    <option value="BEM (Badan Eksekutif Mahasiswa)">BEM (Badan Eksekutif Mahasiswa)
                                    </option>
                                    <option value="HIMAPRODI Sistem Informasi">HIMAPRODI Sistem Informasi</option>
                                    <option value="HIMAPRODI Sistem Komputer">HIMAPRODI Sistem Komputer</option>
                                    <option value="HIMAPRODI Teknologi Informasi">HIMAPRODI Teknologi Informasi</option>
                                    <option value="HIMAS Jimbaran">HIMAS Jimbaran</option>

                                    <!-- UKM KEROHANIAN -->
                                    <option value="KMHD (Komunitas Mahasiswa Hindu Dharma)">KMHD (Komunitas Mahasiswa
                                        Hindu
                                        Dharma)
                                    </option>
                                    <option value="MCOS (Moslem Community of STIKOM Bali)">MCOS (Moslem Community of
                                        STIKOM
                                        Bali)
                                    </option>
                                    <option value="PMK (Persaudaraan Mahasiswa Kristen)">PMK (Persaudaraan Mahasiswa
                                        Kristen)
                                    </option>

                                    <!-- UKM SENI -->
                                    <option value="UKM Teater Biner">UKM Teater Biner</option>
                                    <option value="D.O.S (Dance of STIKOM Bali)">D.O.S (Dance of STIKOM Bali)</option>
                                    <option value="UKM Musik (STIKOM Bali Music Community)">UKM Musik (STIKOM Bali Music
                                        Community)
                                    </option>
                                    <option value="VOS (Voice of STIKOM Bali)">VOS (Voice of STIKOM Bali)</option>
                                    <option value="UKM Tari Tradisional Pragina">UKM Tari Tradisional Pragina</option>
                                    <option value="UKM Tabuh Bramara Gita">UKM Tabuh Bramara Gita</option>
                                    <option value="HIMATOGRAPHY (Photography)">HIMATOGRAPHY (Photography)</option>
                                    <option value="JUSTIFY (Jurnalistik STIKOM Family)">JUSTIFY (Jurnalistik STIKOM
                                        Family)
                                    </option>
                                    <option value="UKM Multimedia">UKM Multimedia</option>

                                    <!-- UKM OLAHRAGA -->
                                    <option value="BOSS (Badminton of STIKOM Bali)">BOSS (Badminton of STIKOM Bali)
                                    </option>
                                    <option value="UKM Basket">UKM Basket</option>
                                    <option value="UKM Futsal">UKM Futsal</option>
                                    <option value="GHoST (Gymnastic and Healthy of STIKOM Bali)">GHoST (Gymnastic and
                                        Healthy of
                                        STIKOM Bali)</option>

                                    <!-- UKM TEKNOLOGI -->
                                    <option value="PROGRESS (Programmers of STIKOM Bali)">PROGRESS (Programmers of
                                        STIKOM Bali)
                                    </option>
                                    <option value="KSL (Kelompok Studi Linux)">KSL (Kelompok Studi Linux)</option>
                                    <option value="RADE (Robotics and Embedded System)">RADE (Robotics and Embedded
                                        System)
                                    </option>

                                    <!-- UKM SOSIAL DAN LAINNYA -->
                                    <option value="KSR PMI Widya Bhakti">KSR PMI Widya Bhakti</option>
                                    <option value="MAPALA KOMPAS STIKOM Bali">MAPALA KOMPAS STIKOM Bali</option>
                                    <option value="PASKAMRAS">PASKAMRAS</option>
                                    <option value="U2M (Unit Usaha Mahasiswa)">U2M (Unit Usaha Mahasiswa)</option>
                                    <option value="JCOS (Japanese Community of STIKOM Bali)">JCOS (Japanese Community of
                                        STIKOM
                                        Bali)
                                    </option>
                                    <option value="Syntax">Syntax</option>
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
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Organisasi</th>
                                    <th scope="col">foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>

</html>