
   function getDisplayValue()
 {
    
let displayValue = document.forms["calc"].display.value;
 console.log("Current display value:", displayValue);
    return displayValue;
}

function setDisplayValue(newValue)

{
    document.forms["calc"].display.value = newValue;

 console.log("Display set to:", newValue);
}



     function appendToDisplay(value) {
      let currentValue = getDisplayValue();
 setDisplayValue(currentValue + value);

}

function  clearDisplay() 
{
    setDisplayValue("");
    console.log("Display cleared");
}

function calculateResult()
     {
      let expression = getDisplayValue();
            let result = eval(expression);
    setDisplayValue(result);
    console.log("Calculation result:", result);
    return result;
}

function deleteLastChar() 
{
let currentValue = getDisplayValue() ;

    let newValue = currentValue.slice(0, -1);
 setDisplayValue(newValue);
    console.log("Last character deleted");
}

function calcButtons() 

{
    let numberButtons = ["7", "8", "9", "/", "4", "5", "6", "*", "1", "2", "3", "-", "0", ".", "+"];
    
    for (let i = 0; i < numberButtons.length; i++) {
        let buttonValue = numberButtons[i];
        let buttons = document.querySelectorAll(`input[value="${buttonValue}"]`);
        
        for (let button of buttons) {
            button.onclick = function() {
                appendToDisplay(buttonValue);
            };
        }
    }
    
 //equal
    let equalsButton = document.querySelector('input[value="="]');
    equalsButton.onclick = function() {
        calculateResult();
    };
    
//clear
    let clearButton = document.getElementById("clear");
    clearButton.onclick = function() {
        clearDisplay();
    };
}


function initCalculator() {
    
    console.log("Welcome.");
}


window.addEventListener("load", initCalculator);



