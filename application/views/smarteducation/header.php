<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">   

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php  $abc=$this->db->get('website')->result_array();
foreach ($abc as $abcd) {

    ?>
    <!-- Site Metas -->
    <title>
        <?php echo $abcd['title'];?>
    </title>  
    <meta name="keywords" content=" <?php echo $abcd['matatage'];?>">
    <meta name="description" content=" <?php echo $abcd['discription'];?>">
    <meta name="author" content=" <?php echo $abcd['company_name'];?>">

<!-- Site Icons -->
<link rel="shortcut icon" href = "<?php echo base_url(); ?>images/<?php echo $abcd['favicon_icon']; ?>" type="image/x-icon" />
<!-- <link rel="apple-touch-icon" href="<?php echo base_url(); ?>smartedu/images/apple-touch-icon.png"> -->
<?php } ?>  

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>smartedu/css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>smartedu/style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>smartedu/css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>smartedu/css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>smartedu/css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="<?php echo base_url(); ?>smartedu/js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="host_version"> 

    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header tit-up">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Customer Login</h4>
            </div>
            <div class="modal-body customer-box">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
                    <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="Login">
                        <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="email1" placeholder="Name" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                                        Submit
                                    </button>
                                    <a class="for-pwd" href="javascript:;">Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="Registration">
                        <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" placeholder="Name" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="email" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="mobile" placeholder="Mobile" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="password" placeholder="Password" type="password">
                                </div>
                            </div>
                            <div class="row">                           
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                        Save &amp; Continue
                                    </button>
                                    <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                    Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LOADER -->
    <!-- <div id="preloader">
        <div class="loader-container">
            <div class="progress-br float shadow">
                <div class="progress__item"></div>
            </div>
        </div>
    </div> -->
    <!-- END LOADER --> 
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo base_url(); ?>images/<?php echo $abcd['logo'];?>" alt=""  type="image/x-icon"/>

                    <!-- <img src="<?php echo base_url('images/'.$getdata->logo);?>"> -->

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-host">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url(); ?>smarteducation/Smarteducation">Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url(); ?>smarteducation/Smarteducation/about">About us</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">contant </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="<?php echo base_url('smarteducation/Smarteducation/term_condition'); ?>"> term and condition </a>
                                <a class="dropdown-item" href="<?php echo base_url('smarteducation/Smarteducation/privency_policy'); ?>">Privency and policy </a>
                                <a class="dropdown-item" href="<?php echo base_url('smarteducation/Smarteducation/disclaimer'); ?>">declaimer </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="<?php echo base_url(); ?>smarteducation/Smarteducation/blog">Blog </a>
                                <!-- <a class="dropdown-item" href="<?php echo base_url(); ?>smarteducation/Smarteducation/single_blog">Blog single </a> -->
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('smarteducation/Smarteducation/services'); ?>">services</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>smarteducation/Smarteducation/gallery/">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>smarteducation/Smarteducation/contact_us">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>admin/Dynamic_dependent/">City</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Book Now</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
