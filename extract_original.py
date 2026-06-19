import re
import os

filepath = r"C:\Users\Administrator\.gemini\antigravity-ide\brain\61f6bcaf-56c7-4fa3-ab3f-742bae24b192\browser\rendered_preview_source.html"

with open(filepath, "r", encoding="utf-8") as f:
    content = f.read()

# Let's find where "Fitur Unggulan AI" is.
idx = content.find("Fitur Unggulan AI")
if idx != -1:
    print(f"Found Fitur Unggulan AI at {idx}")
    start = max(0, idx - 2000)
    end = min(len(content), idx + 2000)
    with open("extract_features.html", "w", encoding="utf-8") as f:
        f.write(content[start:end])
    print("Saved to extract_features.html")
else:
    print("Fitur Unggulan AI not found!")

# Let's find "Testimoni" or "Apa Kata Mereka"
idx2 = content.find("Apa Kata Mereka")
if idx2 != -1:
    print(f"Found Apa Kata Mereka at {idx2}")
    start2 = max(0, idx2 - 2000)
    end2 = min(len(content), idx2 + 8000)
    with open("extract_testimonials.html", "w", encoding="utf-8") as f:
        f.write(content[start2:end2])
    print("Saved to extract_testimonials.html")
else:
    print("Apa Kata Mereka not found!")
