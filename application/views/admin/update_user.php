<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>User Update</h1>
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
          <h3 class="card-title">Update form</h3>
        </div>
        <?php
        if (isset($error)){
          echo $error;
        }
        ?>
        
        <form action="<?php echo base_url() ?>admin/fresh/updaterecord" method="POST"  enctype="multipart/form-data">
          <div class="card-body">
            <input type="hidden" name="id" class="form-control" value="<?php echo $getdata->id ; ?>"/>
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" value="<?php echo $getdata->name;?>" placeholder="Enter Name">
              <?php  if(form_error('name'))
              {
               echo "<span style='color:red'>".form_error('name')."</span>";
             }
             ?>
           </div>
           <div class="form-group">
            <label for="exampleInputPassword1"> Address</label>
          <input type="text" class="form-control" name="address" value="<?php echo $getdata->address;?>" placeholder="Enter contact">
            <?php  if(form_error('address'))
            {
             echo "<span style='color:red'>".form_error('address')."</span>";
           }
           ?> 
         </div>
         <div class="form-group">
          <label for="exampleInputEmail1">contact_no</label>
          <input type="number" class="form-control" name="contact_no" value="<?php echo $getdata->contact_no;?>" placeholder="Enter contact">
          <?php  if(form_error('contact_no'))
          {
           echo "<span style='color:red'>".form_error('contact_no')."</span>";
         }
         ?>
       </div>
       <div class="form-group">
        <label for="exampleInputEmail1">Gendar</label>
        <input type="radio" id="gender" name="gender" value="Male" />Male  
        <input type="radio" id="gender" name="gender" value="Female" />Female <br/>  
        <?php  if(form_error('gender'))
        {
         echo "<span style='color:red'>".form_error('gender')."</span>";
       }
       ?>
     </div>
     
         
     <div class="form-group">
      <label for="exampleInputEmail1">country</label>
      <select name="country" id="register_country" style="width:160px">  
        <option value="india">india</option>  
        <option value="pakistan">pakistan</option>  
        <option value="africa">africa</option>  
        <option value="china">china</option>  
        <option value="other">other</option>  
      </select>  
      <?php  if(form_error('country'))
      {
       echo "<span style='color:red'>".form_error('country')."</span>";
     }
     ?>

   </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $getdata->email;?>"  placeholder="Enter email">
  </div>
  <?php  if(form_error('email'))
  {
   echo "<span style='color:red'>".form_error('email')."</span>";
 }
 ?>
 <div class="form-group">
  <label for="exampleInputEmail1">Password</label>
  <input type="password" class="form-control" name="password" value="<?php echo $getdata->password;?>" placeholder="Enter Name">
</div>
<?php  if(form_error('password'))
{
 echo "<span style='color:red'>".form_error('password')."</span>";
}
?>

<div class="form-group">
  <label for="exampleInputFile">File input</label>
  <div class="input-group">
    <div class="custom-file">
      <input type="file" class="custom-file-input" name="image" value="<?php echo $getdata->image;?>" id="exampleInputFile">
      <?php  if(form_error('image'))
      {
       echo "<span style='color:red'>".form_error('image')."</span>";
     }
     ?>
     <label class="custom-file-label" for="exampleInputFile">Choose file</label>
   </div>       <img src="<?php echo base_url('images/'.$getdata->image);?>" width="50px" height="50px">

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