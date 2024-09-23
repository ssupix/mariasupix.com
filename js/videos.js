const projectVideos = document.querySelectorAll('.project-video');

projectVideos.forEach((projectVideo) => {
    const video = projectVideo.querySelector('video');
    const img = projectVideo.querySelector('img');

    // Handle video load errors
    video.onerror = () => {
        video.style.display = 'none';
        img.style.display = 'block';
    };

    // Function to check screen size and toggle video/image display
    const checkWindowSize = () => {
        if (window.innerWidth < 768) {
            video.style.display = 'none';
            img.style.display = 'block';
        } else {
            video.style.display = 'block';
            img.style.display = 'none';
        }
    };

    // Check initial window size on page load
    checkWindowSize();

    // Add an event listener to update on window resize
    window.addEventListener('resize', checkWindowSize);
});
