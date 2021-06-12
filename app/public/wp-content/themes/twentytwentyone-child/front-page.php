<?php
/**
 * The template for displaying all single profile posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * 
 * 
 * 
 */

get_header();
$homepageProfiles = new WP_Query(array(
    'posts_per_page' => 3,
    'post_type' => 'Profile'
));?>
  <h1 class="posts-title">The Team</h1>
<?php while($homepageProfiles->have_posts()) {
    $homepageProfiles->the_post(); ?>
    <ul class="profile-post-title">
    <li ><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
    </ul>
<?php }?>
<a href="<?php echo get_post_type_archive_link('profile'); ?>" class="see-more"><button>more profiles</button></a>

<?php get_footer();
