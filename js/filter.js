const filterMenuItems = document.querySelectorAll('.filter .menu li');
const projectCards = document.querySelectorAll('.work-projects .card, .work-projects-list .card-list');

filterMenuItems.forEach(menuItem => {
    menuItem.addEventListener('click', () => {
        
        filterMenuItems.forEach(item => item.classList.remove('active'));
    
        menuItem.classList.add('active');

        const selectedCategory = menuItem.id;

        projectCards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            if (selectedCategory === 'all' || cardCategory === selectedCategory) {
                card.style.display = 'flex'
            } else {
                card.style.display = 'none'
            }
        })
    })
})