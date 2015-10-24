<div class="container nav-header-container">
    <div class="row">
        <div class="col-xs-12">
            <header id="header" class="header-main">
                <div class="logo-container">
                    <a href="<?=home_url();?>"><img src="<?= get_header_image(); ?>" alt="<?php bloginfo('title') ?>" class="img-responsive"></a>
                </div>
                <nav class="nav-container navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-main" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="nav-main">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'main_menu',
                            'menu_class'     => 'nav navbar-nav',
                            'walker'         => new wp_bootstrap_navwalker()
                        )); ?>
                    </div>
                </nav>
            </header>
        </div>
    </div>
</div>
