document.addEventListener('DOMContentLoaded', function() {
    var elem = document.querySelector('.carousel');
    var flkty = new Flickity( elem, {
      // options
      cellAlign: 'left',
      contain: true,
      autoPlay: 5000,
      wrapAround: true,
      prevNextButtons: false,
      pageDots: false
    });
  });