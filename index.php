<!DOCTYPE html>
<html>
<head>
    <title>Lunar Edge</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
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
<<<<<<< HEAD
    </header>
    <div class="hero">
        <div class="glitch web-glitch">
            <img src="http://kldcreativestudio.com/wp-content/uploads/2023/07/hero@0.5x.png" class="hero-image">
            <div class="glitch__layers">
                <div class="glitch__layer"></div>
                <div class="glitch__layer"></div>
                <div class="glitch__layer"></div>
            </div>
        </div>
    </div>
    <div id="menu">
    <div class="menu-container">
        <div class="menu-item">
            <a href="analysis.php" class="menu-link">
                <span>
                <img class="menu-icon" src="http://kldcreativestudio.com/wp-content/uploads/2023/07/analysis_icon_1.png" alt="Analysis icon">
                <h2>Player Analysis</h2>
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
    <footer>
        <p>&copy; 2023 Keeley Litzenberger</p>
    </footer>
    <script>
        // JavaScript code for menu toggle and other functionality
        const menuToggle = document.getElementById('menu-toggle');
        const menuIcon = document.getElementById('menu-icon');
        const menu = document.getElementById('menu');
        const fantasyFootballSection = document.getElementById('fantasy-football-analysis');

=======
        <nav>
            <ul>
                <li><a href="#place-holder1">Place Holder 1</a></li>
                <li><a href="#place-holder2">Place Holder 2</a></li>
                <li><a href="#place-holder3">Place Holder 3</a></li>
            </ul>
        </nav>
    </header>
<div class="hero">
  <div class="glitch web-glitch">
    <img src="http://kldcreativestudio.com/wp-content/uploads/2023/07/Hero_big@3x.png" class="hero-image">
    <div class="glitch__layers">
      <div class="glitch__layer"></div>
      <div class="glitch__layer"></div>
      <div class="glitch__layer"></div>
    </div>
  </div>
    <div id="menu">
        <div class="menu-container">
            <div class="menu-item">
                <a href="#place-holder1" class="menu-link">
                    <h2>Place Holder 1</h2>
                </a>
            </div>
            <div class="menu-item">
                <a href="#place-holder2" class="menu-link">
                    <h2>Place Holder 2</h2>
                </a>
            </div>
            <div class="menu-item">
                <a href="#place-holder3" class="menu-link">
                    <h2>Place Holder 3</h2>
                </a>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2023 My Website</p>
    </footer>
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const menuIcon = document.getElementById('menu-icon');
        const menu = document.getElementById('menu');
>>>>>>> 614c34c1ec23072f186999e596359826f5957954
        menuIcon.addEventListener('mouseover', () => {
            menuIcon.style.backgroundColor = '#f8f8f8';
            menuIcon.style.borderColor = '#fff';
            menuIcon.querySelectorAll('span, span:before, span:after').forEach(span => span.style.backgroundColor = '#000');
        });
        menuIcon.addEventListener('mouseout', () => {
            menuIcon.style.backgroundColor = '#fff';
            menuIcon.style.borderColor = '#fff';
            menuIcon.querySelectorAll('span, span:before, span:after').forEach(span => span.style.backgroundColor = '#000');
<<<<<<< HEAD
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
=======
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

>>>>>>> 614c34c1ec23072f186999e596359826f5957954
</html>
