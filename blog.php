<?php 
    $page_title = 'Блог';
    $header_style = 'page-header';
    include_once('header-page.php');?>

    <section class="section articles">
        <div class="container">
            <div class="articles-grid">
                <?php for ($i = 0; $i < 10; $i++): ?>
                    <a href="#" class="articles-card">
                        <picture class="articles-card-image">
                            <source type="image/webp" srcset="img/blog-photo-methodology.webp">
                            <source type="image/jpeg" srcset="img/blog-photo-methodology.png">
                            <img src="img/blog-photo-methodology.png" alt="blog">
                        </picture>
                        <h3 class="articles-card-title">
                            Современная методология разработки одухотворила всех причастных
                        </h3>
                        <p class="articles-card-text">
                            Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию...
                        </p>
                    </a>
                    <a href="#" class="swiper-slide articles-card">
                        <picture class="articles-card-image">
                            <source type="image/webp" srcset="img/blog-photo-life.webp">
                            <source type="image/jpeg" srcset="img/blog-photo-life.png">
                            <img src="img/blog-photo-life.png" alt="blog">
                        </picture>
                        <h3 class="articles-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="articles-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                </a>
                <?php endfor; ?>
            </div>

            <!-- PAGINATION -->
            <div class="pagination">
                <a href="#" class="page active">1</a>
                <a href="#" class="page">2</a>
                <a href="#" class="page">3</a>
                <a href="#" class="page">4</a>
                <a href="#" class="page">›</a>
            </div>
        </div>
    </section>
    <?php include_once('footer.php');?>
</body>
</html>