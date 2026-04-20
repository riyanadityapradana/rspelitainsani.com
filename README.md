<<<<<<< HEAD
# RS Pelita Insani (rspelita)

Ringkasan singkat dan instruksi cepat menjalankan proyek lokal (Windows + XAMPP).

## Ringkasan
- Framework: Yii 1.x (lokal `framework/` berisi Yii).
- Entry point: `index.php` (root).
- Konfigurasi utama: `protected/config/main.php`.
- Konfigurasi database: `protected/config/database.php` — saat ini:
  - DSN: `mysql:host=localhost;dbname=rspe_db`
  - user: `root`, password: `` (kosong)
- Halaman beranda menggunakan layout `protected/views/layouts/beranda-l.php` dan view `protected/views/site/isi-beranda.php`.
- .htaccess ada, mengaktifkan rewrite dan memaksa HTTPS.
- Gii (code generator) diaktifkan dengan password `pelitainsani` (hanya IP localhost di-filter).
- Ada fitur "maintenance" yang diaktifkan bila file `protected/config/.maintenance` (atau `protected/config/.maintenance`) ada — aplikasi akan merutekan ke `site/maintenance`.

## File / modul penting
- Controller utama: `protected/controllers/SiteController.php` (titik masuk halaman publik dan fungsi helper seperti buildJadwalPoliDashboard)
- Model penting: `Konten`, `Jadwalpoli`, `Klinik`, `Dokter`, `Slider`, dll. (lihat `protected/models/`)
- Views publik: `protected/views/site/*` (beranda, jadwalpoli, galeri, dsb)
- Layouts: `protected/views/layouts/` (termasuk `beranda-l.php`, `main.php`)

## Cara menjalankan lokal (singkat)
1. Pastikan XAMPP berjalan (Apache + MySQL).
2. Aktifkan mod_rewrite dan AllowOverride All pada konfigurasi Apache agar `.htaccess` bekerja.
3. Buat database MySQL `rspe_db` dan import dump jika tersedia.
   - Repo ini tidak berisi file `.sql` dump untuk `rspelita` (tidak ditemukan). Jika Anda punya dump, import ke `rspe_db`.
4. Periksa `protected/config/database.php` dan sesuaikan credential jika perlu.
5. Pastikan folder `protected/runtime` dapat ditulisi oleh web server.
6. Akses: http://localhost/rspelita/ (atau atur virtual host di Apache jika diinginkan).

Contoh perintah (bash pada Windows/WSL / Git Bash):

```bash
# buat database (masuk mysql sebagai root tanpa password)
mysql -u root -e "CREATE DATABASE IF NOT EXISTS rspe_db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;"

# import (jika ada file dump.sql)
# mysql -u root rspe_db < /path/to/dump.sql
```

## Catatan keamanan / operasional
- Ganti password database dari kosong ke password kuat.
- Non-aktifkan Gii pada environment production atau batasi IP jika diperlukan.
- `.htaccess` memaksa HTTPS; jika menjalankan lokal tanpa HTTPS, sementara matikan baris redirect.
- Cek header CSP `upgrade-insecure-requests` yang ada di `.htaccess` jika ada isu konten campuran.

## Langkah berikut yang bisa saya bantu
- Buat README lebih lengkap (dengan daftar dependensi, cek permission, dan troubleshooting). ✅
- Cari atau buat dump database jika Anda tidak memilikinya.
- Mengamankan konfigurasi (memindahkan credential ke env, menonaktifkan Gii).

---
_Di-generate otomatis oleh GitHub Copilot pada analisis awal proyek._
=======
# rspelitainsani.com
Website RS PELITA INSANI
>>>>>>> 415080c08d4eeed2903ca60d286751e46865e89d
