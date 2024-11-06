const elements = document.querySelectorAll('.context');

elements.forEach((element) => {
    tippy(element, {
        content: element.getAttribute('data-tippy-content'), 
        theme: 'custom',
    });
});