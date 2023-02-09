<?php
$sess=$this->session->userdata('logged_in');
if(empty($sess)) {
  $message='<div class="alert alert-danger alert-dismissable alert_box"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Invalide Username or Password.</div>';
    $this->session->set_flashdata('message', $message);
    redirect('admin/index');
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title;?> | <?php echo PROJECT_NAME;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('Assets/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('Assets/css/dataTables.bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/css/font-awesome.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/css/fontawesome.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/css/font-awesome.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/css/ionicons.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/fonts/ionicons.ttf');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/fonts/ionicons.woff');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/css/AdminLTE.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/css/skin-blue.min.css');?>">
   <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url('Assets/css/css.css');?>">
</head>
<style type="text/css">
    .user-panel>.info {
    padding: 20px 5px 5px 5px;
    line-height: 1;
    position: absolute;
    left: 55px;
    }
    element.style {
    }
    .skin-blue .main-header .logo {
    background-color: #367fa9;
    color: #fff;
    border-bottom: 0 solid transparent;
    border-bottom-width: 0px;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    }
    .main-header .logo {
    -webkit-transition: width .3s ease-in-out;
    -o-transition: width .3s ease-in-out;
    transition: width .3s ease-in-out;
    display: block;
    float: left;
    height: 50px;
    font-size: 18px;
    line-height: 50px;
    text-align: center;
    width: 230px;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    padding: 0 15px;
    font-weight: 300;
    overflow: hidden;
    }
    .logo:hover{
    text-decoration: none;
    }
    .skin-blue .main-header .navbar {
    background-color: #f39c12;
    }
    .skin-blue .main-header .logo {
    background-color: #f39c12;
    color: #fff;
    border-bottom: 0 solid transparent;
    border-bottom-width: 0px;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    }
    .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
    background-color: #f9fafc;
    border-right: 1px solid white;
    color: black;
    }
    .skin-blue .sidebar-menu>li.active>a {
    border-left-color: #f39c12;
    background:light-gray;
    }
    .skin-blue .sidebar a {
    color: #444;
    }
    .skin-blue .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li.menu-open>a {
    color: #444;
    background:white;
    }
    .skin-blue .user-panel>.info, .skin-blue .user-panel>.info>a {
    color: #444;
    }
    .skin-blue .main-header .logo:hover {
    background-color: #f39c12;
    color: #fff;
    border-bottom: 0 solid transparent;
    border-bottom-width: 0px;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    }
    .skin-blue .main-header .navbar .sidebar-toggle:hover {
    background-color: #f39c12;
    }
    .bg-green, .callout.callout-success, .alert-success, .label-success, .modal-success .modal-body {
    background-color: green !important;
    }
    .a:hover {
    text-decoration: none;
    color: #f39c12;
    }
    .skin-blue .main-header li.user-header {
    background-color: #f39c12;
    }
    .box.box-primary {
    border-top-color: #f39c12;
    }
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: #f39c12;
    border-color: #f39c12;
    }
    .btn-primary {
    background-color: #f39c12;
    border-color: #f39c12;
    }
    .alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    }
    .divPadding {
    padding-right: 0px !important;
    padding-left: 0px !important;
    border-color: #f39c12;
    }
    .alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
    }
    .bg-green, .callout.callout-success, .alert-success, .label-success, .modal-success .modal-body {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    }
    .nav-tabs-custom>.nav-tabs>li.active {
    border-bottom: 3px solid #f39c12;
    border-top-color: transparent;
    margin-bottom: -2px;
    margin-right: 5px;
    }
    .navbar-nav>.user-menu>.dropdown-menu {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
    padding: 1px 0 0 0;
    border-top-width: 0;
    width: 350px;
    }
    .btn {
    display: inline-block;
    margin-left: -10px;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    user-select: none;
    }
    .skin-blue .sidebar-menu>li>.treeview-menu {
    margin: 0 1px;
    background: #f9fafc;
    }
    .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {
    color: black;
    }
