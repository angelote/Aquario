#!/bin/sh -e

i2cset -y 1 0x20 0x00 0x00 # IODIRA all pins outputs
i2cset -y 1 0x20 0x01 0x00 # IODIRB all pins outputs
# i2cset -y 1 0x20 0x14 0xff # OLATA all pins high
# i2cset -y 1 0x20 0x15 0xff # OLATB all pins high
i2cset -y 1 0x20 0x15 0x00 # OLATB all pins low
i2cset -y 1 0x20 0x14 0x00 # OLATA all pins low


/var/www/html/GPIO/Ativa_GPIO.sh

exit 0


