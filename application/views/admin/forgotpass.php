<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php  $abc=$this->db->get('website')->result_array();
foreach ($abc as $abcd) {

    ?>
    <!-- Site Metas -->
    <title>
        <?php echo $abcd['title'];?>
    </title>  
<?php } ?>

<?php  $abc=$this->db->get('website')->result_array();
foreach ($abc as $abcd) {

  ?>

<link rel="shortcut icon" href = "<?php echo base_url(); ?>images/<?php echo $abcd['favicon_icon']; ?>" type="image/x-icon" />

  <?php } ?>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <!-- <a href="../../index2.html"><b>Admin</b>LTE</a> -->

<?php 
 $abc=$this->db->get('website')->result_array();
foreach ($abc as $abcd) {

  ?>

<img src="<?php echo base_url(); ?>images/<?php echo $abcd['logo'];?>" alt=""  type="image/x-icon"/>
  <?php } ?>

  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

      <form action="<?php echo base_url();?>admin/Forgotpassword/resetlink" method="post">
        <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-warning">
            <?php echo $this->session->flashdata('msg'); ?>

        </div>
    <?php } ?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" onclick="myFunction()" class="btn btn-primary btn-block" name="forgot_pass">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="<?php echo base_url();?>admin/fresh/">Login</a>
      </p>
      <p class="mb-0">
        <a href="#" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<<!-- script>
function myFunction() {
  alert("your password reset ,plesae check your maill,");
}
</script> -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assest/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assest/dist/js/adminlte.min.js"></script>
</body>
</html>
