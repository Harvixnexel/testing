# NextScale Theme - Premium AI & Web Solutions

Selamat datang di repository **NextScale Theme**! Ini adalah *source code* website landing page premium yang dirancang khusus untuk agensi pembuatan website dan penyedia layanan AI (Artificial Intelligence) seperti AI Customer Service. 

Website ini dibangun dengan fokus pada **UX yang modern**, **animasi interaktif yang halus**, serta **desain responsif** (mendukung berbagai ukuran layar dari HP hingga Desktop).

---

## ✨ Fitur Unggulan

- **Desain Modern & Premium**: Menggunakan gaya UI *Glassmorphism*, gradasi warna yang elegan, dan layout yang sangat rapi.
- **Responsif Sepenuhnya**: Layout otomatis menyesuaikan diri dengan layar HP, Tablet, maupun PC tanpa ada elemen yang terpotong. Khusus di mobile, tombol panah dinonaktifkan untuk pengalaman usap (*swipe*) yang lebih natural.
- **Animasi Interaktif**: Dilengkapi dengan animasi *fade-in-up* yang tertunda secara berurutan, *floating assets*, dan *hover effects* kelas atas.
- **SwiperJS Integrasi**: Sistem *slider* khusus untuk bagian Fitur dan Testimoni pelanggan.
- **Dual Support (HTML & WordPress)**: Dilengkapi dengan `index.html` untuk penggunaan statis secara instan, serta file `.php` (seperti `front-page.php`, `header.php`, `footer.php`) jika ingin dicolok ke ekosistem WordPress.

---

## 🚀 Cara Menjalankan Website di Localhost (Komputer Anda)

Karena repository ini berisi file HTML murni sekaligus file struktur WordPress, Anda memiliki **dua cara** untuk menjalankannya. Silakan pilih sesuai kebutuhan Anda:

### Cara 1: Menjalankan Versi Statis (HTML) - Sangat Mudah!
Jika Anda hanya ingin melihat tampilan desainnya atau memodifikasi CSS/JS secara langsung, Anda tidak perlu menginstal server yang rumit.

**Langkah-langkah:**
1. Unduh atau *Clone* repository ini ke komputer Anda.
   ```bash
   git clone https://github.com/Harvixnexel/testing.git
   ```
2. Buka folder hasil *download* tersebut.
3. Cari file bernama **`index.html`**.
4. **Cukup klik dua kali (double click)** file tersebut, dan website akan langsung terbuka di browser bawaan Anda (Chrome/Edge/Safari).
5. **(Rekomendasi untuk Developer)**: Jika Anda menggunakan kode editor seperti **Visual Studio Code**, sangat disarankan untuk menginstal ekstensi **Live Server**. Buka folder ini di VS Code, klik kanan pada `index.html`, lalu pilih *"Open with Live Server"*. Ini akan membuat website otomatis me-refresh ketika Anda menyimpan perubahan kode.

### Cara 2: Menjalankan Local Web Server (Direkomendasikan)
Jika Anda ingin melihat website berjalan layaknya di server asli (agar semua aset seperti gambar dan animasi termuat dengan sempurna), Anda bisa menjalankan *Local Web Server* di port `8000`.

**Menggunakan Python (Jika terinstal di PC Anda):**
1. Buka Terminal / Command Prompt / PowerShell.
2. Arahkan direktori (CD) ke folder repository ini.
   ```bash
   cd letak/folder/nextscale
   ```
3. Jalankan perintah berikut:
   ```bash
   python -m http.server 8000
   ```
4. Buka browser dan kunjungi: **`http://localhost:8000`**

**Menggunakan PHP (Jika terinstal di PC Anda):**
Apabila Anda lebih suka menggunakan PHP, langkahnya sama seperti di atas, cukup gunakan perintah ini di terminal:
```bash
php -S localhost:8000
```
Lalu buka **`http://localhost:8000`** di browser Anda.

*(Catatan: Semua metode di atas akan secara otomatis memuat file `index.html` sebagai halaman utama).*

---

## 🌐 Live Preview / Deployment

Website ini dirancang secara optimal agar bisa langsung di-*hosting* ke platform modern seperti **Vercel** tanpa konfigurasi yang rumit. Vercel akan otomatis mendeteksi file `index.html` sebagai halaman utama.

Bagi Anda yang ingin melihat langsung tampilan hasil akhirnya yang sudah mengudara, silakan kunjungi link berikut:

**👉 [Live Demo: https://nextscsale.vercel.app](https://nextscsale.vercel.app)**

---

## 🛠️ Teknologi yang Digunakan

- **HTML5 & CSS3**
- **Tailwind CSS** (via CDN untuk *rapid prototyping*)
- **Vanilla JavaScript**
- **SwiperJS** (Slider / Carousel)
- **Google Fonts** (Inter)

---
*Didesain dan dikembangkan dengan penuh perhatian terhadap UI/UX demi konversi bisnis yang lebih baik.*
