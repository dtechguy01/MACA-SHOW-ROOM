// 1. Interactive 3D Parallax Floating Engine
const tiltElement = document.getElementById('tilt-element');

document.addEventListener('mousemove', (e) => {
    if (!tiltElement) return;
    
    const xAxis = (window.innerWidth / 2 - e.pageX) / 25;
    const yAxis = (window.innerHeight / 2 - e.pageY) / 25;
    
    tiltElement.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
});

// Reset positioning smoothly when mouse leaves the window
document.addEventListener('mouseleave', () => {
    tiltElement.style.transform = `rotateY(0deg) rotateX(0deg)`;
    tiltElement.style.transition = "transform 0.5s ease";
});

document.addEventListener('mouseenter', () => {
    tiltElement.style.transition = "none";
});


// 2. Realistic Button Press & Click Ripple Vector Animation
const tiktokBtn = document.getElementById('tiktok-btn');

tiktokBtn.addEventListener('click', function(e) {
    // Structural "Pressing In" Motion Physics
    this.style.transform = "scale(0.95)";
    setTimeout(() => {
        this.style.transform = "scale(1)";
    }, 150);

    // Render Geometric Ripple Circle
    const ripple = document.createElement('span');
    ripple.classList.add('ripple-effect');
    
    const rect = this.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    
    ripple.style.left = `${x}px`;
    ripple.style.top = `${y}px`;
    
    this.appendChild(ripple);
    
    setTimeout(() => {
        ripple.remove();
    }, 600);
});