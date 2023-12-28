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
        <link rel="stylesheet" href="assets/css/products.css">
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
                        <a href="#products" class="button button--flex">
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
            <!--PRODUCTS-->
            <section class="product section container" id="products">
                <h2 class="section_title-center">
                    Consultez nos produits.
                </h2>
                <p class="product_description">
                    Voici nos plantes. <br>
                    Achetez et profitez de la meilleure qualité.
                </p>
                <div class="product_container grid">
                    <article class="product_card">
                        <div class="product_circle"></div>
                        <img src="assets/img/produits/1.png" alt="" class="product_img">
                        <h3 class="product_title">Cacti Plant</h3>
                        <span class="product_price">19.99 DA</span>
                        <button class="button--flex product_button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                    <article class="product_card">
                        <div class="product_circle"></div>
                        <img src="assets/img/produits/2.png" alt="" class="product_img">
                        <h3 class="product_title">Cactus Plant</h3>
                        <span class="product_price">11.99 DA</span>
                        <button class="button--flex product_button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                    <article class="product_card">
                        <div class="product_circle"></div>
                        <img src="assets/img/produits/3.png" alt="" class="product_img">
                        <h3 class="product_title">Aloe Vera Plant</h3>
                        <span class="product_price">7.99 DA</span>
                        <button class="button--flex product_button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                    <article class="product_card">
                        <div class="product_circle"></div>
                        <img src="assets/img/produits/4.png" alt="" class="product_img">
                        <h3 class="product_title">Succulent Plant</h3>
                        <span class="product_price">5.99 DA</span>
                        <button class="button--flex product_button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                    <article class="product_card">
                        <div class="product_circle"></div>
                        <img src="assets/img/produits/5.png" alt="" class="product_img">
                        <h3 class="product_title">Succulent Plant</h3>
                        <span class="product_price">10.99 DA</span>
                        <button class="button--flex product_button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                    <article class="product_card">
                        <div class="product_circle"></div>
                        <img src="assets/img/produits/6.png" alt="" class="product_img">
                        <h3 class="product_title">Green Plant</h3>
                        <span class="product_price">8.99 DA</span>
                        <button class="button--flex product_button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                </div>
            </section>
        </main>
        <!--JS Scripts-->
        <script src="assets/js/scrollreveal.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>