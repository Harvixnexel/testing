import os
import glob
import shutil

brain_dir = r"C:\Users\Administrator\.gemini\antigravity-ide\brain\71123ee2-3240-4eac-8806-4a5c139b8b61"
target_dir = r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\assets\images"

files = glob.glob(os.path.join(brain_dir, "media__*.*"))
if files:
    # Sort ascending by modified time (oldest first)
    files.sort(key=os.path.getmtime)
    print("All brain media files (oldest first):")
    for f in files[-5:]:
        print(f, os.path.getmtime(f))
        
    # The user just uploaded 2 photos in the last message.
    # So the last 2 files in the array are the ones they just uploaded.
    # "Foto 2" means the second photo they uploaded, which is the very last file in the sorted list.
    
    photo_1 = files[-2]
    photo_2 = files[-1]
    
    print(f"Photo 1: {photo_1}")
    print(f"Photo 2: {photo_2}")
    
    shutil.copy2(photo_2, os.path.join(target_dir, "testimonial-robot-new.png"))
    print(f"\nCopied {photo_2} to testimonial-robot-new.png")
else:
    print("No files found.")
