import { gsap } from "gsap";

// GSAP cursor follower logic
const cursor = document.getElementById('cursor-follower');
const cursorText = cursor.querySelector('.cursor-text');

gsap.set(cursor, {xPercent: -5, yPercent: -5});

let xTo = gsap.quickTo(cursor, "x", {duration: 0.6, ease: "power3"}),
    yTo = gsap.quickTo(cursor, "y", {duration: 0.6, ease: "power3"});

// Base cursor movement
window.addEventListener("mousemove", e => {
    xTo(e.clientX);
    yTo(e.clientY);
});

// Initial opacity
window.addEventListener("mousemove", () => {
    cursor.style.opacity = 1;
});

function initializeHoverEffects() {
    // Hover effect with custom text
    document.querySelectorAll('.hover-content').forEach(el => {
        el.addEventListener('mouseenter', () => {
            cursor.classList.add('hover');
            cursorText.textContent = el.dataset.hoverText || 'learn more';
        });
        el.addEventListener('mouseleave', () => {
            cursor.classList.remove('hover');
            cursorText.textContent = '';
        });
    });
}

function initializeFilters() {
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

async function loadProjects() {
    try {
        const response = await fetch('./data/projects.json');
        const projects = await response.json();
        const projectContainer = document.getElementById('project-container');
        
        // Get the template from your existing HTML
        const templateCard = projectContainer.querySelector('.card');
        if (!templateCard) {
            console.error('Template card not found');
            return;
        }

        // Clear container but save template
        const template = templateCard.cloneNode(true);
        projectContainer.innerHTML = '';

        // Create cards based on template
        projects.forEach(project => {
            const card = template.cloneNode(true);
            
            // Update card attributes
            card.setAttribute('onclick', `window.location.href='${project.url}'`);
            card.setAttribute('data-category', project.category);
            card.setAttribute('data-hover-text', 'View project');

            // Update video/image
            const cover = card.querySelector('.cover');
            if (project.video) {
                cover.innerHTML = `
                    <video loop playsinline autoplay poster="${project.poster}">
                        <source src="${project.video}" type="video/mp4">
                    </video>
                `;
            } else {
                cover.innerHTML = `
                    <img src="${project.poster}" alt="${project.title} Poster">
                `;
            }

            // Update text content
            card.querySelector('h4').textContent = project.title;
            const description = card.querySelector('p');
            description.textContent = project.description;
            description.appendChild(document.createElement('div'));
            description.lastElementChild.classList.add('cta');
            description.lastElementChild.innerHTML = '→';

            // Update tags
            const tagsContainer = card.querySelector('.tags');
            tagsContainer.innerHTML = '';
            project.tags.forEach(tag => {
                const tagElement = document.createElement('div');
                tagElement.classList.add('pill-' + tag.color);
                tagElement.textContent = tag.name;
                tagsContainer.appendChild(tagElement);
            });

            projectContainer.appendChild(card);
        });

        // Initialize all functionality
        initializeHoverEffects();
        initializeFilters();

    } catch (error) {
        console.error('Error loading projects:', error);
    }
}

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    // Initialize scripts for static elements first
    initializeHoverEffects();
    initializeFilters();
    
    // Then load dynamic content
    loadProjects();
});