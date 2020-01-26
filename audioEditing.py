import os
import argparse
from pydub import AudioSegment
from pydub.playback import play
from pydub.silence import split_on_silence
import pydub.audio_segment as Audio
import pydub.pyaudioop

parser = argparse.ArgumentParser()
parser.add_argument("filename")
parser.add_argument("min_decibels")
args = parser.parse_args()

def audioInput(inFileName):
    sound = AudioSegment.from_file(inFileName, format="mp3")
    return sound

editFile = audioInput(args.filename)


output = split_on_silence(editFile, 250, args.min_decibels, 100,seek_step=1)
print("now saving files:")
num = 0



try:
    outputFile = output[0]
    for a in range(1, len(output)):
        outputFile += output[a]
        print(str(num))
        num+=1
except:
    outputFile = editFile
    pass
print("Exporting...")
outputFile.export("Cut_" + args.filename + str(num), format='mp3')
print("Done. Cut_" + args.filename + " was cut down by " + str(100* round(1.0 - (float(len(outputFile))/float(len(editFile))),4))+ "%")
