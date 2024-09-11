document.addEventListener('DOMContentLoaded', () => {
    const bannerImage = document.querySelector('.overlay');

    const observerOptions = {
        root: null, // this means the viewport
        threshold: 0.7 
    };

    const observerCallback = (entries) => {
        entries.forEach(entry => {
        if (entry.isIntersecting) {
            bannerImage.classList.add('in-view');
        } else {
            bannerImage.classList.remove('in-view');
        }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    observer.observe(bannerImage);
});