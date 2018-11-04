//window.alert("hello World");


"use strict"  //this line is correct do not modify it

//This function create an array of numbers 
//and copies the even ones into another array, which is returned

function getEvenNumbers(){
  var numbers = [21,42,63,24,65,76,87,108];
  var evenNumbers = [];
  for(var i=0; i < numbers.length; i++){
      if(numbers[i] % 2 == 0 ){



          evenNumbers.push(numbers[i]);
      }
      
  }
  return evenNumbers;
}
  
//this function accepts and array of even numbers and outputs them to the console
function displayEvenNumbers(evenNumbers){
  for(var i=0; i < evenNumbers.length; i++){
    console.log(evenNumbers[i]);
    }
}

$( document ).ready(function() {  //This line is correct - do not modify it
  
  var numbers = getEvenNumbers();
  displayEvenNumbers(numbers);
 
}); //This line is correct - do not modify it
