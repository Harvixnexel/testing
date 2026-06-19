import os
import glob
import shutil

media_dir = r"C:\Users\Administrator\.gemini\antigravity-ide\brain\71123ee2-3240-4eac-8806-4a5c139b8b61\.tempmediaStorage"
target_dir = r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\assets\images"

files = glob.glob(os.path.join(media_dir, "media_*.png"))
if files:
    files.sort(key=os.path.getmtime, reverse=True)
    latest_file = files[0]
    target_path = os.path.join(target_dir, "testimonial-robot-new.png")
    shutil.copy2(latest_file, target_path)
    print(f"Copied {latest_file} to {target_path}")
else:
    print("No media files found")
