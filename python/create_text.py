#!/usr/bin/env python
from datetime import datetime

f = open("python/files/test.txt", "w+")

f.write("Test for writing file and accessing it from server.")

now = datetime.now()
now_string = now.strftime("%d/%m/%Y %H:%M:%S")

f.write("\nFile created: " +  now_string)
f.close()
