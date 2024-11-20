export function filterMenu() {

    const filterMenuItems = document.querySelectorAll('.filter .menu li');
    const projectCards = document.querySelectorAll('.work-projects .card');

    filterMenuItems.forEach(menuItem => {
        menuItem.addEventListener('click', () => {
            // Remove 'selected' class from all items
            filterMenuItems.forEach(item => item.classList.remove('selected'));
            
            // Add 'selected' class to the clicked item
            menuItem.classList.add('selected');

            const selectedCategory = menuItem.id;

            // close menu after selection
            document.querySelector('.filter .menu').classList.remove('show');

            // Show or hide project cards based on the selected category
            projectCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                if (selectedCategory === 'all' || cardCategory === selectedCategory) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
}