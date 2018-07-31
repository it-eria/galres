<div class="nav-menu-container pb-30">
    <div class="full-w-bborder">
        <div class="container">
            <nav class="nav-second navbar navbar-expand-md">
                <div class="navbar-header">
                    <a class="d-sm-block d-md-none d-lg-none" data-toggle="collapse" data-target="#first" href="#" id="menu-burger"><span></span></a>
                    <a class="navbar-brand d-sm-block d-md-none d-lg-none" href="<?php echo get_page_link(8); ?>"><img class="logotype-img"
                                                                                             src="<?php the_field('mobile_logo', 'option'); ?>"
                                                                                             alt="Brand"/></a>
                    <a class="header-btn-products d-sm-block d-md-none d-lg-none" href="<?php echo get_page_link(12); ?>"><?php _e('Продукція', 'custom'); ?></a>
                </div>
                <div class="collapse navbar-collapse" id="first">
                    <?php
                    wp_nav_menu( array(
                        'theme_location'  => '',
                        'menu'            => '',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s navbar-nav">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ) );
                    ?>
                </div>
            </nav>
        </div>
    </div>

</div>