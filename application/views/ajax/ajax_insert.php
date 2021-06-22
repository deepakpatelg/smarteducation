<!DOCTYPE html>
<html lang="en">

<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <h1 align="center">GPS Tracking</h1>
    <h2>Save Data</h2>
    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    </div>
    <div class="card-body">
      <form enctype="multipart/form-data" id="" method="post">

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name" id="name" value="<?php echo set_value('name'); ?>" placeholder="Enter Name">
          <?php if (form_error('name')) {
            echo "<span style='color:red'>" . form_error('name') . "</span>";
          }
          ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1"> Address</label>
          <textarea rows="2" cols="20" name="address" id="address" value=""><?php echo set_value('address'); ?></textarea>
          <?php if (form_error('address')) {
            echo "<span style='color:red'>" . form_error('address') . "</span>";
          }
          ?>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">contact_no</label>
          <input type="number" class="form-control" name="contact" id="contact" value="<?php echo set_value('contact_no'); ?>" placeholder="Enter contact">
          <?php if (form_error('contact_no')) {
            echo "<span style='color:red'>" . form_error('contact_no') . "</span>";
          }
          ?>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Gendar</label>
          <input type="radio" id="gender" name="gender" id="gender" value="male" <?php if (set_value('gender') == "male") {
                                                                                    echo "checked";
                                                                                  }
                                                                                  ?> />Male
          <input type="radio" id="gender" name="gender" id="gender" value="Female" <?php if (set_value('gender') == "Female") {
                                                                                      echo "checked";
                                                                                    }
                                                                                    ?> />Female <br />
          <?php if (form_error('gender')) {
            echo "<span style='color:red'>" . form_error('gender') . "</span>";
          }
          ?>
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">country</label>
          <select name="country" id="country" style="width:160px">
            <option value="india" <?php if (set_value('country') == "india") {
                                    echo "selected";
                                  }

                                  ?>>india</option>
            <option value="pakistan" <?php if (set_value('country') == "pakistan") {
                                        echo "selected";
                                      }

                                      ?>>pakistan</option>
            <option value="africa" <?php if (set_value('country') == "africa") {
                                      echo "selected";
                                    }

                                    ?>>africa</option>
            <option value="china" <?php if (set_value('country') == "china") {
                                    echo "selected";
                                  }

                                  ?>>china</option>
            <option value="other" <?php if (set_value('country') == "ob_tidyhandler(input)") {
                                    echo "selected";
                                  }

                                  ?>>other</option>
          </select>
          <?php if (form_error('country')) {
            echo "<span style='color:red'>" . form_error('country') . "</span>";
          }
          ?>

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Enter email">
        </div>
        <?php if (form_error('email')) {
          echo "<span style='color:red'>" . form_error('email') . "</span>";
        }
        ?>
        <div class="form-group">
          <label for="exampleInputEmail1">Password</label>
          <input type="password" class="form-control" name="password" id="password" value="<?php echo set_value('password'); ?>" placeholder="Enter Name">
        </div>
        <?php if (form_error('password')) {
          echo "<span style='color:red'>" . form_error('password') . "</span>";
        }
        ?>
        <div class="form-group">
          <label for="exampleInputEmail1">CPassword</label>
          <input type="password" class="form-control" name="cpassword" id="cpassword" value="<?php echo set_value('cpassword'); ?>" placeholder="Enter Name">
        </div>
        <?php if (form_error('cpassword')) {
          echo "<span style='color:red'>" . form_error('cpassword') . "</span>";
        }
        ?>
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="">
              <!--  <img src="<?php echo base_url('images/' . 'image'); ?>"> -->
              <input type="file" class="" name="image" id="image" value="<?php echo  set_value('image') ?>" id="">
              <?php if (form_error('image')) {
                echo "<span style='color:red'>" . form_error('image') . "</span>";
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
      </form>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save">Submit</button>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $('#save').on('click', function() {
        var name = $('#name').val();

        var address = $('#address').val();
        var contact = $('#contact').val();
        var gender = $('#gender').val();
        var country = $('#country').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var cpassword = $('#cpassword').val();
        var image = $('#image').val();
        var checkbox = $('#citexampleCheck1').val();

        if (name != "" && address != "" && contact != "" && gender != "" && country != "" && email != "" && password != "" && image != "" && checkbox != "") {
          $("#save").attr("disabled", "disabled");
          $.ajax({
            url: "<?php echo base_url('ajax/Ajax/create_user'); ?>",

            type: "POST",
            data: {
              //type: 1,
              name: name,
              address: address,
              contact: contact,
              gender: gender,
              country: country,
              email: email,
              password: password,
              password: password,
              image: image,

              //cache: false,
              success: function(data) {
                if ('success') {
                  alert('Data saved successfully');
                   window.location.href="<?php echo base_url() ?>admin/fresh/add_user";
                } else {
                  alert('Data not saved');
                }
              }
            },
            error: function() {
              alert('data not saved');
            }
          });
        } else {
          alert('Please fill all the field !');
        }
      });
    });
  </script>
</body>

</html>