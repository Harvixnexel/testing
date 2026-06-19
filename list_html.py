import os

dir_path = r"C:\Users\Administrator\.gemini\antigravity-ide\brain\61f6bcaf-56c7-4fa3-ab3f-742bae24b192"
for root, dirs, files in os.walk(dir_path):
    for file in files:
        if file.endswith('.html'):
            print(os.path.join(root, file))
