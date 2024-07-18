gsap.registerPlugin(ScrambleTextPlugin) 

var tl = gsap.timeline({defaults: {duration: 2, ease: "none"}});

tl.to("#scramble", {
    duration: 3, 
    scrambleText:{
        text:"Drag, drop and click.", 
        chars:"lowerCase", 
        revealDelay:0.5, 
        tweenLength:false
    }
})