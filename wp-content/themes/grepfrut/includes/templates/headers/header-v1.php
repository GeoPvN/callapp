<?php
/**
 * The Header variation 1
 *
 * @package WordPress
 * @subpackage Grepfrut
 * @since Grepfrut 1.0
 */
?>
<?php global $smof_data; ?>

<div id="header-v1" class="clearfix">
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 logo">
                    <?php if( ( $smof_data['tcsn_logo_type'] == "tcsn_show_image_logo" ) ) : ?>
                    <?php if( $smof_data['tcsn_image_logo'] != "" ) { ?>
                    <a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>"><img src="<?php echo $smof_data['tcsn_image_logo']; ?>" alt="<?php bloginfo('title'); ?>"></a>
                    <?php } ?>
                    <?php elseif( ( $smof_data['tcsn_logo_type'] == "tcsn_show_text_logo" ) ) : ?>
                    <?php if( $smof_data['tcsn_text_logo'] != "" ) { ?>
                    <a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>"><?php echo $smof_data['tcsn_text_logo']; ?></a>
                    <?php } ?>
                    <?php else : ?>
                    <a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>"><img src="<?php echo get_template_directory_uri() . "/img/logo.png" ?>" alt="<?php bloginfo('title'); ?>"></a>
                    <?php endif; ?>
                </div>
                <!-- .logo -->
                
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <?php if( $smof_data['tcsn_show_social_network'] == 1 ) { ?>
                    <div class="header-wiget-area">
                        <?php if ( is_active_sidebar( 'widget-header-social' ) ) : ?>
                        <?php dynamic_sidebar( 'widget-header-social' ); ?>
                        <?php else : ?>
                        <div class="widget-alert">
                            <p>
                                <?php _e( 'Social Network Widget not activated yet - Activate!', 'tcsn_theme' ); ?>
                            </p>
                            <p>
                                <?php _e( 'OR Disable through options panel.', 'tcsn_theme' ); ?>
                            </p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php } ?>
                    
                    <?php get_template_part( 'includes/templates/headers/main-menu' ); ?>
                    <!-- #menu -->
                </div>
            </div>
        </div>
    </div>
    <!-- #header --> 
</div>
<!-- #header variation --> 
