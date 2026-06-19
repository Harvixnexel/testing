<!DOCTYPE html>
<!-- =============================================================== -->
<!-- BAGIAN HEADER (KEPALA WEBSITE) -->
<!-- Menu navigasi atas (Home, Problem, Solution, dll) diatur di file ini -->
<!-- =============================================================== -->
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['Inter', 'sans-serif'], display: ['Inter', 'sans-serif'] },
          colors: {
            border: "hsl(214.3 31.8% 91.4%)",
            background: "hsl(0 0% 100%)",
            foreground: "hsl(222.2 84% 4.9%)",
            brand: { DEFAULT: "#2563eb", foreground: "#ffffff", soft: "#eff6ff" },
            muted: { DEFAULT: "hsl(210 40% 96.1%)", foreground: "hsl(215.4 16.3% 46.9%)" },
            whatsapp: "#25D366"
          },
          animation: {
            "float": "float 6s ease-in-out infinite",
            "float-slow": "float 8s ease-in-out infinite",
            "float-fast": "float 4s ease-in-out infinite",
            "float-medium": "float 5s ease-in-out infinite",
            "pulse": "pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite",
          },
          keyframes: {
            float: {
              "0%, 100%": { transform: "translateY(0)" },
              "50%": { transform: "translateY(-20px)" },
            }
          }
        }
      }
    }
  </script>
  <style>
    body { background-color: hsl(0 0% 100%); color: hsl(222.2 84% 4.9%); overflow-x: hidden; }
    /* Hide Google Translate top banner aggressively */
    .goog-te-banner-frame.skiptranslate, .skiptranslate > iframe.goog-te-banner-frame, iframe.goog-te-banner-frame, .VIpgJd-Zvi9od-ORHb-OEVmcd, .VIpgJd-Zvi9od-aZ2wEe-wOHMyf { display: none !important; visibility: hidden !important; }
    body { top: 0px !important; position: static !important; }
    .blob {
      position: absolute;
      border-radius: 50%;
      filter: blur(100px);
      z-index: 0;
      pointer-events: none;
    }
    
    /* Elegant Navigation Buttons for Swiper */
    .elegant-nav-btn {
      position: absolute !important;
      top: 50% !important;
      transform: translateY(-50%) !important;
      width: 46px !important;
      height: 46px !important;
      background-color: #ffffff !important;
      border: 1px solid hsl(214.3 31.8% 91.4%) !important;
      border-radius: 9999px !important;
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08) !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      color: #2563eb !important;
      z-index: 20 !important;
      cursor: pointer !important;
      margin-top: 0 !important;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
    }
    
    .elegant-nav-btn:hover {
      background-color: #2563eb !important;
      color: #ffffff !important;
      box-shadow: 0 6px 20px rgba(37, 99, 235, 0.25) !important;
      transform: translateY(-50%) scale(1.05) !important;
    }
    
    /* Hide testimony & features navigation buttons by default */
    .testimony-prev,
    .testimony-next,
    .features-prev,
    .features-next {
      opacity: 0;
      pointer-events: none;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    /* Show nav buttons on hover (desktop only) and style on hover */
    @media (hover: hover) {
      .group:hover .testimony-prev,
      .group:hover .testimony-next,
      .group:hover .features-prev,
      .group:hover .features-next {
        opacity: 1;
        pointer-events: auto;
      }
      
      .elegant-nav-btn:hover {
        background: #3b82f6 !important;
        color: white !important;
        transform: translateY(-50%) scale(1.05) !important;
        box-shadow: 0 8px 16px rgba(37, 99, 235, 0.25) !important;
        border-color: #3b82f6 !important;
      }
    }
    
    /* Hide nav buttons on mobile as requested */
    @media (max-width: 767px) {
      .testimony-prev,
      .testimony-next,
      .features-prev,
      .features-next {
        display: none !important;
      }
    }






    
    /* Custom Premium Swiper Pagination */
    .swiper-pagination-bullet {
      background: #cbd5e1 !important;
      opacity: 1 !important;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
      width: 8px !important;
      height: 8px !important;
      border-radius: 9999px !important;
      margin: 0 8px !important;
    }
    .swiper-pagination-bullet-active {
      background: #2563eb !important;
      width: 24px !important;
    }
    
    /* Load Animations keyframes */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(24px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    @keyframes scaleIn {
      from {
        opacity: 0;
        transform: scale(0.95);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }
    @keyframes shine {
      0% { left: -150%; }
      50% { left: 150%; }
      100% { left: 150%; }
    }
    
    .animate-fade-in-up {
      opacity: 0;
      animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    .animate-scale-in {
      opacity: 0;
      animation: scaleIn 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    
    /* Shiny Premium Shimmer Card Effect */
    .shiny-card {
      position: relative;
      overflow: hidden;
    }
    .shiny-card::after {
      content: '';
      position: absolute;
      top: 0;
      left: -150%;
      width: 80%;
      height: 100%;
      background: linear-gradient(
        90deg,
        rgba(255, 255, 255, 0) 0%,
        rgba(255, 255, 255, 0.75) 50%,
        rgba(255, 255, 255, 0) 100%
      );
      transform: skewX(-20deg);
      pointer-events: none;
    }
    /* Periodic automated shine sweep */
    .shiny-card::after {
      animation: shine 4.5s cubic-bezier(0.16, 1, 0.3, 1) infinite;
      animation-delay: 1.5s;
    }
    .shiny-card:hover::after {
      animation: shine 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

  </style>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const navLinks = document.querySelectorAll('nav a[href^="#"]');
      
      function updateNav(targetId) {
        navLinks.forEach(link => {
          if (link.getAttribute('href') === targetId) {
            link.className = "text-[15px] font-semibold text-brand transition-colors";
          } else {
            link.className = "text-[15px] font-medium text-foreground/60 hover:text-brand transition-colors";
          }
        });
      }

      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          const targetId = this.getAttribute('href');
          if (targetId === '#') return;
          const targetElement = document.querySelector(targetId);
          if (targetElement) {
            e.preventDefault();
            const headerOffset = 80;
            const elementPosition = targetElement.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
              top: offsetPosition,
              behavior: 'smooth'
            });
            
            if (this.closest('nav')) {
                updateNav(targetId);
            }
          }
        });
      });

      window.addEventListener('scroll', () => {
        let current = '';
        const sections = document.querySelectorAll('section');
        
        sections.forEach(section => {
          const sectionTop = section.offsetTop;
          if (scrollY >= (sectionTop - 150)) {
            current = '#' + section.getAttribute('id');
          }
        });
        
        if (scrollY < 100) current = '#home';
        if (current) updateNav(current);
      });
    });
  </script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="min-h-screen bg-background text-foreground">
    
    <!-- HEADER -->
    <header class="fixed top-0 inset-x-0 z-50 transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-slate-100/40">
      <div class="max-w-6xl mx-auto flex items-center justify-between px-6 py-4">
        <a href="#home" class="flex items-center gap-2">
          <span class="grid place-items-center w-9 h-9 rounded-full bg-brand text-brand-foreground font-bold">N</span>
          <span class="font-display font-bold text-lg"><?php bloginfo('name'); ?></span>
        </a>
        <div class="hidden md:flex items-center gap-8">
          <nav class="flex items-center gap-8">
            <a href="#home" class="text-[15px] font-semibold text-brand transition-colors">Home</a>
            <a href="#problem" class="text-[15px] font-medium text-foreground/60 hover:text-brand transition-colors">Problem</a>
            <a href="#solution" class="text-[15px] font-medium text-foreground/60 hover:text-brand transition-colors">Solution</a>
            <a href="#testimony" class="text-[15px] font-medium text-foreground/60 hover:text-brand transition-colors">Testimony</a>
            <a href="#price" class="text-[15px] font-medium text-foreground/60 hover:text-brand transition-colors">Price</a>
          </nav>
          
          <div class="h-5 w-px bg-slate-200"></div>

          <!-- Language Switcher -->
          <div class="flex items-center p-1 rounded-full bg-slate-50 border border-slate-200/60 shadow-inner">
            <button id="lang-id" class="flex items-center justify-center px-3 py-1 rounded-full bg-white text-[11px] font-extrabold tracking-wider text-brand shadow-[0_2px_8px_rgba(0,0,0,0.06)] transition-all">ID</button>
            <button id="lang-en" class="flex items-center justify-center px-3 py-1 rounded-full text-[11px] font-bold tracking-wider text-slate-400 hover:text-slate-600 transition-all">EN</button>
          </div>
        </div>
      </div>
    </header>
