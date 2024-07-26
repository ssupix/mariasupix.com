gsap.fromTo('#cursor', {autoAlpha: 0, x: -20}, {autoAlpha: 1, duration: 0.5, repeat: -1, ease: SteppedEase.config(1)});

let tween = gsap.to("#text", {text: {value: "Creating meaningfull experiences online. </br> Masha Supikhanova"}, duration: 5, delay: 1, ease: "none"})