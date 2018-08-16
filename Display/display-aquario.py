import time

import Adafruit_GPIO.SPI as SPI
import Adafruit_SSD1306

from PIL import Image
from PIL import ImageDraw
from PIL import ImageFont

import subprocess

# Raspberry Pi pin configuration:
RST = None     # on the PiOLED this pin isnt used
# Note the following are only used with SPI:
DC = 23
SPI_PORT = 0
SPI_DEVICE = 0

# Alternatively you can specify an explicit I2C bus number, for example
# with the 128x32 display you would use:
disp = Adafruit_SSD1306.SSD1306_128_64(rst=RST, i2c_bus=1)

# Initialize library.
disp.begin()

# Clear display.
#disp.clear()
#disp.display()

# Create blank image for drawing.
# Make sure to create image with mode '1' for 1-bit color.
width = disp.width
height = disp.height
image = Image.new('1', (width, height))

# Get drawing object to draw on image.
draw = ImageDraw.Draw(image)

# Draw a black filled box to clear the image.
draw.rectangle((0,0,width,height), outline=0, fill=0)

# Draw some shapes.
# First define some constants to allow easy resizing of shapes.
padding = -2
top = padding
bottom = height-padding
# Move left to right keeping track of the current x position for drawing shapes.
x = 0


# Load default font.
font = ImageFont.load_default()

# Alternatively load a TTF font.  Make sure the .ttf font file is in the same directory as the python script!
# Some other nice fonts to try: http://www.dafont.com/bitmap.php
# font = ImageFont.truetype('Minecraftia.ttf', 8)


    # Draw a black filled box to clear the image.
draw.rectangle((0,0,width,height), outline=0, fill=0)

# Shell scripts for system monitoring from here : https://unix.stackexchange.com/questions/119126/command-to-display-memory-usage-disk-usage-and-cpu-load

cmd = "cat /var/www/html/Temp/TEMP01.txt"
TEMP1 = subprocess.check_output(cmd, shell = True )

cmd = "cat /var/www/html/Temp/TEMP02.txt"
TEMP2 = subprocess.check_output(cmd, shell = True )

cmd = "cat /var/www/html/PH/PH.txt"
PH = subprocess.check_output(cmd, shell = True )

cmd = "bash /var/www/html/Luzes/Luzes.sh"
LUZ = subprocess.check_output(cmd, shell = True )

cmd = "cat /var/www/html/GPIO/relay_a_06.txt"
AQ1 = subprocess.check_output(cmd, shell = True )

cmd = "cat /var/www/html/GPIO/relay_a_03.txt "
AER1 = subprocess.check_output(cmd, shell = True )

PH = " "
CO2 = " "

    # Write two lines of text.
# Clear display.
disp.clear()
disp.display()

draw.text((x, top), "Temp Entrada: " + str(TEMP1),  font=font, fill=255)
draw.text((x, top+9), "Temp Retorno: " + str(TEMP2),  font=font, fill=255)
draw.text((x, top+18), "Aquecedor: " + str(AQ1), font=font, fill=255)
draw.text((x, top+27), "Luz:" + str(LUZ), font=font, fill=255)
draw.text((x, top+36), "Aerador: " + str(AER1) , font=font, fill=255)
draw.text((x, top+48), "PH: " + str(PH),  font=font, fill=255)
#draw.text((x, top+48), "CO2: " + str(CO2),  font=font, fill=255)
#draw.text((x, top+56), "CO2: " + str(CO2),  font=font, fill=255)

  # Display image.
disp.image(image)
disp.display()
time.sleep(.10)
