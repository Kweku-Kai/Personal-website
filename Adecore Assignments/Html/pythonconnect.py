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
cursor=con.cursor()

cursor.execute("insert into users (firstname,lastname,Username,password,contact,code) values(%s,%s,%s,%s,%s,%s)")
con.commit()

cursor.close()
con.close()

print("The entry has been recorde successfully")

