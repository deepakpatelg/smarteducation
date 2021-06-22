
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">









    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Users Data Tables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Fresh/admin_penal/">Home</a></li>
<!--               <li class="breadcrumb-item active">Simple Tables</li>
-->                <li class="nav-item menu-open">
  <a href="<?php echo base_url(); ?>admin/fresh/create_user" class="nav-link ">

   <button type="button" class="btn btn-block bg-gradient-info btn-sm"> <i class="fa fa-plus" aria-hidden="true"></i>add new</button>

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
      <div class="col-md- 12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">User List</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Contact_No.</th>
                  
                  <th>Gander</th>
                  <th>City</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Image</th>

                  <th>action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php $i=0; if($user): ?>
              <?php foreach($user as $users): 
                $i++;?>
                <tr>
                 <td><?php echo $i; ?></td>
                 <td><?php echo $users->name; ?></td>
                 <td><?php echo $users->address; ?></td>
                 <td><?php echo $users->contact_no; ?></td>
                 <td><?php echo $users->gander; ?></td>
                 <td><?php echo $users->city; ?></td>
                 <td><?php echo $users->email; ?></td>
                 <td><?php echo $users->password; ?></td>
                 <!-- <td><?php echo $users->image; ?></td> -->
                 <!--  <td><?php echo $users->cpassword; ?></td> -->
                 <td><img src="<?php echo base_url('images/'.$users->image);?>" width="50px" height="50px"> </td>

                 <td><a href="<?php echo base_url('admin/Fresh/edit/'.$users->id); ?>" class="fas fa-pen"   onclick=" return confirm('do you want to realy adit?')"> </a>
                 <a href="<?php echo base_url('admin/Fresh/delete/'.$users->id); ?>"  class="fas fa-trash-alt" onclick="return confirm('Do you really want to leave?')"></a>
               </tr>
               <?php 
             endforeach;
           endif; ?>
         </tbody>


              </tbody>

            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

</div>




