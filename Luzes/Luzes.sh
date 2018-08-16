#!/bin/bash
#
# Pega os valores dos reles 1, 2, 3 e 4.
DIR=“/var/www/html/Reles”

RELE01=$(cat /var/www/html/GPIO/relay_b_01.txt)
RELE02=$(cat /var/www/html/GPIO/relay_b_02.txt)
RELE03=$(cat /var/www/html/GPIO/relay_b_03.txt)
RELE04=$(cat /var/www/html/GPIO/relay_b_04.txt)

echo ${RELE01}:${RELE02}:${RELE03}:${RELE04}

