<?php
if (!wp_is_mobile()) {
    ?>
    <!doctype html>
    <html>
	<?php include 'templates/head.php';?>

    <body>
    <header class="header">
        <?php
        include 'navigation.php';
        ?>
    </header>
    <?php
} else {
    ?>
    <!doctype html>
    <html>
    <head>
        <title>CodePamoja</title>
        <meta charset="utf-8">
        <meta name="description"
              content="CodePamoja is a Dutch-Kenyan initiative helping software developers in Nairobi get up to speed with the latest techniques in software development and project management. Using Agile methods, Dutch firm Competa supports and mentors Kenyan partners, collaborating on projects and learning together.">
        <meta name="keywords" content="codepamoja, competa, dewcis, kenya, netherlands">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

<body>
<header class="header">
    <button type="button" class="btn nav-icon mobile-nav-icon"><span></span></button>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" class="logo" alt="codepamoja"></a>
    <?php include 'navigation.php'; ?>
</header>
    <?php
}
?>