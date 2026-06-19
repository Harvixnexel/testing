from PIL import Image, ImageDraw

# Load the raw crop
crop_path = r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\assets\images\maya-crop-raw.png"
img = Image.open(crop_path).convert("RGBA")
width, height = img.size

# Let's find the exact circle of the avatar.
# In the crop (104x91), the avatar is a circular photo of Maya Lestari.
# It has a thin white-ish border.
# Let's find the center and radius of this circle.
# We can search for the circle boundary. Let's look for pixels that are NOT the blue background.
# The blue background is roughly RGB(30, 96, 242) or similar.
# Let's find the bounding box of non-blue pixels in this crop.

non_blue = []
for x in range(width):
    for y in range(height):
        r, g, b, a = img.getpixel((x, y))
        # Blue background is around (30, 96, 242)
        # Let's count pixels that are not close to the background blue.
        is_blue = (b > 180 and b > r * 1.5 and b > g * 1.2)
        if not is_blue:
            non_blue.append((x, y))

if non_blue:
    min_x = min(p[0] for p in non_blue)
    max_x = max(p[0] for p in non_blue)
    min_y = min(p[1] for p in non_blue)
    max_y = max(p[1] for p in non_blue)
    
    # We want a square crop of the avatar
    w = max_x - min_x
    h = max_y - min_y
    size = min(w, h)
    
    # Center of the crop
    cx = (min_x + max_x) // 2
    cy = (min_y + max_y) // 2
    r = size // 2
    
    # Crop the square area
    square_avatar = img.crop((cx - r, cy - r, cx + r, cy + r))
    
    # Create a circular mask
    mask = Image.new("L", (r*2, r*2), 0)
    draw = ImageDraw.Draw(mask)
    draw.ellipse((0, 0, r*2, r*2), fill=255)
    
    # Apply mask
    output = Image.new("RGBA", (r*2, r*2), (0, 0, 0, 0))
    output.paste(square_avatar, (0, 0), mask=mask)
    
    # Save the refined avatar
    output_path = r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\assets\images\maya-avatar.png"
    output.save(output_path, "PNG")
    print(f"Refined avatar saved to {output_path} (size: {r*2}x{r*2})")
else:
    print("Could not locate avatar.")
