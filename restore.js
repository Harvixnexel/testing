const fs = require('fs');

const data = [
  {
    name: "Sarah Putri",
    role: "Founder — Glow Skincare",
    img: "47",
    text: "Website company profile-nya elegan banget, klien jadi langsung percaya begitu lihat. Dapet beberapa B2B deal cuma dari Google search."
  },
  {
    name: "Budi Santoso",
    role: "Owner — Gadget Hub",
    img: "33",
    text: "AI Customer Service ini beneran gila! Responnya secepat kilat, jam 2 pagi ada leads langsung dibalas otomatis dan closing paginya!"
  },
  {
    name: "Andi Pratama",
    role: "CEO — Auto Rent",
    img: "12",
    text: "Dulu kewalahan bales chat tanya alamat sama menu, sekarang AI yang handle. Penjualan naik 35% karena respon instan!"
  },
  {
    name: "Rian Wijaya",
    role: "Founder — Kopi & Co",
    img: "68",
    text: "Website barunya cepet banget diakses dan gampang dipahami. Cust banyak yang langsung checkout sendiri tanpa perlu dipandu."
  },
  {
    name: "Dewi Lestari",
    role: "CEO — Hijab Style",
    img: "49",
    text: "Fitur follow up otomatisnya juara! Banyak leads yang tadinya ragu-ragu akhirnya beli setelah dikontak ulang oleh AI."
  },
  {
    name: "Hendra Wijaya",
    role: "Marketing Director — Auto Parts",
    img: "11",
    text: "Gak perlu lagi sewa banyak CS, robot AI ini paham semua knowledge produk dan bisa handle ratusan chat bersamaan tanpa salah."
  }
];

const stars = `<svg class="w-5 h-5 text-amber-400 drop-shadow-sm" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>\n                          `.repeat(5).trim();

const slidesHTML = data.map(d => `                  <div class="swiper-slide h-auto">
                    <div class="relative rounded-[24px] bg-gradient-to-br from-blue-50/80 to-white shadow-[0_15px_40px_rgba(37,99,235,0.08)] overflow-hidden h-full flex flex-col justify-between border border-blue-100/50 transition-transform duration-300 hover:-translate-y-1">
                      <div class="p-8 md:p-10 pb-8 relative">
                        <div class="flex items-center gap-1 mb-5">
                          ${stars}
                        </div>
                        <p class="text-[17px] md:text-lg font-medium leading-relaxed min-h-[120px] text-slate-700 relative z-10">
                          "${d.text}"
                        </p>
                      </div>
                      <div class="bg-gradient-to-r from-blue-600 to-brand text-white p-6 px-8 md:px-10 flex items-center gap-4">
                        <img src="https://i.pravatar.cc/120?img=${d.img}" alt="${d.name}" class="w-10 h-10 rounded-full object-cover ring-2 ring-white/30 shadow-sm" />
                        <div>
                          <div class="font-bold text-[15px]">${d.name}</div>
                          <div class="text-sm text-blue-100 font-medium">${d.role}</div>
                        </div>
                      </div>
                    </div>
                  </div>`).join('\n');

function fixFile(path) {
  let content = fs.readFileSync(path, 'utf8');
  
  const startTag = '<div class="swiper-wrapper">';
  const endTag = '</div>\n                <!-- Testimony Pagination -->';
  
  const startIdx = content.indexOf(startTag);
  const endIdx = content.indexOf(endTag);
  
  if (startIdx !== -1 && endIdx !== -1) {
    const newContent = content.substring(0, startIdx + startTag.length) + '\n' + slidesHTML + '\n                ' + content.substring(endIdx);
    fs.writeFileSync(path, newContent);
    console.log('Fixed', path);
  } else {
    console.log('Could not find wrapper in', path);
  }
}

fixFile('index.html');
fixFile('front-page.php');
