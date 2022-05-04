import re

value = "%E9%B7%B9%E9%87%8E"; # "鷹野"

# 正規表現
regexp = re.compile('%([a-fA-F0-9][a-fA-F0-9])')

# group(1)は、%〇〇の〇〇を取り出す
value = re.sub(regexp,lambda x:x.group(1), value) # value = value.replace('%', ' ')と同じ処理

value = bytes.fromhex(value) # 16進数文字列を、バイト文字列に変換

print ("URLデコード (E9 B7 B9 E9 87 8E): " + value.decode('utf8')) # バイト文字列を文字列(UTF8)に変換して表示