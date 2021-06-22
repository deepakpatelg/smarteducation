<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
	<!-- Indicators -->
	<ol class="carousel-indicators">
	<?php

$abc = $this->db->get('baner')->result_array();
$i=0;
foreach ($abc as $abcd) { $i++;
?>

		<li data-target="#carouselExampleControls" data-slide-to="<?php echo $i;?>" class="<?php if($i==1) { ?> active <?php } ?>"></li>
		<?php } ?>
		
	</ol>
	<div class="carousel-inner" role="listbox">

		<?php

		$abc = $this->db->get('baner')->result_array();
$i=0;
		foreach ($abc as $abcd) { $i++;
		?>


			<div class="carousel-item  <?php if($i==1) { ?> active <?php } ?>">
				<div id="home" class="first-section" style="background-image:url('<?php echo base_url(); ?>images/<?php echo $abcd['image'] ;?>')">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2><strong>SmartEDU </strong> <?php echo $abcd['title'] ;?></h2>
										<p class="lead"><?php echo $abcd['discription'] ;?> </p>
										<a href="#" class="hover-btn-new"><span>Contact Us</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="#" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<?php } ?>
			
	
		<!-- Left Control -->
		<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="fa fa-angle-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<!-- Right Control -->
		<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="fa fa-angle-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	
	</div>
</div>

<div id="overviews" class="section wb">
	<div class="container">
		<div class="section-title row text-center">
			<div class="col-md-8 offset-md-2">


			<?php 
        $abc = $this->db->get('about')->result_array();

        foreach ($abc as $abcd) {
        ?> 
				<h3>About</h3>
				<p class="lead"> <?php echo $abcd['about']; ?></p>
				<?php  } ?>
			</div>
		</div><!-- end title -->

		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
				<div class="message-box">
					<h4>2018 BEST SmartEDU education school</h4>
					<h2>Welcome to SmartEDU education school</h2>
					<p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

					<p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis montes, nascetur ridiculus mus. Sed vitae rutrum neque. </p>

					<a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
				</div><!-- end messagebox -->
			</div><!-- end col -->
			<?php $abc = $this->db->get('website')->result_array();
			foreach ($abc as $abcd) {

			?>
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="post-media wow fadeIn">
						<!-- <img src="<?php echo base_url(); ?>smartedu/images/about_02.jpg" alt="" class="img-fluid img-rounded"> -->

						<img src="<?php echo base_url(); ?>images/<?php echo $abcd['logo']; ?>" width="50px" height="50px" alt="" class="img-fluid img-rounded">
					</div><!-- end media -->
				</div><!-- end col -->
		</div>
	<?php  }
	?>
	<div class="row align-items-center">
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
			<div class="post-media wow fadeIn">
				<img src="<?php echo base_url(); ?>smartedu/images/about_03.jpg" alt="" class="img-fluid img-rounded">
			</div><!-- end media -->
		</div><!-- end col -->

		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
			<div class="message-box">
				<h2>The standard Lorem Ipsum passage, used since the 1500s</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum.</p>

				<a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
			</div><!-- end messagebox -->
		</div><!-- end col -->

	</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end section -->

<section class="section lb page-section">
	<div class="container">
		<div class="section-title row text-center">
			<div class="col-md-8 offset-md-2">
				<h3>Our history</h3>
				<p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
			</div>
		</div><!-- end title -->
		<div class="timeline">
			<div class="timeline__wrap">
				<div class="timeline__items">
					<div class="timeline__item">
						<div class="timeline__content img-bg-01">
							<h2>2018</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
								ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="timeline__item">
						<div class="timeline__content img-bg-02">
							<h2>2015</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
								ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="timeline__item">
						<div class="timeline__content img-bg-03">
							<h2>2014</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
								ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="timeline__item">
						<div class="timeline__content img-bg-04">
							<h2>2012</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
								ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="timeline__item">
						<div class="timeline__content img-bg-01">
							<h2>2010</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
								ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="timeline__item">
						<div class="timeline__content img-bg-02">
							<h2>2007</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
								ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="timeline__item">
						<div class="timeline__content img-bg-03">
							<h2>2004</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
								ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="timeline__item">
						<div class="timeline__content img-bg-04">
							<h2>2002</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
								ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="section cl">
	<div class="container">
		<div class="row text-left stat-wrap">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
				<p class="stat_count">12000</p>
				<h3>Students</h3>
			</div><!-- end col -->

			<div class="col-md-4 col-sm-4 col-xs-12">
				<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
				<p class="stat_count">240</p>
				<h3>Courses</h3>
			</div><!-- end col -->

			<div class="col-md-4 col-sm-4 col-xs-12">
				<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
				<p class="stat_count">55</p>
				<h3>Years Completed</h3>
			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end section -->

