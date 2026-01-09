# **JUDUL PROJECT** #

**SISTEM VOTING ONLINE BERBASIS WEB**

# **DESKRIPSI SINGKAT SISTEM** #

Sistem Voting Online merupakan aplikasi backend yang dirancang untuk mengelola proses pemungutan suara secara digital, mulai dari manajemen pengguna, pembuatan polling/voting, proses pemberian suara, hingga perhitungan dan penyajian hasil voting. Sistem ini bertujuan untuk menyediakan mekanisme voting yang terstruktur, efisien, aman, dan mudah diintegrasikan dengan aplikasi frontend.

# **DAFTAR ANGGOTA** #

| No | Nama | NIM | Username GitHub | Peran / Tugas |
|----|------|-----|----------------|---------------|
| 1  | Dewa Gede Nanda Wedanta | 240030303 | Nanda777-gtg | Backend Developer, Database Design, Frontend Developer, Testing |
| 2  | I Wayan Ditya Mas Putra Pratama | 240030280 | dityaamass | Backend Developer, Frontend Developer, Dokumentasi, Testing |
| 3  | I Putu Candra Ardika Putra | 240030313 | CandraArdika | - |
| 4  | I Gusti Ngurah Bagus Banyu Prabayana | 240030265 | banyuprabayana-design | - |

# **LINGKUNGAN PENGEMBANGAN** #

Sistem ini dikembangkan menggunakan :

  - **Bahasa Pemrograman** : (PHP / HTML / CSS / JavaScript)
  - **Framework Backend** : (Bootstraps)
  - **Database** : (MySQL)
  - **Tools Pendukung** : (Git / Github / Visual Studio Code)

# **HASIL PENGEMBANGAN** #

Berikut adalah modul dan fitur utama yang telah diimplementasikan :

1. **Modul Autentikasi & Otorisasi**
   - Login pengguna,
   - Role pengguna (Admin dan Voter).
     
2. **Modul Polling dan Voting**
   - Pembuatan polling oleh admin,
   - Penentuan opsi/jawaban voting.
  
3. **Modul Pemberian Suara**
   - Voter hanya dapat memilih satu kali pada satu polling,
   - Validasi hak pilih,
   - Penyimpanan suara ke database.
  
4. **Modul Hasil Voting**
   - Perhitungan hasil voting secara otomatis,
   - Rekap jumlah suara per opsi.
  
# **STRUKTUR FOLDER** #

    CSS/              // Folder untuk menyimpan file .css 
    database/         // Folder untuk menyimpan file .sql dan koneksi database ke PHP
    gambar/           // Folder untuk menyimpan gambar yg ada di dalam sistem
    buatPolling.php   // Skrip untuk memproses aksi membuat polling pada sistem
    hasilVote.php     // Skrip untuk menampilkan hasil voting yang sudah dilakukan
    home.php          // Skrip untuk menampilkan halaman home page pada sistem
    login.php         // Skrip untuk menampilkan halaman login page dan proses untuk melakukan login ke dalam sistem
    prosesVote.php    // Skrip untuk memproses dalam melakukan voting
    vote.php          // Skrip untuk menampilkan halaman untuk melakukan voting pada sistem 
    README.md         // Dokumentasi sistem

# **LANGKAH IMPORT DATABASE** #

