import os

index_path = r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\index.html"
php_path = r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\front-page.php"

# Let's define the testimonials data.
testimonials = [
    {
        "name": "Sarah Putri",
        "role": "Founder — Glow Skincare",
        "text": '"Website company profile-nya elegan banget, klien jadi langsung percaya begitu lihat. Dapet beberapa B2B deal cuma dari Google search."',
        "avatar": "https://i.pravatar.cc/120?img=47"
    },
    {
        "name": "Budi Santoso",
        "role": "Owner — Gadget Hub",
        "text": '"AI Customer Service ini beneran gila! Responnya secepat kilat, jam 2 pagi ada leads langsung dibalas otomatis dan closing paginya!"',
        "avatar": "https://i.pravatar.cc/120?img=33"
    },
    {
        "name": "Andi Pratama",
        "role": "CEO — Auto Rent",
        "text": '"Dulu kewalahan bales chat tanya alamat sama menu, sekarang AI yang handle. Penjualan naik 35% karena respon instan!"',
        "avatar": "https://i.pravatar.cc/120?img=12"
    },
    {
        "name": "Rian Wijaya",
        "role": "Founder — Kopi & Co",
        "text": '"Website barunya cepet banget diakses dan gampang dipahami. Cust banyak yang langsung checkout sendiri tanpa perlu dipandu."',
        "avatar": "https://i.pravatar.cc/120?img=68"
    },
    {
        "name": "Maya Lestari",
        "role": "Marketing — Toko Bunga Hana",
        "text": '"Auto follow up-nya jadi game changer. Customer yang dulu ghosting sekarang banyak yang balik order setelah di-nudge AI."',
        "avatar": "assets/images/maya-avatar.png",
        "is_local": True
    },
    {
        "name": "Hendra Wijaya",
        "role": "Marketing Director — Auto Parts",
        "text": '"Gak perlu lagi sewa banyak CS, robot AI ini paham semua knowledge produk dan bisa handle ratusan chat bersamaan tanpa salah."',
        "avatar": "https://i.pravatar.cc/120?img=11"
    }
]

# Generate Swiper Slides HTML
def generate_slides_html(is_php=False):
    html = '                <div class="swiper-wrapper">\n'
    for t in testimonials:
        avatar_src = t["avatar"]
        if is_php and t.get("is_local"):
            avatar_src = f'<?php echo get_template_directory_uri(); ?>/{t["avatar"]}'
            
        html += '                  <div class="swiper-slide h-auto">\n'
        html += '                    <div class="relative rounded-[28px] bg-blue-600 shadow-[0_15px_40px_rgba(37,99,235,0.18)] overflow-hidden h-full flex flex-col justify-between border border-blue-500/30 transition-transform duration-300 hover:-translate-y-1 p-8 md:p-10">\n'
        html += '                      <div class="relative">\n'
        html += '                        <!-- Top Row: Quote and Stars -->\n'
        html += '                        <div class="flex items-center justify-between mb-6">\n'
        html += '                          <!-- White Double Quote Icon -->\n'
        html += '                          <svg class="w-10 h-10 text-white/90" fill="currentColor" viewBox="0 0 24 24">\n'
        html += '                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />\n'
        html += '                          </svg>\n'
        html += '                          <!-- 5 Yellow Stars -->\n'
        html += '                          <div class="flex items-center gap-1">\n'
        html += '                            <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>\n'
        html += '                            <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>\n'
        html += '                            <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>\n'
        html += '                            <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>\n'
        html += '                            <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>\n'
        html += '                          </div>\n'
        html += '                        </div>\n'
        html += '                        <!-- Testimonial Text -->\n'
        html += f'                        <p class="text-[16px] md:text-[17px] lg:text-[18px] font-medium leading-relaxed min-h-[100px] md:min-h-[110px] text-white">\n'
        html += f'                          {t["text"]}\n'
        html += '                        </p>\n'
        html += '                      </div>\n'
        html += '                      <!-- Thin Divider Line -->\n'
        html += '                      <div class="w-full border-t border-white/20 my-6"></div>\n'
        html += '                      <!-- User Profile Stack -->\n'
        html += '                      <div class="flex items-center gap-4">\n'
        html += f'                        <img src="{avatar_src}" alt="{t["name"]}" class="w-12 h-12 rounded-full object-cover border-2 border-white/30 shadow-sm" />\n'
        html += '                        <div>\n'
        html += f'                          <div class="font-bold text-[16px] text-white">{t["name"]}</div>\n'
        html += f'                          <div class="text-sm text-blue-100/80 font-medium">{t["role"]}</div>\n'
        html += '                        </div>\n'
        html += '                      </div>\n'
        html += '                    </div>\n'
        html += '                  </div>\n'
    html += '                </div>'
    return html

# Perform replacement in file
def replace_swiper_wrapper(file_path, is_php):
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Locate the swiper wrapper start and end
    # We find '<div class="swiper testimony-swiper pt-4 pb-16">'
    marker_start = content.find('class="swiper testimony-swiper pt-4 pb-16"')
    if marker_start == -1:
        print(f"Error: marker not found in {file_path}")
        return False
        
    wrapper_start = content.find('<div class="swiper-wrapper">', marker_start)
    if wrapper_start == -1:
        print(f"Error: swiper-wrapper start not found in {file_path}")
        return False
        
    # Find the corresponding closing </div> for swiper-wrapper.
    # It ends right before "<!-- Testimony Pagination -->" or similar closing.
    pagination_marker = content.find('<!-- Testimony Pagination -->', wrapper_start)
    if pagination_marker == -1:
        # Fallback to searching for the testimony-pagination div
        pagination_marker = content.find('class="testimony-pagination', wrapper_start)
        
    if pagination_marker == -1:
        print(f"Error: testimony-pagination marker not found in {file_path}")
        return False
        
    # Find the closing </div> of swiper-wrapper
    wrapper_end_index = content.rfind('</div>', wrapper_start, pagination_marker)
    if wrapper_end_index == -1:
        print(f"Error: closing div not found in {file_path}")
        return False
        
    # Complete closing tag
    wrapper_end = wrapper_end_index + len('</div>')
    
    # Generate new slides
    new_slides_html = generate_slides_html(is_php)
    
    # Replace content
    new_content = content[:wrapper_start] + new_slides_html + content[wrapper_end:]
    
    with open(file_path, 'w', encoding='utf-8') as f:
        f.write(new_content)
    print(f"Successfully updated {file_path}!")
    return True

replace_swiper_wrapper(index_path, is_php=False)
replace_swiper_wrapper(php_path, is_php=True)
