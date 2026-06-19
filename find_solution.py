import json

log_path = r"C:\Users\Administrator\.gemini\antigravity-ide\brain\71123ee2-3240-4eac-8806-4a5c139b8b61\.system_generated\logs\transcript.jsonl"

found_content = None

with open(log_path, 'r', encoding='utf-8') as f:
    for line in f:
        try:
            data = json.loads(line)
            if 'tool_calls' in data:
                for tc in data['tool_calls']:
                    args = tc.get('arguments', {})
                    if 'ReplacementChunks' in args:
                        chunks_str = args['ReplacementChunks']
                        try:
                            chunks = json.loads(chunks_str)
                            for c in chunks:
                                if 'id="solution"' in c.get('ReplacementContent', '') or 'id="testimony"' in c.get('ReplacementContent', ''):
                                    found_content = c.get('ReplacementContent')
                        except:
                            pass
        except Exception as e:
            pass

if found_content:
    with open("found_solution.html", "w", encoding="utf-8") as out:
        out.write(found_content)
    print("Saved found_solution.html!")
else:
    print("Not found in multi_replace.")
