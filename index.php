<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?> | <?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class(); ?>>
    <?php include('header.php'); ?>
    <?php 
    if ( is_front_page() || is_home() ) {
        
    } 
    ?>
    <?php include('footer.php'); ?>
</body>
</html>