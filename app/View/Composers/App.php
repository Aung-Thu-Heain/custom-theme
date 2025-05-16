<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Retrieve the site name.
     */
    public function siteName(): string
    {
        return get_bloginfo('name', 'display');
    }

    // public function primarymenu() {
    //     $args = array(
    //         'theme_location'    => 'primary_navigation',
    //         'menu'  =>  '',
    //         'container' => 'span',
    //         'container_class' => 'container_class',
    //         'container_id' => 'container_id',
    //         'menu_class' => 'navbar-nav u-header__navbar-nav',
    //         'menu_id' => 'menu_id',
    //     //   'echo' => '',
    //     //   'fallback_cb' => '',
    //         'before' => '',
    //         'after' => '',
    //         'link_before' => '',
    //         'link_after' => '<span class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></span>',
    //         // 'items_wrap' => 'item_wrap',
    //     //   'depth' => '',
    //         'walker' => new \App\wp_bootstrap4_navwalker()
    //     );
    //     return $args;
    // }
}
