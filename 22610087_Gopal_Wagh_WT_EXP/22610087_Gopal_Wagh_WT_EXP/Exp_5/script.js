// Select elements
const clickButton = document.getElementById('clickButton');
const clickMessage = document.getElementById('clickMessage');
const textInput = document.getElementById('textInput');
const keyMessage = document.getElementById('keyMessage');
const form = document.getElementById('myForm');
const formInput = document.getElementById('formInput');
const formMessage = document.getElementById('formMessage');

// Mouse Event: Click Event
clickButton.addEventListener('click', () => {
    clickMessage.textContent = 'Button was clicked!';
    document.body.style.backgroundColor = 
        document.body.style.backgroundColor === 'lightgreen' ? '' : 'lightgreen';
});

// Keyboard Event: Keydown Event
textInput.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        keyMessage.textContent = `You typed: ${textInput.value}`;
        textInput.value = ''; // Clear input field
    }
});

// Form Event: Submit Event
form.addEventListener('submit', (event) => {
    event.preventDefault(); // Prevent the default form submission
    formMessage.textContent = `Form submitted with value: ${formInput.value}`;
    formInput.value = ''; // Clear the input field
});
