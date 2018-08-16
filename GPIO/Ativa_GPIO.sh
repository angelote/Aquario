#!/bin/bash
#
#
#

RELE_A_01=$(cat /var/www/html/GPIO/relay_a_01.txt)
RELE_A_02=$(cat /var/www/html/GPIO/relay_a_02.txt)
RELE_A_03=$(cat /var/www/html/GPIO/relay_a_03.txt)
RELE_A_04=$(cat /var/www/html/GPIO/relay_a_04.txt)
RELE_A_05=$(cat /var/www/html/GPIO/relay_a_05.txt)
RELE_A_06=$(cat /var/www/html/GPIO/relay_a_06.txt)
RELE_A_07=$(cat /var/www/html/GPIO/relay_a_07.txt)
RELE_A_08=$(cat /var/www/html/GPIO/relay_a_08.txt)
RELE_B_01=$(cat /var/www/html/GPIO/relay_b_01.txt)
RELE_B_02=$(cat /var/www/html/GPIO/relay_b_02.txt)
RELE_B_03=$(cat /var/www/html/GPIO/relay_b_03.txt)
RELE_B_04=$(cat /var/www/html/GPIO/relay_b_04.txt)
RELE_B_05=$(cat /var/www/html/GPIO/relay_b_05.txt)
RELE_B_06=$(cat /var/www/html/GPIO/relay_b_06.txt)
RELE_B_07=$(cat /var/www/html/GPIO/relay_b_07.txt)
RELE_B_08=$(cat /var/www/html/GPIO/relay_b_08.txt)

GPIO_00=$(cat /var/www/html/GPIO/gpio_0_11.txt)
GPIO_01=$(cat /var/www/html/GPIO/gpio_1_12.txt)
GPIO_02=$(cat /var/www/html/GPIO/gpio_2_13.txt)
GPIO_03=$(cat /var/www/html/GPIO/gpio_3_15.txt)
GPIO_04=$(cat /var/www/html/GPIO/gpio_4_16.txt)
GPIO_05=$(cat /var/www/html/GPIO/gpio_5_18.txt)

ESP_01=$(cat /var/www/html/GPIO/esp_1.txt)
ESP_02=$(cat /var/www/html/GPIO/esp_2.txt)
ESP_03=$(cat /var/www/html/GPIO/esp_3.txt)
ESP_04=$(cat /var/www/html/GPIO/esp_4.txt)
ESP_05=$(cat /var/www/html/GPIO/esp_5.txt)
ESP_06=$(cat /var/www/html/GPIO/esp_6.txt)
ESP_07=$(cat /var/www/html/GPIO/esp_7.txt)
ESP_08=$(cat /var/www/html/GPIO/esp_8.txt)

if [ "${RELE_A_01}" = "OFF" ];then BINARIO_A="1" ;else BINARIO_A="0" ;fi
if [ "${RELE_A_02}" = "OFF" ];then BINARIO_A="${BINARIO_A}1" ;else BINARIO_A="${BINARIO_A}0" ;fi
if [ "${RELE_A_03}" = "OFF" ];then BINARIO_A="${BINARIO_A}1" ;else BINARIO_A="${BINARIO_A}0" ;fi
if [ "${RELE_A_04}" = "OFF" ];then BINARIO_A="${BINARIO_A}1" ;else BINARIO_A="${BINARIO_A}0" ;fi
if [ "${RELE_A_05}" = "OFF" ];then BINARIO_A="${BINARIO_A}1" ;else BINARIO_A="${BINARIO_A}0" ;fi
if [ "${RELE_A_06}" = "OFF" ];then BINARIO_A="${BINARIO_A}1" ;else BINARIO_A="${BINARIO_A}0" ;fi
if [ "${RELE_A_07}" = "OFF" ];then BINARIO_A="${BINARIO_A}1" ;else BINARIO_A="${BINARIO_A}0" ;fi
if [ "${RELE_A_08}" = "OFF" ];then BINARIO_A="${BINARIO_A}1" ;else BINARIO_A="${BINARIO_A}0" ;fi

