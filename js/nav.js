// Register ScrollTrigger with GSAP
gsap.registerPlugin(ScrollTrigger);

// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', () => {
  // Select the SVG logo
  const logo = document.querySelector('nav .logo svg');
  
  // Select the path in the SVG
  const path = logo.querySelector('path');
  
  // Set up the ScrollTrigger
  ScrollTrigger.create({
    trigger: 'window', // Trigger on the body to start immediately
    start: 'top top',
    end: '130px top',
    // markers: true,
    onUpdate: (self) => {
      const progress = self.progress;
      
      // Transition fill from black to transparent
      const fillOpacity = 1 - progress;
      path.style.fill = `rgba(0, 0, 0, ${fillOpacity})`;
      
      // Transition stroke from transparent to black
      const strokeOpacity = progress;
      path.style.stroke = `rgba(0, 0, 0, ${strokeOpacity})`;
      path.style.strokeWidth = `${progress * 2}px`; // Adjust the max stroke width as needed
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