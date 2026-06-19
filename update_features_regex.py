import re
import os

filepath_index = r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\index.html"
filepath_php = r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\front-page.php"

def process_file(filepath):
    if not os.path.exists(filepath): return
    with open(filepath, "r", encoding="utf-8") as f:
        content = f.read()

    # Change the testimonial robot image
    content = content.replace("assets/images/testimonial-robot.png", "assets/images/testimonial-robot-new.png")

    # The features swiper html to replace using regex
    # We want to replace from `<div class="relative group px-0 md:px-16 pb-8">`
    # up to the end of `<div class="features-pagination swiper-pagination !bottom-0"></div>` and the closing `</div>` tags.
    # It's easier to just match the outer `<div class="relative group px-0 md:px-16 pb-8">`
    
    new_features = """<div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-6 pb-8">
                        <!-- Feature 1 -->
                        <div class="bg-white border border-slate-100 rounded-[24px] p-8 shadow-sm hover:-translate-y-1 transition-transform">
                            <div class="w-12 h-12 bg-brand/10 text-brand rounded-full flex items-center justify-center mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-3">Auto Follow Up</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Secara otomatis mengirimkan pesan penawaran lanjutan/follow-up kepada pelanggan yang belum melakukan checkout agar terjadi closing.</p>
                        </div>
                        <!-- Feature 2 -->
                        <div class="bg-white border border-slate-100 rounded-[24px] p-8 shadow-sm hover:-translate-y-1 transition-transform">
                            <div class="w-12 h-12 bg-brand/10 text-brand rounded-full flex items-center justify-center mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-3">Rekam Database Otomatis</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Menyimpan otomatis informasi krusial pelanggan (nama, nomor telepon, produk yang diminati) langsung ke Google Sheet secara real-time.</p>
                        </div>
                        <!-- Feature 3 -->
                        <div class="bg-white border border-slate-100 rounded-[24px] p-8 shadow-sm hover:-translate-y-1 transition-transform">
                            <div class="w-12 h-12 bg-brand/10 text-brand rounded-full flex items-center justify-center mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-3">Fast Respon (&lt; 3 Detik)</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Merespon pembeli di bawah 3 detik dengan tingkat akurasi tinggi, mengurangi bounce rate chat secara maksimal.</p>
                        </div>
                  </div>"""

    pattern = re.compile(r'<div class="relative group px-0 md:px-16 pb-8">.*?<div class="features-pagination swiper-pagination !bottom-0"></div>\s*</div>\s*</div>', re.DOTALL)
    
    new_content, count = pattern.subn(new_features, content)
    
    if count > 0:
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(new_content)
        print(f"Success updating {filepath}! Replaced {count} times.")
    else:
        print(f"Regex didn't match in {filepath}")

process_file(filepath_index)
process_file(filepath_php)
