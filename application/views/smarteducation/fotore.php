   
<footer class="footer">
       <div class="container">
           <div class="row">
               <div class="col-lg-4 col-md-4 col-xs-12">
                   <div class="widget clearfix">
                       <div class="widget-title">

                           <?php

                            $abc = $this->db->get('website')->result_array();
                            foreach ($abc as $abcd) {
                            ?>
                               <h3>About US</h3>
                       </div>
                       <p> <?php echo $abcd['discription']; ?></p>
                       <div class="footer-right">
                           <ul class="footer-links-soi">
                               <li><a href="<?php echo $abcd['facbook']; ?>"><i class="fa fa-facebook"></i></a></li>
                               <li><a href="<?php echo $abcd['gitup']; ?>"><i class="fa fa-github"></i></a></li>
                               <li><a href="<?php echo $abcd['twiter']; ?>"><i class="fa fa-twitter"></i></a></li>
                               <li><a href="<?php echo $abcd['dribble']; ?>"><i class="fa fa-dribbble"></i></a></li>
                               <li><a href="<?php echo $abcd['prinrest']; ?>"><i class="fa fa-pinterest"></i></a></li>
                           </ul><!-- end links -->
                       </div>
                   </div><!-- end clearfix -->
               </div><!-- end col -->

               <div class="col-lg-4 col-md-4 col-xs-6">
                   <div class="widget clearfix">
                       <div class="widget-title">
                           <h3>Information Link</h3>
                       </div>
                       <ul class="footer-links">
                           <li><a href="<?php echo base_url(); ?>smarteducation/Smarteducation">Home</a>
                               <a href="<?php echo base_url(); ?>smarteducation/Smarteducation/blog">Blog</a>
                           </li>
                           <li><a href="<?php echo base_url(); ?>smarteducation/Smarteducation/services">service</a></li>
                           <li><a href="<?php echo base_url(); ?>smarteducation/Smarteducation/about">About</a></li>
                           <li><a href="<?php echo base_url(); ?>smarteducation/Smarteducation/contact_us">Contact</a></li>
                       </ul><!-- end links -->
                   </div><!-- end clearfix -->
               </div><!-- end col -->

               <div class="col-lg-4 col-md-4 col-xs-12">
                   <div class="widget clearfix">
                       <div class="widget-title">
                           <h3>Contact Details</h3>
                       </div>

                       <ul class="footer-links">
                           <li> <?php echo $abcd['email_adress']; ?></li>
                           <li><?php echo $abcd['company_name']; ?></li>
                           <li><?php echo $abcd['company_address']; ?></li>
                           <li><?php echo $abcd['mobile_number']; ?>4</li>
                       </ul><!-- end links -->
                   </div><!-- end clearfix -->
               </div><!-- end col -->

           </div><!-- end row -->
       </div><!-- end container -->
   </footer><!-- end footer -->

   <div class="copyrights">
       <div class="container">
           <div class="footer-distributed">
               <div class="footer-center">
                   <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">SmartEDU</a> Design By : <a href="#">html design</a></p>
               </div>
           </div>
       </div><!-- end container -->
   </div><!-- end copyrights -->
   <?php  }  ?>
   <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

   <!-- ALL JS FILES -->
   <script src="<?php echo base_url(); ?>smartedu/js/all.js"></script>
   <!-- ALL PLUGINS -->
   <script src="<?php echo base_url(); ?>smartedu/js/custom.js"></script>
   <script src="<?php echo base_url(); ?>smartedu/js/timeline.min.js"></script>
   <script>
       timeline(document.querySelectorAll('.timeline'), {
           forceVerticalMode: 700,
           mode: 'horizontal',
           verticalStartPosition: 'left',
           visibleItems: 4
       });
   </script>
   </body>

   </html>