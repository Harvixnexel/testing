import json
import os

log_path = r"C:\Users\Administrator\.gemini\antigravity-ide\brain\61f6bcaf-56c7-4fa3-ab3f-742bae24b192\.system_generated\logs\transcript.jsonl"

if os.path.exists(log_path):
    with open(log_path, 'r', encoding='utf-8') as f:
        for line in f:
            data = json.loads(line)
            if data.get('type') == 'USER_INPUT':
                print("USER PROMPT:", data.get('content'))
                break
