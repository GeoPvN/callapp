
 <style>
 .frm td{
     padding:5px;
     border-bottom: 1px solid #eeeeee;
    
     font-size:10pt;
     
 }
 h4{
     color: #336699;
     margin-bottom: 0px;
 }
 em{
     color: #888;
 }
 </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">



                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo __('Messages','wpdmpro'); ?></div>
                    <div class="panel-body">


                        <div class="form-group">
                            <label><?php echo __('Permission Denied Message for Packages:','wpdmpro'); ?></label>
                                <input type=text class="form-control" name="wpdm_permission_msg" value="<?php echo htmlspecialchars(stripslashes(get_option('wpdm_permission_msg','Access Denied'))); ?>" />
                         </div>





                         <div class="form-group">
                                    <label><?php echo __('Login Required Message:','wpdmpro'); ?></label>
                             <textarea class="form-control" cols="70" rows="6" name="wpdm_login_msg"><?php echo get_option('wpdm_login_msg')?stripslashes(get_option('wpdm_login_msg')):"<a href='".wp_login_url()."' >Please login to download</a>"; ?></textarea><br>

                         </div>

                        <div class="form-group">
                            <label><?php echo __('Server File Browser Base Dir:','wpdmpro'); ?></label>
                            <input type=text class="form-control" name="_wpdm_file_browser_root" value="<?php echo htmlspecialchars(stripslashes(get_option('_wpdm_file_browser_root',ABSPATH))); ?>" />
                        </div>

                        <div class="form-group">
                            <label><?php echo __('File Browser Access:','wpdmpro');  ?></label><br/>
                            <select style="width: 100%" name="_wpdm_file_browser_access[]" multiple="multiple" data-placeholder="<?php _e('Who will have access to server file browser','wpdmpro'); ?>">
                                <?php

                                $currentAccess = maybe_unserialize(get_option( '_wpdm_file_browser_access', array('administrator')));
                                $selz = '';

                                ?>

                                <?php
                                global $wp_roles;
                                $roles = array_reverse($wp_roles->role_names);
                                foreach( $roles as $role => $name ) {

                                    $ro = get_role($role);

                                    if(isset($ro->capabilities['edit_posts']) && $ro->capabilities['edit_posts']==1){

                                    if(  $currentAccess ) $sel = (in_array($role,$currentAccess))?'selected=selected':'';
                                    else $sel = '';



                                    ?>
                                    <option  value="<?php echo $role; ?>" <?php echo $sel  ?>> <?php echo $name; ?></option>
                                <?php }} ?>
                            </select>
                        </div>

                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading"><?php _e("Misc Settings","wpdmpro"); ?></div>
                    <div class="panel-body">

                        <table cellpadding="5" cellspacing="0" class="frm" width="100%">

                            <tr>
                                <td>
                                    <?php _e('Resumable Downloads','wpdmpro'); ?></td><td>
                                    <select name="__wpdm_download_resume">
                                        <option value="1"><?php _e("Enabled","wpdmpro"); ?></option>
                                        <option value="2" <?php selected(get_option('__wpdm_download_resume'), 2); ?>><?php _e("Disabled","wpdmpro"); ?></option>
                                    </select>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <?php _e("Twitter Bootstrap","wpdmpro"); ?></td><td>
                                    <select name="__wpdm_twitter_bootstrap">
                                        <option value="active"><?php _e("Active","wpdmpro"); ?></option>
                                        <option value="djs" <?php selected(get_option('__wpdm_twitter_bootstrap'), 'djs'); ?>><?php _e("Disable JS","wpdmpro"); ?></option>
                                        <option value="dcss" <?php selected(get_option('__wpdm_twitter_bootstrap'), 'dcss'); ?>><?php _e("Disable CSS","wpdmpro"); ?></option>
                                        <option value="dall" <?php selected(get_option('__wpdm_twitter_bootstrap'), 'dall'); ?>><?php _e("Disable Both","wpdmpro"); ?></option>
                                    </select>

                                </td>
                            </tr>

                            <?php do_action('basic_settings'); ?>

                        </table>

                    </div>
                    <div class="panel-footer">

                    </div>
                </div>



            </div>
        </div>
    </div>



