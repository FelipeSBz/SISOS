#!c:/Python3/python.exe

import os

print ("Content-type: text/html\r\n\r\n");
logado=0

for param in os.environ.keys():
   if param == "HTTP_COOKIE":
       if 'IdSisOS=38-AH3TR5GF7-92A' in os.environ[param]:
          logado=1

if logado == 1:
    print("Bem Vindo CPD!")
if logado == 0:
    print("Você não está Logado!")

