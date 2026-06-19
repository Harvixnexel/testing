from PIL import Image
from collections import deque

def remove_white_bg(img_path):
    print(f"Processing {img_path}...")
    img = Image.open(img_path).convert("RGBA")
    width, height = img.size
    pixels = img.load()
    
    # We want to remove the white background. 
    # White is roughly RGB > 240
    def is_white(c):
        return c[0] > 240 and c[1] > 240 and c[2] > 240
        
    visited = set()
    queue = deque()
    
    # Add all edge pixels that are white to the queue
    for x in range(width):
        if is_white(pixels[x, 0]): queue.append((x, 0))
        if is_white(pixels[x, height-1]): queue.append((x, height-1))
    for y in range(height):
        if is_white(pixels[0, y]): queue.append((0, y))
        if is_white(pixels[width-1, y]): queue.append((width-1, y))
        
    for q in queue:
        visited.add(q)
        
    while queue:
        x, y = queue.popleft()
        pixels[x, y] = (255, 255, 255, 0)
        
        for dx, dy in [(1,0), (-1,0), (0,1), (0,-1)]:
            nx, ny = x + dx, y + dy
            if 0 <= nx < width and 0 <= ny < height:
                if (nx, ny) not in visited:
                    visited.add((nx, ny))
                    if is_white(pixels[nx, ny]):
                        queue.append((nx, ny))
                        
    # Soften edges slightly by finding transparent pixels next to opaque pixels and blending
    # (Skipping for now to keep it fast, the white box is the main issue)
                        
    img.save(img_path, "PNG")
    print("Done!")

remove_white_bg("C:\\Users\\Administrator\\.gemini\\antigravity-ide\\scratch\\lovable-theme\\assets\\images\\testimonial-robot-new.png")
