#!/usr/bin/env python
# -*- coding: UTF-8 -*-

import cgi, cgitb
form = cgi.FieldStorage()

# Get data from fields
name = form.getvalue('name')

print ("Content-type:text/html\n\n")
print ("<html>")
print ("<head>")
print ("<title>Hello, world!</title>")
print ("</head>")
print ("<body>")
print ("Hello, %s!" % (name, ))
print ("</body>")
print ("</html>")