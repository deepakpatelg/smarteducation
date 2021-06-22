<div class="all-title-box">
	<div class="container text-center">
		<h1>SERVICES<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
	</div>
</div>

<div id="overviews" class="section wb">
	<div class="container">
		<div class="section-title row text-center">
			<div class="col-md-8 offset-md-2">
				<p class="lead">School website designs are pioneered by some of the best and creative designers. School websites is a creative solutions which advertises about the facilities, academics provided by them and it allows the parents to take an informed decision as to 'Why they should choose' to join their child in their school. So it's upto the graphic designers to make the school websites interesting. Graphic designers use multimedia wisely and create stunning videos and stories about the schools to make the whole school choosing decision easier for parents.</p>
			</div>
		</div><!-- end title -->

		<hr class="invis">
		

			<div class="row">
			<?php $abc = $this->db->get('services')->result_array();
		foreach ($abc as $abcd) {
		?>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="blog-item">
                    <div class="blog-title">
							<h2><a href="#" title=""><?php echo $abcd['title']; ?> </a></h2>
						</div>  
						<div class="image-blog">
                    
							<img src="<?php echo base_url(); ?>images/<?php echo $abcd['image']; ?>" alt="" type="image/x-icon" />
						</div>
						
						<div class="blog-desc">
							<p> <?php echo $a = word_limiter(strip_tags($abcd['discription']), 5); ?> </p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="<?php echo base_url('smarteducation/Smarteducation/single_services/').$abcd['id']; ?>"><span>Read More<span></a>
						</div>
					</div>
				</div><!-- end col -->
<?php } ?>





	</div><!-- end container -->
</div><!-- end section -->