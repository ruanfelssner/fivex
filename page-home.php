
<?php 
/*
Template Name: Home
*/ 
include 'header.php'; 
?>
    <?php if (is_front_page() || is_home()) { ?>
        
    <main class="flex-1 overflow-hidden z-10 relative">
        <div class="swiper-container h-full banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <video class="swiper-video !w-full" autoplay muted loop playsinline>
                        <source src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/slides/video-apresentacao.mp4" type="video/mp4">
                        Seu navegador não suporta o vídeo.
                    </video>
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/slides/banner-01.jpg" class="object-cover hidden md:block" alt="" />
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/slides-mobile/mobile-01.jpg" class="object-cover block md:hidden" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/slides/banner-02.jpg" class="object-cover hidden md:block" alt="" />
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/slides-mobile/mobile-02.jpg" class="object-cover block md:hidden" alt="" />
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </main>
</div>
<section class="py-10 bg-white feature max-w-full overflow-x-hidden">          
    <div class="container" style="position:relative;">
        <div class="prose mx-auto flex">
            <h1 class="text-black inline-flex uppercase mb-5 mx-auto">Lançamentos</h1>
        </div>
    </div>
    <div class="swiper-products lg:px-20">
        <div class="swiper-wrapper">
            <?php
                $args = ['post_type' => '', 'cat' => '132'];
                $loop = new WP_Query($args);
                while ($loop->have_posts()):
                $loop->the_post();
                global $product;
            ?>
            <div class="swiper-slide">
                <div class="card rounded-tr-lg rounded-tl-lg bg-neutral-50 overflow-hidden">               
                    <div class="card-body text-center">
                        <?php the_post_thumbnail('thumbnail', ['class' => 'h-auto w-100 mt-0 mb-0']); ?>
                        <div class="desc p-3">
                            <h2 class="mb-0 mt-2 text-secondary"><?php the_title(); ?></h2>
                            <?php the_excerpt(); ?>  
                        </div>                          
                    </div>
                </div>
            </div>                
            <?php endwhile; wp_reset_query(); ?>
        </div>            
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<section class="relative garantia">
    <svg class="absolute top-0 left-[200px] -translate-x-1/2 z-0 hidden md:block" width="100%" height="100%" viewBox="0 0 1 100" xmlns="http://www.w3.org/2000/svg">
        <path d="M 2 0 Q 50 50 2 100" stroke="white" stroke-width="1" fill="none" />
    </svg>
    <div class="bg py-12">
        <div class="container">
            <div class="grid grid-cols-1 gap-16 relative z-10">
            <!-- Garantia e Qualidade -->
            <div class="flex flex-wrap">
                <div class="mb-4 me-6 border border-white rounded-full overflow-hidden p-4 bg-black">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/icons/fa-solid-award.svg" alt="Garantia e Qualidade" class="w-12 h-12">
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-2">GARANTIA E QUALIDADE</h3>
                    <p class="text-sm">
                    Testados e aprovados no limite das pistas de <span class="font-semibold">Drift</span>, nossos produtos atendem aos mais altos padrões de performance, garantindo confiabilidade e durabilidade incomparáveis.
                    </p>
                </div>
            </div>

            <!-- +100 Modelos Diferentes -->
            <div class="flex flex-wrap md:ms-20">
                <div class="mb-4 me-6 border border-white rounded-full overflow-hidden p-4 bg-black">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/icons/system-uicons--box-open.svg" alt="100 Modelos Diferentes" class="w-12 h-12">
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-2">+100 MODELOS DIFERENTES</h3>
                    <p class="text-sm">
                    Com uma ampla variedade, a 5Fivex Brasil oferece modelos únicos que atendem a diferentes estilos e necessidades, trazendo constantemente novidades exclusivas ao mercado.
                    </p>
                </div>
            </div>

            <!-- Inovação -->
            <div class="flex flex-wrap md:ms-20">
                <div class="mb-4 me-6 border border-white rounded-full overflow-hidden md:p-4 bg-black block">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/icons/mdi--lightbulb-on-outline.svg" alt="Inovação" class="w-12 h-12">
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-2">INOVAÇÃO</h3>
                    <p class="text-sm">
                    Estamos sempre à frente, conectando tendências globais às necessidades do mercado brasileiro, com produtos modernos e inovadores que elevam sua experiência.
                    </p>
                </div>
            </div>

            <!-- Compromisso Ambiental -->
            <div class="flex flex-wrap">
                <div class="mb-4 me-6 border border-white rounded-full overflow-hidden p-4 bg-black">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/icons/mdi--environment-outline.svg" alt="Compromisso Ambiental" class="w-12 h-12">
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-2">COMPROMISSO AMBIENTAL</h3>
                    <p class="text-sm">
                    Respeitamos o meio ambiente! Seguimos rigorosamente as normas de logística reversa, contribuindo para um futuro sustentável e um planeta mais limpo.
                    </p>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-black sobre">
    <div class="grid grid-cols-2 gap-0">        
        <div class="col-span-2 md:col-span-1 mb-4 md:mb-0">
            <div class="p-16  flex flex-col justify-center h-full">
                <h1>Sobre Nós</h1>
                <p>A 5 Fivex Brasil nasceu de uma paixão que atravessou continentes. A ideia surgiu no Japão, com o propósito de trazer ao Brasil produtos exclusivos e de alta qualidade que atendem aos amantes do universo automotivo. Inspirados pela cultura japonesa de excelência, trazemos essa filosofia para nossos produtos e serviços.</p>
                <div><a href="/sobre">Saiba mais</a></div>
            </div>
        </div>
        <div class="col-span-2 md:col-span-1">
            <div class="thumb">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/quem-somos.jpg" class="object-cover  mb-6 mb-md-0" alt="" />
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-0">        
        <div class="col-span-2 md:col-span-1">
            <div class="thumb">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/rodas.jpg" class="object-cover " alt="" />
            </div>
        </div>
        <div class="col-span-2 md:col-span-1 ">
           <div class="p-16 flex flex-col justify-center h-full">
                <h1>Nossos Produtos</h1>
                <p>Exclusividade e Inovação Na 5Fivex Brasil, nossa missão é trazer ao mercado nacional o que há de mais exclusivo e inovador no mundo das rodas automotivas. Iniciamos nossa operação de importação para preencher uma lacuna significativa no Brasil: a falta de opções de rodas de alta qualidade para os entusiastas do universo JDM (Japanese Domestic Market). 
                    <br /> <br />Inovação e Qualidade para Cada Viagem, a Delmax se destaca no mercado de pneus, unindo tecnologia avançada e um compromisso inabalável com a qualidade. Nossos pneus são projetados para atender as demandas dos motoristas modernos, oferecendo segurança e desempenho em todas as condições de estrada.</p>            
                <div><a href="#">Saiba mais</a></div>
           </div>
        </div>
    </div>
</section>
<!-- <section class="py-20 bg-black sobre">
    <div class="container text-white">
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3 md:col-span-1">
                <div class="thumb">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/rodas.jpg" class="object-cover rounded-tr-lg rounded-tl-lg overflow-hidden" alt="" />
                </div>
                <h1>Rodas Automotivas</h1>
                <p>Exclusividade e Inovação Na 5Fivex Brasil, nossa missão é trazer ao mercado nacional o que há de mais exclusivo e inovador no mundo das rodas automotivas. Iniciamos nossa operação de importação para preencher uma lacuna significativa no Brasil: a falta de opções de rodas de alta qualidade para os entusiastas do universo JDM (Japanese Domestic Market).<br /></p>
            </div>
            <div class="col-span-3 md:col-span-1">
                <div class="thumb">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/pneus.jpg" class="object-cover rounded-tr-lg rounded-tl-lg overflow-hidden" alt="" />
                </div>
                <h1>Pneus Delmax</h1>
                <p>Inovação e Qualidade para Cada Viagem, a Delmax se destaca no mercado de pneus, unindo tecnologia avançada e um compromisso inabalável com a qualidade. Nossos pneus são projetados para atender as demandas dos motoristas modernos, oferecendo segurança e desempenho em todas as condições de estrada.<br /></p>
            </div>
            <div class="col-span-3 md:col-span-1">
                <div class="thumb">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/quem-somos.jpg" class="object-cover rounded-tr-lg rounded-tl-lg overflow-hidden" alt="" />
                </div>
                <h1>Quem Somos</h1>
                <p>A 5Fivex Brasil nasceu com a missão de encurtar barreiras. Frustrados com a dificuldade em encontrar peças de performance no país, nossos gestores decidiram dar um passo à frente e iniciar a importadora.</p>
            </div>
        </div>
    </div>
</section> -->
<section class="py-10 bg-white feature">          
    <div class="container">
        <div class="prose">
            <h1 class="text-black inline-flex uppercase mb-5 mx-auto">Novidades</h1>
        </div>
        <div class="grid grid-cols-4 gap-8">
        <?php
            $args = ['post_type' => '', 'posts_per_page' => 4, 'cat' => '-132'];
            $loop = new WP_Query($args);
            while ($loop->have_posts()):
            $loop->the_post();
            global $product;
        ?>
            <div class="col-span-4 md:col-span-1 prose">
                <div class="card rounded-lg bg-zinc-50">               
                    <div class="card-body rounded-tr-lg rounded-tl-lg overflow-hidden">
                        <a href="<?php echo get_permalink($loop->post->ID); ?>" class="thumbnail"><?php the_post_thumbnail('thumbnail', ['class' => 'h-auto w-100 mt-0 mb-0',]); ?></a>
                        <div class="description p-3">
                            <a href="<?php echo get_permalink( $loop->post->ID); ?>" class="no-underline hover:underline"><h3 class="mb-0 mt-2 text-secondary font-extrabold"><?php the_title(); ?></h3></a>
                            <?php the_excerpt(); ?>
                            <a href="<?php echo get_permalink($loop->post->ID); ?>" class="px-4 py-2 font-semibold text-sm bg-cyan-500 text-white rounded-full shadow-sm no-underline hover:underline mb-2">Leia mais</a>
                        </div>
                    </div>
                </div>
            </div>            
		<?php
            endwhile;
            wp_reset_query();
        ?>
        </div>
    </div>
</section>
<section class="localizacao">
    <div class="bg py-10">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-4">
                    <div class="prose">
                        <h2 class="text-white border-primary border-b-[3px] pb-2 inline-flex mb-8 mx-auto">Faça contato</h2>
                        <p>
                            <a href="mailto:contato@5fivexbrasil.com" class="inline-flex items-center">
                                <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 5.25L3 6V18L3.75 18.75H20.25L21 18V6L20.25 5.25H3.75ZM4.5 7.6955V17.25H19.5V7.69525L11.9999 14.5136L4.5 7.6955ZM18.3099 6.75H5.68986L11.9999 12.4864L18.3099 6.75Z" fill="#FFF"/>
                                </svg> 
                                <span class="ms-3">contato@5fivexbrasil.com</span>
                            </a>
                        </p>
                        <p>
                            <a href="https://api.whatsapp.com/send?phone=5541985212626" class="inline-flex items-center">
                                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.014 8.00613C6.12827 7.1024 7.30277 5.87414 8.23488 6.01043L8.23339 6.00894C9.14051 6.18132 9.85859 7.74261 10.2635 8.44465C10.5504 8.95402 10.3641 9.4701 10.0965 9.68787C9.7355 9.97883 9.17099 10.3803 9.28943 10.7834C9.5 11.5 12 14 13.2296 14.7107C13.695 14.9797 14.0325 14.2702 14.3207 13.9067C14.5301 13.6271 15.0466 13.46 15.5548 13.736C16.3138 14.178 17.0288 14.6917 17.69 15.27C18.0202 15.546 18.0977 15.9539 17.8689 16.385C17.4659 17.1443 16.3003 18.1456 15.4542 17.9421C13.9764 17.5868 8 15.27 6.08033 8.55801C5.97237 8.24048 5.99955 8.12044 6.014 8.00613Z" fill="#FFF"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 23C10.7764 23 10.0994 22.8687 9 22.5L6.89443 23.5528C5.56462 24.2177 4 23.2507 4 21.7639V19.5C1.84655 17.492 1 15.1767 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23ZM6 18.6303L5.36395 18.0372C3.69087 16.4772 3 14.7331 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21C11.0143 21 10.552 20.911 9.63595 20.6038L8.84847 20.3397L6 21.7639V18.6303Z" fill="#FFF"/>
                                </svg>
                                <span class="ms-3">(41) 98521-2626</span>
                            </a>
                        </p>
                        <p>
                            <a href="https://www.google.com/maps?ll=-25.4661,-49.351941&z=14&t=m&hl=en&gl=US&mapclient=embed&cid=16810949945576920321" class="inline-flex items-center">
                                <svg width="40px" height="40px" viewBox="-3 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-223.000000, -5399.000000)" fill="#FFF">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path d="M174,5248.219 C172.895,5248.219 172,5247.324 172,5246.219 C172,5245.114 172.895,5244.219 174,5244.219 C175.105,5244.219 176,5245.114 176,5246.219 C176,5247.324 175.105,5248.219 174,5248.219 M174,5239 C170.134,5239 167,5242.134 167,5246 C167,5249.866 174,5259 174,5259 C174,5259 181,5249.866 181,5246 C181,5242.134 177.866,5239 174,5239" id="pin_fill_sharp_circle-[#634]"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <span class="ms-3">R. Theodoro Locker, 821 -  81270-370 - Curitiba - PR</span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-8">
                    <div class="prose">
                        <h2 class="text-white border-primary border-b-[3px] pb-2 inline-flex mb-8 mx-auto">Localização</h2>
                    </div>
                    <iframe src="https://maps.google.com/maps?width=100%25&amp;height=450&amp;hl=en&amp;q=5Fivex%20Brasil,%20Curitiba,%20Brazil&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php include 'footer.php'; ?>
