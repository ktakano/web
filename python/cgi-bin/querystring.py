#!/usr/bin/env python
# -*- coding: UTF-8 -*-

import os
import urllib.parse

querystring = os.environ.get('QUERY_STRING')
#querystring = "name=takano&pw=himitsu"

keyvals = querystring.split('&')

print('Content-Type: text/html; charset=UTF-8\n')

data = {}
for kv in keyvals:
    [k, v] = kv.split('=')
    data[k] = v

    print(k, data[k])
    #print(k, urllib.parse.unquote(data[k]))