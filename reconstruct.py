import re
import os

filepath = r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\front-page.php"
with open(filepath, "r", encoding="utf-8") as f:
    content = f.read()

features_html = """                      <div class="swiper-wrapper">
                        <!-- Feature 1 -->
                        <div class="swiper-slide h-auto">
                          <div class="bg-white border border-slate-100 rounded-[24px] p-8 shadow-sm h-full hover:-translate-y-1 transition-transform">
                            <div class="w-12 h-12 bg-brand/10 text-brand rounded-full flex items-center justify-center text-xl mb-6">🚀</div>
                            <h4 class="text-lg font-bold text-slate-900 mb-3">Auto Follow Up</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Secara otomatis mengirimkan pesan penawaran lanjutan/follow-up kepada pelanggan yang belum melakukan checkout agar terjadi closing.</p>
                          </div>
                        </div>
                        <!-- Feature 2 -->
                        <div class="swiper-slide h-auto">
                          <div class="bg-white border border-slate-100 rounded-[24px] p-8 shadow-sm h-full hover:-translate-y-1 transition-transform">
                            <div class="w-12 h-12 bg-brand/10 text-brand rounded-full flex items-center justify-center text-xl mb-6">📊</div>
                            <h4 class="text-lg font-bold text-slate-900 mb-3">Rekam Database Otomatis</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Menyimpan otomatis informasi krusial pelanggan (nama, nomor telepon, produk yang diminati) langsung ke Google Sheet secara real-time.</p>
                          </div>
                        </div>
                        <!-- Feature 3 -->
                        <div class="swiper-slide h-auto">
                          <div class="bg-white border border-slate-100 rounded-[24px] p-8 shadow-sm h-full hover:-translate-y-1 transition-transform">
                            <div class="w-12 h-12 bg-brand/10 text-brand rounded-full flex items-center justify-center text-xl mb-6">⚡</div>
                            <h4 class="text-lg font-bold text-slate-900 mb-3">Fast Respon (&lt; 3 Detik)</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Merespon pembeli di bawah 3 detik dengan tingkat akurasi tinggi, mengurangi bounce rate chat secara maksimal.</p>
                          </div>
                        </div>
                      </div>
                      <div class="features-pagination swiper-pagination !bottom-0"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- TESTIMONY SECTION -->
      <section id="testimony" class="py-24 md:py-32 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
          <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold">Apa Kata Mereka?</h2>
          </div>
          <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-center">
            <!-- Asset Exact from source -->
            <div class="lg:col-span-5 relative h-[420px] md:h-[480px] hidden md:flex items-center justify-center">
              <div class="absolute inset-0 bg-gradient-to-br from-brand/20 to-blue-400/20 rounded-[40px] rotate-3 scale-105"></div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-robot.png" alt="Testimonial" class="relative z-10 w-[80%] object-contain animate-float" />
            </div>
            <div class="lg:col-span-7 relative px-0 md:px-4 group">
              <div class="swiper testimony-swiper pt-4 pb-16">
                <div class="swiper-wrapper">"""

start_str = '<div class="swiper features-swiper relative pt-6 pb-16">\n                      <div class="swiper-wrapper">\n'
end_str = '                <!-- Testimony Pagination -->\n                <div class="testimony-pagination swiper-pagination !bottom-4"></div>'

try:
    if start_str in content and end_str in content:
        prefix, rest = content.split(start_str, 1)
        testimonials_and_more, suffix = rest.split(end_str, 1)
        
        idx = testimonials_and_more.rfind("</div>")
        if idx != -1:
            testimonials = testimonials_and_more[:idx].strip()
        else:
            testimonials = testimonials_and_more.strip()

        new_content = prefix + start_str + features_html + "\n" + testimonials + "\n                </div>\n" + end_str + suffix
        
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(new_content)
        print("Success fixing front-page.php!")
    else:
        print("Strings not found in front-page.php!")
except Exception as e:
    print("Error:", e)
