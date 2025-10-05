<section class="section blog">
    <div class="container">
        <?php
            if (!empty($block_title)) {
                echo '<div class="separator"></div>';
                echo '<h2 class="section-title">'. $block_title .'</h2>';
            }
            ?>
        <div class="swiper blog-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="#" class="swiper-slide blog-card">
                <img src="img/blog-photo-methodology.png" alt="" class="blog-card-image">
                <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
                <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
            </a>
            <a href="#" class="swiper-slide blog-card">
                <img src="img/blog-photo-life.png" alt="" class="blog-card-image">
                <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
            </a>
            </a>
            <a href="#" class="swiper-slide blog-card">
                <img src="img/blog-photo-methodology.png" alt="" class="blog-card-image">
                <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
                <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
            </a>
            </div>
            <div class="blog-slider-footer">
                <a href="#" class="button-link">Весь блог</a>
                <div class="blog-buttons primary-buttons-wrapper">
                    <div class="blog-button-prev primary-button-prev">
                        <svg class="arrow-prev" width="30" height="20">
                            <use href="img/sprite.svg#arrow-prev"></use>
                        </svg>
                    </div>
                    <div class="blog-button-next primary-button-next">
                        <svg class="arrow-next" width="30" height="20">
                            <use href="img/sprite.svg#arrow-next"></use>
                        </svg>
                    </div>
                </div> <!-- /.blog-buttons -->
            </div>
        </div>
    </div>
</section>