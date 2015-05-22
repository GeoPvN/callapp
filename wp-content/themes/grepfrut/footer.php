<?php
/**
 * The Footer for theme.
 *
 * @package WordPress
 * @subpackage Grepfrut
 * @since Grepfrut 1.0
 */
?>
<?php global $smof_data; ?>


<footer id="footer" class="clearfix">
<div id="footer1">

<ul style="margin-left:45px; font-size: 11px;">
    <li><a style= "color: #0796ca;" href="http://tdgroup.ge/test/?page_id=1921" class="title">ქოლ-ცენტრი</a>
		<ul>
			<li><a href="http://tdgroup.ge/test/?page_id=1921#tab-1418114154-1-12">შესაძლებლობები</a></li>
			<li><a href="http://tdgroup.ge/test/?page_id=1921#tab-1418114921688-2-1">სტატისტიკა და რეპორტები</a></li>
			<li><a href="http://tdgroup.ge/test/?page_id=1921#tab-1418114932910-3-5">რისთვის გჭირდება ქოლ-ცენტრი</a></li>
			<li><a href="http://tdgroup.ge/test/?page_id=1921#tab-1421848281976-3-0">საბაზისო პაკეტები</a></li>
			<li><a href="http://tdgroup.ge/test/?page_id=1921#tab-1421931105575-4-4">ღირებულება</a></li>
		</ul>
	</li>
	<li><a style= "color: #0796ca;" href="http://tdgroup.ge/test/?page_id=1926" class="title">საოფისე ტელეფონია</a>
		<!--ul>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
		</ul-->
	</li>
	<li><a style= "color: #0796ca;" href="http://tdgroup.ge/test/?page_id=1931" class="title">ინტეგრაცია</a>
		<!--ul>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
		</ul-->
	</li>
	<li><a style= "color: #0796ca;" href="http://tdgroup.ge/test/?page_id=1933" class="title">სერვისები<a>
		<ul>
			<li><a href="http://tdgroup.ge/test/?page_id=1933#tab-1423812614-1-37">ავტო ინფორმატორი</a></li>
			<li><a href="http://tdgroup.ge/test/?page_id=1933#tab-1423812614-2-0">E-mail კომუნიკაცია</a></li>
			<li><a href="http://tdgroup.ge/test/?page_id=1933#tab-1423812914776-2-6">SMS კომუნიკაცია</a></li>
			<li><a href="http://tdgroup.ge/test/?page_id=1933#tab-1423812915841-3-5">SIP-GSM</a></li>
		</ul>
	</li>
	<li><a style= "color: #0796ca;" href="http://tdgroup.ge/test/?page_id=1929" class="title">პროექტები</a>
		<!--ul>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
		</ul-->
	</li>
	<li><a style= "color: #0796ca;" href="http://tdgroup.ge/test/?page_id=1935" class="title">კომპანია</a>
		<!--ul>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>ILorem Ipsum</li>
		</ul-->
	</li>
	<li><a style= "color: #0796ca;" href="http://tdgroup.ge/test/?page_id=28" class="title">კონტაქტი</a></li>
</ul>
</div>
</footer>
<!-- #footer -->

<section id="copyright" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 clearfix">
                <p>
                    <?php if ( $smof_data['tcsn_copyright'] != "" ) { ?>
                    <?php echo $smof_data['tcsn_copyright']; ?>
                    <?php } else { ?>
                    &copy; Copyright
                    <?php
						echo date("Y");
						echo " ";
						bloginfo('name');
					} ?>
                </p>
                
                <?php if( $smof_data['tcsn_show_secondary_menu'] == 1 ) { ?>
                <?php wp_nav_menu( array( 
					'theme_location'  => 'secondary_menu',
					'container'       => 'div',
					'container_class' => 'copyright-menu',
					'depth'           => -1,
					) ); ?>
                <?php } ?>
               <!-- .copyright menu -->
                 
            </div>
        </div>
    </div>
</section>
<!-- #copyright -->

<?php if( $smof_data['tcsn_tracking'] != "" ) { echo $smof_data['tcsn_tracking']; } ?>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<?php wp_footer(); ?>
</body></html>