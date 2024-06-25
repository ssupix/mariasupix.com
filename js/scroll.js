document.addEventListener('scroll', function() {
    const scrolled = window.scrollY;
    const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollPercentage = (scrolled / scrollableHeight) * 100;
    document.querySelector('.bottom-right').textContent = `${Math.round(scrollPercentage)}%`;
});