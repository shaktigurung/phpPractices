<?php
    #Function - Block of code that can be repeatedly called
    /*
        Camel Case - myFunction()
        Lower Case - my_function()
        Pascal Case - MyFunction()
    */

//Create Simple Function
// function simpleFunction(){
//     echo 'Hello World';
// }
//Run Simple Function
//simpleFunction();

//Function with Param
// function sayHello($name = 'World'){
//     echo "Hello $name <br>" ;
// }

// sayHello(John);
// sayHello(Bob);
// sayHello();

//Funtion with return values
// function addNumbers($num1, $num2){
//     return $num1 + $num2;
// }

// echo addNumbers(2,3);

//Pass arguement By Reference

$myNum = 10;

function addFive(&$num){
    $num += 5;
}
function addTen(&$num){
    $num += 10;
}

addFive($myNum);
echo "Value: $myNum <br> ";
addTen($myNum);
echo "Value: $myNum <br> ";

?>