if [ "${RELE_B_01}" = "OFF" ];then BINARIO_B="0" ;else BINARIO_B="0" ;fi
if [ "${RELE_B_02}" = "OFF" ];then BINARIO_B="${BINARIO_B}1" ;else BINARIO_B="${BINARIO_B}0" ;fi
if [ "${RELE_B_03}" = "OFF" ];then BINARIO_B="${BINARIO_B}1" ;else BINARIO_B="${BINARIO_B}0" ;fi
if [ "${RELE_B_04}" = "OFF" ];then BINARIO_B="${BINARIO_B}1" ;else BINARIO_B="${BINARIO_B}0" ;fi
if [ "${RELE_B_05}" = "OFF" ];then BINARIO_B="${BINARIO_B}1" ;else BINARIO_B="${BINARIO_B}0" ;fi
if [ "${RELE_B_06}" = "OFF" ];then BINARIO_B="${BINARIO_B}1" ;else BINARIO_B="${BINARIO_B}0" ;fi
if [ "${RELE_B_07}" = "OFF" ];then BINARIO_B="${BINARIO_B}1" ;else BINARIO_B="${BINARIO_B}0" ;fi
if [ "${RELE_B_08}" = "OFF" ];then BINARIO_B="${BINARIO_B}1" ;else BINARIO_B="${BINARIO_B}0" ;fi


DEC_A=$(echo "obase=10;ibase=2;$BINARIO_A" | bc)
HEX_A=$(echo "obase=16;ibase=2;$BINARIO_A" | bc)

DEC_B=$(echo "obase=10;ibase=2;$BINARIO_B" | bc)
HEX_B=$(echo "obase=16;ibase=2;$BINARIO_B" | bc)


#echo -n "Acionando Reles A - "
#echo "A - ${BINARIO_A} - ${HEX_A} - ${DEC_A}"
#echo  "i2cset -y 1 0x20 0x14 0x${HEX_A}"
#/usr/sbin/i2cset -y 1 0x20 0x14 0x${HEX_A}

#echo -n "Acionando Reles B - "
#echo "A - ${BINARIO_B} - ${HEX_B} - ${DEC_B}"
#echo  "i2cset -y 1 0x20 0x15 0x${HEX_B}"
#/usr/sbin/i2cset -y 1 0x20 0x15 0x${HEX_B}

# i2cset -y 1 0x20 0x00 0x00 # IODIRA all pins outputs
# i2cset -y 1 0x20 0x01 0x00 # IODIRB all pins outputs
# i2cset -y 1 0x20 0x14 0xff # OLATA all pins high
# i2cset -y 1 0x20 0x15 0xff # OLATB all pins high
# i2cset -y 1 0x20 0x15 0x00 # OLATB all pins low
# i2cset -y 1 0x20 0x14 0x00 # OLATA all pins low

if [ "${GPIO_00}" = "OFF" ]; then gpio mode 0 out; gpio write 0 1; else gpio mode 0 out; gpio write 0 0; fi
if [ "${GPIO_01}" = "OFF" ]; then gpio mode 1 out; gpio write 1 1; else gpio mode 1 out; gpio write 1 0; fi
if [ "${GPIO_02}" = "OFF" ]; then gpio mode 2 out; gpio write 2 1; else gpio mode 2 out; gpio write 2 0; fi
if [ "${GPIO_03}" = "OFF" ]; then gpio mode 3 out; gpio write 3 1; else gpio mode 3 out; gpio write 3 0; fi
if [ "${GPIO_04}" = "OFF" ]; then gpio mode 4 out; gpio write 4 1; else gpio mode 4 out; gpio write 4 0; fi
if [ "${GPIO_05}" = "OFF" ]; then gpio mode 5 out; gpio write 5 1; else gpio mode 5 out; gpio write 5 0; fi

if [ "${ESP_01}" = "OFF" ]; then curl http://192.168.25.110/gpio/1/1; else curl http://192.168.25.110/gpio/1/0; fi
if [ "${ESP_02}" = "OFF" ]; then curl http://192.168.25.110/gpio/2/1; else curl http://192.168.25.110/gpio/2/0; fi
if [ "${ESP_03}" = "OFF" ]; then curl http://192.168.25.110/gpio/3/1; else curl http://192.168.25.110/gpio/3/0; fi
if [ "${ESP_04}" = "OFF" ]; then curl http://192.168.25.110/gpio/4/1; else curl http://192.168.25.110/gpio/4/0; fi
if [ "${ESP_05}" = "OFF" ]; then curl http://192.168.25.110/gpio/5/1; else curl http://192.168.25.110/gpio/5/0; fi
if [ "${ESP_06}" = "OFF" ]; then curl http://192.168.25.110/gpio/6/1; else curl http://192.168.25.110/gpio/6/0; fi
if [ "${ESP_07}" = "OFF" ]; then curl http://192.168.25.110/gpio/7/1; else curl http://192.168.25.110/gpio/7/0; fi
if [ "${ESP_08}" = "OFF" ]; then curl http://192.168.25.110/gpio/8/1; else curl http://192.168.25.110/gpio/8/0; fi

