<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<style type="text/css">
  .name{

    
    font-family: 
    background-color: lightgrey;
   color:red;
  }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url(); ?>admin/fresh/admin_profile " class="brand-link">

    <img src="<?php echo base_url(); ?>assest/dist/img/avatar4.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
   <i> <b> <span class="brand-text font-weight-light">Demo Project</span></b></i>
  </a>
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url('images/'.$this->session->userdata('image')); ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <!-- <i class="d-block"> -->
        <p class="name"> <?php echo $this->session->userdata('name'); ?>  </p>
        <!-- <a href="#" class="d-block">Alexander Pierce</a> -->
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item menu-open">
            <a href="<?php  echo base_url(); ?>admin/Fresh/admin_penal" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              <!--   <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
           
            
            <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>admin/fresh/add_user" class="nav-link ">
           <i class="fas fa-user-plus"></i>
              <p>
                Add user
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
 <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>admin/Crude/banerlist" class="nav-link ">
           <i class="far fa-image"></i>
              <p>
                Baner
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
           <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>admin/Crude/service_list" class="nav-link ">
         <i class="fa fa-address-book" aria-hidden="true"></i>
              <p>
             Services
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>


           <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>admin/Crude/contain_list" class="nav-link ">
         <i class=" fa-align-justify [&#xf039;]" aria-hidden="true"></i>
              <p>
             Containt
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>

      <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>admin/Crude/testmonial_list" class="nav-link ">
 <i class="fa fa-quote-left" aria-hidden="true"></i>
              <p>
             Testmonial
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>

           
          <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>admin/Crude/block_list" class="nav-link ">
            <i class="fas fa-blog"></i>
              <p>
             Blog
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
           <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>admin/Crude/contact_deteal" class="nav-link ">
      <i class="fas fa-id-card-alt"></i>
              <p>
             Contact
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>admin/Crude/about" class="nav-link ">
            <i class="fas fa-info"></i>
              <p>
             About  
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>admin/Crude/gallery_display" class="nav-link ">
            <i class="fas fa-image"></i>
              <p>
             gallery
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
         
          <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>admin/Dynamic_dependent/country_list" class="nav-link ">
            <i class="fas fa-flag"></i>
              <p>
                Contry
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>admin/Dynamic_dependent/state_list" class="nav-link ">
            <i class="fas fa-city"></i>
              <p>
                State
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>admin/Dynamic_dependent/city" class="nav-link ">
            <i class="fas fa-city"></i>
              <p>
             All City
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>admin/Crude/company_setting" class="nav-link ">
 <i class="fa fa-quote-left" aria-hidden="true"></i>
              <p>
             setting
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>shopingcart/Shopingcart/shoping_list" class="nav-link ">
            <i class="fa fa-product-hunt" aria-hidden="true"></i>
              <p>
Add Product                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
