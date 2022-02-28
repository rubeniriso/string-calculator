# String Calculator TDD Kata

## Table of contents

#### [1. Language used](#languageused)

#### [2. Kata description](#katadescription)

1. [String calculator](#stringcalculator)
2. [First step](#firststep)
3. [Many numbers](#manynumbers)
4. [Newline as separator](#newline)
5. [Custom separators](#customseparators)
6. [Negative numbers](#negativenumbers)
7. [Multiple errors](#multipleerrors)

------------


#### 3. Process followed

###  <a name="languageused"/>Language used

PHP

###  <a name="katadescription"/> Kata description:

#### <a name="stringcalculator"/>String calculator

This classic kata guides you step by step through the implementation of a calculator that receives a String as input. It is a good exercise on refactoring and incremental implementation. It is also a good candidate for practising TDD.

#### <a name="firststep"/>First step

Create a function add that takes a String and returns a String:

String add(String number)

- The method can take 0, 1 or 2 numbers separated by comma, and returns their sum.
- An empty string will return “0”.
- Example of inputs: "", "1", "1.1,2.2".

#### <a name="manynumbers"/>Many numbers

Allow the add method to handle an unknow number of arguments.

#### <a name="newline"/>Newline as separator

Allow the add method to handle newlines as separators:

-         "1\n2,3" should return "6".
-         "175.2,\n35" is invalid and should return the message "Number expected but '\n' found at position 6."

Missing number in last position

Don't allow the input to end in a separator.

-     "1,3," is invalid and should return the message Number expected but EOF found.

#### <a name="customseparators"/> Custom separators

Allow the add method to handle a different delimiter. To change the delimiter, the beginning of the input will contain a separate line that looks like this:

-         "//;\n1;2" should return "3"
-         "//|\n1|2|3" should return "6"
-         "//sep\n2sep3" should return "5"
-         "//|\n1|2,3" is invalid and should return the message "'|' expected but ',' found at position 3."

All existing scenarios should work as before.

#### <a name="negativenumbres"/> Negative numbers

Calling add with negative numbers will return the message "Negative not allowed : " listing all negative numbers that were in the list of numbers.

-         "-1,2" is invalid and should return the message "Negative not allowed : -1"
-         "2,-4,-5" is invalid and should return the message "Negative not allowed : -4, -5"

#### <a name="multipleerrors"/>Multiple errors

Calling add with multiple errors will return all error messages separated by newlines.

-     "-1,,2" is invalid and return the message "Negative not allowed : -1\nNumber expected but ',' found at position 3."

###  <a name="processfollowed"/>Process followed

The process I followed was essentially a classic  TDD cycle, in which I'd write a  failing test for each of the points in the description of the problem, then make the easiest way I could find to make the test pass (commiting that) and then refactoring whatever I thought could be improved/polished.
![TDD cycle](https://www.qrry.com/wp-content/uploads/2020/03/test-driven-development-TDD.png "TDD Cycle")
Finally, once I'd finished all the objectives, I kept refactoring further a bit in another branch (this was technically unnecessary) where I added a couple of functions to make the **add** function clearer. Some more refactoring could be done, but there was a deadline I had to meet (uni project).
