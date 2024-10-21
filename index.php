
    <?php include 'header.php'; ?>
    <?php if (is_front_page() || is_home()) { ?>
    <main class="flex-1 overflow-hidden z-10 relative">
        <div class="swiper-container h-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/imgs/slides/01.jpg" class="object-cover hidden md:block" alt="" />
                    <img src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/imgs/slides-mobile/01.jpg" class="object-cover block md:hidden" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/imgs/slides/02.jpg" class="object-cover hidden md:block" alt="" />
                    <img src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/imgs/slides-mobile/02.jpg" class="object-cover block md:hidden" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/imgs/slides/03.jpg" class="object-cover hidden md:block" alt="" />
                    <img src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/imgs/slides-mobile/03.jpg" class="object-cover block md:hidden" alt="" />
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </main>
</div><!-- flex flex-col h-screen in header -->
<section class="py-20 bg-black">          
    <div class="container prose">
        <div class="grid grid-cols-2 gap-8">
            <div class="flex flex-wrap items-center col-span-2 md:col-span-1">
                <div>
                    <h1 class="text-white border-primary border-b-[3px] pb-2 inline-flex uppercase mb-1">A 5Fivex Brasil</h1>
                    <p class="text-justify text-white">Nasceu com a missão de encurtar barreiras. Frustrados com a dificuldade em encontrar peças de performance no país, nossos gestores decidiram dar um passo à frente e iniciar a importadora. Com vasta experiência em importação e distribuição de peças automotivas, tínhamos um caminho definido. Agora, só faltava concretizar parcerias e iniciar o trabalho.</p>
                    <a href="/sobre" class="btn">Continuar lendo...</a>
                </div>
            </div>
            <div class="hidden md:flex col-span-2 md:col-span-1">
            <img src="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/assets/imgs/sobre.jpg" class="object-cover rounded-lg" alt="" />
            </div>
        </div>
    </div>
</section>
<section class="py-10 bg-primary feature">          
    <div class="container">
        <div class="prose">
            <h1 class="text-black inline-flex uppercase mb-5 mx-auto">Acompanhe nossas novidades</h1>
        </div>
        <div class="grid grid-cols-4 gap-8">
        <?php
        $args = ['post_type' => '', 'posts_per_page' => 4];
        $loop = new WP_Query($args);
        while ($loop->have_posts()):

            $loop->the_post();
            global $product;
            ?>
            <div class="col-span-4 md:col-span-1 prose">
                <div class="card">
                <a href="<?php echo get_permalink(
                    $loop->post->ID
                ); ?>" title="<?php echo esc_attr(
    $loop->post->post_title ? $loop->post->post_title : $loop->post->ID
); ?>">               
                    <div class="card-body">
                        <?php the_post_thumbnail('thumbnail', [
                            'class' => 'card-img-top h-auto w-100 rounded-lg',
                        ]); ?>
                        <h2 class="my-2 text-secondary"><?php the_title(); ?></h2>
                    </div>
                </a>
                </div>
            </div>
            
		<?php
        endwhile;
        wp_reset_query();
        ?>
        </div>
    </div>
</section>
<section class="py-10 bg-black border-primary border-t-[10px]">          
    <div class="container">
        <div class="grid grid-cols-5 gap-8">
            <div class="col-span-5 md:col-span-3 flex justify-center items-center">
                    <img src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/imgs/1-ano-fivex.png" class="h-[190px] transition-all hover:scale-150 duration-1000	" alt="" />
            </div>
            <div class="col-span-5 md:col-span-2 overflow-hidden">
            <h3 class="text-white text-center mb-4">Confira o depoimento de nossos pilotos e amigos!</h3>
            <div class="swiper-container h-[500px]">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex justify-center">
                        <video class="swiper-video" controls>
                            <source src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/videos/1-ano-fivex.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <video class="swiper-video" controls>
                            <source src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/videos/1-ano-fivex-2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <video class="swiper-video" controls>
                            <source src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/videos/1-ano-fivex-3.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            </div>
        </div>
    </div>
</section>
<section class="p-4 bg-primary">
    <div class="container">
        <div class="prose">
            <h1 class="text-black border-black border-b-[3px] pb-2 inline-flex uppercase mb-5 mx-auto">Localização</h1>
        </div>
        <iframe src="https://maps.google.com/maps?width=100%25&amp;height=450&amp;hl=en&amp;q=5Fivex%20Brasil,%20Curitiba,%20Brazil&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<?php } ?>
<?php include 'footer.php'; ?>
