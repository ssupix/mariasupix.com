// GSAP cursor follower logic
const cursor = document.getElementById('cursor-follower');
const cursorText = cursor.querySelector('.cursor-text');

gsap.set(cursor, {xPercent: -5, yPercent: -5});

let xTo = gsap.quickTo(cursor, "x", {duration: 0.6, ease: "power3"}),
    yTo = gsap.quickTo(cursor, "y", {duration: 0.6, ease: "power3"});

window.addEventListener("mousemove", e => {
    xTo(e.clientX);
    yTo(e.clientY);
});

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

// opacity on start
window.addEventListener("mousemove", () => {
    cursor.style.opacity = 1;
});
