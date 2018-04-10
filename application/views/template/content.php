<?php $this->load->view('common/header',['tittle' => $page_tittle])?>
<div class="wrapper">

<?php $this->load->view('widgets/header_content') ?>
<!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('widgets/sidebar_left') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    <?= $tittle == ''?'' : $tittle ?>
      <small>Control panel</small>
    </h1>
    <!--
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
    -->
  </section>

  <!-- Main content -->
  <section class="content">
            <?php $this->load->view($view); ?>
  </section>
  <!-- /.content -->
</div>

<?php //$this->load->view('widgets/sidebar_right') ?>

<?php $this->load->view('widgets/footer_content') ?>

<?php $this->load->view('common/footer')?>