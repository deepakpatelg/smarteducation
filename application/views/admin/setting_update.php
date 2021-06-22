<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Company deteal Update</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
<!--               <li class="breadcrumb-item active">Simple Tables</li>
-->                <li class="nav-item menu-open">
  <a href="<?php echo base_url(); ?>admin/Crude/company_setting" class="nav-link ">
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
          <h3 class="card-title">Update form</h3>
        </div>
        <?php
        if (isset($error)){
          echo $error;
        }
        ?>
        
        <form action="<?php echo base_url() ?>admin/Crude/setting_updaterecord" method="POST"  enctype="multipart/form-data">
          <div class="card-body">
            <input type="hidden" name="id" class="form-control" value="<?php echo $getdata->id ; ?>"/>
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" name="title" value="<?php echo $getdata->title;?>" placeholder="Enter Name">
              <?php  if(form_error('title'))
              {
               echo "<span style='color:red'>".form_error('title')."</span>";
             }
             ?>
           </div>
           <div class="form-group">
            <label for="exampleInputPassword1"> Discription</label>
            <input type="text" class="form-control" name="discription" value="<?php echo $getdata->discription;?>" placeholder="Enter contact">
            <?php  if(form_error('discription'))
            {
             echo "<span style='color:red'>".form_error('discription')."</span>";
           }
           ?> 
         </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Company Name</label>
          <input type="text" class="form-control" name="company_name" value="<?php echo $getdata->company_name;?>" placeholder="Enter contact">
          <?php  if(form_error('company_name'))
          {
           echo "<span style='color:red'>".form_error('company_name')."</span>";
         }
         ?>
         <div class="form-group">
          <label for="exampleInputEmail1">mobile_number</label>
          <input type="number" class="form-control" name="mobile_number" value="<?php echo $getdata->mobile_number;?>" placeholder="Enter Name">
        </div>
        <?php  if(form_error('mobile_number'))
        {
         echo "<span style='color:red'>".form_error('mobile_number')."</span>";
       }
       ?>


       <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email_adress" value="<?php echo $getdata->email_adress;?>"  placeholder="Enter email">
      </div>
      <?php  if(form_error('email_adress'))
      {
       echo "<span style='color:red'>".form_error('email_adress')."</span>";
     }
     ?>

     <div class="form-group">
      <label for="exampleInputEmail1">matatage</label>
      <input type="text" class="form-control" name="matatage" value="<?php echo $getdata->matatage;?>"  placeholder="Enter email">
    </div>
    <?php  if(form_error('matatage'))
    {
     echo "<span style='color:red'>".form_error('matatage')."</span>";
   }
   ?>
   <div class="form-group">
    <label for="exampleInputEmail1">company_address</label>
    <input type="text" class="form-control" name="company_address" value="<?php echo $getdata->company_address;?>"  placeholder="Enter email">
  </div>
  <?php  if(form_error('company_address'))
  {
   echo "<span style='color:red'>".form_error('company_address')."</span>";
 }
 ?>

 <div class="form-group">
  <label for="exampleInputEmail1">facbook</label>
  <input type="text" class="form-control" name="facbook" value="<?php echo $getdata->facbook;?>"  placeholder="Enter email">
</div>
<?php  if(form_error('facbook'))
{
 echo "<span style='color:red'>".form_error('facbook')."</span>";
}
?>

<div class="form-group">
  <label for="exampleInputEmail1">gitup</label>
  <input type="text" class="form-control" name="gitup" value="<?php echo $getdata->gitup;?>"  placeholder="Enter email">
</div>
<?php  if(form_error('gitup'))
{
 echo "<span style='color:red'>".form_error('gitup')."</span>";
}
?>

<div class="form-group">
  <label for="exampleInputEmail1">twiter</label>
  <input type="text" class="form-control" name="twiter" value="<?php echo $getdata->twiter;?>"  placeholder="Enter email">
</div>
<?php  if(form_error('twiter'))
{
 echo "<span style='color:red'>".form_error('twiter')."</span>";
}
?>

<div class="form-group">
  <label for="exampleInputEmail1">dribble</label>
  <input type="text" class="form-control" name="dribble" value="<?php echo $getdata->dribble;?>"  placeholder="Enter email">
</div>
<?php  if(form_error('dribble'))
{
 echo "<span style='color:red'>".form_error('dribble')."</span>";
}
?>

<div class="form-group">
  <label for="exampleInputEmail1">prinrest</label>
  <input type="text" class="form-control" name="prinrest" value="<?php echo $getdata->prinrest;?>"  placeholder="Enter email">
</div>
<?php  if(form_error('prinrest'))
{
 echo "<span style='color:red'>".form_error('prinrest')."</span>";
}
?>

<div class="form-group">
  <label for="exampleInputFile">File input</label>
  <div class="input-group">
    <div class="custom-file">
      <input type="file" class="custom-file-input" name="logo" value="<?php echo $getdata->logo;?>" id="exampleInputFile">
      <?php  if(form_error('logo'))
      {
       echo "<span style='color:red'>".form_error('logo')."</span>";
     }
     ?>
     <label class="custom-file-label" for="exampleInputFile">Choose logo</label>
   </div>     
     <img src="<?php echo base_url('images/'.$getdata->logo);?>" width="50px" height="50px">

               <!--  <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div> -->
              </div>
            </div>



<div class="form-group">
  <label for="exampleInputFile">favicon_icon</label>
  <div class="input-group">
    <div class="custom-file">
      <input type="file" class="custom-file-input" name="favicon_icon" value="<?php echo $getdata->favicon_icon;?>" id="exampleInputFile">
      <?php  if(form_error('favicon_icon'))
      {
       echo "<span style='color:red'>".form_error('favicon_icon')."</span>";
     }
     ?>
     <label class="custom-file-label" for="exampleInputFile">Choose file</label>
   </div>     
     <img src="<?php echo base_url('images/'.$getdata->favicon_icon);?>" width="50px" height="50px">

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
<!-- //</div> -->