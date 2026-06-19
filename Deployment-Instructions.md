# Panduan Deployment Tema WordPress "Lovable Clone"

Tema ini telah dibuat sesuai dengan instruksi yang diberikan, mencakup HTML5 semantik, CSS dengan gaya modern premium (glassmorphism, dark mode aesthetic, responsive), dan JavaScript untuk efek scroll & sticky navbar.

*(Catatan: Tautan preview Lovable yang diberikan sebelumnya bersifat "Private/Internal Workspace", sehingga saya membangun tema premium dengan estetika modern dark-mode sebagai placeholder sempurna berdasarkan best-practices).*

## Struktur Folder
Pastikan semua file berada dalam satu folder bernama `lovable-theme`. Struktur foldernya harus seperti ini:

```text
lovable-theme/
├── assets/
│   ├── css/
│   │   └── main.css
│   ├── js/
│   │   └── main.js
│   └── images/
│       └── (Letakkan foto-foto asli hasil download Anda di sini)
├── style.css
├── functions.php
├── header.php
├── footer.php
└── front-page.php
```

## Cara Menambahkan Gambar Asli
1. Download gambar asli dari desain Anda.
2. Letakkan gambar tersebut di dalam folder `assets/images/`.
3. Buka file `front-page.php`.
4. Cari tag `<img src="...">` di bagian bawah (ada komentar HTML di atasnya).
5. Ubah atribut `src` menjadi: `<?php echo get_template_directory_uri(); ?>/assets/images/nama-file-anda.jpg`

## Cara Mengunggah (Install) ke WordPress
1. **Compress / Zip Folder Tema**:
   Klik kanan pada folder `lovable-theme` (folder utama), lalu compress menjadi file `.zip` (misalnya: `lovable-theme.zip`).

2. **Login ke Dashboard WordPress**:
   Buka halaman admin WordPress Anda (misalnya: `namadomain.com/wp-admin`).

3. **Upload Tema**:
   - Di menu sebelah kiri, masuk ke **Appearance** (Tampilan) > **Themes** (Tema).
   - Klik tombol **Add New** (Tambah Baru) di bagian atas.
   - Klik tombol **Upload Theme** (Unggah Tema).
   - Pilih file `lovable-theme.zip` yang telah Anda buat pada Langkah 1.
   - Klik **Install Now** (Instal Sekarang).

4. **Aktifkan Tema**:
   - Setelah proses instalasi selesai, klik **Activate** (Aktifkan).
   - Tema sekarang sudah terpasang dan siap digunakan! Anda bisa mengunjungi halaman depan website untuk melihat hasilnya.

> **Catatan:** Jika template tidak langsung muncul di beranda, pastikan Anda masuk ke **Settings > Reading**, lalu pada opsi "Your homepage displays" pilih "A static page" dan pilih halaman apa saja untuk dijadikan Homepage. File `front-page.php` akan otomatis menangani tampilan beranda tersebut.
