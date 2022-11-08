#!C:/Python310/python
print("Content-Type:text/html")
print()
import cgi

form=cgi.FieldStorage()

firstname=form.getvalue("Firstname")
lastname=form.getvalue("Lastname")
Username=form.getvalue("Username")
password=form.getvalue("password")
contact=form.getvalue("Contact")
code=form.getvalue("code")

import mysql.connector

con=mysql.connector.connect(user='root', password='', host='localhost', database='mine')
cur=con.cursor()

cur.execute("insert into student values(%s,%s,%s,%s,%i,%s)", (firstname,lastname,Username,password,contact,code))
con.commit()

cur.close()
con.close()

print("The entry has been recorde successfully")

