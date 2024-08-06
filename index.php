
    <?php include 'header.php'; ?>
    <?php if (is_front_page() || is_home()) { ?>
    <div class="swiper-container">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/assets/imgs/slides/01.webp" alt="" />
        </div>
        <div class="swiper-slide">
            <img src="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/assets/imgs/slides/02.webp" alt="" />
        </div>
        <div class="swiper-slide">
            <img src="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/assets/imgs/slides/03.webp" alt="" />
        </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
     </div>
     <div class="container prose py-4 bg-black text-light">
        <div class="row">
            <div class="col">
                <h1>A Five X Brasil</h1>
                <p>A 5 Five X Brasil é uma loja importadora especializada em rodas, pneus e acessórios automotivos, destacando-se no mercado por sua oferta de produtos de alta qualidade importados diretamente do Japão. Fundada por Robson Okamura, a empresa tem se consolidado como um nome de referência no setor, oferecendo aos seus clientes itens que combinam desempenho superior com design inovador.</p>
            </div>
        </div>
     </div>
    <?php } ?>
    <?php include 'footer.php'; ?>
