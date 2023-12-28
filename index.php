<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/img/logo/1.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="assets/css/mon-style.css">
        <link rel="stylesheet" href="assets/css/navbar.css">
        <link rel="stylesheet" href="assets/css/home.css">
        <link rel="stylesheet" href="assets/css/button.css">
        <title>Djennat Garden</title>
    </head>
    <body>
        <!--NAVBAR-->
        <header class="header">
            <nav class="nav container">
                <a href="#" id="logo">
                    <img src="assets/img/logo/6.png" alt="logo">
                </a>
                <div class="nav_menu" id="nav-menu">
                    <ul class="nav_list">
                        <li class="nav_item">
                            <a href="#home" class="nav_link active-link">Acceuil</a>
                        </li>
                        <li class="nav_item">
                            <a href="#products" class="nav_link">Produits</a>
                        </li>
                        <li class="nav_item">
                            <a href="#contact" class="nav_link">Contactez-nous</a>
                        </li>
                        <li class="nav_item">
                            <a href="#account" class="nav_link"><i class="f-x-large fa-solid fa-circle-user"></i></a>
                        </li>
                    </ul>
                    <div class="nav_close" id="nav-close">
                        <i class="f-x-large ri-close-line"></i>
                    </div>
                </div>
                <div class="nav_btns">
                    <a href="#cart" class="nav_cart">
                        <i class="f-x-large fa-solid fa-cart-shopping"></i>
                    </a>    
                    <i class="f-x-large ri-moon-line" id="theme-button"></i>
                    <div class="nav_toggle" id="nav-toggle">
                        <i class="f-x-large fa-solid fa-bars"></i>
                    </div>
                </div>
            </nav>
        </header>
        <!--MAIN-->
        <main class="main">
            <!--HOME-->
            <section class="home" id="home">
                <div class="home_container container grid">
                    <img src="assets/img/home.png" alt="home" class="home_img">
                    <div class="home_data">
                        <h1 class="home_title">
                            Bienvenue chez <br> DJENNAT Garden
                        </h1>
                        <p class="home_description">
                            Votre destination de choix pour des plantes artificielles exceptionnelles en Algérie !
                        </p>
                        <a href="#product" class="button button--flex">
                            Nos Produits <i class="ri-arrow-right-down-line button_icon"></i>
                        </a>
                    </div>
                    <div class="home_social">
                        <span class="home_social-follow">Suivez-nous</span>
                        <div class="home_social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="home_social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="home_social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="home_social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!--JS Scripts-->
        <script src="assets/js/scrollreveal.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>