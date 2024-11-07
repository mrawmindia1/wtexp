// JavaScript event handling example

// Change background color on button click
const changeColorButton = document.getElementById("changeColorButton");
changeColorButton.addEventListener("click", () => {
    document.body.style.backgroundColor = getRandomColor();
});

// Show alert on button click
const showAlertButton = document.getElementById("showAlertButton");
showAlertButton.addEventListener("click", () => {
    alert("Button was clicked!");
});

// Display input text in real-time
const inputField = document.getElementById("inputField");
const output = document.getElementById("output");
inputField.addEventListener("input", () => {
    output.textContent = `You typed: ${inputField.value}`;
});

// Function to generate a random color
function getRandomColor() {
    const letters = "0123456789ABCDEF";
    let color = "#";
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
