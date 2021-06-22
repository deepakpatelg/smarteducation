<div class="all-title-box">
	<div class="container text-center">

	<?php $abc = $this->db->get('gallery')->row_array();
		
		?>

		<h1><?php echo $abc['title']; ?>
         <span class="m_1"><?php echo $abc['discription']; ?></span></h1>
       
	</div>
</div>

<div id="overviews" class="section wb">
	<div class="container">
		

		<hr class="invis">
		

			<div class="row">
			<?php $abc = $this->db->get('gallery')->result_array();
		foreach ($abc as $abcd) {
		?>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="blog-item">

                    <div class="meta-info-blog">
							
							<span><i class="fa fa-comments"></i> <?php echo $abcd['name']; ?> </span>
						</div>
						<div class="image-blog">
							<img src="<?php echo base_url(); ?>images/<?php echo $abcd['image']; ?>" alt="" type="image/x-icon" />
						</div>
						
						
					</div>
				</div><!-- end col -->
<?php } ?>





	</div><!-- end container -->
</div><!-- end section -->