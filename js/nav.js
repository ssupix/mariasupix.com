gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
  const logo = document.querySelector('nav .logo svg');
  const path = logo.querySelector('path');
  
  ScrollTrigger.create({
    trigger: 'window',
    start: 'top top',
    end: '130px top',
    onUpdate: (self) => {
      const progress = self.progress;
      
      // Transition fill from black to transparent
      const fillOpacity = 1 - progress;
      path.style.fill = `rgba(0, 0, 0, ${fillOpacity})`;
      
      // Transition stroke from transparent to black
      const strokeOpacity = progress;
      path.style.stroke = `rgba(0, 0, 0, ${strokeOpacity})`;
      path.style.strokeWidth = `${progress * 2}px`;

      // Add data attribute to track state
      if (progress > 0.5) {
        logo.setAttribute('data-state', 'outlined');
      } else {
        logo.setAttribute('data-state', 'filled');
      }
    }
  });
});

// HAMBURGER MENU


const hamMenu = document.querySelector(".ham-menu");
const offScreenMenu = document.querySelector(".off-screen-menu");

hamMenu.addEventListener("click", () => {
  hamMenu.classList.toggle("active");
  offScreenMenu.classList.toggle("active");
});

// NAV LINKS CURRENT STYLE

function setCurrentClass() {
  const currentPage = window.location.pathname.split("/").pop(); // Get the current page name
  const navLinks = document.querySelectorAll('.nav-link'); // Select all links with class 'nav-link'

  navLinks.forEach(link => {
    const pageName = link.getAttribute('href').split("/").pop(); // Get the page name from href
    if (currentPage === "" && pageName === "./") {
      // Set current for the home page when on the root index.php
      link.classList.add('current');
    } else if (currentPage === pageName) {
      // Set current for matching pages (e.g., work.php, about.php)
      link.classList.add('current');
    }
  });
}

setCurrentClass(); 