</style>
<body class="hold-transition skin-blue sidebar-mini">
<!-- <div class="wrapper"> -->
  <!-- Main Header -->
  <?php if(!empty($this->session->userdata['logged_in']['image'])) { $img = $this->session->userdata['logged_in']['image'];} else { $img = 'u3.png'; }?>
  <header class="main-header"> <!-- Logo -->
    <a href="<?php echo base_url('admin/dashboard');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A C</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Account</b></span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="navbar-custom-menu">
        <ul class="nav navbar-nav"><li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url('Assets/images/');?><?= $img;?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $this->session->userdata['logged_in']['name'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url('Assets/images/');?><?= $img;?>" class="img-circle" alt="User Image">
                <p>
                <?= $this->session->userdata['logged_in']['name'];?><br><?= $this->session->userdata['logged_in']['username'];?></p>
              </li>
              <!-- Menu Footer-->
              <li class="user-body">
                <div class="row">  
                <div class="col-sm-3 text-center">
                  <a href="<?php echo base_url('admin/profile');?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="col-sm-6 text-center">
                  <a href="<?php echo base_url('admin/changePassword');?>" class="btn btn-default btn-flat">Change Password</a>
                </div>
                <div class="col-sm-3 text-center signout">
                  <a href="<?php echo base_url('admin/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </div>
              </li>
            </ul>
          </li>
          </ul>
        </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('Assets/images/');?><?= $img;?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $this->session->userdata['logged_in']['name'];?></p>
        </div>
      </div>
      <!-- /.search form -->
      <!-- Sidebar Menu -->
      <?php $selector = $this->uri->segment(2,0);?>
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
         <li class="<?php if($selector == 'dashboard'){ echo "active";}?>"><a href="<?= base_url('admin/dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
         <li class="treeview <?php if($selector == 'viewCustomer' || $selector == 'viewEstimate' || $selector == 'viewOrder' || $selector == 'viewRecevied' || $selector == 'viewInvoice' || $selector == 'addCustomer' || $selector == 'addEstimate' || $selector == 'addOrder'  || $selector == 'addInvoice' || $selector == 'addRecevied'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>Sales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($selector == 'viewCustomer' || $selector == 'addCustomer'){echo 'active';}?>"><a href="<?= base_url('Customer/viewCustomer');?>"><i class="fa fa-circle-o"></i> Customers</a></li>
            <li class="<?php if($selector == 'viewEstimate' || $selector == 'addEstimate'){echo 'active';}?>"><a href="<?= base_url('Estimate/viewEstimate');?>"><i class="fa fa-circle-o"></i> Estimates</a></li>
            <li class="<?php if($selector == 'viewOrder' || $selector == 'addOrder'){echo 'active';}?>"><a href="<?= base_url('Order/viewOrder');?>"><i class="fa fa-circle-o"></i> Sales Order</a></li>
            <li class="<?php if($selector == 'viewInvoice' || $selector == 'addInvoice'){echo 'active';}?>"><a href="<?= base_url('Invoice/viewInvoice');?>"><i class="fa fa-circle-o"></i> Invoices</a></li>
            <li class="<?php if($selector == 'viewRecevied' || $selector == 'addRecevied'){echo 'active';}?>"><a href="<?= base_url('Recevied/viewRecevied');?>"><i class="fa fa-circle-o"></i> Payments Received</a></li>
          </ul>
        </li>
        <li class="treeview <?php if($selector == 'viewVender' || $selector == 'viewExpence' || $selector == 'viewRecurring' || $selector == 'viewPurchase' || $selector == 'viewBill' || $selector == 'viewPaymentMade' || $selector == 'viewRecurringBill' || $selector == 'addVender' || $selector == 'addExpence' || $selector == 'addRecurring' || $selector == 'addPurchase' || $selector == 'addBill' || $selector == 'addPaymentMade' || $selector == 'addRecurringBill'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-shopping-bag"></i>
            <span>Purchases</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($selector == 'viewVender' || $selector == 'addVender'){echo 'active';}?>"><a href="<?= base_url('Vender/viewVender');?>"><i class="fa fa-circle-o"></i> Vendors</a></li>
            <li class="<?php if($selector == 'viewExpence' || $selector == 'addExpence'){echo 'active';}?>"><a href="<?= base_url('Expence/viewExpence');?>"><i class="fa fa-circle-o"></i> Expences</a></li>
            <li class="<?php if($selector == 'viewRecurring' || $selector == 'addRecurring'){echo 'active';}?>"><a href="<?= base_url('Recurring/viewRecurring');?>"><i class="fa fa-circle-o"></i> Recurring Expences</a></li>
            <li class="<?php if($selector == 'viewPurchase' || $selector == 'addPurchase'){echo 'active';}?>"><a href="<?= base_url('Purchase/viewPurchase');?>"><i class="fa fa-circle-o"></i> Purchase Orders</a></li>
            <li class="<?php if($selector == 'viewBill' || $selector == 'addBill'){echo 'active';}?>"><a href="<?= base_url('Bill/viewBill');?>"><i class="fa fa-circle-o"></i> Bills</a></li>
            <li class="<?php if($selector == 'viewPaymentMade' || $selector == 'addPaymentMade'){echo 'active';}?>"><a href="<?= base_url('Payment/viewPaymentMade');?>"><i class="fa fa-circle-o"></i> Payments Made</a></li>
            <li class="<?php if($selector == 'viewRecurringBill' || $selector == 'addRecurringBill'){echo 'active';}?>"><a href="<?= base_url('RecurringBill/viewRecurringBill');?>"><i class="fa fa-circle-o"></i> Recurring Bills</a></li>
          </ul>
        </li>
        <li class="treeview <?php if($selector == 'viewProject' || $selector == 'viewTimesheet' || $selector == 'addProject' || $selector == 'addTimesheet'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-clock-o"></i>
            <span>Time Tracking</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($selector == 'viewProject' || $selector == 'addProject'){echo 'active';}?>"><a href="<?= base_url('Project/viewProject');?>"><i class="fa fa-circle-o"></i> Projects</a></li>
            <li class="<?php if($selector == 'viewTimesheet' || $selector == 'addTimesheet'){echo 'active';}?>"><a href="<?= base_url('Timesheet/viewTimesheet');?>"><i class="fa fa-circle-o"></i> Timesheet</a></li>
          </ul>
        </li>
        <li class="treeview <?php if($selector == 'viewManual' || $selector == 'viewBulk' || $selector == 'viewCurrency' || $selector == 'viewChart' || $selector == 'viewTransaction' || $selector == 'addManual' || $selector == 'addBulk' || $selector == 'addCurrency' || $selector == 'addChart' || $selector == 'addTransaction'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Accountant</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($selector == 'viewManual' || $selector == 'addManual'){echo 'active';}?>"><a href="<?= base_url('Manual/viewManual');?>"><i class="fa fa-circle-o"></i> Manual Journals</a></li>
            <li class="<?php if($selector == 'viewBulk' || $selector == 'addBulk'){echo 'active';}?>"><a href="<?= base_url('Bulk/viewBulk');?>"><i class="fa fa-circle-o"></i> Bulk Update</a></li>
            <li class="<?php if($selector == 'viewCurrency' || $selector == 'addCurrency'){echo 'active';}?>"><a href="<?= base_url('Currency/viewCurrency');?>"><i class="fa fa-circle-o"></i> Currency Adjustments</a></li>
            <li class="<?php if($selector == 'viewChart' || $selector == 'addChart'){echo 'active';}?>"><a href="<?= base_url('Chart/viewChart');?>"><i class="fa fa-circle-o"></i> Chart of Accounts</a></li>
            <li class="<?php if($selector == 'viewTransaction' || $selector == 'addTransaction'){echo 'active';}?>"><a href="<?= base_url('Transaction/viewTransaction');?>"><i class="fa fa-circle-o"></i> Transaction Locking</a></li>
          </ul>
        </li>
          <li class="<?php if($selector == 'viewReport' || $selector == 'addReport'){echo 'active';}?>"><a href="<?= base_url('Report/viewReport');?>"><i class="fa fa-line-chart"></i> <span>Reports</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>



