<?php
/**
 * The Header variation 3
 *
 * @package WordPress
 * @subpackage Grepfrut
 * @since Grepfrut 1.0
 */
?>
<?php global $smof_data; ?>

<div id="header-v3" class="clearfix">
    <div id="top-bar" class="clearfix">
        <div class="container">
            <div class="row" >
                <div class="col-md-6 col-sm-6 col-xs-12"> 
                	<div class="tagline"><?php if( $smof_data['tcsn_show_tagline'] == 1 ) { ?><?php echo $smof_data['tcsn_tagline']; ?><?php } ?></div> 
                 </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="position: absolute; width: 972px;"> 
                	<div class="call-number"><?php if( $smof_data['tcsn_show_phone_number'] == 1 ) { ?><?php echo $smof_data['tcsn_phone_number']; ?><?php } ?></div>
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
                </div>
            </div>
        </div>
    </div>
    <!-- #topbar -->
    
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
                
                <div class="col-md-8 col-sm-8 col-xs-12 clearfix"> 
                    <?php get_template_part( 'includes/templates/headers/main-menu' ); ?>
                </div>
                <!-- #menu -->
                
            </div>
        </div>
    </div>
    <!-- #header --> 
</div>
<!-- #header variation --> 
