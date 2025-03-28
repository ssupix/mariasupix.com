document.addEventListener('DOMContentLoaded', () => {
    const filterMenuItems = document.querySelectorAll('.filter .menu li');
    const projectCards = document.querySelectorAll('.work-projects .card, .work-projects-list .card-list');
    const currentText = document.querySelector('.filter .select .current');

    filterMenuItems.forEach(menuItem => {
        menuItem.addEventListener('click', () => {
            // Remove 'selected' class from all items
            filterMenuItems.forEach(item => item.classList.remove('selected'));

            // Add 'selected' class to the clicked item
            menuItem.classList.add('selected');

            // Update the current text in the filter
            currentText.textContent = menuItem.textContent;

            const selectedCategory = menuItem.id;

            // Show or hide project cards based on the selected category
            projectCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                if (selectedCategory === 'all' || cardCategory === selectedCategory) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });

            document.querySelector('.filter').classList.remove('active');
        });
    });

    // Handle dropdown open/close toggle
    const filters = document.querySelectorAll('.filter');

    filters.forEach(filter => {
        const select = filter.querySelector('.select');
        const menu = filter.querySelector('.menu');


        select.addEventListener('click', (e) => {
            e.stopPropagation();
            // Toggle current filter's dropdown open/close
            filter.classList.toggle('active');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!filter.contains(event.target)) {
                filter.classList.remove('active');
            }
        });
    });
});


// CODE
document.querySelectorAll('.code-show').forEach(dropdown => {
    const select = dropdown.querySelector('.select');
    const caret = dropdown.querySelector('.caret');
    const code = dropdown.querySelector('.code');

    select.addEventListener('click', () => {
        // Toggle active class for dropdown animation
        dropdown.classList.toggle('active');

        // Rotate the caret
        caret.classList.toggle('caret-rotate');
    });
});