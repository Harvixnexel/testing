import os

files = ['index.html', 'header.php', 'front-page.php', 'footer.php']

translations = {
    'Konsultasi Gratis': 'Free Consultation',
    'Layanan Pembuatan Website & AI Sales Assistant': 'Website Development & AI Sales Assistant',
    'Tingkatkan Kredibilitas & Omset Penjualan': 'Boost Credibility & Sales Revenue',
    'Website company profile yang elegan dipadukan dengan AI Customer Service pintar. Bangun kepercayaan pelanggan dan biarkan AI melayani chat serta closing 24 jam nonstop.': 'An elegant company profile website combined with a smart AI Customer Service. Build customer trust and let AI handle chats and closing 24/7 nonstop.',
    'Lihat Harga': 'View Pricing',
    'Pelajari Solusi': 'Learn Solution',
    'Tantangan Bisnis Saat Ini': 'Current Business Challenges',
    'Sering Kehilangan Pelanggan?': 'Often Losing Customers?',
    'Banyak bisnis kehilangan potensi omset hingga 40% hanya karena masalah komunikasi dan kurangnya identitas digital yang meyakinkan.': 'Many businesses lose up to 40% of potential revenue just because of communication issues and a lack of convincing digital identity.',
    'Balas Chat Lama': 'Slow Response',
    'Pelanggan harus menunggu lama untuk mendapatkan balasan, akhirnya mereka lari ke kompetitor.': 'Customers have to wait a long time for a reply, eventually running to competitors.',
    'CS Offline / Istirahat': 'CS Offline / Resting',
    'Banyak chat masuk di malam hari atau hari libur saat CS sedang tidak aktif.': 'Many chats come in at night or on holidays when CS is inactive.',
    'Kurang Terpercaya': 'Less Trustworthy',
    'Tidak punya website profesional membuat bisnis terlihat kurang meyakinkan di mata calon klien.': 'Not having a professional website makes the business look less convincing in the eyes of prospective clients.',
    'Solusi untuk Bisnismu': 'Solution for Your Business',
    'AI Sebagai Solusi': 'AI As a Solution',
    'Otomatisasi Penjualan & Layanan': 'Sales & Service Automation',
    'Tangani Chat 24/7': 'Handle Chats 24/7',
    'AI Customer Service kami siap melayani pelanggan kapan pun mereka chat - pagi, siang, malam, bahkan hari libur. Tidak ada lagi chat yang terabaikan, tidak ada lagi peluang yang lepas hanya karena CS sedang offline. Setiap pesan masuk akan langsung dibalas secara natural dan relevan.': 'Our AI Customer Service is ready to serve customers whenever they chat - morning, noon, night, even holidays. No more ignored chats, no more lost opportunities just because CS is offline. Every incoming message will be answered naturally and relevantly.',
    'Hadir Sebagai Konsultan': 'Present as a Consultant',
    'Lebih dari sekadar membalas pesan, AI kami dilatih untuk memahami produk, kebutuhan calon pembeli, dan menjadi konsultan yang membantu mereka mengambil keputusan. Hasilnya, percakapan terasa personal, profesional, dan berakhir dengan closing — bukan sekadar tanya-tanya.': 'More than just replying to messages, our AI is trained to understand products, prospective buyers\' needs, and become a consultant who helps them make decisions. As a result, conversations feel personal, professional, and end with a closing — not just asking questions.',
    'Website Sebagai Solusi': 'Website As a Solution',
    'Bangun Identitas Digital Profesional': 'Build a Professional Digital Identity',
    'Kredibilitas Brand': 'Brand Credibility',
    'Website company profile yang dirancang dengan desain modern dan profesional akan langsung meningkatkan persepsi calon klien terhadap bisnismu. Mereka akan melihat brand kamu sebagai sesuatu yang serius, terpercaya, dan layak untuk diajak bekerja sama dalam jangka panjang.': 'A company profile website designed with a modern and professional layout will instantly improve prospective clients\' perception of your business. They will see your brand as something serious, trustworthy, and worthy of long-term cooperation.',
    'Desain Premium': 'Premium Design',
    'Mobile Responsive': 'Mobile Responsive',
    'Fast Loading': 'Fast Loading',
    'Copywriting': 'Copywriting',
    'UI/UX Modern': 'Modern UI/UX',
    'SEO & Traffic': 'SEO & Traffic',
    'Kami bangun website yang sudah dioptimasi SEO sejak awal, sehingga calon pelangganmu bisa menemukan bisnismu di Google ketika mereka mencari produk atau jasa yang relevan. Trafik organik mengalir, leads bertambah, tanpa harus terus-menerus bayar iklan.': 'We build websites that are SEO optimized from the start, so your prospective customers can find your business on Google when they search for relevant products or services. Organic traffic flows, leads increase, without having to constantly pay for ads.',
    'SEO On-Page': 'On-Page SEO',
    'Meta Tags': 'Meta Tags',
    'Google Analytics': 'Google Analytics',
    'Fast Indexing': 'Fast Indexing',
    'Sitemap XML': 'XML Sitemap',
    'Fitur Unggulan': 'Excellent Features',
    'Auto Follow Up': 'Auto Follow Up',
    'AI otomatis menindaklanjuti calon pembeli yang belum closing.': 'AI automatically follows up with prospective buyers who haven\'t closed.',
    'Memiliki Database': 'Has Database',
    'Semua percakapan dan data pelanggan tersimpan rapi.': 'All conversations and customer data are stored neatly.',
    'Respon Super Cepat': 'Super Fast Response',
    'Balas chat dalam hitungan detik, 24/7 tanpa menunggu.': 'Reply to chats in seconds, 24/7 without waiting.',
    'Konsultan Pintar': 'Smart Consultant',
    'Menjawab layaknya manusia, bukan template robot yang kaku.': 'Answers like a human, not a rigid robot template.',
    'TESTIMONI': 'TESTIMONIALS',
    'Apa Kata Mereka': 'What They Say',
    'Cerita nyata dari pemilik bisnis yang sudah merasakan hasilnya.': 'Real stories from business owners who have experienced the results.',
    'Budi Santoso': 'Budi Santoso',
    'Owner — Toko Kopi Senja': 'Owner — Senja Coffee Shop',
    'Semenjak pakai AI assistant, penjualan naik drastis! Saya bisa tidur nyenyak sementara AI tetap jualan dan closing pelanggan 24 jam nonstop. Benar-benar investasi yang luar biasa.': 'Since using the AI assistant, sales have increased drastically! I can sleep soundly while the AI keeps selling and closing customers 24/7 nonstop. Truly an amazing investment.',
    'Andi Pratama': 'Andi Pratama',
    'Founder — Creative Agency': 'Founder — Creative Agency',
    '"Website company profile-nya elegan banget, klien jadi langsung percaya begitu lihat. Dapet beberapa B2B deal cuma dari Google search."': '"The company profile website is very elegant, clients instantly trust it the moment they see it. Got several B2B deals just from Google search."',
    'Hendra Wijaya': 'Hendra Wijaya',
    'Direktur — PT Maju Bersama': 'Director — PT Maju Bersama',
    '"AI Customer Service ini beneran gila! Responnya secepat kilat, jam 2 pagi ada leads langsung dibalas otomatis dan closing paginya!"': '"This AI Customer Service is truly crazy! Lightning-fast response, at 2 AM a lead comes in and is automatically replied to, and closed by morning!"',
    'Harga Layanan': 'Pricing',
    'Investasi yang Sepadan': 'A Worthy Investment',
    'Pilih paket yang sesuai dengan kebutuhan bisnismu.': 'Choose a package that suits your business needs.',
    'Mulai Sekarang': 'Start Now',
    'Konsultasi Via WhatsApp': 'Consult via WhatsApp',
    'Paket Lengkap': 'Complete Package',
    'Custom Desain 5 Halaman': 'Custom Design 5 Pages',
    'Optimasi SEO Basic': 'Basic SEO Optimization',
    'Setup AI Sales Assistant': 'AI Sales Assistant Setup',
    'Training Prompt AI': 'AI Prompt Training',
    'Support 1 Bulan': '1 Month Support',
    'Free Domain & Hosting 1 Thn': 'Free Domain & Hosting 1 Yr',
    'Lebih Banyak Traffic, Lebih Banyak Closing': 'More Traffic, More Closing',
    'Dapatkan website canggih dan AI assistant sekarang juga.': 'Get an advanced website and AI assistant right now.'
}

for f in files:
    if not os.path.exists(f): continue
    with open(f, 'r', encoding='utf-8') as file:
        content = file.read()
    
    for id_text, en_text in translations.items():
        if f'class="lang-id">{id_text}' in content:
            continue
        # Also handle ampersands differently if they exist
        id_html = id_text.replace('&', '&amp;')
        en_html = en_text.replace('&', '&amp;')
        
        replacement = f'<span class="lang-id">{id_html}</span><span class="lang-en">{en_html}</span>'
        
        # Try both raw text and ampersand encoded text
        if id_text in content:
            content = content.replace(id_text, replacement)
        elif id_html in content:
            content = content.replace(id_html, replacement)
            
    with open(f, 'w', encoding='utf-8') as file:
        file.write(content)

print('Translation applied successfully!')
