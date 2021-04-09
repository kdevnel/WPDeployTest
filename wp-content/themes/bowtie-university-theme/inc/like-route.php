<?php

/**
 * Route for registering post likes in the Rest API
 *
 * PHP version 5
 *
 * @category RestAPI
 * @package  WordPress
 * @author   Name <email@email.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     bowtieuniversityudemycourse.local
 */

add_action('rest_api_init', 'universityLikeRoutes');

/**
 * Undocumented function
 *
 * @return void
 */
function universityLikeRoutes()
{
    register_rest_route(
        'university/v1',
        'manageLike',
        array(
            'methods' => 'POST',
            'callback' => 'createLike'
        )
    );

    register_rest_route(
        'university/v1',
        'manageLike',
        array(
            'methods' => 'DELETE',
            'callback' => 'deleteLike'
        )
    );
}

/**
 * Undocumented function
 *
 * @param [type] $data variables
 *
 * @return void
 */
function createLike($data)
{
    if (is_user_logged_in()) {
        $professorID = sanitize_text_field($data['professorID']);

        $existQuery = new WP_Query(
            array(
                'author' => get_current_user_id(),
                'post_type' => 'like',
                'meta_query' => array(
                    array(
                        'key' => 'liked_professor_id',
                        'compare' => '=',
                        'value' => $professorID
                    )
                )
            )
        );

        if ($existQuery->found_posts == 0 and get_post_type($professorID) == 'professor') {
            return wp_insert_post(
                array(
                    'post_type' => 'like',
                    'post_status' => 'publish',
                    'post_title' => 'Second PHP Test',
                    'meta_input' => array(
                        'liked_professor_id' => $professorID
                    )
                )
            );
        } else {
            die("Invalid professor ID");
        }
    } else {
        die("Only logged in users can create a like.");
    }
}

/**
 * Undocumented function
 *
 * @return void
 */
function deleteLike($data)
{
    $likeID = sanitize_text_field($data['like']);
    if (get_current_user_id() == get_post_field('post_author', $likeID) and get_post_type($likeID) == 'like') {
        wp_delete_post($likeID, true);
        return 'Congrate, like deleted.';
    } else {
        die("You do not have permission to delete that.");
    }
}
