
<link href="//netdna.bootstrapcdn.com/font-awesome/3.0/css/font-awesome.css" rel="stylesheet">
<?php
if(!isset($params['items_per_page'])) $params['items_per_page'] = 10;
if(isset($params['jstable']) && $params['jstable']==1):  ?>
    <script src="<?php echo WPDM_BASE_URL ?>js/jquery.dataTables.min.js"></script>
    <link href="<?php echo WPDM_BASE_URL ?>css/jquery.dataTables.css" rel="stylesheet" />
    <style>
        #wpdmmydls{
            border: 1px solid #dddddd !important;
            border-radius: 3px !important;
        }
        #wpdmmydls th{
            background-color: #eee;
        }
        #wpdmmydls_filter input[type=search],
        #wpdmmydls_length select{
            padding: 5px !important;
            border-radius: 3px !important;
            border: 1px solid #dddddd !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button{
            padding: 0.2em 0.8em !important;
            border-radius: 3px !important;
        }


    </style>
    <script>
        jQuery(function($){
            $('#wpdmmydls').dataTable({
                "iDisplayLength": <?php echo $params['items_per_page'] ?>,
                "aLengthMenu": [[<?php echo $params['items_per_page']; ?>, 10, 25, 50, -1], [<?php echo $params['items_per_page']; ?>, 10, 25, 50, "All"]]
            });
        });
    </script>
<?php 
$params['items_per_page'] = -1;
endif; ?>

<div class="w3eden">
    <div class="container-fluid" id="wpdm-all-packages">
        <table id="wpdmmydls" class="table table-striped">
            <thead>
            <tr>
                <th class="">Title</th>
                <th class="">Categories</th>
                <th>Create Date</th>
                <th style="width: 100px;">Download</th>
            </tr>
            </thead>
            <tbody>
            <?php


            $cfurl = get_permalink();

            if(strpos($cfurl, "?")) $cfurl.="&wpdmc="; else $cfurl.="?wpdmc=";
            $params = array("post_type"=>"wpdmpro","posts_per_page"=>$items,"offset"=>$offset);
            if(isset($tax_query)) $params['tax_query'] = $tax_query;
            $q = new WP_Query($params);
            $total_files = $q->found_posts;
            while ($q->have_posts()): $q->the_post();

                $ext = "_blank";
                $data = wpdm_custom_data(get_the_ID());
                if(isset($data['files'])&&count($data['files'])){
                $tmpvar = explode(".",$data['files'][0]);
                $ext = count($tmpvar) > 1 ? end($tmpvar) : $ext;
                } else $data['files'] = array();

                $cats = wp_get_post_terms(get_the_ID(), 'wpdmcategory');
                $fcats = array();

                foreach($cats as $cat){
                    $fcats[] = "<a class='sbyc' href='{$cfurl}{$cat->slug}'>{$cat->name}</a>";
                }
                $cats = @implode(", ", $fcats);
                $data['ID'] = $data['id'] = get_the_ID();
                $data['title'] = get_the_title();

                ?>
                <tr>
                    <td style="background-image: url('<?php echo plugins_url('download-manager/file-type-icons/32x32/') . $ext . '.png'; ?>');background-position: 5px 8px;background-repeat:  no-repeat;padding-left: 43px;line-height: normal;">
                        <a style="color:#36597C;font-size: 10pt;font-weight: 300;"
                           href='<?php echo the_permalink(); ?>'><?php the_title(); ?></a><br/>
                        <small><i class="icon icon-folder-close"></i><?php echo count($data['files']); ?> files &nbsp;&nbsp;
                            <i class="icon icon-download-alt"></i><?php echo isset($data['download_count'])?$data['download_count']:0; ?>
                            download<?php echo isset($data['download_count']) && $data['download_count'] > 1 ? 's' : ''; ?></small>
                    </td>
                    <td><?php echo $cats; ?></td>
                    <td><?php echo get_the_date(); ?></td>
                    <td><?php echo DownloadLink($data, $style = 'simple-dl-link'); ?></td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>

        <?php
        if(isset($params['jstable']) && $params['jstable']==1):
        global $wp_rewrite,$wp_query;

        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        $pagination = array(
            'base' => @add_query_arg('paged','%#%'),
            'format' => '',
            'total' => $total_files/$items,
            'current' => $cp,
            'show_all' => false,
            'type' => 'list',
            'prev_next'    => True,
            'prev_text' => '<i class="icon icon-angle-left"></i> Previous',
            'next_text' => 'Next <i class="icon icon-angle-right"></i>',
        );

        if( $wp_rewrite->using_permalinks() )
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');

        if( !empty($wp_query->query_vars['s']) )
            $pagination['add_args'] = array('s'=>get_query_var('s'));

        echo  "<div class='text-center'>".str_replace("<ul class='page-numbers'>","<ul class='page-numbers pagination pagination-centered'>",paginate_links($pagination))."</div>";
        endif;
        ?>

    </div>
</div>
