import re
import os

filepath_index = r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\index.html"
filepath_php = r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\front-page.php"

def process_file(filepath):
    if not os.path.exists(filepath): return
    with open(filepath, "r", encoding="utf-8") as f:
        content = f.read()

    # The features grid html to replace using regex
    # It starts with <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-6 pb-8">
    # and ends with </div> right before </div>\n                </div>\n              </div>\n            </div>
    
    new_features = """<div class="relative group px-0 md:px-16 pb-8">
                    <div class="swiper features-swiper relative pt-6 pb-16">
                      <div class="swiper-wrapper">
                        <!-- Feature 1 -->
                        <div class="swiper-slide h-auto">
                          <div class="bg-white border border-slate-100 rounded-[24px] p-8 shadow-sm hover:-translate-y-1 transition-transform h-full">
                            <div class="w-12 h-12 bg-brand/10 text-brand rounded-full flex items-center justify-center mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-3">Auto Follow Up</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Secara otomatis mengirimkan pesan penawaran lanjutan/follow-up kepada pelanggan yang belum melakukan checkout agar terjadi closing.</p>
                          </div>
                        </div>
                        <!-- Feature 2 -->
                        <div class="swiper-slide h-auto">
                          <div class="bg-white border border-slate-100 rounded-[24px] p-8 shadow-sm hover:-translate-y-1 transition-transform h-full">
                            <div class="w-12 h-12 bg-brand/10 text-brand rounded-full flex items-center justify-center mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-3">Rekam Database Otomatis</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Menyimpan otomatis informasi krusial pelanggan (nama, nomor telepon, produk yang diminati) langsung ke Google Sheet secara real-time.</p>
                          </div>
                        </div>
                        <!-- Feature 3 -->
                        <div class="swiper-slide h-auto">
                          <div class="bg-white border border-slate-100 rounded-[24px] p-8 shadow-sm hover:-translate-y-1 transition-transform h-full">
                            <div class="w-12 h-12 bg-brand/10 text-brand rounded-full flex items-center justify-center mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-3">Respon Super Cepat</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Merespon pembeli di bawah 3 detik dengan tingkat akurasi tinggi, mengurangi bounce rate chat secara maksimal.</p>
                          </div>
                        </div>
                        <!-- Feature 4 -->
                        <div class="swiper-slide h-auto">
                          <div class="bg-white border border-slate-100 rounded-[24px] p-8 shadow-sm hover:-translate-y-1 transition-transform h-full">
                            <div class="w-12 h-12 bg-brand/10 text-brand rounded-full flex items-center justify-center mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-3">Blast Pesan Massal</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Mengirimkan pesan promosi ke ratusan atau ribuan database secara bersamaan hanya dengan sekali klik tanpa nomor terblokir.</p>
                          </div>
                        </div>
                      </div>
                      <!-- Features Pagination -->
                      <div class="features-pagination swiper-pagination !bottom-0"></div>
                    </div>
                    
                    <!-- Navigation Buttons -->
                    <button class="elegant-nav-btn features-prev -left-4 md:-left-2 group/btn" aria-label="Sebelumnya">
                      <svg class="w-5 h-5 transition-transform duration-300 group-hover/btn:-translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button class="elegant-nav-btn features-next -right-4 md:-right-2 group/btn" aria-label="Selanjutnya">
                      <svg class="w-5 h-5 transition-transform duration-300 group-hover/btn:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                  </div>"""

    pattern = re.compile(r'<div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-6 pb-8">.*?<p class="text-slate-600 leading-relaxed text-sm">Merespon pembeli di bawah 3 detik dengan tingkat akurasi tinggi, mengurangi bounce rate chat secara maksimal.</p>\s*</div>\s*</div>', re.DOTALL)
    
    new_content, count = pattern.subn(new_features, content)
    
    # Also update the robot testimonial image to add the drop shadow class so it matches the other images
    # find: class="relative z-10 w-[80%] object-contain animate-float"
    # replace with: class="relative z-10 w-[80%] object-contain animate-float drop-shadow-[0_15px_30px_rgba(37,99,235,0.15)]"
    new_content = new_content.replace('class="relative z-10 w-[80%] object-contain animate-float"', 'class="relative z-10 w-[80%] object-contain animate-float drop-shadow-[0_15px_30px_rgba(37,99,235,0.15)]"')
    
    if count > 0:
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(new_content)
        print(f"Success updating {filepath}! Replaced {count} times.")
    else:
        print(f"Regex didn't match in {filepath}")

process_file(filepath_index)
process_file(filepath_php)
