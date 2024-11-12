const gridSwitch = document.querySelector('.grid-switch');
const listSwitch = document.querySelector('.list-switch');
const workProjects = document.querySelector('.work-projects');
const cards = document.querySelectorAll('.card');
const viewSwitchContainer = document.querySelector('.view-switch');

// Function to trigger animation
const triggerAnimation = (element) => {
    // Remove the element from the animation flow
    element.style.animation = 'none';
    // Trigger reflow
    element.offsetHeight;
    // Add the animation back
    element.style.animation = 'cardDisplay 1s forwards';
};

// Function to switch to list view
const switchToList = () => {
    // Reset opacity to ensure animation works
    workProjects.style.opacity = '0';
    
    workProjects.classList.remove('grid');
    workProjects.classList.add('list-layout');
    cards.forEach(card => {
        card.classList.add('card-list');
        card.classList.remove('col-6-md');
        
        // Restructure the card content for list view
        const description = card.querySelector('.description');
        if (!card.querySelector('.cta')) {
            const cta = document.createElement('p');
            cta.className = 'cta';
            cta.textContent = '→';
            card.appendChild(cta);
        }
    });
    
    // Trigger the animation
    triggerAnimation(workProjects);
    
    listSwitch.classList.add('active-switch');
    gridSwitch.classList.remove('active-switch');
};

// Function to switch to grid view
const switchToGrid = () => {
    // Reset opacity to ensure animation works
    workProjects.style.opacity = '0';
    
    workProjects.classList.add('grid');
    workProjects.classList.remove('list-layout');
    cards.forEach(card => {
        card.classList.remove('card-list');
        card.classList.add('col-6-md');
        
        // Remove list-specific elements
        const cta = card.querySelector('.cta');
        if (cta) {
            cta.remove();
        }
    });
    
    // Trigger the animation
    triggerAnimation(workProjects);
    
    gridSwitch.classList.add('active-switch');
    listSwitch.classList.remove('active-switch');
};

// Handle mobile view
const handleMobileView = () => {
    if (window.innerWidth <= 834) {
        switchToGrid();
        viewSwitchContainer.style.display = 'none';
    } else {
        viewSwitchContainer.style.display = 'block';
    }
};

// Add event listeners
gridSwitch.addEventListener('click', switchToGrid);
listSwitch.addEventListener('click', switchToList);
window.addEventListener('resize', handleMobileView);

// Initial check for mobile view
handleMobileView();