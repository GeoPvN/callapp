<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Grepfrut
 * @since Grepfrut 1.0
 */
?>
<?php get_header(); ?>
<?php global $smof_data; ?>

<section id="page-header" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <?php if ( ! is_page() ) : ?>
                <?php if( $smof_data['tcsn_blog_title'] != "" ) { ?>
                <h4 class="heading-icon">
                    <?php if( $smof_data['tcsn_show_blog_icon'] == 1 ) { ?>
                    <img src="<?php echo get_template_directory_uri() . "/img/icons/heading-icon-listwithimg.png" ?>" width="40" height="40" alt="icon" class="icon-bg">
                    <?php } ?>
                    <?php echo $smof_data['tcsn_blog_title']; ?></h4>
                <?php } ?>
                <?php else : ?>
                <h4 class="heading-icon clearfix">
                    <?php $show_icon = rwmb_meta('rw_show_icon', 'type=checkbox'); ?>
                    <?php $icon_url = rwmb_meta('rw_icon_url', 'type=text'); ?>
                    <?php if ( $show_icon == 1 ) { ?>
                    <img src="<?php echo $icon_url; ?>" width="40" height="40" alt="icon" class="icon-bg">
                    <?php } ?>
                    <?php echo the_title(); ?></h4>
                <?php endif ?>
            </div>
            <?php get_template_part( 'includes/templates/headers/page-header' ); ?>
        </div>
    </div>
</section>
<!-- #page-header -->

<section id="content" class="clearfix">
    <div class="container">
        <div class="row">
            <?php if ( $smof_data['tcsn_blog_sidebar'] == 'sidebar-left' ) { ?>
            <?php get_sidebar(); ?>
            <?php } ?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( '/includes/templates/post-formats/content', get_post_format() ); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages :', 'tcsn_theme' ) . '</span><div class="next-arrow"></div>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                <?php tcsn_post_nav(); ?>
                <?php comments_template(); ?>
                <?php endwhile; ?>
            </div>
            <?php if ( $smof_data['tcsn_blog_sidebar'] == 'sidebar-right' ) { ?>
            <?php get_sidebar(); ?>
            <?php } ?>
        </div>
    </div>
</section>
<!-- #content -->

<?php get_footer(); ?>
