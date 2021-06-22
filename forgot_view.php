<!DOCTYPE html>
<html>
<head>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>forgotpassword</title>
</head>
<body>







<div class="container">
    <div class="col-md-8" style="padding: 20px 0px;margin-top: 20px;align-content: center;margin-left: 250px;">
        <div class="card card-info">
            <div>
                <?php if ($this->session->flashdata('msg')) { ?>

        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong><?php echo $this->session->flashdata('msg'); ?></strong>
        </div>

       <?php } ?>


<!-- reset password success msg -->


       <div>
                <?php if ($this->session->flashdata('success')) { ?>

        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong><?php echo $this->session->flashdata('success'); ?></strong>
        </div>

      <?php } ?>

            </div>
            <div class="card-header ">
                <h3 class="card-title">Forgot password</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->


            <form action="<?php echo base_url().'index.php/forgotpassword/resetlink'; ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label bold"><strong>Email Address</strong></label>
                        <div class="col-sm-6">
                        
                            <input type="text" name="email" class="form-control" id="email_one" placeholder="Enter email">
                                
                        </div>
                    
                    </div>
                   
                    
                    </div>
                   
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  
                   <div style="text-align: center;">
                        
                     <button  type="submit" name="submit" class="btn btn-info w-50 p-3 ">Send Link</button> </div>
                     <div style="text-align: center; margin-top: 25px;"><a class="btn btn-danger" href="<?php echo base_url().'index.php/school'; ?>" title="">Cancel</a> </div>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>