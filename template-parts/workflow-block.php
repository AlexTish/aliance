<section class="section section-light">
    <div class="container">
        <?php
            if (!empty($workflow_block_title)) {
                echo '<div class="separator"></div>';
                echo '<h2 class="section-title">'. $workflow_block_title .'</h2>';
            }
            ?>
        <div class="swiper swiper-steps">
            <!-- Обертка слайдера -->
            <ol class="swiper-wrapper steps">
                <li class="swiper-slide steps-item">
                    <span class="steps-num">01</span>
                    <h3 class="steps-title">Знакомство</h3>
                    <p class="steps-text">Безусловно, сплочённость команды профессионалов позволяет оценить<br>значение форм воздействия.</p>
                    <a href="#" class="button-link">Оставить заявку</a>
                </li>
                <li class="swiper-slide steps-item">
                    <span class="steps-num">02</span>
                    <h3 class="steps-title">Заключение<br>договора</h3>
                    <p class="steps-text">Лишь интерактивные прототипы<br>призваны к ответу.</p>
                </li>
                <li class="swiper-slide steps-item">
                    <span class="steps-num">03</span>
                    <h3 class="steps-title">Производство</h3>
                    <p class="steps-text">А также стремящиеся вытеснить традиционное производство,<br>нанотехнологиифункционально<br>разнесены на независимые<br>элементы.</p>
                </li>
                <li class="swiper-slide steps-item">
                    <span class="steps-num">04</span>
                    <h3 class="steps-title">Доставка</h3>
                    <p class="steps-text">В частности, экономическая повестка сегодняшнего дня говорит о<br>возможностях приоритизации<br>разума над эмоциями.</p>
                </li>
            </ol>
            <!-- Кнопки навигации вперед-назад -->
            <div class="steps-buttons primary-buttons-wrapper">
                <div class="steps-button-prev primary-button-prev">
                    <svg class="arrow-prev" width="30" height="20">
                        <use href="img/sprite.svg#arrow-prev"></use>
                    </svg>
                </div>
                <div class="steps-button-next primary-button-next">
                    <svg class="arrow-next" width="30" height="20">
                        <use href="img/sprite.svg#arrow-next"></use>
                    </svg>
                </div>
            </div> <!-- /.steps-buttons -->
        </div> <!-- Окончание Основной блок слайдера -->
    </div><!-- /.container -->
</section>