<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header();
?>

<div class="min-h-screen pt-24 pb-12 flex flex-col items-center justify-center bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold text-slate-900 mb-6">Halaman Tidak Ditemukan atau Belum Tersedia</h1>
        <p class="text-lg text-slate-600 mb-8">Maaf, halaman yang Anda cari tidak dapat ditemukan. Silakan kembali ke halaman utama.</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
            Kembali ke Beranda
        </a>
    </div>
</div>

<?php
get_footer();
?>
