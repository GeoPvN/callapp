<?php
/**
 * The template for displaying Tag Archive pages.
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
                <?php if ( have_posts() ) : ?>
                <h4 class="heading-icon">
                    <?php if( $smof_data['tcsn_show_archives_icon'] == 1 ) { ?>
                    <img src="<?php echo get_template_directory_uri() . "/img/icons/heading-icon-tag.png" ?>" width="40" height="40" alt="icon" class="icon-bg">
                    <?php } ?>
                    <?php printf( __( 'Tagged : %s', 'tcsn_theme' ), single_tag_title( '', false ) ); ?></h4>
            </div>
            <?php get_template_part( 'includes/templates/headers/page-header' ); ?>
        </div>
    </div>
</section>
<!-- #page-header -->

<section id="content" class="clearfix">
    <div class="container">
        <div class="row">
            <?php if ( $smof_data['tcsn_blog_layout'] == 'full-width' ) : ?>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( '/includes/templates/post-formats/content', get_post_format() ); ?>
                <?php endwhile; ?>
                <?php tcsn_paging_nav(); ?>
            </div>
            <?php elseif ( $smof_data['tcsn_blog_layout'] == 'with-sidebar' ) : ?>
            <?php if ( $smof_data['tcsn_blog_sidebar'] == 'sidebar-left' ) { ?>
            <?php get_sidebar(); ?>
            <?php } ?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( '/includes/templates/post-formats/content', get_post_format() ); ?>
                <?php endwhile; ?>
                <?php tcsn_paging_nav(); ?>
            </div>
            <?php if ( $smof_data['tcsn_blog_sidebar'] == 'sidebar-right' ) { ?>
            <?php get_sidebar(); ?>
            <?php } ?>
            <?php else : ?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( '/includes/templates/post-formats/content', get_post_format() ); ?>
                <?php endwhile; ?>
                <?php tcsn_paging_nav(); ?>
            </div>
            <?php get_sidebar(); ?>
            <?php endif ?>
            <?php else : ?>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <?php get_template_part( '/includes/templates/post-formats/content', 'none' ); ?>
            </div>
            <?php endif ?>
        </div>
    </div>
</section>
<!-- #content -->

<?php get_footer(); ?>
