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
<body class="analysis-page">
    <div id="loading-screen">
        <span class="loader"></span>
    </div>
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
    </header>
<div id="menu">
    <div class="menu-container">
        <div class="menu-item">
            <a href="index.php" class="menu-link">
            <span>
             <img class="menu-icon" src="http://kldcreativestudio.com/wp-content/uploads/2023/07/home_icon.png" alt="Home icon">
                <h2>Home</h2>
            </span>
            </a>
        </div>
         <div class="menu-item">
            <a href="articles.php" class="menu-link">
                <span>
                <img class="menu-icon" src="http://kldcreativestudio.com/wp-content/uploads/2023/07/article_icon.png" alt="Article icon">
                <h2>Articles</h2>
                </span>
            </a>
        </div>
        <div class="menu-item">
            <a href="news.php" class="menu-link">
                <span>
                <img class="menu-icon" src="http://kldcreativestudio.com/wp-content/uploads/2023/07/news_icon.png" alt="News icon">
                <h2>News</h2>
                </span>
            </a>
        </div>
    </div>
</div>
    <section id="fantasy-football-analysis">
        <div class="container">
            <h2 class="section-title">Player Analysis</h2>
            <img src="http://kldcreativestudio.com/wp-content/uploads/2023/07/analysis_icon_1.png" alt="Lunar Edge Logo" class="title-image">
            <div class="analysis-content">
                <div class="content-container">
                Testing
                </div>
            </div>
        </div>
    </section>
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
