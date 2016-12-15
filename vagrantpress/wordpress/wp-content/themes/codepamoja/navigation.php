<?php
if (!wp_is_mobile()) {
    ?>
    <button type="button" class="hamburger btn nav-icon"><span></span></button>

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" class="logo" alt="codepamoja"/></a>

    <div class="header-btns">
        <button class="btn pitch-btn side-form" href="">pitch your project</button>
        <button class="btn apply-btn" type="button"
                onclick="window.location.href='http://apply.codepamoja.org/cp/application.jsp'">apply
        </button>
    </div>

    <nav class="nav-collapse">
        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    </nav>
    <?php
} else {
    ?>
    <nav class="nav-collapse">
        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>

        <div class="header-btns">
            <button class="btn pitch-btn side-form" href="">pitch your project</button>
            <button class="btn apply-btn" type="button"
                    onclick="window.location.href='http://apply.codepamoja.org/cp/application.jsp'">apply
            </button>
        </div>

    </nav>
    <?php
}
?>