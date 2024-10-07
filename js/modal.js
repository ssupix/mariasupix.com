// var MicroModal = require('./vendor/micromodal');

document.addEventListener("DOMContentLoaded", function() {
    
    MicroModal.init({
        openTrigger: 'data-custom-open', // Trigger to open modal [3]
        closeTrigger: 'data-custom-close', // Trigger to close modal [4]
        openClass: 'is-open', // Class applied when modal is open [5]
        disableScroll: true, // Disable body scroll when modal is open [6]
        disableFocus: false, // Do not disable focus [7]
        awaitOpenAnimation: false, // Disable open animation wait [8]
        awaitCloseAnimation: false, // Disable close animation wait [9]
        debugMode: true, // Enable debug mode for logging [10]
    });
});