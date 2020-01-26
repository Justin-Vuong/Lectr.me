import os
import argparse
from pydub import AudioSegment
from pydub.playback import play
from pydub.silence import split_on_silence
import pydub.audio_segment as Audio
import pydub.pyaudioop

parser = argparse.ArgumentParser()
parser.add_argument("filename")
parser.add_argument("environment_sound", type = str, nargs='?', default="moderate")
args = parser.parse_args()


def audioInput(inFileName):
    sound = AudioSegment.from_file(inFileName, format="mp3")
    return sound

editFile = audioInput(args.filename)
minDB_silence = -20
num = 0

dBTable = {"low":-25,"moderate":-30,"high":-40}

output = split_on_silence(editFile, 250, dBTable[args.environment_sound], 100,seek_step=1)
try:
    outputFile = output[0]
    for a in range(1, len(output)):
        outputFile += output[a]
        print(str(num))
        num+=1
except:
    outputFile = editFile

compression = int(100.0* round(1.0 - (float(len(outputFile))/float(len(editFile))),4))
print("Trying with silence at " + str(minDB_silence) + "dB and the compression is " + str(compression))
maxCompression = compression
exportFile = outputFile



print("Exporting...")
exportFile.export("Cut_"+"_"+ args.filename, format='mp3')
print("Done. Cut_" + args.filename + " was cut down by " + str(maxCompression) + "%")
