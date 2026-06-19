const fs = require('fs');

function transformFile(path) {
  let content = fs.readFileSync(path, 'utf8');

  // We find the <div class="swiper-wrapper"> and its end by matching each slide.
  const regex = /<div class="swiper-slide h-auto">([\s\S]*?)<img src="([^"]+)" alt="([^"]+)"[^>]*>([\s\S]*?)<div class="font-bold[^>]*>([^<]+)<\/div>([\s\S]*?)<div class="text-sm[^>]*>([^<]+)<\/div>([\s\S]*?)<\/div>\s*<\/div>\s*<\/div>\s*<\/div>/g;

  content = content.replace(regex, (match, p1, imgSrc, imgAlt, p4, name, p6, role, p8) => {
    // Extract text from p1
    const textMatch = p1.match(/<p[^>]*>([\s\S]*?)<\/p>/);
    const text = textMatch ? textMatch[1].trim() : '';

    return `<div class="swiper-slide h-auto">
                    <div class="relative rounded-[24px] bg-[#1d4ed8] text-white shadow-[0_15px_40px_rgba(37,99,235,0.15)] h-full flex flex-col justify-between transition-transform duration-300 hover:-translate-y-1 p-8 md:p-10">
                      <div>
                        <div class="flex items-center justify-between mb-8">
                          <svg class="w-10 h-10 text-white drop-shadow-sm opacity-90" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" /></svg>
                          <div class="flex items-center gap-1">
                            <svg class="w-5 h-5 text-[#facc15]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-[#facc15]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-[#facc15]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-[#facc15]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-[#facc15]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                          </div>
                        </div>
                        <p class="text-[17px] md:text-[20px] font-medium leading-relaxed min-h-[120px]">
                          ${text}
                        </p>
                      </div>
                      <div class="mt-8 flex items-center gap-4 pt-6 border-t border-white/20">
                        <img src="${imgSrc}" alt="${imgAlt}" class="w-12 h-12 rounded-full object-cover ring-2 ring-white/50 shadow-sm" />
                        <div>
                          <div class="font-bold text-[16px]">${name}</div>
                          <div class="text-sm text-blue-100 opacity-90">${role}</div>
                        </div>
                      </div>
                    </div>
                  </div>`;
  });

  fs.writeFileSync(path, content);
}

transformFile('index.html');
transformFile('front-page.php');
