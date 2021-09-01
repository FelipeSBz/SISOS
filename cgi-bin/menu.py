#!c:/Python3/python.exe

import os

print ("Content-type: text/html\r\n\r\n");
logado=0

for param in os.environ.keys():
   if param == "HTTP_COOKIE":
       if 'IdSisOS=38-AH3TR5GF7-92A' in os.environ[param]:
          logado=1

if logado == 1:
    print("<A HREF='../formulario.html'><FONT COLOR=BLUE><B>Criar Ordem de Serviço</B></FONT></A><BR><BR>")
    print("<A HREF='../banco/consultar_os.php'><FONT COLOR=BLUE><B>Ordem de Serviço Abertas</B></FONT></A><BR><BR>")
    print("<A HREF='../banco/consultar_os_encerrada.php'><FONT COLOR=BLUE><B>Ordem de Serviço Encerradas</B></FONT></A><BR><BR>")
    print("<A HREF='../buscar.html'><FONT COLOR=BLUE><B>Relatório</B></FONT></A><BR><BR>")
    print("<A HREF='../banco/chamados/msg_aberta.php'><FONT COLOR=BLUE><B>Mensagens</B></FONT></A><BR>")
if logado == 0:
    print("<div align='center'><img src='../img/tartaruga-600x434.jpg'></div>")
