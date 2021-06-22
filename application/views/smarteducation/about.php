<div id="overviews" class="section wb">
        <div class="container">

        <?php 
        $abc = $this->db->get('about')->result_array();

        foreach ($abc as $abcd) {
        ?> 
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
               <h1>     <?php echo $abcd['title']; ?></h1> 
                    <p class="lead"> <?php echo $abcd['about']; ?></p>
                </div>
            </div><!-- end title -->
        
          

            <?php } ?>
        </div><!-- end container -->
    </div><!-- end section -->