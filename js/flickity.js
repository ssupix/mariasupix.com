// Initialize Flickity carousel
document.addEventListener('DOMContentLoaded', function() {
  // Carousel initialization
  const carousel = document.querySelector('.carousel');
  const flickity = new Flickity(carousel, {
      cellAlign: 'left',
      contain: true,
      autoPlay: 5000,
      wrapAround: true,
      prevNextButtons: false,
      pageDots: false
  });

  // Update cursor position during Flickity drag
  flickity.on('dragMove', function(event, pointer) {
      gsap.set(cursor, {
          x: pointer.clientX,
          y: pointer.clientY
      });
  });
});