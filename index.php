
    <?php include 'header.php'; ?>
    <?php if (is_front_page() || is_home()) { ?>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
     </div>
     <div class="container">
        <div class="row">
            <div class="col">
                <h1>Sobre</h1>
            </div>
        </div>
     </div>
    <?php } ?>
    <?php include 'footer.php'; ?>
