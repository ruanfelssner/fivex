<?php
include 'header.php'; ?>
<div class="container">
<div class="grid grid-cols-1 mt-[105px] py-5 prose !max-w-max mx-auto">
    <div class="col">
        <h1 class="text-black"><?php the_title(); ?></h1>
        <hr class="mt-2 mb-4" />
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        } ?>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>
