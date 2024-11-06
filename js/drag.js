// DRAG AND DROP
// register the plugin
gsap.registerPlugin(Draggable) 

// use this plugin on elements with class .drag-item"
Draggable.create(".drag-item", {
    // you can drag elements outside of #ocean div
    bounds: "#insight"
  });