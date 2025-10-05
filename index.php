<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Aliance Production</title>
</head>
<body class="front-page">
    <div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-menu-nav-item"><a href="./about.php" class="mobile-menu-link">О компании</a></li>
            <li class="mobile-menu-nav-item"><a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
                <ul class="mobile-submenu">
                    <li class="mobile-submenu-item">   
                        <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Бытовая химия</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
                    </li>
                </ul>
            </li>
            <li class="mobile-menu-nav-item"><a href="./trademarks.php" class="mobile-menu-link">Собственные торговые марки</a></li>
            <li class="mobile-menu-nav-item"><a href="#" class="mobile-menu-link">Новости</a></li>
            <li class="mobile-menu-nav-item"><a href="./contacts.php" class="mobile-menu-link">Контакты</a></li>
        </ul>
        <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
        <div class="mobile-info">
            <svg class="phone-icon" width="24" height="24">
                <use href="img/sprite.svg#mark"></use>
            </svg>
            <address class="mobile-info-address">г. Москва, Холодильный пер. 4к1с8</address>
        </div>
        <div class="mobile-info">
            <svg class="mail-icon" width="24" height="24">
                <use href="img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">a.dragunov@tdaliance.ru</a>
        </div>
        <a class="social-links" href="#" target="_blank">
        <svg class="vk-icon" width="24" height="24">
            <use href="img/sprite.svg#vk"></use>
        </svg>
        </a>
        <a class="social-links" href="#" target="_blank">
        <svg class="inst-icon" width="24" height="24">
            <use href="img/sprite.svg#inst"></use>
        </svg>
        </a>
    </div>
    <nav class="navbar">
        <a href="#" class="mobile-menu-toggle">
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
        </a>
        <a href="./" class="logo-link header-logo">
            <svg class="logo-svg logo-light">
                <use href="img/sprite.svg#logo-light"></use>
            </svg>
            <svg class="logo-svg logo-dark">
                <use href="img/sprite.svg#logo"></use>
            </svg>
        </a>
        <ul class="header-nav">
            <li class="header-nav-item"><a href="./about.php" class="header-nav-link">О компании</a></li>
            <li class="header-nav-item"><a href="./contracts.php" class="header-nav-link">Контрактное производство</a></li>
            <li class="header-nav-item"><a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a></li>
            <li class="header-nav-item"><a href="#" class="header-nav-link">Новости</a></li>
            <li class="header-nav-item"><a href="./contacts.php" class="header-nav-link">Контакты</a></li>
        </ul>
        <div class="header-phone">
            <svg class="phone-icon" width="16" height="17">
                <use href="img/sprite.svg#phone"></use>
            </svg>
            <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
        </div><!-- /.header-phone -->
        <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
            <svg class="button-icon" width="16" height="17">
                <use href="img/sprite.svg#phone"></use>
            </svg>
            <span class="button-text">Получить консультацию</span>
        </button>
    </nav><!-- /.navbar -->
    <header class="header header-image">
        <div class="container">
            <div class="header-content">
                <div class="separator"></div>
                <h1 class="header-title">Комплексное обеспечение товарами<br> и расходными материалами бизнеса</h1>
                <p class="header-text">
                    Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.
                </p>
                <div class="button" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</div>
            </div><!-- /.header-content -->

            <!-- Основной блок слайдера -->
            <div class="swiper features-slider">
                <!-- Обертка слайдера -->
                <ul class="swiper-wrapper header-features">
                <!-- Слайды -->
                    <li class="swiper-slide header-features-item">
                        <svg class="time" width="21" height="28">
                            <use href="img/sprite.svg#time"></use>
                        </svg>
                        <p class="header-features-text">Непрерывная работа<br>c 2017 года</p>
                    </li>
                    <li class="swiper-slide header-features-item">
                        <svg class="certificate" width="36" height="36">
                            <use href="img/sprite.svg#certificate"></use>
                        </svg>
                        <p class="header-features-text">Вся продукция сертифицирована</p>
                    </li>
                    <li class="swiper-slide header-features-item">
                        <svg class="control" width="36" height="36">
                            <use href="img/sprite.svg#control"></use>
                        </svg>
                        <p class="header-features-text">Контроль качества<br>на всех этапах</p>
                    </li>
                    <li class="swiper-slide header-features-item">
                        <svg class="delivery" width="36" height="36">
                            <use href="img/sprite.svg#delivery"></use>
                        </svg>
                        <p class="header-features-text">Возможны поставки<br>по всей России</p>
                    </li>
                    <li class="swiper-slide header-features-item">
                        <svg class="speed" width="36" height="36">
                            <use href="img/sprite.svg#speed"></use>
                        </svg>
                        <p class="header-features-text">Оперативное производство</p>
                    </li>
                    </ul>
                
                <!-- Кнопки навигации вперед-назад -->
                <div class="slider-buttons">
                    <div class="slider-button-prev">
                        <svg class="arrow-prev" width="36" height="24">
                            <use href="img/sprite.svg#arrow-prev"></use>
                        </svg>
                    </div>
                    <div class="slider-button-next">
                        <svg class="arrow-next" width="36" height="24">
                            <use href="img/sprite.svg#arrow-next"></use>
                        </svg>
                    </div>
                </div> <!-- /.slider-buttons -->
            </div> <!-- Окончание Основной блок слайдера -->
        </div><!-- /.container -->
    </header>
    <?php $workflow_block_title = "Cхема работы"; include_once('./template-parts/workflow-block.php');?>
    <?php $production_block_title = "Контрактное производство"; include_once('./template-parts/production-block.php');?>
    <?php $trademarks_block_title = "Собственные торговые марки"; include_once('./template-parts/trademarks-block.php');?>
    <?php $founder_block_title = "Отношение к делу<br>и к клиентам"; include_once('./template-parts/founder-block.php');?>
    <?php $clients_block_title = "Производим аэрозольную продукцию для разных сфер"; include_once('./template-parts/clients-block.php');?>
    <?php $blog_block_title = "Блог экспертов в области производства"; include_once('./template-parts/blog-block.php');?>
    <?php include_once('footer.php');?>
</body>
</html>