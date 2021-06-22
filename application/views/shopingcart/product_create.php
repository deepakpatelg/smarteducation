<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Services Create</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
<!--               <li class="breadcrumb-item active">Simple Tables</li>
-->                <li class="nav-item menu-open">
  <a href="<?php echo base_url(); ?>shopingcart/Shopingcart/shoping_list/" class="nav-link ">
   <button type="button" class="btn btn-block bg-gradient-info btn-sm">Back</button>

 </a>
</li>
</ol>
</div>
</div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
   <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Insert Product</h3>
        </div>
        <?php
        if (isset($error)){
          echo $error;
        }
        ?>
        
        <form action="<?php echo base_url() ?>shopingcart/Shopingcart/product_create/" method="POST"  enctype="multipart/form-data">
          <div class="card-body">

 <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" value="<?php echo set_value('name');?>" placeholder="Enter Name">
              <?php  if(form_error('name'))
              {
               echo "<span style='color:red'>".form_error('name')."</span>";
             }
             ?>
           </div>
           <div class="form-group">
            <label for="exampleInputPassword1"> Price</label>
            <textarea rows="2" cols="20" name="price" value="" ><?php echo set_value('price');?></textarea> 
            <?php  if(form_error('price'))
            {
             echo "<span style='color:red'>".form_error('price')."</span>";
           }
           ?> 
         </div>
         
<div class="form-group">
  <label for="exampleInputFile">File input</label>
  <div class="input-group">
    <div class="">
      <!--  <img src="<?php echo base_url('images/'.'image');?>"> -->
      <input type="file" class="" name="image" value="<?php echo  set_value('image')?>" id="">
      <?php  if(form_error('image'))
      {
       echo "<span style='color:red'>".form_error('image')."</span>";
     }
     ?>
    
   </div>
               <!--  <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div> -->
              </div>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>