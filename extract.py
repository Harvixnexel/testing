import json
import os

log_path = r"C:\Users\Administrator\.gemini\antigravity-ide\brain\61f6bcaf-56c7-4fa3-ab3f-742bae24b192\.system_generated\logs\transcript.jsonl"
target_file = r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\index.html"
target_php = r"C:\Users\Administrator\.gemini\antigravity-ide\scratch\lovable-theme\front-page.php"

index_content = None
php_content = None

if os.path.exists(log_path):
    print("Log file found.")
    with open(log_path, 'r', encoding='utf-8') as f:
        for line in f:
            try:
                data = json.loads(line)
                if 'tool_calls' in data:
                    for tc in data['tool_calls']:
                        if tc.get('name') == 'write_to_file':
                            args = tc.get('arguments', {})
                            if args.get('TargetFile') == target_file:
                                index_content = args.get('CodeContent')
                            if args.get('TargetFile') == target_php:
                                php_content = args.get('CodeContent')
            except Exception as e:
                pass

    if index_content:
        with open("index.html.bak", "w", encoding="utf-8") as f:
            f.write(index_content)
        print("Restored index.html.bak from transcript!")
    else:
        print("Could not find index.html in transcript")
        
    if php_content:
        with open("front-page.php.bak", "w", encoding="utf-8") as f:
            f.write(php_content)
        print("Restored front-page.php.bak from transcript!")
else:
    print("Log file not found at", log_path)
