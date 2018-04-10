<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <?php /*
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    */?>
    <!-- search form -->
    <?php /*
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    */?>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="<?=is_nav_active('')?>" >
        <a href="<?=base_url()?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <?php /*  <span class="pull-right-container">
          </span> */?>
        </a>
      </li>
      <li class="treeview <?=is_nav_active('trucks/list')?><?=is_nav_active('trucks/create')?>">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Trucks</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          <?php /*  <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span> */?>
        </a>
        <ul class="treeview-menu">
          <li class="<?=is_nav_active('trucks/list')?>"><a href="<?=base_url()?>trucks/list"><i class="fa fa-circle-o"></i> List of Tructs</a></li>
          <li class="<?=is_nav_active('trucks/create')?>"><a href="<?=base_url()?>trucks/create"><i class="fa fa-circle-o"></i> Create Truct </a></li>
        </ul>
      </li>

   <li class="treeview <?=is_nav_active('Employee/list')?><?=is_nav_active('Employee/create')?>">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Employee</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          <?php /*  <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span> */?>
        </a>
        <ul class="treeview-menu">
          <li class="<?=is_nav_active('Employee/list')?>"><a href="<?=base_url()?>Employee/list"><i class="fa fa-circle-o"></i> List of Employee</a></li>
          <li class="<?=is_nav_active('Employee/create')?>"><a href="<?=base_url()?>Employee/create"><i class="fa fa-circle-o"></i> Create Employee</a></li>
        </ul>
      </li>


   <li class="treeview <?=is_nav_active('orders/list')?><?=is_nav_active('orders/create')?>">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Job Orders</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          <?php /*  <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span> */?>
        </a>
        <ul class="treeview-menu">
          <li class="<?=is_nav_active('orders/list')?>"><a href="<?=base_url()?>orders/list"><i class="fa fa-circle-o"></i> List of Order</a></li>
          <li class="<?=is_nav_active('orders/create')?>"><a href="<?=base_url()?>orders/create"><i class="fa fa-circle-o"></i> Create Job Order </a></li>
        </ul>
      </li>

     <li class="treeview <?=is_nav_active('user/list')?><?=is_nav_active('user/create')?><?=is_nav_active('user/createUserType')?>">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          <?php /*  <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span> */?>
        </a>
        <ul class="treeview-menu">
          <li class="<?=is_nav_active('user/list')?>"><a href="<?=base_url()?>user/list"><i class="fa fa-circle-o"></i> List of Users</a></li>
          <li class="<?=is_nav_active('user/create')?>"><a href="<?=base_url()?>user/create"><i class="fa fa-circle-o"></i> Create Users </a></li>
          <li class="<?=is_nav_active('user/createUserType')?>"><a href="<?=base_url()?>user/createUserType"><i class="fa fa-circle-o"></i> Create User Type </a></li>
        </ul>
      </li>

       <li class="treeview <?=is_nav_active('Permission/list')?><?=is_nav_active('Permission/create')?>">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Permission</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          <?php /*  <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span> */?>
        </a>
        <ul class="treeview-menu">
          <li class="<?=is_nav_active('Permission/list')?>"><a href="<?=base_url()?>Permission/list"><i class="fa fa-circle-o"></i> List of Permission</a></li>
          <li class="<?=is_nav_active('Permission/create')?>"><a href="<?=base_url()?>Permission/create"><i class="fa fa-circle-o"></i> Create Permission </a></li>
        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>