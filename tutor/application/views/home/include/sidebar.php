<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url()?>dashboard" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>" class="brand-link">
      <img src="<?=base_url()?>tutor/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Foster Bright</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>uploads/<?=(!empty($users_id)?$users_id:'')?>/<?=(!empty($users_image)?$users_image:'')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <span  class="d-block" style="color:snow"><?=(!empty($users_name)?$users_name:'')?>
            <?php $average =$this->home_model->ReviewAVG($users_id);
            ?>
           &nbsp;&nbsp;<i class="fas fa-star" style="color: green"></i><?=number_format($average['avg(review_val)'],2)?>
          </span>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php if($users_account == 1){?>
          <li class="nav-header">
            <span style="color: red"><i class="fas fa-signal"></i></span> Account Not Verified
          </li>
          <?php }else{?>
               <li class="nav-header">
            <span style="color: green"><i class="fas fa-signal"></i></span> &nbsp;Verfied Account
          </li>
          <?php }?>
          <li class="nav-header">DASHBOARD</li>    
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url()?>dashboard" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>available" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Availiablity</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>freeevaluation" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Free Evalaution</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-header">PROFILE</li>    
          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="fas fa-users"></i>
              <p>
                Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url()?>profile" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personal</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="<?=base_url()?>bankprofile" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bank Details</p>
                </a>
              </li>
           
            </ul>
          </li>
          <li class="nav-header">LOGOUT</li>
            <li class="nav-item">
            <a href="<?=base_url()?>home/logout" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>
                <span style="color: orange"> Logout </span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
