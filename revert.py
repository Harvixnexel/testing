import os
import re

files = ['index.html', 'header.php', 'front-page.php', 'footer.php']

gtranslate_script = '''  <!-- GOOGLE TRANSLATE SCRIPT & LOGIC -->
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
  </script>'''

for f in files:
    if not os.path.exists(f): continue
    with open(f, 'r', encoding='utf-8') as file:
        content = file.read()
    
    # 1. Revert spans
    # <span class="lang-id">...</span><span class="lang-en">...</span>
    content = re.sub(r'<span class="lang-id">(.*?)</span><span class="lang-en">.*?</span>', r'\1', content, flags=re.DOTALL)
    
    # 2. Revert script
    content = re.sub(r'  <!-- CUSTOM LANGUAGE TOGGLE LOGIC -->.*?  </script>', gtranslate_script, content, flags=re.DOTALL)
    
    # 3. Revert CSS
    content = re.sub(r'\s*/\* Language Toggle Classes \*/\s*body\.lang-en-active \.lang-id \{ display: none !important; \}\s*body\.lang-id-active \.lang-en \{ display: none !important; \}', '', content)
    
    # Also clean up any accidental <span class="lang-id"> tags left by the buggy python script
    content = re.sub(r'<span class="lang-id">([^<]*)</span>', r'\1', content)
    # The user's screenshot had: alt="<span class="lang-id">Hadir Sebagai Konsultan</span><span class="lang-en">Present as a Consultant</span>"
    # Wait, the sub above handles the span pair. Let's make sure it handles it without newlines too.
    content = re.sub(r'alt="<span class="lang-id">(.*?)</span><span class="lang-en">.*?</span>"', r'alt="\1"', content)
    
    with open(f, 'w', encoding='utf-8') as file:
        file.write(content)

print('Reverted successfully!')
