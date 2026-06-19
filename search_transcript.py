import json
import os

log_path = r"C:\Users\Administrator\.gemini\antigravity-ide\brain\61f6bcaf-56c7-4fa3-ab3f-742bae24b192\.system_generated\logs\transcript.jsonl"

found_content = []

if os.path.exists(log_path):
    with open(log_path, 'r', encoding='utf-8') as f:
        for line in f:
            try:
                data = json.loads(line)
                # print strings that contain Fitur Unggulan AI
                if 'Fitur Unggulan AI' in line:
                    if 'tool_calls' in data:
                        for tc in data['tool_calls']:
                            if 'CodeContent' in tc.get('arguments', {}):
                                content = tc['arguments']['CodeContent']
                                if 'Fitur Unggulan AI' in content:
                                    found_content.append(content)
                            if 'ReplacementContent' in tc.get('arguments', {}):
                                content = tc['arguments']['ReplacementContent']
                                if 'Fitur Unggulan AI' in content:
                                    found_content.append(content)
            except Exception as e:
                pass

    for i, c in enumerate(found_content[-1:]):  # only last one
        with open(f"found_backup_{i}.html", "w", encoding="utf-8") as out:
            out.write(c)
        print(f"Saved found_backup_{i}.html, length {len(c)}")
else:
    print("Log not found")
