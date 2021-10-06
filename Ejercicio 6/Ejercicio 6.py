# -*- coding: utf-8 -*-
"""
Created on Sun Oct  3 00:41:37 2021

@author: velar
"""

import psycopg2 as pc

conexion = pc.connect(user="postgres",
                      password="123456",
                      host="127.0.0.1",
                      port="5432",
                      database="mibasedaniel")

cursor = conexion.cursor()
sql1="INSERT INTO persona VALUES ('654321', 'Jose Mamani Mamani', '1995-10-13', '05', 'est')"
sql2="INSERT INTO persona VALUES ('123456', 'Maria Quispe Quispe', '1999-01-25', '06', 'est')"
cursor.execute(sql1)
cursor.execute(sql2)
conexion.commit()
conexion.close()