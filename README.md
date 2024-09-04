# Tugas Individu Pemrograman Web

Proyek ini adalah sebuah formulir web yang memungkinkan pengguna untuk mengirimkan informasi pribadi mereka. Data yang dikumpulkan melalui formulir ini akan disimpan dalam basis data MySQL.

## Struktur Proyek

- `index.php`: File HTML utama yang berisi formulir untuk input pengguna.
- `submit.php`: Script backend PHP yang menangani pengiriman formulir, memproses data, dan memasukkannya ke dalam basis data MySQL.
- `style.css`: File CSS yang berisi gaya untuk formulir dan tata letak halaman secara keseluruhan.
- `yuwaraja-logo.svg`: Gambar logo yang digunakan di bagian header formulir.

## Fitur

- **Pengiriman Formulir**: Pengguna dapat mengisi informasi pribadi mereka di dalam formulir yang disediakan.
- **Validasi Input**: Semua kolom input bersifat wajib, dan input dari pengguna disanitasi sebelum disimpan ke dalam basis data.
- **Penyimpanan Basis Data**: Data disimpan dengan aman dalam basis data MySQL.
- **Notifikasi Sukses/Gagal**: Pengguna akan diberi tahu tentang keberhasilan atau kegagalan pengiriman formulir melalui pesan notifikasi.

## Instruksi Pemasangan

### Prasyarat

- Server web yang mendukung PHP (misalnya, Apache, Nginx).
- Server basis data MySQL atau MariaDB.
- Ekstensi PHP MySQLi terinstal.

### Instalasi

1. Clone repositori atau unduh kode sumber.

2. Impor skema basis data. Anda dapat menggunakan SQL berikut untuk membuat tabel `users`:

   ```sql
   CREATE DATABASE individual_task_pweb;
   USE individual_task_pweb;

   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       firstname VARCHAR(255) NOT NULL,
       lastname VARCHAR(255) NOT NULL,
       email VARCHAR(255) NOT NULL,
       phone VARCHAR(50) NOT NULL,
       nim VARCHAR(50) NOT NULL,
       address TEXT NOT NULL,
       state VARCHAR(100) NOT NULL,
       country VARCHAR(100) NOT NULL,
       post VARCHAR(20) NOT NULL,
       area VARCHAR(20) NOT NULL
   );
   ```
