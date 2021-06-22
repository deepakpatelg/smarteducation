
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
              <h1> Company deteal Tables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="  <?php echo base_url(); ?>  admin/Fresh/admin_penal/">Home</a></li>
<!--               <li class="breadcrumb-item active">Simple Tables</li>
-->                <li class="nav-item menu-open">
  <a href="<?php echo base_url(); ?>admin/Crude/create_baner" class="nav-link ">

    <!--  <button type="button" class="btn btn-block bg-gradient-info btn-sm"> <i class="fa fa-plus" aria-hidden="true"></i>add new</button> -->

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
            <h3 class="card-title">Company List</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Discription</th>
                  <th>company Name</th>
                  <th>Mobile number</th>
                  <th>Email Address</th>
                  <th>Mata Tage</th>
                  <th>Company adreess</th>
                  <th>Facbook</th>
                  <th>Gitup</th>
                  <th>Twiter</th>
                  <th>dribbble</th>
                  <th>Prinrest</th>
                  
                  <th>Logo</th>
                  <th>Favicon Icon</th>
                  
                  

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

                   <td><?php echo $users->company_name; ?></td>
                   <td><?php echo $users->mobile_number; ?></td>
                   <td><?php echo $users->email_adress; ?></td>
                   <td><?php echo $users->matatage; ?></td>
                   <td><?php echo $users->company_address; ?></td>

                   <td><?php echo $users->facbook; ?></td>
                   <td><?php echo $users->gitup; ?></td>
                   <td><?php echo $users->twiter; ?></td>
                   <td><?php echo $users->dribble; ?></td>
                   <td><?php echo $users->prinrest; ?></td>
                   <!-- <td><?php echo $users->image; ?></td> -->
                   <!--  <td><?php echo $users->cpassword; ?></td> -->
                   <td><img src="<?php echo base_url('images/'.$users->logo);?>" width="50px" height="50px"> </td>

<td><img src="<?php echo base_url('images/'.$users->favicon_icon);?>" width="50px" height="50px"> </td>
                   <td><a href="<?php echo base_url('admin/Crude/seting_edit/'.$users->id); ?>" class="fas fa-pen"> </a>
                    <!--  <a href="<?php echo base_url('admin/Crude/setting_delete/'.$users->id); ?>"  class="fas fa-trash-alt" onclick="return confirm('Do you really want to leave?')"></a> -->
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




