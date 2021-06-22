
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
              <h1> block Data Tables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="  <?php echo base_url(); ?>  admin/Fresh/admin_penal/">Home</a></li>
<!--               <li class="breadcrumb-item active">Simple Tables</li>
-->                <li class="nav-item menu-open">
  <a href="<?php echo base_url(); ?>admin/Crude/block_create" class="nav-link ">

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
            <h3 class="card-title">Block List</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Discription</th>
                  <th>Author Name</th>
                  <th>Date Time</th>
                   <th>Update Time</th>
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
                 <td><?php echo $users->title; ?></td>
                 <td><?php echo $users->discription; ?></td>
                 <td><?php echo $users->authore_name; ?></td>
                 <td><?php echo $users->datetime; ?></td>
                  <td><?php echo $users->update_date; ?></td>
                
                 <!-- <td><?php echo $users->image; ?></td> -->
                 <!--  <td><?php echo $users->cpassword; ?></td> -->
                 <td><img src="<?php echo base_url('images/'.$users->image);?>" width="50px" height="50px"> </td>

                 <td><a href="<?php echo base_url('admin/Crude/block_edit/'.$users->id); ?>" class="fas fa-pen"   onclick=" return confirm('do you want to realy adit?')"> </a>
                 <a href="<?php echo base_url('admin/Crude/block_delete/'.$users->id); ?>"  class="fas fa-trash-alt" onclick="return confirm('Do you really want to leave?')"></a>
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




