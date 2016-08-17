<?php get_header(); ?>
<div class="container-fluid contacts">
	<div class="container contacts__wrapper">
	   <div class="container contacts__heading">                        
			<h1>Contact us</h1>      
	   </div>           
	   <div class="col-sm-6 contacts__left">    
		   <?php echo do_shortcode( '[contact-form-7 id="15"]' ); ?>      
	   </div> 
	   <div class="col-sm-6 contacts__right">
		   <div class="row">
			   <address class="">
					The trade production and export profile enterprise
					<strong>OOO "METALLICA"</strong><br>
					<br>
					<strong>Address: </strong>Russian Federation, Tula,
						Venevskoye roadway, 4, bld. 5a, 300004<br>
					<br>
					<strong>Phone: </strong>+7 (495) 789-36-86<br>
					English speaking manager ext: 309, 801<br>
					<br>
					<strong>Email: </strong>
					<a href="mailto:sale@mtllk.ru">sale@mtllk.ru</a>
				</address> 
				<div class="showroom">
					<img src="<?php echo get_template_directory_uri(); ?>/big.jpg" alt="" class="intense">
				</div>   
		   </div>
<!--
		   <div class="row">
			   <address class="col-sm-6">
					Zamil Steel Holding Co. Ltd.</br>
					1st Industrial City,</br>
					PO Box 877, Dammam 31421</br>
					<strong>Saudi Arabia</strong>
				</address>
				<address class="col-sm-6">
					Phone +966 (13) 847 1840</br>
					Fax +966 (13) 847 1291</br>
					<a href="mailto:mail@sendmail.com">mail@sendmail.com</a>
				</address>    
		   </div>                                          
-->
		</div>
	</div>
</div>        
<div class="map" id="map"></div>
<?php get_footer(); ?>