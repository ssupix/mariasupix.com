// Select all elements with the class 'content'
const elements = document.querySelectorAll('.context');

// Initialize Tippy.js for each element with the content from the data attribute
elements.forEach((element) => {
    tippy(element, {
        content: element.getAttribute('data-tippy-content'), // Use the data-tippy-content attribute
        theme: 'custom',
    });
});