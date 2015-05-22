<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
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
                <h1 class="heading-icon entry-title clearfix">
                	<?php $show_icon = rwmb_meta('rw_show_icon', 'type=checkbox'); ?>
					<?php $icon_url = rwmb_meta('rw_icon_url', 'type=text'); ?>
                    <?php if ( $show_icon == 1 ) { ?>
                    <img src="<?php echo $icon_url; ?>" width="40" height="40" alt="icon" class="icon-bg">
                    <?php } ?>
                    <?php echo the_title(); ?></h1>
            </div>
            <?php get_template_part( 'includes/templates/headers/page-header' ); ?>
        </div>
    </div>
</section>
<!-- #page-header -->

<section id="content" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <?php the_content(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages :', 'tcsn_theme' ) . '</span><div class="next-arrow"></div>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                    </div>
                </article>
                <?php if( $smof_data['tcsn_page_comments'] == 1 ) { ?>
                <?php comments_template(); ?>
                <?php } ?>
                <?php endwhile; endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<!-- #content -->

<?php get_footer(); ?>
