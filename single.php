<?php
include 'header.php'; ?>
<div>
    
    <div class="container">
        <div class="grid grid-cols-12 mt-[105px] py-5 prose !max-w-max gap-8">
            <div class="col-span-12 md:col-span-8">
                <h1><?php the_title(); ?></h1>
                <hr class="mt-2 mb-4" />
                <div class="content">
                <?php if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                } ?>
                </div>
            </div>
            <div class="col-span-12 md:col-span-4 bg-secondary p-4 rounded-lg">
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
