<?php

get_header();

pageBanner(array(
 'title' => 'Our Campuses',
 'subtitle' => 'We have several conveniently located campuses.'
));

?>

<div class="container container--narrow page-section">
  
    <div class="acf-map">
        <?php 
        while(have_posts()){
            the_post(); 
            $mapLocation = get_field('map_location');
            ?>

            <div class="marker" data-lat="<?php $mapLocation['lat'] ?>" data-lng="<?php $mapLocation['lng'] ?>" ></div>

        <?php } 

        echo paginate_links(); 

        ?>
    </div>

    <ul>
        <?php 
        while(have_posts()){
            the_post(); 
            ?>

            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

        <?php } 

        echo paginate_links(); 

        ?>
    </ul>

</div>

<?php
get_footer();