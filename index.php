<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="swiper.css" />
        <link rel="icon" href="logo.png">
        <title>Tommy's Coffee</title>
    </head>
    <body>
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>
        <header class="header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo"><img src="logo.png"></a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">Acerca de</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">Servicios</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contáctanos</a></li>
                        <li><i class='bx bxs-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>


        <main class="l-main">
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h2 class="home__subtitle">No es solo café</h2> <h1 class="home__title"><span>es</span> Tommy's Coffee</h1>
                        <p class="home__paragraph">Inspirar y nutrir el espíritu humano: una persona, una taza y un lugar a la vez.</p>
                    </div>
                    <div class="swiper-container mySwiper">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="img1.png">
                        </div>
                        <div class="swiper-slide">
                            <img src="img2.png">
                        </div>
                        <div class="swiper-slide">
                            <img src="img3.png">
                        </div>
                        <div class="swiper-slide">
                            <img src="img4.png">
                        </div>
                        <div class="swiper-slide">
                            <img src="img5.png">
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial">Acerca de</span>
                        <h2 class="section-title about__initial">Espera mas que un café</h2>
                        <p class="about__description">No solo somos proveedores apasionados de café, sino de todo lo demás que conlleva una experiencia de cafetería completa y gratificante. También ofrecemos una selección de tés de primera calidad, pasteles finos y otras delicias para complacer el paladar. Y la música que escuchas en la cafetería es elegida por su arte y atractivo. <br>No es raro ver a personas que vienen a Tommy's Coffee para charlar, reunirse o incluso trabajar. Somos un lugar de reunión del vecindario, parte de la rutina diaria, y no podríamos estar más felices por ello. </p>
                        <a href="#" class="button">Mira nuestra historia</a>
                    </div>

                    <img src="about.jpg" alt="" class="about__img">
                </div>
            </section>

            <section class="services section bd-container" id="services">
                <span class="section-subtitle">Servicios</span>
                <h2 class="section-title">Nuestros Servicios</h2>
                <div class="services__container  bd-grid">
                    <div class="services__content">
                        <img src="coffee.png" class="services__img">
                        <h3 class="services__title">Cafe poca madre</h3>
                        <p class="services__description">Los tuestes de café que ofrecemos son los que mejor reflejan el rico sabor y aroma del café de su Tommy's Coffee local.</p>
                    </div>
                    <div class="services__content">
                        <img src="gift-card.png" class="services__img">
                        <h3 class="services__title">Tarjetas de regalo</h3>
                        <p class="services__description">Una tarjeta de regalo de Tommy's Coffee es una forma conveniente de pagar y ganar puntos tommy para obtener recompensas. Esta tarjeta de regalo en línea es un gran regalo para los amantes del café.</p>
                    </div>
                    <div class="services__content">
                        <img src="delivery.png" class="services__img">
                        <h3 class="services__title">Delivery</h3>
                        <p class="services__description">Ordene y recoja tan fácil como eso. Alegra tu día con una entrega de Tommy's Coffee® en varios servicios de entrega.</p>
                    </div>
                </div>
            </section>

            <section class="menu section bd-container" id="menu">
                <span class="section-subtitle">Menu Special</span>
                <h2 class="section-title">Estos son los más populares entre nuestros clientes</h2>
                <div class="menu__container bd-grid">
                    <div class="menu__content">
                        <img src="b1.png" alt="" class="menu__img">
                        <h3 class="menu__name">Iced Blonde Vanilla Latte</h3>
                        <span class="menu__detail">Tommy's Coffee® Blonde Espresso, leche, hielo y jarabe de vainilla se unen para crear un toque encantador en un clásico del espresso muy querido.</span>
                        <span class="menu__price">€3.45</span>
                        <a href="cart.php?product=Iced Blonde Vanilla Latte &price=3.45€" class="button menu__button"><i class='bx bxs-cart-add'></i></a>

                    </div>
                    <div class="menu__content">
                        <img src="b2.png" alt="" class="menu__img">
                        <h3 class="menu__name">Iced White Chocolate Mocha</h3>
                        <span class="menu__detail">Nuestro espresso exclusivo se combina con una capa de chocolate blanco, leche y hielo, y luego se remata con crema batida endulzada para crear esta delicia suprema de chocolate blanco.</span>
                        <span class="menu__price">€3.75</span>
                        <a href="cart.php?product=Iced White chocolate Mocha &price=3.75€" class="button menu__button"><i class='bx bxs-cart-add'></i></a>

                    </div>
                    <div class="menu__content">
                        <img src="b3.png" alt="" class="menu__img">
                        <h3 class="menu__name">Pumpkin Spice Latte</h3>
                        <span class="menu__detail">Nuestro exclusivo espresso y leche al vapor con la célebre combinación de sabores de calabaza, canela, nuez moscada y clavo. Disfrútalo cubierto con crema batida y especias reales para pastel de calabaza.</span>
                        <span class="menu__preci">€4.25
                        </span>
                        <a href="cart.php?product=Pumpkin Spice Latte &price=4.25€" class="button menu__button"><i class='bx bxs-cart-add'></i></a>

                    </div>
                    <div class="menu__content">
                        <img src="b4.png" alt="" class="menu__img">
                        <h3 class="menu__name">Java Chip Frappuccino</h3>
                        <span class="menu__detail">Mezclamos salsa de moca y chips de Frappuccino® con café, leche y hielo, luego lo completamos con crema batida y una lluvia de moca para brindarle una alegría infinita de café.</span>
                        <span class="menu__preci">€4.99</span>
                        <a href="cart.php?product=Java Chip Frappuccino &price=4.99€" class="button menu__button"><i class='bx bxs-cart-add'></i></a>
                    </div>
                    <div class="menu__content">
                        <img src="OIP.png" alt="" class="menu__img">
                        <h3 class="menu__name">Chocomilk de la casa</h3>
                        <span class="menu__detail">Leche evaporada y base de moca cubierta con crema batida azucarada y un chorrito con sabor a chocolate. Un clásico atemporal hecho para endulzar tu espíritu.</span>
                        <span class="menu__preci">€2.75</span>
                        <a href="cart.php?product=Chocomilk de la casa &price=2.75€" class="button menu__button"><i class='bx bxs-cart-add'></i></a>
                    </div>
                    <div class="menu__content">
                        <img src="b6.png" alt="" class="menu__img">
                        <h3 class="menu__name">Té Chai </h3>
                        <span class="menu__detail">El té negro infundido con canela, clavo y otras especias cálidas se combina con leche evaporada y se cubre con espuma para lograr el equilibrio perfecto entre dulce y picante. Una icónica taza chai.</span>
                        <span class="menu__preci">€3.65 </span>
                        <a href="cart.php?product=Té Chai &price=3.65€" class="button menu__button"><i class='bx bxs-cart-add'></i></a>
                    </div>
                    <div class="menu__content">
                        <img src="b7.png" alt="" class="menu__img">
                        <h3 class="menu__name">Chocolate Cookie Crumble Crème Frappuccino</h3>
                        <span class="menu__detail">La salsa de moca y las papas fritas de Frappuccino® se mezclan con leche y hielo, se colocan encima de crema batida y crumble de galleta de chocolate y se cubren con crema batida de vainilla, llovizna de moca y aún más crumble de galleta de chocolate.</span>
                        <span class="menu__preci">€3.95</span>
                        <a href="cart.php?product=Chocolate cookie Crumble Crème Frapuccino & price=3.95€" class="button menu__button"><i class='bx bxs-cart-add'></i></a>
                    </div>
                    <div class="menu__content">
                        <img src="b8.png" alt="" class="menu__img">
                        <h3 class="menu__name">White Chocolate Crème Frappuccino</h3>
                        <span class="menu__detail">Una mezcla suave de chocolate blanco, leche y hielo cubierta con crema batida para un sabor notable que sorprende.</span>
                        <span class="menu__preci">€3.75 </span>
                        <a href="cart.php?product=White Chocolate Crème Frapuccino &price=4.99€" class="button menu__button"><i class='bx bxs-cart-add'></i></a>
                    </div>
                </div>
            </section>

            <section class="app section bd-container">
                <div class="app__container bd-grid">
                    <div class="app__data">
                        <span class="section-subtitle app__initial">App</span>
                        <h2 class="section-title app__initial">Checale mas en nuestra app oficial</h2>
                        <p class="app__description">Encuentra nuestra aplicación y descárgala ya sea a través de App Store o Google Play, podrás hacer pedidos, ver tus entregas en camino y mucho más.</p>
                        <div class="app__stores">
                            <a href="#"><img src="app1.png" alt="" class="app__store"></a>
                            <a href="#"><img src="app2.png" alt="" class="app__store"></a>
                        </div>
                    </div>
                    <img src="mobile-app.png" alt="" class="app__img">
                </div>
            </section>

            <section class="contact section bd-container" id="contact">
            <form class="d-flex" action="contacto.php" method="POST">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">Póngase en contacto</span>
                        <h2 class="section-title contact__initial">Contáctenos</h2>
                        <p class="contact__description">Contáctenos para mas informacíon y atenderemos su petición en la mayor medida de lo posible.</p>
                    </div>
                </div>
                <div class="container">
                    <div class="contact-box">
                        <div class="center-image">
                        </div>
                        <div class="left"></div>
                        <div class="right">
                            <h2>Contáctanos</h2>
                            <input type="text" class="field" placeholder="Su nombre" required>
                            <input type="text" class="field" placeholder="Correo" required>
                            <input type="text" class="field" placeholder="Telefono" required>
                            <input type="text" class="field" placeholder="Problema, sugerencia o incorfomidad" required>
                            <button class="btn">Enviar</button>
                            <H4> Estamos ubicados en:</H4>
                            <div class="center-image">
                            <img src="geo-alt.svg" alt="" style="height: 40px;">
                            </div>
                            <div align="right">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.744127981012!2d-3.4847349246057475!3d40.45879987143289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4237205b70834b%3A0x32533e91ad9b9327!2sC.%20Marquesas%2C%2012%2C%2028850%20Torrej%C3%B3n%20de%20Ardoz%2C%20Madrid!5e0!3m2!1ses!2ses!4v1698759290721!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </body>
        
        </html>
        </main>

        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <h3 class="footer__title">Acerca de</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Nuestra historia</a></li>
                        <li><a href="#" class="footer__link">Nuestro cafe</a></li>
                        <li><a href="#" class="footer__link">Noticias y novedades</a></li>
                        <li><a href="#" class="footer__link">Servicio al cliente</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Trayectoria</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Valores y cultura</a></li>
                        <li><a href="#" class="footer__link">Plan de Logros Universitarios</a></li>
                        <li><a href="#" class="footer__link">Trayectoria global</a></li>
                        <li><a href="#" class="footer__link">Trayectoria local</a></li>
                    </ul>
                </div>

                
                <div class="footer__content">
                    <h3 class="footer__title">información</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Contactenos</a></li>
                        <li><a href="#" class="footer__link">Politicas de privacidad</a></li>
                        <li><a href="#" class="footer__link">Terminos de uso</a></li>
                        <li><a href="#" class="footer__link">Sube tu ídea</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Ordene y recoga</h3>
                    <ul>
                        <li>Ordene en la app</li>
                        <li>Delivery</li>
                        <li>opciones de recoger y ordenar</li>
                        <li>explore nuestro menu</li>
                    </ul>
                </div>
            </div>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook-circle'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-spotify' ></i></a>
                    </div>
                </div>
            </div>
            <p class="footer__copy">&#169; 2026 Tommy's Coffee® licenciado.<br>&#169; 2026 Tommy's Coffee®.todos los derechos reservados</p>
        </footer>
        <script src="scrollreveal.js"></script>
        <script src="swiper.js"></script>
        <script src="main.js"></script>
        <script src="process-payment.php"></script>
    </body>
</html>

<?php include "nada.php"; ?>
