from turtle import *
from random import randint
speed(0)
bgcolor("black")
x=1
while x < 4000:
    r=randint(0,255)
    b=randint(0,255)
    g=randint(0,255)
    colormode(255)
    pencolor(r,g,b)
    fd(60+x)
    rt(90.911)
    x +=1

exitonclick()



