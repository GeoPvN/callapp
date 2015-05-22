<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
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
                    <img src="<?php echo get_template_directory_uri() . "/img/icons/heading-icon-archive.png" ?>" width="40" height="40" alt="icon" class="icon-bg">
                    <?php } ?>
                    <?php
					if ( is_day() ) :
						printf( __( 'Daily Archives : %s', 'tcsn_theme' ), get_the_date() );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives : %s', 'tcsn_theme' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'tcsn_theme' ) ) );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives : %s', 'tcsn_theme' ), get_the_date( _x( 'Y', 'yearly archives date format', 'tcsn_theme' ) ) );
					else :
						_e( 'Archives', 'tcsn_theme' );
					endif;
				?>
                </h4>
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