<div id="plan" class="section lb">
	<div class="container">
		<div class="section-title text-center">
			<h3>Choose Your Plan</h3>
			<p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		</div><!-- end title -->

		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="message-box">
					<ul class="nav nav-pills nav-stacked" id="myTabs">
						<li><a class="active" href="#tab1" data-toggle="pill">Monthly Subscription</a></li>
						<li><a href="#tab2" data-toggle="pill">Yearly Subscription</a></li>
					</ul>
				</div>
			</div><!-- end col -->
		</div>

		<hr class="invis">

		<div class="row">
			<div class="col-md-12">
				<div class="tab-content">
					<div class="tab-pane active fade show" id="tab1">
						<div class="row text-center">
							<div class="col-md-4">
								<div class="pricing-table pricing-table-highlighted">
									<div class="pricing-table-header grd1">
										<h2>$45</h2>
										<h3>per month</h3>
									</div>
									<div class="pricing-table-space"></div>
									<div class="pricing-table-features">
										<p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
										<p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
										<p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
										<p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
										<p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
									</div>
									<div class="pricing-table-sign-up">
										<a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="pricing-table pricing-table-highlighted">
									<div class="pricing-table-header grd1">
										<h2>$59</h2>
										<h3>per month</h3>
									</div>
									<div class="pricing-table-space"></div>
									<div class="pricing-table-features">
										<p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
										<p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
										<p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
										<p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
										<p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
									</div>
									<div class="pricing-table-sign-up">
										<a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="pricing-table pricing-table-highlighted">
									<div class="pricing-table-header grd1">
										<h2>$85</h2>
										<h3>per month</h3>
									</div>
									<div class="pricing-table-space"></div>
									<div class="pricing-table-features">
										<p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
										<p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
										<p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
										<p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
										<p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
									</div>
									<div class="pricing-table-sign-up">
										<a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
									</div>
								</div>
							</div>
						</div><!-- end row -->
					</div><!-- end pane -->

					<div class="tab-pane fade" id="tab2">
						<div class="row text-center">
							<div class="col-md-4">
								<div class="pricing-table pricing-table-highlighted">
									<div class="pricing-table-header grd1">
										<h2>$477</h2>
										<h3>Year</h3>
									</div>
									<div class="pricing-table-space"></div>
									<div class="pricing-table-features">
										<p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
										<p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
										<p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
										<p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
										<p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
									</div>
									<div class="pricing-table-sign-up">
										<a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="pricing-table pricing-table-highlighted">
									<div class="pricing-table-header grd1">
										<h2>$485</h2>
										<h3>Year</h3>
									</div>
									<div class="pricing-table-space"></div>
									<div class="pricing-table-features">
										<p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
										<p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
										<p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
										<p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
										<p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
									</div>
									<div class="pricing-table-sign-up">
										<a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="pricing-table pricing-table-highlighted">
									<div class="pricing-table-header grd1">
										<h2>$500</h2>
										<h3>Year</h3>
									</div>
									<div class="pricing-table-space"></div>
									<div class="pricing-table-features">
										<p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
										<p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
										<p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
										<p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
										<p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
									</div>
									<div class="pricing-table-sign-up">
										<a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
									</div>
								</div>
							</div>
						</div><!-- end row -->
					</div><!-- end pane -->
				</div><!-- end content -->
			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end section -->

<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('<?php echo base_url(); ?>smartedu/images/parallax_04.jpg');">
	<div class="container">
		<div class="section-title text-center">
			<h3>Testimonials</h3>
			<p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		</div><!-- end title -->

		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="testi-carousel owl-carousel owl-theme">
					<?php $abc = $this->db->get('testmonial')->result_array();
					foreach ($abc as $abcd) {
					?>
						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="<?php echo base_url(); ?>images/<?php echo $abcd['image']; ?>" alt="" class="img-fluid">
								<h4><?php echo $abcd['authore_name']; ?> </h4>
							</div>
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i> <?php echo $abcd['title']; ?></h3>
								<p class="lead"><?php echo $abcd['discription']; ?></p>
							</div>
							<!-- end testi-meta -->
						</div>
					<?php } ?>
					<!-- end testimonial -->
				</div><!-- end carousel -->
			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end section -->