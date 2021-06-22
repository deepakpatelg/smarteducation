<html>
<head>
<title>
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create City</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="nav-item menu-open">
                <a href="<?php echo base_url(); ?>admin/Dynamic_dependent/city" class="nav-link ">
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
                <h3 class="card-title">State country City</h3>
              </div>
              <?php
              if (isset($error)) {
                echo $error;
              }
              ?>

              <form action="<?php echo base_url() ?>admin/Dynamic_dependent/create_city" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <select name="country" id="country" class="form-control input-lg">
                      <option value="">Select Country</option>
                      <?php
                      foreach ($country as $row) {
                        echo '<option value="' . $row->id . '">' . $row->name . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                  <br />
                  <div class="form-group">
                    <select name="state" id="state" class="form-control input-lg">
                      <option value="">Select State</option>
                    </select>
                  </div>
                  <br />
                  <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" placeholder="Enter City Name">
                    <?php if (form_error('name')) {
                      echo "<span style='color:red'>" . form_error('name') . "</span>";
                    }
                    ?>
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
</body>

</html>
<script>
  $(document).ready(function() {
    $('#country').change(function() {
      var country_id = $('#country').val();
      if (country_id != '') {
        $.ajax({
          url: "<?php echo base_url(); ?>admin/dynamic_dependent/fetch_state",
          method: "POST",
          data: {
            country_id: country_id
          },
          success: function(result) {
            $('#state').html(result);
            $('#city').html('<option value="">Select City</option>');
          }
        });
      } else {
        $('#state').html('<option value="">Select State</option>');
        $('#city').html('<option value="">Select City</option>');
      }
    });

   

  });
</script>