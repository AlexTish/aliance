<?php 
$page_title = 'Автомобильная химия';
$header_style = 'page-header-image';
$chemistry_block_title = 'Контрактное производство автомобильной химии';
$products_chemistry_block_title = 'Изготовление автохимии';
$types_chemistry_block_title = 'Виды автохимии';

// $expertise_block_title = 'Мы - эксперты в области производства химии';
// $products_block_title = 'Наше производство';
// $founder_block_title = 'Отношение к делу<br>и к клиентам';
// $clients_block_title = 'Производим аэрозольную продукцию для разных сфер';
include_once('header-page-image.php');?>

<section class="section auto-chemistry">
    <div class="container">
        <picture class="auto-chemistry-photo">
            <source type="image/webp" srcset="img/auto-chemistry-photo.webp">
            <source type="image/jpeg" srcset="img/auto-chemistry-photo.png">
            <img src="img/auto-chemistry-photo.png" alt="auto-chemistry">
        </picture>
        <div class="auto-chemistry-content-wrapper">
            <div class="auto-chemistry-content">
                <div class="separator"></div>
                <?php
                    echo '<h2 class="section-title">'. $chemistry_block_title .'</h2>';
                ?>
                <div class="auto-chemistry-text">
                    <p>Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут описаны максимально подробно.</p>
                    <p>Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<section class="chemistry-slider custom-color">
    <div class="container">
        <!-- Основной блок слайдера -->
        <div class="swiper chemistry-features">
            <!-- Обертка слайдера -->
            <ul class="swiper-wrapper header-chemistry">
            <!-- Слайды -->
                <li class="swiper-slide header-chemistry-item">
                    <svg class="time" width="21" height="28">
                        <use href="img/sprite.svg#time"></use>
                    </svg>
                    <p class="header-chemistry-text">Непрерывная работа<br>c 2017 года</p>
                </li>
                <li class="swiper-slide header-chemistry-item">
                    <svg class="certificate" width="36" height="36">
                        <use href="img/sprite.svg#certificate"></use>
                    </svg>
                    <p class="header-chemistry-text">Вся продукция сертифицирована</p>
                </li>
                <li class="swiper-slide header-chemistry-item">
                    <svg class="control" width="36" height="36">
                        <use href="img/sprite.svg#control"></use>
                    </svg>
                    <p class="header-chemistry-text">Контроль качества<br>на всех этапах</p>
                </li>
                <li class="swiper-slide header-chemistry-item">
                    <svg class="delivery" width="36" height="36">
                        <use href="img/sprite.svg#delivery"></use>
                    </svg>
                    <p class="header-chemistry-text">Возможны поставки<br>по всей России</p>
                </li>
                <li class="swiper-slide header-chemistry-item">
                    <svg class="speed" width="36" height="36">
                        <use href="img/sprite.svg#speed"></use>
                    </svg>
                    <p class="header-chemistry-text">Оперативное производство</p>
                </li>
            </ul>
        </div> <!-- Окончание Основной блок слайдера -->
        <!-- Кнопки навигации вперед-назад -->
        <div class="chemistry-buttons primary-buttons-wrapper">
            <div class="chemistry-button-prev">
                <svg class="arrow-prev" width="36" height="24">
                    <use href="img/sprite.svg#arrow-prev"></use>
                </svg>
            </div>
            <div class="chemistry-button-next">
                <svg class="arrow-next" width="36" height="24">
                    <use href="img/sprite.svg#arrow-next"></use>
                </svg>
            </div>
        </div> <!-- /.chemistry-buttons -->
    </div>
