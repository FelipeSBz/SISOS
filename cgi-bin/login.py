#!c:/Python3/python.exe
# Importing the 'cgi' module
import cgi


form = cgi.FieldStorage()
if form.getvalue("usuario")=="cpd" and form.getvalue("senha")=="123":
    print ("Set-Cookie: IdSisOS=38-AH3TR5GF7-92A; HttpOnly; Path=/")
    print ("Content-type: text/html\r\n\r\n")
    print ("<script>window.location.href='./autenticacao.py';</script>")

print("Content-type: text/html\r\n\r\n")
print("<html><body>")
print("<h1 style='text-align: center;'> Login </h1>")
# Using the inbuilt methods


#form = cgi.FieldStorage()
#if form.getvalue("usuario")=="cpd" and form.getvalue("senha")=="123":
#    print ("Set-Cookie: sessionid=38afes7a8; HttpOnly; Path=/")

# Using HTML input and forms method
#print("<script>window.location.href='http://192.168.20.210/cgi-bin/sisos/test.py';</script>");
print("<form method='post' action='login.py'>")
print("<p>Name: <input type='text' name='usuario' /></p>")
print("<p>Senha: <input type='password' name='senha' /></p>")
print("<input type='submit' value='Login' />")
print("</form")
print("</body></html>")
