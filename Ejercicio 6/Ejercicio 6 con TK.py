# -*- coding: utf-8 -*-
"""
Created on Tue Oct  5 21:38:56 2021

@author: velar
"""

from tkinter import Tk, Canvas, Label, Frame, Entry, Button, W, E, Listbox, END
import psycopg2 as pc

ven = Tk()
ven.title("Insertar Estudiante");

def insertar(ci,nombre,fechanac,depar):
    conect = pc.connect(user="postgres",
               password="123456",
               host="127.0.0.1",
               port="5432",
               database="mibasedaniel")
    cursor = conect.cursor()
    sql = '''INSERT INTO persona(ci,nombre,fechanac,departamento,personaje) VALUES (%s,%s,%s,%s,%s)'''
    cursor.execute(sql,(ci,nombre,fechanac,depar,'est'))
    print("Insertado")
    conect.commit()
    conect.close()
    mostrar()
    
def mostrar():
    conect = pc.connect(user="postgres",
               password="123456",
               host="127.0.0.1",
               port="5432",
               database="mibasedaniel")
    cursor = conect.cursor()
    sql = '''SELECT * FROM persona Where personaje='est' '''
    cursor.execute(sql)
    row = cursor.fetchall()
    
    lista = Listbox(frame, width=57,height=55)
    lista.grid(row=10, columnspan=4, sticky=W+E)
    
    for x in row:
        lista.insert(END,x)
    
    conect.commit()
    conect.close()

#Ventana
estilo = Canvas(ven, height=450, width=450)
estilo.pack();

frame = Frame();
frame.place(relx=0.1, rely=0.1, relwidth=0.8, relheight=0.8)

label = Label(frame, text='Ingrese Datos')
label.grid(row=0, column=1)

#Ci
label = Label(frame, text='Ci')
label.grid(row=1, column=0)

entry_ci = Entry(frame)
entry_ci.grid(row=1, column=1)

#nombre
label = Label(frame, text='Nombre')
label.grid(row=2, column=0)

entry_nombre = Entry(frame)
entry_nombre.grid(row=2, column=1)

#fecha_nacimiento
label = Label(frame, text='Fecha de Nacimiento')
label.grid(row=3, column=0)

entry_fec = Entry(frame)
entry_fec.grid(row=3, column=1)

#departamento
label = Label(frame, text='Departamento')
label.grid(row=4, column=0)

entry_departamento = Entry(frame)
entry_departamento.grid(row=4, column=1)

#boton
button = Button(frame, text="Agregar", command=lambda:insertar(
    entry_ci.get(),
    entry_nombre.get(),
    entry_fec.get(),
    entry_departamento.get()
    ))
button.grid(row=5, column=1, sticky=W+E)

mostrar()
ven.mainloop()