</section>
<section class="section products-chemistry">
    <div class="container">
        <div class="products-chemistry-content-wrapper">
            <div class="products-chemistry-content">
                <div class="separator"></div>
                <?php
                    echo '<h2 class="section-title">'. $products_chemistry_block_title .'</h2>';
                ?>
                <div class="products-chemistry-text">
                    <p>Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.</p>
                </div>
                <ul class="products-chemistry-list">
                    <li class="products-chemistry-list-item">
                        <svg class="products-chemistry-list-icon" width="30" height="30">
                            <use href="img/sprite.svg#him"></use>
                        </svg>
                        Полное описание товаров
                    </li>
                    <li class="products-chemistry-list-item">
                        <svg class="products-chemistry-list-icon" width="30" height="30">
                            <use href="img/sprite.svg#car"></use>
                        </svg>
                        Актуальные цены
                    </li>
                    <li class="products-chemistry-list-item">
                        <svg class="products-chemistry-list-icon" width="30" height="30">
                            <use href="img/sprite.svg#flask"></use>
                        </svg>
                        Полное описание товаров
                    </li>
                    <li class="products-chemistry-list-item">
                        <svg class="products-chemistry-list-icon" width="30" height="30">
                            <use href="img/sprite.svg#car"></use>
                        </svg>
                        Актуальные цены
                    </li>
                    <li class="products-chemistry-list-item">
                        <svg class="products-chemistry-list-icon" width="30" height="30">
                            <use href="img/sprite.svg#brush"></use>
                        </svg>
                        Лаки и краски
                    </li>
                    <li class="products-chemistry-list-item">
                        <svg class="products-chemistry-list-icon" width="30" height="30">
                            <use href="img/sprite.svg#flask"></use>
                        </svg>
                        Химические производства
                    </li>
                    <li class="products-chemistry-list-item">
                        <svg class="products-chemistry-list-icon" width="30" height="30">
                            <use href="img/sprite.svg#brush"></use>
                        </svg>
                        Лаки и краски
                    </li>
                    <li class="products-chemistry-list-item">
                        <svg class="products-chemistry-list-icon" width="30" height="30">
                            <use href="img/sprite.svg#flask"></use>
                        </svg>
                        Химические производства
                    </li>
                </ul>
            </div>
        </div>
        <picture class="products-chemistry-photo">
            <source type="image/webp" srcset="img/products-chemistry-photo.webp">
            <source type="image/jpeg" srcset="img/products-chemistry-photo.png">
            <img src="img/products-chemistry-photo.png" alt="products">
        </picture>
    </div>
<!-- /.container -->
</section>
<section class="section types" >
    <div class="container">
        <div class="types-content-wrapper">
            <div class="types-content">
                <div class="separator"></div>
                <?php
                    echo '<h2 class="section-title">'. $types_chemistry_block_title .'</h2>';
                ?>
                <div class="types-text">
                    Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям.
                </div>
                <ul class="types-chemistry-list">
                    <li class="types-chemistry-list-item">
                        Антискотч
                    </li>
                    <li class="types-chemistry-list-item">
                        Многоцелевая смазка
                    </li>
                    <li class="types-chemistry-list-item">
                        Жидкий ключ
                    </li>
                    <li class="types-chemistry-list-item">
                        Высокотемпературная смазка
                    </li>
                    <li class="types-chemistry-list-item">
                        Универсальный очиститель деталей
                    </li>
                    <li class="types-chemistry-list-item">
                        Силиконовая смазка
                    </li>
                    <li class="types-chemistry-list-item">
                        Цепная смазка
                    </li>
                    <li class="types-chemistry-list-item">
                        Медная смазка
                    </li>
                    <li class="types-chemistry-list-item">
                        Графитовая смазка
                    </li>
                    <li class="types-chemistry-list-item">
                        Очиститель кондиционера пенный
                    </li>
                    <li class="types-chemistry-list-item">
                        Очиститель тормозных дисков
                    </li>
                    <li class="types-chemistry-list-item">
                        Очиститель битумных пятен
                    </li>
                    <li class="types-chemistry-list-item">
                        Очиститель кондционера
                    </li>
                    <li class="types-chemistry-list-item">
                        Очиститель дросельной заслонки
                    </li>
                    <li class="types-chemistry-list-item">
                        Очиститель обивки 
                    </li>
                    <li class="types-chemistry-list-item">
                        Тефлоновая смазка
                    </li>
                    <li class="types-chemistry-list-item">
                        Очиститель двигателя
                    </li>
                    <li class="types-chemistry-list-item">
                        Универсальный очиститель
                    </li>
                    <li class="types-chemistry-list-item">
                        Чернитель шин
                    </li>
                    <li class="types-chemistry-list-item">
                        Чернитель шин + очистка
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php $research_block_title = 'Исследовательский центр<br>Aliance production'; include_once('./template-parts/research-block.php');?>
<?php $workflow_block_title = "Cхема работы"; include_once('./template-parts/workflow-block.php');?>
<?php $clients_block_title = "Производим аэрозольную продукцию для разных сфер"; include_once('./template-parts/clients-block.php');?>
<?php include_once('footer.php');?>
</body>
</html>