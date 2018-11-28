<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="icon" href="<?php echo base_url(); ?>assets/admin/img/ui-help.png" type="image/x-icon">

    <title><?php echo (isset($page_title)) ? $page_title : 'Help Desk System'; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url()?>assets/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url()?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/admin/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/admin/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/admin/lineicons/style.css">

    <!-- DataTables CSS -->
    <link href="<?= base_url() ?>assets/admin/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/css/buttons.dataTables.min.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->

    <!-- Custom styles for this template -->
    <link href="<?= base_url()?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/admin/css/style-responsive.css" rel="stylesheet">

    <script src="<?= base_url()?>assets/admin/js/chart-master/Chart.js"></script>


    <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                $('#datepicker').datepicker({
                    format: "yyyy-mm-dd"
                });

            });
  </script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?= base_url() ?>" class="logo">Welcome <?=$this->logged_in_name?> | <b>HELP DESK</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?=  base_url('auth/logout')?>">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="<?= base_url()?>"><img src="<?= base_url()?>assets/admin/img/ui-help.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?=$this->logged_in_name?></h5>


                  <?php if ($this->is_admin): ?>
                  <li class="mt">
                      <a class="" href="<?= base_url('adminstatus') ?>">
                          <i class="fa fa-list"></i>
                          <span>Ticket Report</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-building-o"></i>
                          <span>Department</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= base_url('departments') ?>">All Department</a></li>
                          <li><a  href="<?= base_url('createdepartment') ?>">Add Department</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-ellipsis-v"></i>
                          <span>Category</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= base_url('categories') ?>">All Categories</a></li>
                          <li><a  href="<?= base_url('createcategory') ?>">Add Category</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-user"></i>
                          <span>Users</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= base_url('users') ?>">All Users</a></li>
                          <li><a  href="<?= base_url('createuser') ?>">Add User</a></li>
                      </ul>
                  </li>
                  <li class="mt">
                      <a class="" href="<?= base_url('ticktrails') ?>">
                          <i class="fa fa-history"></i>
                          <span>Trails</span>
                      </a>
                  </li>
                <?php elseif($this->in_group_s): ?>
                <li class="mt">
                    <a class="" href="<?= base_url('status') ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Ticket Status</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-ticket"></i>
                        <span>Tickets</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="<?= base_url('tickets') ?>">Ticket List</a></li>
                        <li><a  href="<?= base_url('createtickets') ?>">Create Ticket</a></li>
                    </ul>
                </li>
              <?php elseif($this->in_group_m): ?>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-ticket"></i>
                        <span>Tickets</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="<?= base_url('tickets') ?>">Ticket List</a></li>
                        <li><a  href="<?= base_url('createtickets') ?>">Create Ticket</a></li>
                    </ul>
                </li>
                  <?php endif; ?>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
