import math:

#variables
int diameter
int area
int circumference
int radius
int pi = math.pi

diameter = int(input("Please enter the diameter))
radius = (diameter / 2)
area  = (pi * (radius ^ 2))

circumference = (2 * (pi * radius))

print(area, circumference)