Sistem ini menggunakan aplikasi Laragon dan membutuhkan database dengan nama db_voting. pada repository sudah terdapat file [database.sql](database/database.sql), lalu ikuti langkah-langkah berikut :

    1. Akses phpMyAdmin melalui browser (biasanya http://localhost/phpmyadmin/).
    
    2. Di panel kiri, klik tab "Baru" atau "New" untuk membuat database baru.
    
    3. Masukkan nama database db_voting, lalu klik "Buat" atau "Create".
    
    4. Setelah database db_voting terpilih, klik tab "Import" di bagian atas halaman.

    5. Pada bagian "File untuk diimpor" atau "File to import"
        - Klik "Choose file" atau "Pilih file".
        - Cari dan pilih file database.sql (atau file .sql Anda) yang berisi struktur tabel.
    
    8. Scroll ke bawah dan klik tombol "Kirim" atau "Go".
    
    9. Struktur database berhasil dibuat di dalam database db_voting.

# **MENGATUR KONFIGURASI DATABASE** #

Pengaturan konfigurasi sudah terdapat pada file [conn.php](database/conn.php).

# **CARA INSTALASI SISTEM** #

1. Tempatkan seluruh folder proyek di dalam direktori document root Laragon (atau apapun yg digunakan oleh user, dalam hal ini menggunakan laragon) yaitu folder www, misalnya : 

       C:\laragon\www\Projek-Backend-Voting-Online

2. Pastikan Apache dan MySQL sudah berjalan di Laragon Control Panel.

# **URL UNTUK MENJALANKAN SISTEM** #

1. Akses halaman utama Sistem Voting melalui browser :
   
       http://localhost/NAMA_FOLDER_PROYEK/login.php
   
3. Ganti "NAMA_FOLDER_PROYEK" dengan nama folder yang tersimpan di www Laragon.

# **CONTOH UJI SISTEM** #

Jika sudah berhasil masuk ke login page maka lakukan uji sistem dengan langkah" sebagai berikut :

**1. Melakukan Login**

  **Halaman Login**
  <img width="1919" height="993" alt="image" src="https://github.com/user-attachments/assets/667ece73-a424-471a-8f91-407b38ac282d" />

- Input Username dan Password yang sudah kami tentukan yaitu :

      1. Admin
         - Username : admin
         - Password : admin1
      2. User 1
         - Username : user1
         - Password : user1
      2. User 2
         - Username : user2
         - Password : user2
      2. User 3
         - Username : user3
         - Password : user3
  
      (Kami membuat user lebih dari 1 agar memungkinkan untuk melakukan voting dengan berbagai user.)
- Klik tombol Login dan anda akan dialihkan ke home page.

  **Halaman Home Page**
  <img width="1918" height="993" alt="image" src="https://github.com/user-attachments/assets/d4a9377b-59a9-4197-85d0-5c0f20b29665" />


**2. Membuat Polling**
- Klik tulisan "Create Vote" pada navbar dan akan dialihkan ke halaman membuat polling.
  
  **Halaman Membuat Polling**
  <img width="1919" height="995" alt="image" src="https://github.com/user-attachments/assets/55c1c8bb-0abd-4c1d-887d-2fe05268b472" />

- Pada halaman buat polling input data :

      - Judul Polling,
      - Nama Kandidat,
      - Pilih Jenis Kelamin,
      - Masukkan Foto Calon
- Jika sudah selesai membuat polling langsung tekan tombol "Simpan Data" dan data akan tersimpan di "Tabel Polling".
- Admin juga dapat menghapus semua data di dalam tabel dengan mengklik tombol "Hapus Semua Polling" pada tabel polling .

**3. Melakukan Voting**
- Klik tulisan "Vote" pada navbar dan akan dialihkan ke halaman voting

  **Halaman Voting**
  <img width="1919" height="996" alt="image" src="https://github.com/user-attachments/assets/05a2a585-a0a5-4c50-833d-8f5a4287e531" />

- Pada halaman voting user dapat melakukan voting dengan mengklik tombol "Vote" dibawah nama kandidat dan user hanya dapat melakukan voting sekali per user.
- Jika sudah melakukan vote maka tombol "Vote" akan berubah menjadi "Sudah Vote" yang artinya voting sudah berhasil dilakukan.

  **Halaman Voting Jika Sudah Melakukan Voting**
  <img width="1919" height="993" alt="image" src="https://github.com/user-attachments/assets/d70d1add-aaef-448d-a39a-41f212dae991" />

**4. Melihat Hasil Voting**
- Pada navbar terletak tulisan "Hasil Vote" dan jika user mengklik tulisan tersebut maka akan diarahkan ke halaman untuk menampilkan hasil voting.
- Pada halaman ini terdapat tabel untuk menampung data kandidat dan jumlah voting yang didapat oleh setiap kandidat.

  **Halaman Hasil Voting**
  <img width="1919" height="995" alt="image" src="https://github.com/user-attachments/assets/04fbffcf-1814-40d7-ad2c-a34156fd54f0" />

**5. Logout**
- User dapat melakukan logout dengan cara klik tulisan logout pada navbar dan akan dialihkan kembali ke login page.

# **KEKURANGAN SISTEM** #
- Tidak terdapat halaman khusus untuk user dan admin,
- halaman user dan admin sama dan tidak memiliki perbedaan,
- user dapat membuat polling dan menghapus polling,
- admin dapat melakukan voting.
