import gsap from "gsap";
import { Draggable } from "gsap/Draggable";

gsap.registerPlugin(Draggable);

// Initialize draggable items
Draggable.create(".drag-item", {
  bounds: "#insight",
  onDrag: function() {
      gsap.set(cursor, {
          x: this.pointerX,
          y: this.pointerY
      });
  }
});

