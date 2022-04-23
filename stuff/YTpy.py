#!/usr/bin/env python3
# YTpy By Succulent64
# This is really shitty, but I never really used python often, so yeah.

import os  
try:
    from pytube import YouTube 
except:
    print("pytube is required to use YTpy")
  
file_types = ["mp4", "3gpp"]

print("YTpy By Succulent64\n")
print("Version 0.0.1\n")
print("Supported files types: mp4, 3gpp\n")

video_id = input("Enter an ID: ")
if not video_id:
    print("Video ID cannot be empty")
    os.system("pause")
file_type = input("Enter an file type: ")
if not file_type:
    print("File type cannot be empty")
    os.system("pause")
audio_only = input("Audio only? (yes, no): ")
if not audio_only:
    print("Using Audio and Video")
if file_type in file_types:
    try:
        yt = YouTube('http://youtube.com/watch?v=' + video_id)
        if audio_only == "yes":
            stream = yt.streams.filter(progressive=True, only_audio=True, file_extension="3gpp")
        else:
            stream = yt.streams.filter(progressive=True, file_extension=file_type)
        stream.first().download()
    except:
        print("Download Failed")
        os.system("pause")
    else:
       print("Download Complete") 
       os.system("pause")
else:
    print("Invaild file type")
    os.system("pause")