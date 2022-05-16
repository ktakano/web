#!C:\Users\takan\anaconda3\python.exe
# -*- coding: utf-8 -*-

import os, sys, io, re

from nbformat import read
sys.stdout = io.TextIOWrapper(sys.stdout.buffer, encoding = 'utf-8')

def readFormData():
    if os.environ.get('REQUEST_METHOD') == 'POST': # POSTの場合
        buffer = sys.stdin.read()
    else: # GETの場合
        buffer = os.environ.get('QUERY_STRING')

    regexp = re.compile('%([a-fA-F0-9][a-fA-F0-9])')
    keyvals = buffer.split('&')
    data = {}
    for kv in keyvals:
        [key, value] = kv.split('=')
        value_tmp = re.sub(regexp,lambda x:x.group(1), value) #value_tmp = value.replace('%', ' ')
        if value_tmp != value:
            value = bytes.fromhex(value_tmp) # 16進数文字列を、バイト文字列に変換
            value = value.decode('utf8')

        data[key] = value

    return data

data = readFormData()

print ("Content-type: text/html\n\n")
print ('<html>')
print ('<head>')
print ('<meta charset="UTF-8">')
print ('</head>')
print ("<body><h1>")
print ("ID: " + data["my_login"])
print ("<br>")
print ("パスワード: " + data["my_password"])
print ("</h1></body></html>")