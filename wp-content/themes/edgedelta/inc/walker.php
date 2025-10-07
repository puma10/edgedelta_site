<?php
class Footer_Menu_Walker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
    }

    function end_lvl(&$output, $depth = 0, $args = null)
    {
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $output .= '<a href="' . esc_url($item->url) . '" class="footer_link">' . esc_html($item->title) . '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = null)
    {
    }
}


class Main_Menu_Walker extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= '<nav class="navbar_dropdown-list w-dropdown-list">';
    }

    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= '</nav>';
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);

        // Визначаємо клас для посилань
        $link_class = ($depth === 0) ? 'navbar_link w-nav-link' : 'navbar2_dropdown-link w-dropdown-link';

        // Додаємо атрибут target, якщо активовано опцію "відкрити в новій вкладці"
        $target = !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';

        if ($has_children) {
            $output .= '<div data-hover="true" data-delay="200" data-w-id="da62bf12-0ca5-3a1a-9f7d-52b3f8c5ec4e" class="navbar_menu-dropdown w-dropdown">';
            $output .= '<div class="navbar_dropdwn-toggle w-dropdown-toggle" role="button">';
            $output .= '<div>' . esc_html($item->title) . '</div>';
            $output .= '<div class="dropdown-chevron w-embed">';
            $output .= '<svg width="100%" height="100%" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">';
            $output .= '<path fill-rule="evenodd" clip-rule="evenodd" d="M2.55806 6.29544C2.46043 6.19781 2.46043 6.03952 2.55806 5.94189L3.44195 5.058C3.53958 4.96037 3.69787 4.96037 3.7955 5.058L8.00001 9.26251L12.2045 5.058C12.3021 4.96037 12.4604 4.96037 12.5581 5.058L13.4419 5.94189C13.5396 6.03952 13.5396 6.19781 13.4419 6.29544L8.17678 11.5606C8.07915 11.6582 7.92086 11.6582 7.82323 11.5606L2.55806 6.29544Z" fill="currentColor"></path>';
            $output .= '</svg>';
            $output .= '</div></div>';
        } else {
            $output .= '<a href="' . esc_url($item->url) . '" class="' . esc_attr($link_class) . '"' . $target . '>' . esc_html($item->title) . '</a>';
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        if (in_array('menu-item-has-children', (array) $item->classes)) {
            $output .= '</div>';
        }
    }
}
