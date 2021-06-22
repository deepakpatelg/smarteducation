<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Contaion Update</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
<!--               <li class="breadcrumb-item active">Simple Tables</li>
-->                <li class="nav-item menu-open">
  <a href="<?php echo base_url(); ?>admin/fresh/add_user" class="nav-link ">
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
          <h3 class="card-title">Update Contain form</h3>
        </div>
        <?php
        if (isset($error)){
          echo $error;
        }
        ?>
        
        <form action="<?php echo base_url() ?>admin/Crude/contain_updaterecord" method="POST"  enctype="multipart/form-data">
          <div class="card-body">
            <input type="hidden" name="id" class="form-control" value="<?php echo $getdata->id ; ?>"/>
            <div class="form-group">
              <label for="exampleInputEmail1">title</label>
              <input type="text" class="form-control" name="title" value="<?php echo $getdata->title;?>" placeholder="Enter title">
              <?php  if(form_error('title'))
              {
               echo "<span style='color:red'>".form_error('title')."</span>";
             }
             ?>
           </div>
           <div class="form-group">
            <label for="exampleInputPassword1"> discription</label>
            <input type="text" class="form-control" name="discription" value="<?php echo $getdata->discription;?>" placeholder="Enter contact">
            <?php  if(form_error('discription'))
            {
             echo "<span style='color:red'>".form_error('discription')."</span>";
           }
           ?> 
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
<!-- //</div> -->