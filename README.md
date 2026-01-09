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

    Projek-Backend-Voting-Online/
    ├── CSS/                // Folder untuk menyimpan file .css 
    │  ├── hasilvote.css
    │  ├── home.css
    │  ├── login.css
    │  ├── polling.css
    │  └── vote.css
    ├── System/            // Folder untuk menyimpan semua file php yg berisi fungsi untuk menjalankan sistem
    │  ├── prosesVote.php  // Skrip untuk memproses dalam melakukan voting
    │  └── register.php    // Skrip untuk memproses fungsi melakukan registrasi
    ├── database/          // Folder untuk menyimpan file .sql dan koneksi database ke PHP
    │  ├── conn.php        // Skrip untuk mengkoneksikan MySql dengan PHP
    │  └── database.sql    // Database yang digunakan untuk menyimpan semua data yg ada di sistem
    ├── gambar/
    │  ├── Stikom Bali.png
    │  ├── akurasi.jpg
    │  ├── data.jpg
    │  ├── jam.jpg
    │  ├── kertas.jpg
    │  ├── uang.jpg
    │  └── user.jpg
    ├── .gitattributes
    ├── README.md          // Dokumentasi sistem
    ├── adminHome.php      // Skrip untuk menampilkan halaman home untuk admin pada sistem
    ├── buatPolling.php    // Skrip untuk memproses aksi membuat polling pada sistem
    ├── hasilVote.php      // Skrip untuk menampilkan hasil voting yang sudah dilakukan
    ├── login.php          // Skrip untuk menampilkan halaman login page dan proses untuk melakukan login ke dalam sistem
    ├── registration.php   // Skrip untuk menampilkan halaman registrasi
    ├── userHome.php       // Skrip untuk menampilkan halaman home untuk user pada sistem
    └── vote.php           // Skrip untuk menampilkan halaman untuk melakukan voting pada sistem 
    
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

- Sebelum masuk ke halaman home pengguna diwajibkan untuk melakukan login atau registrasi terlebih dahulu.

  **Halaman Login**
  <img width="1919" height="997" alt="image" src="https://github.com/user-attachments/assets/d9fe9f72-b51d-4ca7-bf3a-34251406216b" />

- Jika belum memiliki akun, pengguna dapat mengklik tulisan "Daftar disini" dan akan dialihkan ke halaman registrasi.

  **Halaman Registrasi**
  <img width="1919" height="995" alt="image" src="https://github.com/user-attachments/assets/e03c5967-2713-4b6b-b37b-3611bfbbad65" />

- Lakukan registrasi dengan cara menginput username dan juga password serta pilih sebagai siapa pengguna ingin melakukan login.
- Jika sudah, klik tombol "Register" dan akan dialihkan kembali ke halaman login.
- Pada halaman login silahkan masukkan username dan password yang sudah dibuat pada halaman registrasi.
- Jika sudah, klik tombol Login dan anda akan dialihkan ke halaman Home sesuai dengan role yg dipilih.

  **Halaman Home Page untuk Admin**
  <img width="1919" height="997" alt="image" src="https://github.com/user-attachments/assets/cc49166e-d773-4c81-a8a6-aa1a89a331df" />

- Jika user login dengan role user maka akan dialihkan ke halaman Home untuk user.
  
  **Halaman Home Page untuk User**
  <img width="1919" height="996" alt="image" src="https://github.com/user-attachments/assets/b38b5beb-4917-46f4-bea6-9251ed3d0476" />

# **UJI SISTEM ADMIN** #

**1. Membuat Polling**
- Pada Home Page admin klik tulisan "Create Vote" pada navbar dan akan dialihkan ke halaman membuat polling.
  
  **Halaman Membuat Polling**
  <img width="1919" height="996" alt="image" src="https://github.com/user-attachments/assets/42711c9d-2d66-4066-81b5-c6ee4a053cc1" />

- Pada halaman buat polling input data :

      - Judul Polling,
      - Nama Kandidat,
      - Pilih Jenis Kelamin,
      - Masukkan Foto Calon
- Jika sudah selesai membuat polling langsung tekan tombol "Simpan Data" dan data akan tersimpan di "Tabel Polling".

  **Halaman jika data sudah tersimpan ke dalam Tabel Polling**
  <img width="1919" height="996" alt="image" src="https://github.com/user-attachments/assets/959cd5ae-daef-488b-bfc4-b59063246b8f" />

- Admin juga dapat menghapus semua data di dalam tabel dengan mengklik tombol "Hapus Semua Polling" pada tabel polling .

**2. Melihat Hasil Voting**
- Pada navbar terletak tulisan "Hasil Vote" dan jika user mengklik tulisan tersebut maka akan diarahkan ke halaman untuk menampilkan hasil voting.
- Pada halaman ini terdapat tabel untuk menampung data kandidat dan jumlah voting yang didapat oleh setiap kandidat.

  **Halaman Hasil Voting**
  <img width="1919" height="993" alt="image" src="https://github.com/user-attachments/assets/ca7fd36b-f620-4e9f-b0e7-ac40596b9128" />

- Jika User sudah melakukan voting maka jumlah vote akan bertambah 1.

  **Halaman jika User sudah melakukan voting**
  <img width="1919" height="996" alt="image" src="https://github.com/user-attachments/assets/2e8d95ff-ba50-49dc-b255-9360e7ea87ff" />

**5. Logout**
- Admin dapat melakukan logout dengan cara klik tulisan logout pada navbar dan akan dialihkan kembali ke login page.

# **UJI SISTEM USER** #

**1. Melakukan Voting**
- Pada halaman Home User klik tulisan "Vote" pada navbar dan akan dialihkan ke halaman voting

  **Halaman Voting**
  <img width="1919" height="995" alt="image" src="https://github.com/user-attachments/assets/455eb043-77f1-4965-9f2e-106b850f2d30" />

- Pada halaman voting user dapat melakukan voting dengan mengklik tombol "Vote" dibawah nama kandidat dan user hanya dapat melakukan voting sekali per user.
- Jika sudah melakukan vote maka tombol "Vote" akan berubah menjadi "Sudah Vote" yang artinya voting sudah berhasil dilakukan.

  **Halaman Voting Jika Sudah Melakukan Voting**
  <img width="1919" height="995" alt="image" src="https://github.com/user-attachments/assets/1f7c7fed-07e9-4182-8946-b0248ae597b4" />

**2. Logout**
- User dapat melakukan logout dengan cara klik tulisan logout pada navbar dan akan dialihkan kembali ke login page.
