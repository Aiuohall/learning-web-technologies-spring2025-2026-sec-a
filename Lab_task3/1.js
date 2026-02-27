document.getElementById("submitBtn").addEventListener("click", function() {
    var input = document.getElementById("nameInput").value;
    var messageDiv = document.getElementById("message");
    
   
   
    if (input.trim() === "") {
        messageDiv.innerHTML = "Error: Input cannot be empty";
        messageDiv.style.color = "red";
        return;
    }
    
    
    var words = input.trim().split(/\s+/);
    if (words.length < 2) {
        messageDiv.innerHTML = "Error: Input must contain at least two words";
        messageDiv.style.color = "red";
        return;
    }
    
    var validChars = /^[a-zA-Z][a-zA-Z.-]*$/;
    if (!validChars.test(input)) {
        messageDiv.innerHTML = "Error: Input must start with a letter and can only contain letters, dots, or dashes";
        messageDiv.style.color = "red";
        return;
    }
    

    messageDiv.innerHTML = "Validation Successful!";
    messageDiv.style.color = "green";
});