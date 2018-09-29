#!/usr/local/bin/python3

import sys 
from mutagen import File

if len(sys.argv)<2:
    print("Usage: ",sys.argv[0],"""filename
    filename must be *.mp3
    output *.jpg
    """)
    sys.exit()

filename=sys.argv[1]

afile=File(filename)
file_info=afile.tags["APIC:"].data

jpg_file=filename.replace('mp3','jpg')
with open(jpg_file,'wb') as f:
    f.write(file_info)


