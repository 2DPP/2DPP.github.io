let clicksNeeded = 4; 
    
function revealBox(box) {
  
    if (clicksNeeded === 1) {
        box.classList.add('last-click'); 

       
        setTimeout(() => {
            const gameArea = document.getElementById('game-area');
            gameArea.innerHTML = ""; // Clear all boxes
            shrinkContainer(); // supposed to shrink but instead sizes up (im lazy to change the variable name)
        }, 500); 
    } else {
        box.classList.add('clicked'); 
    }

    // Decrement clicks needed
    clicksNeeded--;
}

function shrinkContainer() {
    const container = document.getElementById('container');
    container.classList.add('shrunk'); // Trigger the animation

    // Reveal the credentials after the container animation
    setTimeout(revealCredentials, 1000); // Wait for animation to finish
}

function revealCredentials() {
    const credentials = document.querySelectorAll('.credentials');
    credentials.forEach(cred => {
        cred.style.visibility = 'visible';
        cred.style.opacity = '1';
    });
}