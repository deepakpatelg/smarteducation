<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>state Update</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
<!--               <li class="breadcrumb-item active">Simple Tables</li>
-->                <li class="nav-item menu-open">
  <a href="<?php echo base_url(); ?>admin/Dynamic_dependent/state_list" class="nav-link ">
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
          <h3 class="card-title">Update state form</h3>
        </div>
        <?php
        if (isset($error)){
          echo $error;
        }
        ?>
        
        <form action="<?php echo base_url() ?>admin/Dynamic_dependent/state_updaterecord" method="POST"  enctype="multipart/form-data">
          <div class="card-body">
            <input type="hidden" name="id" class="form-control" value="<?php echo $getdata->id ; ?>"/>
            <div class="form-group">
              <label for="exampleInputEmail1">State Name</label>
              <input type="text" class="form-control" name="state_name" value="<?php echo $getdata->state_name;?>" placeholder="Enter name">
              <?php  if(form_error('state_name'))
              {
               echo "<span style='color:red'>".form_error('state_name')."</span>";
             }
             ?>
           </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Contry Name</label>
              <input type="text" class="form-control" name="copy_country_id" value="<?php echo $getdata->copy_country_id;?>" placeholder="Enter name">
              <?php  if(form_error('copy_country_id'))
              {
               echo "<span style='color:red'>".form_error('copy_country_id')."</span>";
             }
             ?>
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
<!-- //</div> --> 