<?php
include 'header.php'; ?>
<div class="container">
<div class="row">
    <div class="col prose">
    <h1><?php the_title(); ?></h1>
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
