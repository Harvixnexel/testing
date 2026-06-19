import os
import glob
import shutil

media_dir = r"C:\Users\Administrator\.gemini\antigravity-ide\brain\71123ee2-3240-4eac-8806-4a5c139b8b61\.tempmediaStorage"
target_dir = r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\assets\images"

# Get ALL files
files = glob.glob(os.path.join(media_dir, "media_*.*"))
if files:
    files.sort(key=os.path.getmtime, reverse=True)
    # The user just uploaded 2 photos! So the top 2 files are the ones they just uploaded.
    # The first one is probably the robot photo, or the pricing background.
    print("Latest 5 files:")
    for f in files[:5]:
        print(f, os.path.getmtime(f))
    
    # We will copy the most recent one to testimonial-robot-new.png, and the second one to pricing-bg.png (just in case).
    latest_file = files[0]
    second_latest = files[1]
    
    # Since we don't know which is which, let's copy both to temp names so we can inspect or just blindly apply
    shutil.copy2(latest_file, os.path.join(target_dir, "latest_uploaded_1.png"))
    shutil.copy2(second_latest, os.path.join(target_dir, "latest_uploaded_2.png"))
else:
    print("No files found.")
