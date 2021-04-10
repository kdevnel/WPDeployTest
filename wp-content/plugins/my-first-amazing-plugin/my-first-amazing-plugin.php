<?php

/**
 * Plugin Name: My first amazing plugin
 * Description: This plugin will change your life
 * version: 1.0
 * Author: Kyle
 */

add_filter('the_content', 'amazingContentEdits');

/**
 * Undocumented function
 *
 * @param mixed $content content from the post
 *
 * @return string
 */
function amazingContentEdits($content)
{
    $content = $content . '<p>All content belongs to Bowtie University [>•<]';
    $content = str_replace('protego', 'p*****o', $content);
    return $content;
}

add_shortcode('programCount', 'programCountFunction');

/**
 * Find the number of programs in the 'program' post type
 *
 * @return string
 */
function programCountFunction()
{
    $programCount = wp_count_posts('program')->publish;
    return $programCount;
}
