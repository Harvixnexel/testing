    <!-- =============================================================== -->
    <!-- BAGIAN FOOTER (KAKI WEBSITE) -->
    <!-- Logo bawah, Hak Cipta, dan script tambahan ada di file ini -->
    <!-- =============================================================== -->
    <footer class="border-t border-border bg-muted/40">
      <div class="max-w-6xl mx-auto px-6 py-14 grid md:grid-cols-3 gap-10">
        <div>
          <div class="flex items-center gap-2 mb-3">
            <span class="grid place-items-center w-9 h-9 rounded-full bg-brand text-brand-foreground font-bold">N</span>
            <span class="font-display font-bold text-lg"><?php bloginfo('name'); ?></span>
          </div>
          <p class="text-base text-muted-foreground max-w-xs">Jasa pembuatan website company profile & AI Customer Service WhatsApp untuk bantu bisnismu naik kelas.</p>
        </div>
        <div>
          <div class="font-semibold mb-3 text-lg">Navigasi</div>
          <ul class="space-y-2 text-base">
            <li><a href="#solution" class="text-muted-foreground hover:text-brand">Solusi AI</a></li>
            <li><a href="#problem" class="text-muted-foreground hover:text-brand">Solusi Web</a></li>
            <li><a href="#testimony" class="text-muted-foreground hover:text-brand">Testimoni</a></li>
          </ul>
        </div>
        <div>
          <div class="font-semibold mb-3 text-lg">Social Media</div>
          <div class="flex gap-3">
            <a href="#" class="w-10 h-10 grid place-items-center rounded-xl border border-border hover:border-brand hover:text-brand">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="5"></rect><circle cx="12" cy="12" r="4"></circle><circle cx="17.5" cy="6.5" r="1" fill="currentColor"></circle></svg>
            </a>
            <a href="#" class="w-10 h-10 grid place-items-center rounded-xl border border-border hover:border-brand hover:text-brand">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/></svg>
            </a>
          </div>
        </div>
      </div>
      <div class="border-t border-border py-5 text-center text-sm text-muted-foreground">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</div>
    </footer>

    <!-- WHATSAPP FLOATING BUTTON -->
    <a href="https://wa.me/6281248654478" target="_blank" rel="noopener noreferrer" class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full bg-whatsapp text-white grid place-items-center shadow-xl shadow-whatsapp/40 hover:scale-110 transition-transform">
      <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 3.5A11.8 11.8 0 0 0 12 0C5.4 0 0 5.4 0 12c0 2.1.6 4.2 1.6 6L0 24l6.2-1.6A12 12 0 0 0 12 24c6.6 0 12-5.4 12-12 0-3.2-1.2-6.2-3.5-8.5zM12 22c-1.8 0-3.6-.5-5.2-1.4l-.4-.2-3.7 1 1-3.6-.2-.4A9.9 9.9 0 0 1 2 12C2 6.5 6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zm5.5-7.5c-.3-.2-1.8-.9-2.1-1s-.5-.2-.7.2-.8 1-1 1.2-.4.2-.7 0c-.3-.2-1.3-.5-2.5-1.5-.9-.8-1.5-1.8-1.7-2.1s0-.5.1-.6c.1-.1.3-.3.4-.5.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5-.1-.2-.7-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5 0 1.5 1.1 2.9 1.2 3.1.2.2 2.1 3.3 5.2 4.6.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.8-.7 2-1.4.2-.7.2-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"></path></svg>
      <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full border-2 border-white text-[10px] font-bold text-white grid place-items-center">1</span>
    </a>

  </div>

  <!-- GOOGLE TRANSLATE SCRIPT & LOGIC -->
  <div id="google_translate_element" style="display:none;"></div>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'id', includedLanguages: 'id,en', autoDisplay: false}, 'google_translate_element');
    }
  </script>
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const btnId = document.getElementById('lang-id');
      const btnEn = document.getElementById('lang-en');

      if (!btnId || !btnEn) return;

      function updateActiveState(activeLang) {
        const activeClass = ['bg-white', 'font-extrabold', 'text-brand', 'shadow-[0_2px_8px_rgba(0,0,0,0.06)]'];
        const inactiveClass = ['font-bold', 'text-slate-400', 'hover:text-slate-600'];

        if (activeLang === 'id') {
          btnId.classList.add(...activeClass);
          btnId.classList.remove(...inactiveClass);
          btnEn.classList.add(...inactiveClass);
          btnEn.classList.remove(...activeClass);
        } else {
          btnEn.classList.add(...activeClass);
          btnEn.classList.remove(...inactiveClass);
          btnId.classList.add(...inactiveClass);
          btnId.classList.remove(...activeClass);
        }
      }

      function changeLanguage(lang) {
        if (lang === 'en') {
          document.cookie = "googtrans=/id/en; path=/";
          document.cookie = "googtrans=/id/en; path=/; domain=" + location.hostname;
        } else {
          document.cookie = "googtrans=/id/id; path=/";
          document.cookie = "googtrans=/id/id; path=/; domain=" + location.hostname;
        }
        location.reload();
      }

      btnId.addEventListener('click', (e) => {
        e.preventDefault();
        changeLanguage('id');
      });

      btnEn.addEventListener('click', (e) => {
        e.preventDefault();
        changeLanguage('en');
      });
      
      // Check current language based on cookie
      if (document.cookie.indexOf('googtrans=/id/en') !== -1) {
        updateActiveState('en');
      } else {
        updateActiveState('id');
      }

      // Aggressively kill Google Translate banner using MutationObserver
      const observer = new MutationObserver(() => {
        const banners = document.querySelectorAll('.goog-te-banner-frame, .VIpgJd-Zvi9od-ORHb-OEVmcd');
        if (banners.length > 0) {
          banners.forEach(b => b.style.display = 'none');
          document.body.style.top = '0px';
        }
      });
      observer.observe(document.body, { childList: true, subtree: true });
      
      // Fallback interval
      setInterval(() => {
        document.body.style.top = '0px';
        const iframe = document.querySelector('iframe.goog-te-banner-frame');
        if(iframe) iframe.style.display = 'none';
        const newBanner = document.querySelector('.VIpgJd-Zvi9od-ORHb-OEVmcd');
        if(newBanner) newBanner.style.display = 'none';
      }, 500);
    });
  </script>
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const btnId = document.getElementById('lang-id');
      const btnEn = document.getElementById('lang-en');

      if (!btnId || !btnEn) return;

      function updateActiveState(activeLang) {
        const activeClass = ['bg-white', 'font-extrabold', 'text-brand', 'shadow-[0_2px_8px_rgba(0,0,0,0.06)]'];
        const inactiveClass = ['font-bold', 'text-slate-400', 'hover:text-slate-600'];

        if (activeLang === 'id') {
          btnId.classList.add(...activeClass);
          btnId.classList.remove(...inactiveClass);
          btnEn.classList.add(...inactiveClass);
          btnEn.classList.remove(...activeClass);
        } else {
          btnEn.classList.add(...activeClass);
          btnEn.classList.remove(...inactiveClass);
          btnId.classList.add(...inactiveClass);
          btnId.classList.remove(...activeClass);
        }
      }

      function changeLanguage(lang) {
        if (lang === 'en') {
          document.cookie = "googtrans=/id/en; path=/";
          document.cookie = "googtrans=/id/en; path=/; domain=" + location.hostname;
        } else {
          document.cookie = "googtrans=/id/id; path=/";
          document.cookie = "googtrans=/id/id; path=/; domain=" + location.hostname;
        }
        location.reload();
      }

      btnId.addEventListener('click', (e) => {
        e.preventDefault();
        changeLanguage('id');
      });

      btnEn.addEventListener('click', (e) => {
        e.preventDefault();
        changeLanguage('en');
      });
      
      // Check current language based on cookie
      if (document.cookie.indexOf('googtrans=/id/en') !== -1) {
        updateActiveState('en');
      } else {
        updateActiveState('id');
      }

      // Aggressively kill Google Translate banner using MutationObserver
      const observer = new MutationObserver(() => {
        const banners = document.querySelectorAll('.goog-te-banner-frame, .VIpgJd-Zvi9od-ORHb-OEVmcd');
        if (banners.length > 0) {
          banners.forEach(b => b.style.display = 'none');
          document.body.style.top = '0px';
        }
      });
      observer.observe(document.body, { childList: true, subtree: true });
      
      // Fallback interval
      setInterval(() => {
        document.body.style.top = '0px';
        const iframe = document.querySelector('iframe.goog-te-banner-frame');
        if(iframe) iframe.style.display = 'none';
        const newBanner = document.querySelector('.VIpgJd-Zvi9od-ORHb-OEVmcd');
        if(newBanner) newBanner.style.display = 'none';
      }, 500);
    });
  </script>

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  const featuresSwiper = new Swiper('.features-swiper', {
    grabCursor: true,
    rewind: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.features-next',
      prevEl: '.features-prev',
    },
    pagination: {
      el: '.features-pagination',
      clickable: true,
    },
    centeredSlides: false,
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 16
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 24
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    }
  });

  const testimonySwiper = new Swiper('.testimony-swiper', {
    autoHeight: true,
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.testimony-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.testimony-next',
      prevEl: '.testimony-prev',
    },
  });

  // Touch support for swiper navigation buttons on mobile devices
  document.querySelectorAll('.group').forEach(group => {
    let touchTimeout;
    
    const showBtns = () => {
      clearTimeout(touchTimeout);
      group.classList.add('touch-active');
    };
    
    const hideBtns = () => {
      clearTimeout(touchTimeout);
      touchTimeout = setTimeout(() => {
        group.classList.remove('touch-active');
      }, 1200); // fade out after 1.2s of no touch interaction
    };
    
    group.addEventListener('touchstart', showBtns, {passive: true});
    group.addEventListener('touchmove', showBtns, {passive: true});
    group.addEventListener('touchend', hideBtns, {passive: true});
    group.addEventListener('touchcancel', hideBtns, {passive: true});
  });
</script>
</body>
</html>
