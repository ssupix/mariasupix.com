const dropdowns = document.querySelectorAll('.filter');

dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.select');
    const caret = dropdown.querySelector('.caret');
    const menu = dropdown.querySelector('.menu');
    const options = dropdown.querySelectorAll('.menu li');
    const selected = dropdown.querySelector('.selected');

    select.addEventListener('click', () => {
        // Close any other open dropdowns
        const activeDropdown = document.querySelector('.filter .menu.menu-open');
        if (activeDropdown && activeDropdown !== menu) {
            const activeSelect = activeDropdown.closest('.filter').querySelector('.select');
            const activeCaret = activeDropdown.closest('.filter').querySelector('.caret');
            activeDropdown.style.maxHeight = '0px';
            activeDropdown.classList.remove('menu-open');
            activeSelect.classList.remove('selected-clicked');
            activeCaret.classList.remove('caret-rotate');
        }

        // Toggle current dropdown
        select.classList.toggle('selected-clicked');
        caret.classList.toggle('caret-rotate');
        if (menu.classList.contains('menu-open')) {
            menu.style.maxHeight = '0px';
        } else {
            menu.style.maxHeight = menu.scrollHeight + 'px';
        }
        menu.classList.toggle('menu-open');
    });

    // Handle option selection
    options.forEach(option => {
        option.addEventListener('click', () => {
            selected.innerText = option.innerText;
            selected.classList.remove('selected-clicked');
            caret.classList.remove('caret-rotate');
            menu.classList.remove('menu-open');
            menu.style.maxHeight = '0px';
            options.forEach(opt => {
                opt.classList.remove('active');
            });
            option.classList.add('active');
        });
    });
});
