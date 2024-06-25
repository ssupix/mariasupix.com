
Copy code
// JavaScript to control the typing animation
const typingElement = document.querySelector('.typing-animation');

// Function to reset the animation
function resetAnimation() {
    // Clear the current animation
    typingElement.style.animation = 'none';
    // Trigger reflow to apply style changes
    typingElement.offsetHeight;
    // Set the typing animation with infinite repeat and blinking caret
    typingElement.style.animation = 'typing 3s steps(10, end) infinite, blink-caret 0.75s step-end infinite';
}

// Call resetAnimation() initially
resetAnimation();

// Function to reset animation on animation end (for infinite loop)
typingElement.addEventListener('animationiteration', function() {
    resetAnimation();
});