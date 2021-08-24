##################################################################################
## Meysam behroziuan azmon daneshsara 1399/1400
## test zarb kasri ba zaban python3
## link project online https://www.spacify.ir/mainTest/
## https://www.spacify.ir
## team code 891628
## github team https://github.com/Aryia-Behroziuan/test-codenevisi.src.medu.ir
##################################################################################

## Call libraries
import time
from fractions import Fraction
import cv2
import numpy as np

## Get app input
mainOne = int(input('Number before decimal:'))
print('method  /')
kasrOne = int(input('The next decimal number:'))
print('math *')
mainTow = int(input('Number before decimal:'))
print('method  /')
kasrTow = int(input('The next decimal number:'))

print()
print('Response------------------------------------')
print()

## Perform operations
one_ninth = Fraction(mainOne, kasrOne)
one_seventh = Fraction(mainTow, kasrTow)
ninth_plus_seventh = one_ninth + one_seventh
ninth_multiply_seventh = one_ninth * one_seventh
print("one_ninth's value is:", one_ninth)
print("one_seventh's value is:", one_seventh)
print("addition of the two:", ninth_plus_seventh)
print("multiplication of the two:", ninth_multiply_seventh)


## Create image for display
def showimage(img):
     cv2.imshow('img', img)
     cv2.waitKey()
     cv2.destroyAllWindows()

## create black img
img = np.zeros((10000,10000,3))


## Create rectangle
display = 10
displayOne = 100

## create display for view image
while mainOne > 0:
     img = cv2.rectangle(img,pt1=(display,10),pt2=(displayOne,100),color=(255,0,0),thickness=-1)
     mainOne = mainOne - 1
     display = display + 100
     displayOne = displayOne + 100
else:
    print("Inside else")

## for kasr
display1 = 10
display2 = 100
while kasrOne > 0:
     img = cv2.rectangle(img,pt1=(display1,10),pt2=(display2,100),color=(255,0,0),thickness=3)
     kasrOne = kasrOne - 1
     display1 = display1 + 100
     display2 = display2 + 100
else:
    print("Inside else")


## Create rectangle
displa3 = 10
display4 = 100

## create display for view image
while mainTow > 0:
     img = cv2.rectangle(img,pt1=(displa3,110),pt2=(display4,210),color=(0,255,0),thickness=-1)
     mainTow = mainTow - 1
     displa3 = displa3 + 100
     display4 = display4 + 100
else:
    print("Inside else")

## for kasr
display5 = 10
display6 = 100
while kasrTow > 0:
     img = cv2.rectangle(img,pt1=(display5,110),pt2=(display6,210),color=(0,225,0),thickness=3)
     kasrTow = kasrTow - 1
     display5 = display5 + 100
     display6 = display6 + 100
else:
    print("Inside else")

if mainOne > kasrOne:
	showimage(img)
else:
	print()
	print('They do not show a fraction larger than one with a figure')


time.sleep(20)

""" Python3 program to add 2 fractions

# Function to return gcd of a and b
def gcd(a, b):
	if (a == 0):
		return b
	return gcd(b % a, a)

# Function to convert the obtained
# fraction into it's simplest form
def lowest(den3, num3):

	# Finding gcd of both terms
	common_factor = gcd(num3, den3)

	# Converting both terms
	# into simpler terms by
	# dividing them by common factor
	den3 = int(den3 / common_factor)
	num3 = int(num3 / common_factor)
	print(num3, "/", den3)

# Function to add two fractions
def addFraction(num1, den1, num2, den2):

	# Finding gcd of den1 and den2
	den3 = gcd(den1, den2)

	# Denominator of final
	# fraction obtained finding
	# LCM of den1 and den2
	# LCM * GCD = a * b
	den3 = (den1 * den2) / den3

	# Changing the fractions to
	# have same denominator Numerator
	# of the final fraction obtained
	num3 = ((num1) * (den3 / den1) +
			(num2) * (den3 / den2))

	# Calling function to convert
	# final fraction into it's
	# simplest form
	lowest(den3, num3)

# Driver Code
num1 = 1; den1 = 500
num2 = 2; den2 = 1500

print(num1, "/", den1, " + ", num2, "/",
	den2, " is equal to ", end = "")
	
addFraction(num1, den1, num2, den2)
"""

