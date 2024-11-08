import tippy from 'tippy.js';
import popper from 'popper.js';

const elements = document.querySelectorAll('.context');

elements.forEach((element) => {
    tippy(element, {
        content: element.getAttribute('data-tippy-content'), 
        theme: 'custom',
    });
});