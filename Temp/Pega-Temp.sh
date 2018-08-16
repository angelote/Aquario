#!/bin/bash
#
# Pega as temperaturas e gera arquivos
DIA=$(date +"%Y%m%d")
HORA=$(date +"%H%M00")
echo "$DIA - $HORA"

awk -F'=' '{print $2}' /sys/bus/w1/devices/28-0117b32e70ff/w1_slave | grep -v YES > /var/www/html/Temp/TEMP01.txt

TEMP1=$(cat /var/www/html/Temp/TEMP01.txt)

if [ $TEMP1 -le 25500 ]; then
   echo "ON" > /var/www/html/GPIO/esp_2.txt
fi	

if [ $TEMP1 -ge 27000  ]; then
   echo "OFF" > /var/www/html/GPIO/esp_2.txt
fi

#mysql -u root -poxalameupai -e "INSERT INTO Temperatura (idtemperatura, data, sensor, temperatura, tdate, ttime) VALUES (NULL, NOW(), '28-0117b32e70ff', ($TEMP1 / 1000), $DIA, $HORA);" Aquarium
mysql -u root -poxalameupai -e "INSERT INTO Temperatura (idtemperatura, sensor, temperatura, data, hora) VALUES (NULL, '28-0117b32e70ff', ($TEMP1 / 1000), $DIA, $HORA);" Aquarium

awk -F'=' '{print $2}' /sys/bus/w1/devices/28-0517c46481ff/w1_slave | grep -v YES > /var/www/html/Temp/TEMP02.txt

TEMP2=$(cat /var/www/html/Temp/TEMP02.txt)

if [ $TEMP2 -le 25500 ]; then
   echo "ON" > /var/www/html/GPIO/esp_5.txt
fi	

if [ $TEMP2 -ge 27000  ]; then
   echo "OFF" > /var/www/html/GPIO/esp_5.txt
fi

mysql -u root -poxalameupai -e "INSERT INTO Temperatura (idtemperatura, sensor, temperatura, data, hora) VALUES (NULL, '28-0517c46481ff', ($TEMP2 / 1000), $DIA, $HORA);" Aquarium


awk -F'=' '{print $2}' /sys/bus/w1/devices/28-02148145d4ff/w1_slave | grep -v YES > /var/www/html/Temp/TEMP03.txt

TEMP3=$(cat /var/www/html/Temp/TEMP03.txt)


echo "1 - $TEMP1 "
echo "2 - $TEMP2 "
