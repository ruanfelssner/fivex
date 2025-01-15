<div class="grid grid-cols-12 !max-w-max gap-8">
            <div class="col-span-12 md:col-span-8">
                <div class="content">
                <div class="grid grid-cols-2 gap-8">
                        <?php
                            $args = [
                                'post_type' => 'post',
                                'paged' => $paged,
                                'category_name' => get_query_var('category_name')
                            ];
                            $loop = new WP_Query($args);
                            while ($loop->have_posts()):
                            $loop->the_post();
                            global $product;
                        ?>
                            <div class="col-span-1 md:col-span-1 prose">
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
                            wp_reset_postdata();
                        ?>
                        </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-4 bg-secondary p-4 rounded-lg">
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
        <div class="grid">
            <div class="grid-cols-1">
            <?php wp_pagenavi(); ?>
            </div>
        </div>