<div class="all-title-box">
	<div class="container text-center">
		<h1>Blog<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
	</div>
</div>

<div id="overviews" class="section wb">
	<div class="container">
		<div class="section-title row text-center">
			<div class="col-md-8 offset-md-2">
				<p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
			</div>
		</div><!-- end title -->

		<hr class="invis">
		

			<div class="row">
			<?php $abc = $this->db->get('block')->result_array();
		foreach ($abc as $abcd) {
		?>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="blog-item">
						<div class="image-blog">
							<img src="<?php echo base_url(); ?>images/<?php echo $abcd['image']; ?>" alt="" type="image/x-icon" />
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
							<span><i class="fa fa-tag"></i> <a href="#">News</a> </span>
							<span><i class="fa fa-comments"></i> <?php echo $abcd['authore_name']; ?> </span>
						</div>
						<div class="blog-title">
							<h2><a href="#" title=""><?php echo $abcd['title']; ?> </a></h2>
						</div>
						<div class="blog-desc">
							<p> <?php echo $a = word_limiter(strip_tags($abcd['discription']), 2); ?> </p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="<?php echo base_url('smarteducation/Smarteducation/single_blog/').$abcd['id']; ?>"><span>Read More<span></a>
						</div>
					</div>
				</div><!-- end col -->
<?php } ?>





	</div><!-- end container -->
</div><!-- end section -->