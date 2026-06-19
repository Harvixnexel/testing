from PIL import Image, ImageDraw

img_path = r"C:\Users\Administrator\.gemini\antigravity-ide\brain\71123ee2-3240-4eac-8806-4a5c139b8b61\media__1781819023553.png"
img = Image.open(img_path)
width, height = img.size
print(f"Image dimensions: {width}x{height}")

# In the screenshot, the testimonial card is on the right side.
# The user profile picture is located near the bottom of the card.
# Let's search for a circular region or crop some regions.
# Better yet, let's write a script that scans the bottom-right quadrant for the avatar.
# In a typical layout of 988x416 (or similar aspect ratio):
# Let's crop the region around the avatar.
# Let's output some information about where colored circles might be, 
# or let's scan for a circle by looking for the border.
# Let's save a crop of the avatar if we can find it.
# To do that, we can search for the profile picture which is circular and has Maya's face.
# Let's write a helper to save a patch.
# Maya's face in the photo has sunglasses and is smiling.
# Let's scan pixels to find the testimonial card boundary (solid blue background).
# Solid blue in the screenshot is around RGB(30, 96, 242) or similar.
# Let's find the bounding box of the solid blue area.

blue_pixels = []
for x in range(width):
    for y in range(height):
        r, g, b = img.getpixel((x, y))[:3]
        # Check if it's the testimonial card blue
        if b > 180 and b > r * 1.5 and b > g * 1.2:
            blue_pixels.append((x, y))

if blue_pixels:
    min_x = min(p[0] for p in blue_pixels)
    max_x = max(p[0] for p in blue_pixels)
    min_y = min(p[1] for p in blue_pixels)
    max_y = max(p[1] for p in blue_pixels)
    print(f"Blue card box: X({min_x} to {max_x}), Y({min_y} to {max_y})")
    
    # The profile picture is in the bottom left of this blue card.
    # In the screenshot, the card has a profile pic at about:
    # X: min_x + 5% to 15% of card width
    # Y: max_y - 20% to 5% of card height
    card_w = max_x - min_x
    card_h = max_y - min_y
    
    # Let's crop a region in the bottom-left of the blue card.
    avatar_x_start = min_x + int(card_w * 0.03)
    avatar_x_end = min_x + int(card_w * 0.15)
    avatar_y_start = min_y + int(card_h * 0.70)
    avatar_y_end = min_y + int(card_h * 0.95)
    
    print(f"Cropping avatar candidate from: X({avatar_x_start} to {avatar_x_end}), Y({avatar_y_start} to {avatar_y_end})")
    avatar_crop = img.crop((avatar_x_start, avatar_y_start, avatar_x_end, avatar_y_end))
    avatar_crop.save(r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\assets\images\maya-crop-raw.png")
    print("Saved raw crop to assets/images/maya-crop-raw.png")
else:
    print("No blue pixels found.")
