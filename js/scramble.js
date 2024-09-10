function scrambleText(targetId, newText, duration = 1.5) {
    const element = document.getElementById(targetId);
    const originalText = element.innerText;
    const length = originalText.length; // Use original length to maintain width
    
    let currentText = originalText;
    const chars = 'abcdefghijklmnopqrstuvwxyz';

    // Set a fixed width to prevent layout shifts
    element.style.display = 'inline-block';
    element.style.width = `${element.offsetWidth}px`;

    return gsap.to({}, {
        duration: duration,
        onUpdate: function() {
        let progress = this.progress();
        let result = '';
        for (let i = 0; i < length; i++) {
          if (i < newText.length * progress && i < newText.length) {
            result += newText[i];
        } else if (i < currentText.length) {
            if (Math.random() < 0.1) {
              result += chars[Math.floor(Math.random() * chars.length)];
            } else {
                result += currentText[i];
            }
        } else {
            result += ' ';
        }
    }
        // Trim or pad the result to match the original length
        result = result.slice(0, length).padEnd(length, ' ');
        element.innerText = result;
        currentText = result;
        },
        onComplete: function() {
        // Trim or pad the final text to match the original length
        element.innerText = newText.slice(0, length).padEnd(length, ' ');
        // Remove fixed width after animation
        element.style.width = '';
        }
    });
    }
  // Use the function
scrambleText("scrambleText", "front-end developer & web designer");