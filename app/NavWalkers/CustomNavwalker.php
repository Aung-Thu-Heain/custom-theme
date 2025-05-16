<?php

namespace App\NavWalkers;

class CustomNavwalker extends \Walker_Nav_Menu
{
     private $dropdown_count = 0;

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        // Removed: previously created dropdown here, which is too late
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= "</ul></div>\n";
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $has_children = in_array('menu-item-has-children', $item->classes);
        $dropdown_id = 'dropdownNavbar' . $this->dropdown_count;

        if ($has_children) {
            $this->dropdown_count++;
            $output .= '<li>';
            $output .= '<button data-dropdown-toggle="' . esc_attr($dropdown_id) . '" class="flex items-center justify-between w-full py-2 px-3 rounded-sm   md:border-0 md:hover:text-yellow-400  md:w-auto dark:text-white md:dark:hover:text-yellow-400 dark:focus:text-white dark:border-gray-700 mr-6  ">';
            $output .= esc_html($item->title);
            $output .= '<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>';
            $output .= '</button>';

            // OPEN the dropdown wrapper + UL early
            $output .= "<div id=\"$dropdown_id\" class=\"z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600\">\n";
            $output .= '<ul class="py-2 text-sm text-gray-700 dark:text-gray-400">' . "\n";
        } else {
            $output .= '<li>';
            $output .= '<a href="' . esc_url($item->url) . '" class="block px-4 py-2  hover:text-yellow-400">';
            $output .= esc_html($item->title);
            $output .= '</a>';
        }
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }
}
