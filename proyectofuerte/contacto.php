<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="swiper.css" />
        <link rel="stylesheet" href="index.php">
        <link rel="icon" href="logo.png">
        <title>Contacto</title>
</head>
<body>
<a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>
        <header class="header" id="header">
            <nav class="nav bd-container">
            <a href="index.php" class="nav__logo"><img src="logo.png"></a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.php" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">Acerca de</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">Servicios</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                        <li><i class='bx bxs-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>
        
        <main class="l-main">
        <section class="contact section bd-container" id="contact">
            <form clase="d-flex" action="contacto.php" method=POST>
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">Póngase en contacto</span>
                        <h2 class="section-title contact__initial">Contáctanos</h2>
                        <p class="contact__description">Contáctanos para mas informacíon y atenderemos en la mayor medida de lo posible.</p>
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