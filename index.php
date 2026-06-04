<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MACA | Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAwesome for Premium Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="logo">MACA</div>
        <div class="nav-links">
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#showroom">Showroom</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <!-- Hero / About Section -->
    <section id="about" class="hero-section">
        <div class="hero-content" id="tilt-element">
            <span class="badge">OPEN FOR GLOBAL ROLES</span>
            <h1>BEULAH IREMIDE ADEOYE</h1>
            <p class="tagline">FULL-STACK DEVELOPER • DATA SCIENTIST • EXPERT GRAPHIC DESIGNER</p>
            <p class="bio">Bridging the gap between high-performance code, architectural data insights, and premium visual design.</p>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills-section">
        <h2>EXPERTISE SPECTRUM</h2>
        <div class="skills-grid">
            <div class="glass-card">
                <i class="fa-solid fa-code"></i>
                <h3>Full-Stack Dev</h3>
                <p>MERN Stack, PHP, JavaScript</p>
            </div>
            <div class="glass-card">
                <i class="fa-solid fa-chart-simple"></i>
                <h3>Data Science</h3>
                <p>Python, Pandas, SQL</p>
            </div>
            <div class="glass-card">
                <i class="fa-solid fa-palette"></i>
                <h3>UI/UX & Brand</h3>
                <p>Photoshop, Illustrator, Figma</p>
            </div>
        </div>
    </section>

    <!-- Showroom (TikTok Redirect) -->
    <section id="showroom" class="showroom-section">
        <h2>PRODUCTION SHOWROOM</h2>
        <p>Explore my latest design dumps and live creative walkthroughs instantly.</p>
        
        <a href="https://www.tiktok.com/@your_tiktok_username" target="_blank" class="tiktok-card" id="tiktok-btn">
            <div class="tiktok-content">
                <i class="fa-brands fa-tiktok"></i>
                <h3>Launch TikTok Portfolio Showcase</h3>
                <p>Click to view dynamic motion graphics, UI walkthroughs, and design updates.</p>
            </div>
            <div class="ripple-effect"></div>
        </a>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <h2>LET'S BUILD SOMETHING GREAT</h2>
        <div class="contact-box glass-card">
            <p><i class="fa-regular fa-envelope"></i> beulahiremide@gmail.com</p>
            <p><i class="fa-brands fa-whatsapp"></i> +234 808 000 9455</p>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html