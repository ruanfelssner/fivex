<?php
include 'header.php'; ?>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
} ?>
<?php include 'footer.php'; ?>
