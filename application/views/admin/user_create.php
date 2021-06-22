<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>User Create</h1>
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
          <h3 class="card-title">Insert form</h3>
        </div>
        <?php
        if (isset($error)){
          echo $error;
        }
        ?>
 
        <form action="<?php echo base_url() ?>admin/fresh/create_user" method="POST"  enctype="multipart/form-data">
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
            <label for="exampleInputPassword1"> Address</label>
            <textarea rows="2" cols="20" name="address" value="" ><?php echo set_value('address');?></textarea> 
            <?php  if(form_error('address'))
            {
             echo "<span style='color:red'>".form_error('address')."</span>";
           }
           ?> 
         </div>
         <div class="form-group">
          <label for="exampleInputEmail1">contact_no</label>
          <input type="number" class="form-control" name="contact_no" value="<?php echo set_value('contact_no');?>" placeholder="Enter contact">
          <?php  if(form_error('contact_no'))
          {
           echo "<span style='color:red'>".form_error('contact_no')."</span>";
         }
         ?>
       </div>
       <div class="form-group">
        <label for="exampleInputEmail1">Gendar</label>
        <input type="radio" id="gender" name="gender" value="male" <?php  if(set_value('gender')=="male"){echo "checked";}
        ?> />Male  
        <input type="radio" id="gender" name="gender" value="Female"  <?php  if(set_value('gender')=="Female"){echo "checked";}
        ?> />Female <br/>  
        <?php  if(form_error('gender'))
        {
         echo "<span style='color:red'>".form_error('gender')."</span>";
       }
       ?>
     </div>
     
         
     <div class="form-group">
      <label for="exampleInputEmail1">country</label>
      <select name="country" id="register_country" style="width:160px">  
        <option value="india" <?php if (set_value('country')=="india"){echo "selected";} 
          
        ?>>india</option>  
        <option value="pakistan" <?php if (set_value('country')=="pakistan"){echo "selected";} 
          
        ?>>pakistan</option>  
        <option value="africa"<?php if (set_value('country')=="africa"){echo "selected";} 
          
        ?>>africa</option>  
        <option value="china"<?php if (set_value('country')=="china"){echo "selected";} 
          
        ?>>china</option>  
        <option value="other"<?php if (set_value('country')=="ob_tidyhandler(input)"){echo "selected";} 
          
        ?>>other</option>  
      </select>  
      <?php  if(form_error('country'))
      {
       echo "<span style='color:red'>".form_error('country')."</span>";
     }
     ?>

   </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo set_value('email');?>"  placeholder="Enter email">
  </div>
  <?php  if(form_error('email'))
  {
   echo "<span style='color:red'>".form_error('email')."</span>";
 }
 ?>
 <div class="form-group">
  <label for="exampleInputEmail1">Password</label>
  <input type="password" class="form-control" name="password" value="<?php echo set_value('password');?>" placeholder="Enter Name">
</div>
<?php  if(form_error('password'))
{
 echo "<span style='color:red'>".form_error('password')."</span>";
}
?>
<div class="form-group">
  <label for="exampleInputEmail1">CPassword</label>
  <input type="password" class="form-control" name="cpassword" value="<?php echo set_value('cpassword');?>" placeholder="Enter Name">
</div>
<?php  if(form_error('cpassword'))
{
 echo "<span style='color:red'>".form_error('cpassword')."</span>";
}
?>
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
<!-- //</div> -->