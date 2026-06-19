<?php get_header(); ?>
    <main>
      <!-- HERO SECTION -->
      <section id="home" class="relative pt-32 lg:pt-16 pb-20 lg:pb-36 overflow-hidden">
        <div class="blob bg-brand/10 w-[400px] h-[400px] -top-40 -left-20"></div>
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative">
          <div>
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-50/80 backdrop-blur-sm border border-brand/40 shadow-[0_2px_10px_rgba(37,99,235,0.15)] text-brand text-sm font-bold mb-6 animate-fade-in-up" style="animation-delay: 100ms;">
              <span class="w-2 h-2 rounded-full bg-brand animate-pulse shadow-[0_0_8px_rgba(37,99,235,0.8)]"></span>
              AI + Web untuk Bisnis Modern
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.05] animate-fade-in-up" style="animation-delay: 200ms;">
              Services Pembuatan <span class="text-brand">Website</span> dan <span class="text-brand">AI Sales</span>
            </h1>
            <p class="mt-6 text-lg text-muted-foreground max-w-lg animate-fade-in-up" style="animation-delay: 300ms;">
              Untuk bantu naikin rate penjualan pada bisnismu secara efisien — tanpa ribet, tanpa lembur.
            </p>
            <div class="mt-8 flex flex-wrap gap-3 animate-fade-in-up" style="animation-delay: 400ms;">
              <a href="https://wa.me/6281248654478" class="group inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-brand text-brand-foreground font-semibold hover:opacity-90 transition shadow-lg shadow-brand/20">
                <span>Direct WhatsApp</span>
                <svg class="w-4 h-4 shrink-0 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
              </a>
              <a href="https://wa.me/6281248654478?text=Halo,%20saya%20tertarik%20dengan%20layanan%20pembuatan%20website%20company%20profile%20dan%20AI%20Customer%20Service%20yang%20Anda%20tawarkan.%20Saya%20ingin%20berkonsultasi%20lebih%20lanjut%20mengenai%20kebutuhan%20bisnis%20saya." target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-border bg-background font-semibold hover:bg-muted transition">Konsultasi Sekarang</a>
            </div>
          </div>
          <div class="relative hidden md:flex items-center justify-center min-h-[600px]">
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <!-- Background circles -->
            <div class="absolute w-[480px] h-[480px] rounded-full bg-[#ebf3ff]"></div>
            <div class="absolute w-[400px] h-[400px] rounded-full bg-[#dbeafe]"></div>
            
            <!-- Dotted circle using SVG -->
            <svg class="absolute w-[320px] h-[320px]" viewBox="0 0 320 320">
              <circle cx="160" cy="160" r="159" fill="none" stroke="#2563eb" stroke-width="0.8" stroke-dasharray="4 6" opacity="0.5" />
            </svg>
            
            <!-- Main Robot Image -->
            <div class="relative w-full max-w-md z-10 animate-scale-in" style="animation-delay: 200ms;">
              <img src="https://nextscsale.vercel.app/assets/images/hero.png" alt="AI Customer Service" class="animate-float w-full drop-shadow-2xl" />
            </div>
            
            <!-- Orbit Badges (Logos) - Interactive & Floating -->
            <!-- 1. Lightning Bolt (Top Left) -->
            <div class="absolute z-20 animate-scale-in" style="animation-delay: 400ms; left: calc(50% - 250px); top: calc(50% - 200px); transform: translate(-50%, -50%);">
              <div class="animate-float-fast group cursor-pointer">
                <div class="w-[74px] h-[74px] rounded-full bg-white shadow-[0_8px_30px_rgb(0,0,0,0.06)] flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:-translate-y-1 group-hover:shadow-[0_15px_40px_rgb(37,99,235,0.2)] group-hover:border group-hover:border-brand/20">
                  <svg class="w-[34px] h-[34px] text-brand transition-transform duration-300 group-hover:scale-110" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                  </svg>
                </div>
              </div>
            </div>
            <!-- 2. Robot Face (Middle Left) -->
            <div class="absolute z-20 animate-scale-in" style="animation-delay: 500ms; left: calc(50% - 310px); top: calc(50% + 10px); transform: translate(-50%, -50%);">
              <div class="animate-float-medium group cursor-pointer">
                <div class="w-[74px] h-[74px] rounded-full bg-white shadow-[0_8px_30px_rgb(0,0,0,0.06)] flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:-translate-y-1 group-hover:shadow-[0_15px_40px_rgb(37,99,235,0.2)] group-hover:border group-hover:border-brand/20">
                  <svg class="w-[34px] h-[34px] text-brand transition-transform duration-300 group-hover:scale-110" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M12 8V4H8"/>
                    <rect width="16" height="12" x="4" y="8" rx="2"/>
                    <path d="M2 14h2"/>
                    <path d="M20 14h2"/>
                    <path d="M15 13v2"/>
                    <path d="M9 13v2"/>
                  </svg>
                </div>
              </div>
            </div>
            <!-- 3. Bar Chart (Bottom Left) -->
            <div class="absolute z-20 animate-scale-in" style="animation-delay: 600ms; left: calc(50% - 210px); top: calc(50% + 200px); transform: translate(-50%, -50%);">
              <div class="animate-float-slow group cursor-pointer">
                <div class="w-[74px] h-[74px] rounded-full bg-white shadow-[0_8px_30px_rgb(0,0,0,0.06)] flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:-translate-y-1 group-hover:shadow-[0_15px_40px_rgb(37,99,235,0.2)] group-hover:border group-hover:border-brand/20">
                  <svg class="w-[34px] h-[34px] text-brand transition-transform duration-300 group-hover:scale-110" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M3 3v18h18"/>
                    <path d="M18 17V9"/>
                    <path d="M13 17V5"/>
                    <path d="M8 17v-3"/>
                  </svg>
                </div>
              </div>
            </div>
            <!-- 4. Chat Bubble (Top Right) -->
            <div class="absolute z-20 animate-scale-in" style="animation-delay: 700ms; left: calc(50% + 190px); top: calc(50% - 200px); transform: translate(-50%, -50%);">
              <div class="animate-float-fast group cursor-pointer">
                <div class="w-[74px] h-[74px] rounded-full bg-white shadow-[0_8px_30px_rgb(0,0,0,0.06)] flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:-translate-y-1 group-hover:shadow-[0_15px_40px_rgb(37,99,235,0.2)] group-hover:border group-hover:border-brand/20">
                  <svg class="w-[34px] h-[34px] text-brand transition-transform duration-300 group-hover:scale-110" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/>
                  </svg>
                </div>
              </div>
            </div>
            <!-- 5. Spark/Star (Middle Right) -->
            <div class="absolute z-20 animate-scale-in" style="animation-delay: 800ms; left: calc(50% + 250px); top: calc(50% + 10px); transform: translate(-50%, -50%);">
              <div class="animate-float-medium group cursor-pointer">
                <div class="w-[74px] h-[74px] rounded-full bg-white shadow-[0_8px_30px_rgb(0,0,0,0.06)] flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:-translate-y-1 group-hover:shadow-[0_15px_40px_rgb(37,99,235,0.2)] group-hover:border group-hover:border-brand/20">
                  <svg class="w-[34px] h-[34px] text-brand transition-transform duration-300 group-hover:scale-110" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/>
                    <path d="M20 3v4"/>
                    <path d="M22 5h-4"/>
                    <circle cx="5" cy="19" r="1.5"/>
                  </svg>
                </div>
              </div>
            </div>
            <!-- 6. Globe (Bottom Right) -->
            <div class="absolute z-20 animate-scale-in" style="animation-delay: 900ms; left: calc(50% + 130px); top: calc(50% + 200px); transform: translate(-50%, -50%);">
              <div class="animate-float-slow group cursor-pointer">
                <div class="w-[74px] h-[74px] rounded-full bg-white shadow-[0_8px_30px_rgb(0,0,0,0.06)] flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:-translate-y-1 group-hover:shadow-[0_15px_40px_rgb(37,99,235,0.2)] group-hover:border group-hover:border-brand/20">
                  <svg class="w-[34px] h-[34px] text-brand transition-transform duration-300 group-hover:scale-110" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/>
                    <path d="M2 12h20"/>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PROBLEM SECTION -->
      <section id="problem" class="py-12">
        <div class="max-w-6xl mx-auto px-6">
          <div class="text-center max-w-2xl mx-auto mb-14">
            <h2 class="mt-2 text-3xl md:text-4xl font-bold">Masalah yang Ada pada Bisnismu</h2>
            <p class="mt-3 text-muted-foreground">Kami sering temui keluhan ini dari pemilik bisnis. Mungkin kamu juga mengalaminya?</p>
          </div>
          <div class="grid md:grid-cols-3 gap-6">
            <div class="group relative p-8 rounded-3xl bg-gradient-to-b from-white to-slate-50/50 border border-slate-200/80 shadow-[0_8px_30px_rgba(0,0,0,0.02)] hover:shadow-[0_20px_40px_rgba(37,99,235,0.06)] hover:border-brand/35 hover:-translate-y-1.5 transition-all duration-300">
              <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-soft to-brand/10 border border-brand/15 shadow-[0_4px_10px_rgba(37,99,235,0.06)] flex items-center justify-center mb-6">
                <svg class="w-7 h-7 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
              </div>
              <h3 class="text-xl font-bold mb-2">Chat Numpuk, Lambat Direspon</h3>
              <p class="text-muted-foreground leading-relaxed">Calon pembeli kabur karena CS kewalahan menjawab chat di jam sibuk maupun malam hari.</p>
            </div>
            <div class="group relative p-8 rounded-3xl bg-gradient-to-b from-white to-slate-50/50 border border-slate-200/80 shadow-[0_8px_30px_rgba(0,0,0,0.02)] hover:shadow-[0_20px_40px_rgba(37,99,235,0.06)] hover:border-brand/35 hover:-translate-y-1.5 transition-all duration-300" style="transition-delay: 120ms;">
              <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-soft to-brand/10 border border-brand/15 shadow-[0_4px_10px_rgba(37,99,235,0.06)] flex items-center justify-center mb-6">
                <svg class="w-7 h-7 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><line x1="3" x2="21" y1="9" y2="9"/><line x1="9" x2="9" y1="21" y2="9"/></svg>
              </div>
              <h3 class="text-xl font-bold mb-2">Belum Punya Website Profesional</h3>
              <p class="text-muted-foreground leading-relaxed">Bisnis terlihat kurang kredibel di mata calon klien karena tidak punya identitas online yang serius.</p>
            </div>
            <div class="group relative p-8 rounded-3xl bg-gradient-to-b from-white to-slate-50/50 border border-slate-200/80 shadow-[0_8px_30px_rgba(0,0,0,0.02)] hover:shadow-[0_20px_40px_rgba(37,99,235,0.06)] hover:border-brand/35 hover:-translate-y-1.5 transition-all duration-300" style="transition-delay: 240ms;">
              <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-soft to-brand/10 border border-brand/15 shadow-[0_4px_10px_rgba(37,99,235,0.06)] flex items-center justify-center mb-6">
                <svg class="w-7 h-7 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 17 13.5 8.5 8.5 13.5 2 7"/><polyline points="16 17 22 17 22 11"/></svg>
              </div>
              <h3 class="text-xl font-bold mb-2">Konversi Penjualan Rendah</h3>
              <p class="text-muted-foreground leading-relaxed">Banyak leads masuk tapi sedikit yang closing karena follow up tidak konsisten dan terlewat.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- SOLUTION SECTION -->
      <section id="solution" class="py-12">
        <div class="max-w-7xl mx-auto px-6">
          <div class="text-center max-w-2xl mx-auto mb-6">
            <h2 class="mt-2 text-3xl md:text-4xl font-bold">Solusi untuk Bisnismu</h2>
          </div>
          

          <div class="mb-16">
            <div class="text-center mb-8">
              <span class="inline-block px-4 py-1.5 rounded-full bg-brand text-brand-foreground text-sm font-semibold shadow-sm">AI Sebagai Solusi</span>
            </div>
            <div class="space-y-8">
              <!-- Solution Box 1 -->
              <div class="relative overflow-hidden bg-gradient-to-b from-white via-white to-slate-50/50 border border-slate-100/80 rounded-[32px] p-8 md:p-12 shadow-[0_8px_30px_rgba(0,0,0,0.01)] hover:shadow-[0_30px_60px_rgba(37,99,235,0.08)] hover:border-brand/35 hover:-translate-y-1.5 transition-all duration-500 ease-out">
                <!-- Top Accent Line -->
                <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-brand via-brand/50 to-transparent"></div>
                
                <div class="grid md:grid-cols-[1fr_auto_1fr] gap-8 md:gap-12 items-center">
                  <div class="space-y-4 md:order-1">
                    <div class="flex items-center gap-3">
                      <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-soft/90 backdrop-blur-md border border-brand/15 text-brand text-xs font-semibold shadow-sm">
                        <span class="relative flex h-2 w-2">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-brand"></span>
                        </span>
                        CS Aktif Nonstop
                      </span>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-extrabold tracking-tight text-slate-900">Tangani Chat 24/7</h3>
                    <div class="relative h-px w-full bg-slate-100 my-5">
                      <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-brand to-transparent"></div>
                    </div>
                    <p class="text-muted-foreground leading-relaxed">
                      AI Customer Service kami siap melayani pelanggan kapan pun mereka chat — pagi, siang, malam, bahkan hari libur. Tidak ada lagi chat yang terabaikan, tidak ada lagi peluang yang lepas hanya karena CS sedang offline. Setiap pesan masuk akan langsung dibalas secara natural dan relevan.
                    </p>
                    <div class="pt-6 border-t border-slate-100 flex flex-wrap items-center gap-3 text-[10px] font-bold tracking-wider text-slate-400 uppercase">
                      <span class="px-2.5 py-1.5 rounded-lg bg-slate-50/50 border border-slate-100/80">NextScale AI Engine</span>
                      <span class="px-2.5 py-1.5 rounded-lg bg-slate-50/50 border border-slate-100/80">Response Rate ~99.8%</span>
                    </div>
                  </div>
                  <!-- Vertical Line -->
                  <div class="hidden md:block w-px h-48 bg-gradient-to-b from-slate-100 via-slate-200 to-slate-100 md:order-2"></div>
                  <div class="relative flex items-center justify-center md:order-3">
                    <div class="absolute w-72 h-72 rounded-full bg-gradient-to-tr from-brand/20 to-brand/5 blur-3xl opacity-70 z-0"></div>
                    <img src="https://nextscsale.vercel.app/assets/images/chat-247.png" alt="Tangani Chat 24/7" class="relative w-full max-w-xs md:max-w-sm drop-shadow-[0_15px_30px_rgba(37,99,235,0.15)] animate-float" />
                  </div>
                </div>
              </div>

              <!-- Connecting Line with Center Dot -->
              <div class="flex flex-col items-center my-8">
                <div class="w-px h-8 bg-gradient-to-b from-brand/40 to-brand/10"></div>
                <div class="w-3.5 h-3.5 rounded-full border-2 border-brand/30 bg-background flex items-center justify-center shadow-lg shadow-brand/10">
                  <div class="w-1.5 h-1.5 rounded-full bg-brand animate-ping"></div>
                </div>
                <div class="w-px h-8 bg-gradient-to-b from-brand/10 to-brand/40"></div>
              </div>
              
              <!-- Solution Box 2 -->
              <div class="relative overflow-hidden bg-gradient-to-b from-white via-white to-slate-50/50 border border-slate-100/80 rounded-[32px] p-8 md:p-12 shadow-[0_8px_30px_rgba(0,0,0,0.01)] hover:shadow-[0_30px_60px_rgba(37,99,235,0.08)] hover:border-brand/35 hover:-translate-y-1.5 transition-all duration-500 ease-out">
                <!-- Top Accent Line -->
                <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-brand via-brand/50 to-transparent"></div>
                
                <div class="grid md:grid-cols-[1fr_auto_1fr] gap-8 md:gap-12 items-center">
                  <div class="relative flex items-center justify-center md:order-1">
                    <div class="absolute w-72 h-72 rounded-full bg-gradient-to-tr from-brand/20 to-brand/5 blur-3xl opacity-70 z-0"></div>
                    <img src="https://nextscsale.vercel.app/assets/images/consultant.png" alt="Hadir Sebagai Konsultan" class="relative w-full max-w-xs md:max-w-sm drop-shadow-[0_15px_30px_rgba(37,99,235,0.15)] animate-float" />
                  </div>
                  <!-- Vertical Line -->
                  <div class="hidden md:block w-px h-48 bg-gradient-to-b from-slate-100 via-slate-200 to-slate-100 md:order-2"></div>
                  <div class="space-y-4 md:order-3">
                    <div class="flex items-center gap-3">
                      <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-soft/90 backdrop-blur-md border border-brand/15 text-brand text-xs font-semibold shadow-sm">
                        <span class="relative flex h-2 w-2">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-brand"></span>
                        </span>
                        Konsultan AI
                      </span>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-extrabold tracking-tight text-slate-900">Hadir Sebagai Konsultan</h3>
                    <div class="relative h-px w-full bg-slate-100 my-5">
                      <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-brand to-transparent"></div>
                    </div>
                    <p class="text-muted-foreground leading-relaxed">
                      Lebih dari sekadar membalas pesan, AI kami dilatih untuk memahami produk, kebutuhan calon pembeli, dan menjadi konsultan yang membantu mereka mengambil keputusan. Hasilnya, percakapan terasa personal, profesional, dan berakhir dengan closing — bukan sekadar tanya-tanya.
                    </p>
                    <div class="pt-6 border-t border-slate-100 flex flex-wrap items-center gap-3 text-[10px] font-bold tracking-wider text-slate-400 uppercase">
                      <span class="px-2.5 py-1.5 rounded-lg bg-slate-50/50 border border-slate-100/80">Knowledge Base SOP</span>
                      <span class="px-2.5 py-1.5 rounded-lg bg-slate-50/50 border border-slate-100/80">Context Aware NLP</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>           </div>
            </div>
            
            <div class="mt-24 mb-16 max-w-5xl mx-auto w-full px-4 md:px-0">
              <div class="bg-white border-[3px] border-brand rounded-[32px] p-8 md:p-12 lg:p-14 shadow-[0_15px_45px_rgba(37,99,235,0.04)] w-full">
                <div class="w-full mx-auto">
                  <div class="text-center mb-8">
                    <h3 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">Fitur Unggulan <span class="text-brand">AI</span></h3>
                  </div>
                  <div class="relative group px-0 md:px-12 pb-8">
                    <div class="swiper features-swiper relative pt-6 pb-16">
                      <div class="swiper-wrapper">
                        <!-- Feature 1 -->
                        <div class="swiper-slide h-auto">
                          <div class="bg-white border border-brand/30 rounded-[24px] p-8 shadow-sm hover:-translate-y-1 transition-transform h-full">
                            <div class="w-14 h-14 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center mb-6">
                              <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-3">Auto Follow Up</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">AI otomatis menindaklanjuti calon pembeli yang belum closing.</p>
                          </div>
                        </div>
                        <!-- Feature 2 -->
                        <div class="swiper-slide h-auto">
                          <div class="bg-white border border-brand/30 rounded-[24px] p-8 shadow-sm hover:-translate-y-1 transition-transform h-full">
                            <div class="w-14 h-14 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center mb-6">
                              <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path><path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-3">Memiliki Database</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Semua percakapan dan data pelanggan tersimpan rapi.</p>
                          </div>
                        </div>
                        <!-- Feature 3 -->
                        <div class="swiper-slide h-auto">
                          <div class="bg-white border border-brand/30 rounded-[24px] p-8 shadow-sm hover:-translate-y-1 transition-transform h-full">
                            <div class="w-14 h-14 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center mb-6">
                              <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-3">Fast Respon</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Balas chat dalam hitungan detik, 24/7 tanpa menunggu.</p>
                          </div>
                        </div>
                        <!-- Feature 4 -->
                        <div class="swiper-slide h-auto">
                          <div class="bg-white border border-brand/30 rounded-[24px] p-8 shadow-sm hover:-translate-y-1 transition-transform h-full">
                            <div class="w-14 h-14 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center mb-6">
                              <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="10" rx="2"></rect><circle cx="12" cy="5" r="2"></circle><path d="M12 7v4M8 15h.01M16 15h.01M9 18h6"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-3">Konsultan Pintar</h4>
                            <p class="text-slate-600 leading-relaxed text-sm">Menjawab layaknya manusia, bukan template robot yang kaku.</p>
                          </div>
                        </div>
                      </div>
                      <!-- Features Pagination -->
                      <div class="features-pagination swiper-pagination !bottom-0"></div>
                    </div>
                    
                    <!-- Navigation Buttons -->
                    <button class="elegant-nav-btn features-prev -left-2 md:-left-6 lg:-left-8 hidden md:flex group/btn" aria-label="Sebelumnya">
                      <svg class="w-5 h-5 transition-transform duration-300 group-hover/btn:-translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button class="elegant-nav-btn features-next -right-2 md:-right-6 lg:-right-8 hidden md:flex group/btn" aria-label="Selanjutnya">
                      <svg class="w-5 h-5 transition-transform duration-300 group-hover/btn:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                    </button>


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
          <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="flex justify-center mb-5">
              <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-50/80 backdrop-blur-sm border border-brand/20 text-brand text-xs font-bold uppercase tracking-widest shadow-sm">
                Testimoni
              </span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight mb-4">Apa Kata Mereka</h2>
            <p class="text-slate-500 text-base md:text-lg font-medium leading-relaxed max-w-2xl mx-auto">Cerita nyata dari para pemilik bisnis yang sudah membuktikan langsung bagaimana sistem kami membantu meningkatkan sales mereka.</p>
          </div>
          <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-center">
            <!-- Asset Exact from source -->
            <div class="lg:col-span-5 relative hidden md:flex items-center justify-end pr-0">
              <!-- Soft blue radial glow behind robot -->
              <div class="absolute w-72 h-72 bg-blue-400/20 rounded-full blur-[80px] pointer-events-none z-0"></div>
              <img src="https://nextscsale.vercel.app/assets/images/testimonial-robot-new.png" alt="Testimonial" class="relative z-10 w-[55%] md:w-[60%] lg:w-[65%] max-w-[280px] md:max-w-[320px] object-contain animate-float drop-shadow-[0_15px_30px_rgba(37,99,235,0.15)]" />
            </div>
            <div class="lg:col-span-7 relative px-0 md:px-4 min-w-0 w-full">
              <div class="w-full min-w-0 max-w-[520px] md:max-w-[600px] mx-auto relative group px-0 md:px-10">
                <div class="swiper testimony-swiper pt-4 pb-16">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide h-auto">
                      <div class="relative rounded-[28px] bg-blue-600 shadow-[0_15px_40px_rgba(37,99,235,0.18)] overflow-hidden h-full flex flex-col justify-between border border-blue-500/30 transition-transform duration-300 hover:-translate-y-1 p-8 md:p-10">
                        <div class="relative">
                          <!-- Top Row: Quote and Stars -->
                          <div class="flex items-center justify-between mb-6">
                            <!-- White Double Quote Icon -->
                            <svg class="w-10 h-10 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                              <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                            <!-- 5 Yellow Stars -->
                            <div class="flex items-center gap-1">
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                          </div>
                          <!-- Testimonial Text -->
                          <p class="text-[16px] md:text-[17px] lg:text-[18px] font-medium leading-relaxed min-h-[100px] md:min-h-[110px] text-white">
                            "Website company profile-nya elegan banget, klien jadi langsung percaya begitu lihat. Dapet beberapa B2B deal cuma dari Google search."
                          </p>
                        </div>
                        <!-- Thin Divider Line -->
                        <div class="w-full border-t border-white/20 my-6"></div>
                        <!-- User Profile Stack -->
                        <div class="flex items-center gap-4">
                          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=120&h=120&q=80" alt="Sarah Putri" class="w-12 h-12 rounded-full object-cover border-2 border-white/30 shadow-sm" />
                          <div>
                            <div class="font-bold text-[16px] text-white">Sarah Putri</div>
                            <div class="text-sm text-blue-100/80 font-medium">Founder — Glow Skincare</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide h-auto">
                      <div class="relative rounded-[28px] bg-blue-600 shadow-[0_15px_40px_rgba(37,99,235,0.18)] overflow-hidden h-full flex flex-col justify-between border border-blue-500/30 transition-transform duration-300 hover:-translate-y-1 p-8 md:p-10">
                        <div class="relative">
                          <!-- Top Row: Quote and Stars -->
                          <div class="flex items-center justify-between mb-6">
                            <!-- White Double Quote Icon -->
                            <svg class="w-10 h-10 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                              <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                            <!-- 5 Yellow Stars -->
                            <div class="flex items-center gap-1">
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                          </div>
                          <!-- Testimonial Text -->
                          <p class="text-[16px] md:text-[17px] lg:text-[18px] font-medium leading-relaxed min-h-[100px] md:min-h-[110px] text-white">
                            "AI Customer Service ini beneran gila! Responnya secepat kilat, jam 2 pagi ada leads langsung dibalas otomatis dan closing paginya!"
                          </p>
                        </div>
                        <!-- Thin Divider Line -->
                        <div class="w-full border-t border-white/20 my-6"></div>
                        <!-- User Profile Stack -->
                        <div class="flex items-center gap-4">
                          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=120&h=120&q=80" alt="Budi Santoso" class="w-12 h-12 rounded-full object-cover border-2 border-white/30 shadow-sm" />
                          <div>
                            <div class="font-bold text-[16px] text-white">Budi Santoso</div>
                            <div class="text-sm text-blue-100/80 font-medium">Owner — Gadget Hub</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide h-auto">
                      <div class="relative rounded-[28px] bg-blue-600 shadow-[0_15px_40px_rgba(37,99,235,0.18)] overflow-hidden h-full flex flex-col justify-between border border-blue-500/30 transition-transform duration-300 hover:-translate-y-1 p-8 md:p-10">
                        <div class="relative">
                          <!-- Top Row: Quote and Stars -->
                          <div class="flex items-center justify-between mb-6">
                            <!-- White Double Quote Icon -->
                            <svg class="w-10 h-10 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                              <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                            <!-- 5 Yellow Stars -->
                            <div class="flex items-center gap-1">
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                          </div>
                          <!-- Testimonial Text -->
                          <p class="text-[16px] md:text-[17px] lg:text-[18px] font-medium leading-relaxed min-h-[100px] md:min-h-[110px] text-white">
                            "Dulu kewalahan bales chat tanya alamat sama menu, sekarang AI yang handle. Penjualan naik 35% karena respon instan!"
                          </p>
                        </div>
                        <!-- Thin Divider Line -->
                        <div class="w-full border-t border-white/20 my-6"></div>
                        <!-- User Profile Stack -->
                        <div class="flex items-center gap-4">
                          <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=120&h=120&q=80" alt="Andi Pratama" class="w-12 h-12 rounded-full object-cover border-2 border-white/30 shadow-sm" />
                          <div>
                            <div class="font-bold text-[16px] text-white">Andi Pratama</div>
                            <div class="text-sm text-blue-100/80 font-medium">CEO — Auto Rent</div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide h-auto">
                      <div class="relative rounded-[28px] bg-blue-600 shadow-[0_15px_40px_rgba(37,99,235,0.18)] overflow-hidden h-full flex flex-col justify-between border border-blue-500/30 transition-transform duration-300 hover:-translate-y-1 p-8 md:p-10">
                        <div class="relative">
                          <!-- Top Row: Quote and Stars -->
                          <div class="flex items-center justify-between mb-6">
                            <!-- White Double Quote Icon -->
                            <svg class="w-10 h-10 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                              <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                            <!-- 5 Yellow Stars -->
                            <div class="flex items-center gap-1">
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                              <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                          </div>
                          <!-- Testimonial Text -->
                          <p class="text-[16px] md:text-[17px] lg:text-[18px] font-medium leading-relaxed min-h-[100px] md:min-h-[110px] text-white">
                            "Gak perlu lagi sewa banyak CS, robot AI ini paham semua knowledge produk dan bisa handle ratusan chat bersamaan tanpa salah."
                          </p>
                        </div>
                        <!-- Thin Divider Line -->
                        <div class="w-full border-t border-white/20 my-6"></div>
                        <!-- User Profile Stack -->
                        <div class="flex items-center gap-4">
                          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=120&h=120&q=80" alt="Hendra Wijaya" class="w-12 h-12 rounded-full object-cover border-2 border-white/30 shadow-sm" />
                          <div>
                            <div class="font-bold text-[16px] text-white">Hendra Wijaya</div>
                            <div class="text-sm text-blue-100/80 font-medium">Marketing Director — Auto Parts</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Testimony Pagination -->
                  <div class="testimony-pagination swiper-pagination !bottom-4"></div>
                </div>
                <button class="elegant-nav-btn testimony-prev -left-2 md:-left-6 lg:-left-8 hidden md:flex group/btn" aria-label="Sebelumnya">
                  <svg class="w-5 h-5 transition-transform duration-300 group-hover/btn:-translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button class="elegant-nav-btn testimony-next -right-2 md:-right-6 lg:-right-8 hidden md:flex group/btn" aria-label="Selanjutnya">
                  <svg class="w-5 h-5 transition-transform duration-300 group-hover/btn:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                </button>
              </div>
            </div>
      </section>

      <!-- WEBSITE SOLUTION SECTION -->
      <section id="website-solution" class="py-12 md:py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Bangun Identitas Digital Profesional</h2>
            <span class="inline-block px-4 py-1.5 rounded-full bg-brand text-brand-foreground text-sm font-semibold shadow-sm">Website Sebagai Solusi</span>
          </div>
          
          <div class="space-y-8">
            <!-- Web Box 1 -->
            <div class="relative overflow-hidden bg-gradient-to-b from-white via-white to-slate-50/50 border border-slate-100/80 rounded-[32px] p-8 md:p-12 shadow-[0_8px_30px_rgba(0,0,0,0.01)] hover:shadow-[0_30px_60px_rgba(37,99,235,0.08)] hover:border-brand/35 hover:-translate-y-1.5 transition-all duration-500 ease-out">
              <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-brand via-brand/50 to-transparent"></div>
              
              <div class="grid md:grid-cols-[1fr_auto_1fr] gap-8 md:gap-12 items-center">
                <div class="space-y-4 md:order-1">
                  <div class="flex items-center gap-3">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-soft/90 backdrop-blur-md border border-brand/15 text-brand text-xs font-semibold shadow-sm">
                      Kredibilitas Brand
                    </span>
                  </div>
                  <h3 class="text-2xl md:text-3xl font-extrabold tracking-tight text-slate-900">Naikin Trust dan Brand Bisnismu</h3>
                  <div class="relative h-px w-full bg-slate-100 my-5">
                    <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-brand to-transparent"></div>
                  </div>
                  <p class="text-muted-foreground leading-relaxed">
                    Website company profile yang dirancang dengan desain modern dan profesional akan langsung meningkatkan persepsi calon klien terhadap bisnismu. Mereka akan melihat brand kamu sebagai sesuatu yang serius, terpercaya, dan layak untuk diajak bekerja sama dalam jangka panjang.
                  </p>
                  <div class="pt-6 border-t border-slate-100 flex flex-wrap items-center gap-2 text-[10px] md:text-[11px] font-bold tracking-wider text-slate-500 uppercase">
                    <span class="px-2.5 py-1.5 rounded-lg bg-slate-50/50 border border-slate-100/80">Desain Premium</span>
                    <span class="px-2.5 py-1.5 rounded-lg bg-slate-50/50 border border-slate-100/80">Mobile Responsive</span>
                    <span class="px-2.5 py-1.5 rounded-lg bg-slate-50/50 border border-slate-100/80">Fast Loading</span>
                    <span class="px-2.5 py-1.5 rounded-lg bg-slate-50/50 border border-slate-100/80">Copywriting</span>
                    <span class="px-2.5 py-1.5 rounded-lg bg-slate-50/50 border border-slate-100/80">UI/UX Modern</span>
                  </div>
                </div>
                <!-- Vertical Line -->
                <div class="hidden md:block w-px h-48 bg-gradient-to-b from-slate-100 via-slate-200 to-slate-100 md:order-2"></div>
                <div class="relative flex items-center justify-center md:order-3">
                  <div class="absolute w-72 h-72 rounded-full bg-gradient-to-tr from-brand/20 to-brand/5 blur-3xl opacity-70 z-0"></div>
                  <img src="https://nextscsale.vercel.app/assets/images/trust-brand.png" alt="Naikin Trust" class="relative w-full max-w-xs md:max-w-sm drop-shadow-[0_15px_30px_rgba(37,99,235,0.15)] animate-float" />
                </div>
              </div>
            </div>

            <!-- Connecting Line with Center Dot -->
            <div class="flex flex-col items-center my-8">
              <div class="w-px h-8 bg-gradient-to-b from-brand/40 to-brand/10"></div>
              <div class="w-3.5 h-3.5 rounded-full border-2 border-brand/30 bg-background flex items-center justify-center shadow-lg shadow-brand/10">
                <div class="w-1.5 h-1.5 rounded-full bg-brand animate-ping"></div>
              </div>
              <div class="w-px h-8 bg-gradient-to-b from-brand/10 to-brand/40"></div>
            </div>

            <!-- Web Box 2 -->
            <div class="relative overflow-hidden bg-gradient-to-b from-white via-white to-slate-50/50 border border-slate-100/80 rounded-[32px] p-8 md:p-12 shadow-[0_8px_30px_rgba(0,0,0,0.01)] hover:shadow-[0_30px_60px_rgba(37,99,235,0.08)] hover:border-brand/35 hover:-translate-y-1.5 transition-all duration-500 ease-out">
              <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-brand via-brand/50 to-transparent"></div>
              <div class="grid md:grid-cols-[1fr_auto_1fr] gap-8 md:gap-12 items-center">
                <div class="relative flex items-center justify-center md:order-1">
                  <div class="absolute w-72 h-72 rounded-full bg-gradient-to-tr from-brand/20 to-brand/5 blur-3xl opacity-70 z-0"></div>
                  <img src="https://nextscsale.vercel.app/assets/images/seo-found.png" alt="Mudah Ditemukan" class="relative w-full max-w-xs md:max-w-sm drop-shadow-[0_15px_30px_rgba(37,99,235,0.15)] animate-float" />
                </div>
                <!-- Vertical Line -->
                <div class="hidden md:block w-px h-48 bg-gradient-to-b from-slate-100 via-slate-200 to-slate-100 md:order-2"></div>
                <div class="space-y-4 md:order-3">
                  <div class="flex items-center gap-3">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-soft/90 backdrop-blur-md border border-brand/15 text-brand text-xs font-semibold shadow-sm">
                      SEO &amp; Traffic
                    </span>
                  </div>
                  <h3 class="text-2xl md:text-3xl font-extrabold tracking-tight text-slate-900">Mudah Ditemukan di Google</h3>
                  <div class="relative h-px w-full bg-slate-100 my-5">
                    <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-brand to-transparent"></div>
                  </div>
                  <p class="text-muted-foreground leading-relaxed">
                    Kami bangun website yang sudah dioptimasi SEO sejak awal, sehingga calon pelangganmu bisa menemukan bisnismu di Google ketika mereka mencari produk atau jasa yang relevan. Trafik organik mengalir, leads bertambah, tanpa harus terus-menerus bayar iklan.
                  </p>
                  <div class="pt-6 border-t border-slate-100 flex flex-wrap items-center gap-2 text-[10px] md:text-[11px] font-bold tracking-wider text-slate-500 uppercase">
                    <span class="px-2.5 py-1.5 rounded-lg bg-slate-50/50 border border-slate-100/80">SEO On-Page</span>
                    <span class="px-2.5 py-1.5 rounded-lg bg-slate-50/50 border border-slate-100/80">Meta Tags</span>
                    <span class="px-2.5 py-1.5 rounded-lg bg-slate-50/50 border border-slate-100/80">Google Analytics</span>
                    <span class="px-2.5 py-1.5 rounded-lg bg-slate-50/50 border border-slate-100/80">Fast Indexing</span>
                    <span class="px-2.5 py-1.5 rounded-lg bg-slate-50/50 border border-slate-100/80">Sitemap XML</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PRICING SECTION -->
      <section id="price" class="py-12 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 relative">
          <!-- Subtle blue glow behind title -->
          <div class="absolute top-[-30px] left-1/2 -translate-x-1/2 w-72 h-32 bg-brand/10 rounded-full blur-[60px] pointer-events-none z-0"></div>
          <div class="text-center max-w-2xl mx-auto mb-14 relative z-10">
            <h2 class="mt-2 text-3xl md:text-4xl font-bold text-slate-900">Investasi yang Sepadan</h2>
          </div>
          <div class="rounded-3xl p-[4px] bg-gradient-to-br from-blue-500 via-brand to-purple-500 max-w-2xl mx-auto shadow-[0_20px_50px_rgba(37,99,235,0.15)] relative z-10 transform hover:-translate-y-2 transition-all duration-500">
            <div class="rounded-[20px] bg-white text-slate-900 p-6 md:p-10 relative overflow-hidden shiny-card">
              <div class="flex items-center justify-between flex-wrap gap-4 relative z-10">
                <div>
                  <div class="text-sm font-bold text-brand tracking-wider uppercase">Paket Lengkap</div>
                  <div class="mt-1 text-base text-slate-500 font-medium">Website + AI Customer Service</div>
                </div>
                <span class="px-5 py-2 text-sm font-bold rounded-full bg-brand/10 text-brand shadow-sm">Paling Populer & Best Value</span>
              </div>
              
              <div class="mt-8 pb-8 border-b border-slate-200 relative z-10">
                <div class="text-sm text-slate-500 font-medium">Investasi mulai dari</div>
                <div class="flex items-baseline gap-2 mt-2">
                  <span class="text-5xl md:text-7xl font-extrabold text-slate-900">4 Juta</span>
                  <span class="text-slate-500 font-medium">/ paket</span>
                </div>
              </div>
              
              <ul class="mt-8 grid sm:grid-cols-2 gap-x-8 gap-y-5 relative z-10">
                <?php 
                $features = [
                    "Domain dan Hosting 1 Tahun",
                    "Full halaman design Website sesuai fungsi",
                    "6 Bulan hosting server AI",
                    "Full Training AI Sales/CS sesuai SOP",
                    "Setup AI sesuai dengan sistem bisnismu",
                    "Full Maintenance Website dan AI",
                    "Optimasi SEO",
                    "Support 24/7 dari Tim Kami"
                ];
                foreach($features as $feature): ?>
                <li class="flex items-start gap-4">
                  <div class="mt-0.5 w-6 h-6 rounded-full bg-brand text-white grid place-items-center shrink-0 shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                  </div>
                  <span class="text-slate-700 font-medium"><?php echo esc_html($feature); ?></span>
                </li>
                <?php endforeach; ?>
              </ul>
              
              <div class="mt-12 relative z-10">
                <a href="https://wa.me/6281248654478" class="w-full group inline-flex items-center justify-center gap-2 px-6 py-5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-bold text-[17px] shadow-[0_10px_25px_rgba(37,99,235,0.4)] hover:shadow-[0_15px_35px_rgba(37,99,235,0.6)] hover:scale-[1.02] transition-all duration-300">
                  <span class="text-center">Chat di WhatsApp Sekarang</span>
                  <svg class="w-5 h-5 shrink-0 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
