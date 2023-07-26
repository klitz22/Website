<!DOCTYPE html>
<html>
<head>
    <title>Fantasy Football Analysis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header>
        <div id="menu-icon-wrapper">
            <div id="menu-icon-container">
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" id="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#fantasy-football-analysis">Fantasy Football Analysis</a></li>
                <li><a href="#place-holder2">Place Holder 2</a></li>
                <li><a href="#place-holder3">Place Holder 3</a></li>
            </ul>
        </nav>
    </header>
    <section id="fantasy-football-analysis" class="section hidden-section">
        <div class="container">
            <h2 class="section-title">Fantasy Football Analysis</h2>
            <div class="analysis-content">
                <!-- Your analysis content goes here -->
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 My Website</p>
    </footer>
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const menuIcon = document.getElementById('menu-icon');
        const menu = document.getElementById('menu');
        const fantasyFootballSection = document.getElementById('fantasy-football-analysis');

        menuIcon.addEventListener('mouseover', () => {
            menuIcon.style.backgroundColor = '#f8f8f8';
            menuIcon.style.borderColor = '#fff';
            menuIcon.querySelectorAll('span, span:before, span:after').forEach(span => span.style.backgroundColor = '#000');
        });
        menuIcon.addEventListener('mouseout', () => {
            menuIcon.style.backgroundColor = '#fff';
            menuIcon.style.borderColor = '#fff';
            menuIcon.querySelectorAll('span, span:before, span:after').forEach(span => span.style.backgroundColor = '#000');
        });
    
        menuToggle.addEventListener('change', () => {
            if (menuToggle.checked) {
                menu.style.visibility = 'visible';
                menu.style.opacity = '1';
            } else {
                menu.style.visibility = 'hidden';
                menu.style.opacity = '0';
            }
        });
    
        menu.addEventListener('click', (event) => {
            if (event.target.classList.contains('menu-link') || event.target.tagName === 'H2') {
                menuToggle.checked = false;
                menu.style.visibility = 'hidden';
                menu.style.opacity = '0';
                menuIcon.classList.remove('close');
            }
        });
    
        document.addEventListener('click', (event) => {
            if (!event.target.closest('.menu-container') && !event.target.closest('#menu-toggle') && !event.target.closest('#menu-icon')) {
                menuToggle.checked = false;
                menu.style.visibility = 'hidden';
                menu.style.opacity = '0';
                menuIcon.classList.remove('close');
            }
        });
    
        window.addEventListener('load', () => {
            const loadingScreen = document.getElementById('loading-screen');
            loadingScreen.style.display = 'none';
        });
    </script>
</body>
</html>
