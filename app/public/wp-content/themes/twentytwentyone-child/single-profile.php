<?php

get_header();

$first_name = get_field('first_name');
$last_name = get_field('last_name');
$nickname = get_field('nickname'); ?>

<h1 class="single-title"><?php the_title(); ?></h1>

<div class="card">
<?php while(have_posts()) {
    the_post(); ?>
        <?php 
           if(empty($nickname)) {?>
            <h3> First Name: <?php echo $first_name ?> </h3>
          <?php }
           else {?>
            <h3> Nickname: <?php echo $nickname ?> </h3>
          <?php }
        ?>
           <h3> Last Name: <?php echo $last_name ?> </h3>
<?php }?>
     </div>

<?php
get_footer();