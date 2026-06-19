<?php
/**
 * Fallback template for Classic contexts (like the legacy Live Preview / Customizer).
 * Block Themes primarily use templates/index.html instead of this file.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Preview Notice</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding: 50px; background: #f8fafc; color: #0f172a; }
        .box { background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1); max-w: 600px; margin: auto; }
        h1 { color: #2563eb; }
    </style>
</head>
<body>
    <div class="box">
        <h1>Perhatian: Ini adalah Tema FSE Modern</h1>
        <p>Anda saat ini sedang berada di halaman <b>Live Preview (Customizer)</b> yang merupakan fitur lawas dari WordPress.</p>
        <p>Tema NextScale FSE ini didesain menggunakan teknologi <b>Full Site Editing (Block Theme)</b> terbaru, sehingga <u>tidak dapat</u> ditampilkan di dalam kotak Live Preview ini.</p>
        <hr style="margin: 30px 0; border: none; border-top: 1px solid #e2e8f0;">
        <h3>Apa yang harus dilakukan?</h3>
        <p>1. Silakan tutup layar Live Preview ini (klik tombol X).<br>2. Klik tombol <b>Activate</b> pada tema ini.<br>3. Buka menu baru <b>Appearance > Editor</b> untuk mengedit tema secara drag-and-drop.</p>
    </div>
</body>
</html>
