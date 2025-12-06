<?php 
$page_title = 'О компании';
$header_style = 'page-header';
$expertise_block_title = 'Мы - эксперты в области 
                        производства химии';
$products_block_title = 'Наше производство';

include_once('header-page.php');?>

<section class="section expertise">
    <div class="container">
        <picture class="expertise-photo">
            <source type="image/webp" srcset="img/expertise-photo.webp">
            <source type="image/jpeg" srcset="img/expertise-photo.png">
            <img src="img/expertise-photo.png" alt="expertise">
        </picture>
        <div class="expertise-content-wrapper">
            <div class="expertise-content">
                <div class="separator"></div>
                <?php
                    echo '<h2 class="section-title">'. $expertise_block_title .'</h2>';
                ?>
                <div class="expertise-text">
                    <p>Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<section class="about-slider custom-color">
    <div class="container">
        <!-- Основной блок слайдера -->
        <div class="swiper about-features">
            <!-- Обертка слайдера -->
            <ul class="swiper-wrapper header-about">
            <!-- Слайды -->
                <li class="swiper-slide header-about-item">
                    <svg class="time" width="21" height="28">
                        <use href="img/sprite.svg#time"></use>
                    </svg>
                    <p class="header-about-text">Непрерывная работа<br>c 2017 года</p>
                </li>
                <li class="swiper-slide header-about-item">
                    <svg class="certificate" width="36" height="36">
                        <use href="img/sprite.svg#certificate"></use>
                    </svg>
                    <p class="header-about-text">Вся продукция сертифицирована</p>
                </li>
                <li class="swiper-slide header-about-item">
                    <svg class="control" width="36" height="36">
                        <use href="img/sprite.svg#control"></use>
                    </svg>
                    <p class="header-about-text">Контроль качества<br>на всех этапах</p>
                </li>
                <li class="swiper-slide header-about-item">
                    <svg class="delivery" width="36" height="36">
                        <use href="img/sprite.svg#delivery"></use>
                    </svg>
                    <p class="header-about-text">Возможны поставки<br>по всей России</p>
                </li>
                <li class="swiper-slide header-about-item">
                    <svg class="speed" width="36" height="36">
                        <use href="img/sprite.svg#speed"></use>
                    </svg>
                    <p class="header-about-text">Оперативное производство</p>
                </li>
            </ul>
        </div> <!-- Окончание Основной блок слайдера -->  
        <!-- Кнопки навигации вперед-назад -->
        <div class="slider-buttons about-buttons">
            <div class="about-button-prev">
                <svg class="arrow-prev" width="36" height="24">
                    <use href="img/sprite.svg#arrow-prev"></use>
                </svg>
            </div>
            <div class="about-button-next">
                <svg class="arrow-next" width="36" height="24">
                    <use href="img/sprite.svg#arrow-next"></use>
                </svg>
            </div>
        </div> <!-- /.slider-buttons -->
        
    </div>
</section>
<section class="section products">
    <div class="container">
        <div class="products-content-wrapper">
            <div class="products-content">
                <div class="separator"></div>
                <?php
                    echo '<h2 class="section-title">'. $products_block_title .'</h2>';
                ?>
                <div class="products-text">
                    <p>Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.</p>
                    <p>Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.</p>
                </div>
                <ul class="products-list">
                    <li class="products-list-item">
                        <svg class="products-list-icon" width="30" height="30">
                            <use href="img/sprite.svg#car"></use>
                        </svg>
                        Автомобильная химия
                    </li>
                    <li class="products-list-item">
                        <svg class="products-list-icon" width="30" height="30">
                            <use href="img/sprite.svg#home"></use>
                        </svg>
                        Бытовая химия
                    </li>
                    <li class="products-list-item">
                        <svg class="products-list-icon" width="30" height="30">
                            <use href="img/sprite.svg#dis"></use>
                        </svg>
                        Дезинфицирующие средства
                    </li>
                    <li class="products-list-item">
                        <svg class="products-list-icon" width="30" height="30">
                            <use href="img/sprite.svg#aerozol"></use>
                        </svg>
                        Пищевые аэрозоли
                    </li>
                    <li class="products-list-item">
                        <svg class="products-list-icon" width="30" height="30">
                            <use href="img/sprite.svg#cosmetic"></use>
                        </svg>
                        Косметическая продукция
                    </li>
                    <li class="products-list-item">
                        <svg class="products-list-icon" width="30" height="30">
                            <use href="img/sprite.svg#brush"></use>
                        </svg>
                        Краски аэрозольные
                    </li>
                </ul>
            </div>
        </div>
        <picture class="products-photo">
            <source type="image/webp" srcset="img/products-photo.webp">
            <source type="image/jpeg" srcset="img/products-photo.png">
            <img src="img/products-photo.png" alt="products">
        </picture>
    </div>
<!-- /.container -->
</section>
<?php $founder_block_title = 'Отношение к делу<br>и к клиентам'; include_once('./template-parts/founder-block.php');?>
<?php $research_block_title = 'Исследовательский центр <br>Aliance production'; include_once('./template-parts/research-block.php');?>
<?php $clients_block_title = 'Производим аэрозольную продукцию для разных сфер'; include_once('./template-parts/clients-block.php');?>
<?php include_once('footer.php');?>
</body>
</html>