console.log ("Tic-Tac-Toe");

let currentPlayer = "X";
let gameBoard = ["","","","","","","","",""];
let gameActive = true;


const winningCombos = [
    [0,1,2], [3,4,5], [6,7,8], 
    [0,3,6], [1,4,7], [2,5,8], 
    [0,4,8], [2,4,6]  
];

function getGameState() {
    console.log("Player:", currentPlayer);
    console.log("Board:", gameBoard);
    return gameBoard;
}

function handleCellClick(cellIndex)
 {
    console.log("Cell clicked:", cellIndex);
    
    if(gameBoard[cellIndex] !== "" || !gameActive) {
        console.log("Cell taken or game over");
        return;
    }

     gameBoard[cellIndex] = currentPlayer;
    let cell = document.querySelector(`[data-index="${cellIndex}"]`);
    cell.textContent = currentPlayer;
    
    if(currentPlayer === "X") {
        cell.style.color = "red";
        cell.style.backgroundColor = "#ffe6e6";
    } else {
        cell.style.color = "blue";
        cell.style.backgroundColor = "#e6f3ff";
    }
    
    // Check win
    if(checkWin()) {
        gameActive = false;
        console.log(currentPlayer + " WINS!");
        alert(currentPlayer + " Wins!");
        return;
    }

     if(!gameBoard.includes("")) {
        gameActive = false;
        console.log("DRAW!");
        alert("It's a Draw!");
        return;
    }
    
     currentPlayer = currentPlayer === "X" ? "O" : "X";
    console.log("Next player:", currentPlayer);
}

function checkWin() {
    for(let combo of winningCombos) {
        let [a, b, c] = combo;
        if(gameBoard[a] && gameBoard[a] === gameBoard[b] && gameBoard[a] === gameBoard[c]) {
            return true;
        }
    }
    return false;
}

function resetGame() {
    currentPlayer = "X";
    gameBoard = ["","","","","","","","",""];
    gameActive = true;
    
    let cells = document.querySelectorAll(".cell");
    for(let cell of cells) {
        cell.textContent = "";
        cell.style.backgroundColor = "white";
        cell.style.color = "";
    }
    
    console.log("Game Reset");
}

function initGame(){
    setupBoard();
 
    document.getElementById("reset").oneclick = resetGame;
document.body.style.textAlign = "center";

}