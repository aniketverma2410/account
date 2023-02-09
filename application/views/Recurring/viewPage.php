<link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets/css/bootstrap.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets/css/dataTables.bootstrap.min.css');?>">
<script src="<?php echo base_url('Assets/js/jquery.min.js');?>"></script>
<style type="text/css">
    .group{cursor: pointer;}
    body {font-family: "Lato", sans-serif;}
    .img_h_w{height: 50px; width: 50px;}
    .del{cursor: pointer;}
    .lbl { font-size:12px;padding:10px; }
    .divPadding{padding-right: 0px !important; padding-left: 0px !important; }
    .success_msg{
    width: 280px;
    min-height: 50px;
    position: fixed;
    top: 50px;
    right: 0px;
    background: #4BB543;
    color: #fff;
    z-index: 1000000;
    padding: 15px 5px;
    border: 1px solid #fff;
    border-radius: 15px;
    }
    a:hover {
    text-decoration: none;
    color: #f39c12;
    }
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: #f39c12;
    border-color: #f39c12;
    }
    .label {
    display: inline;
    padding: .3em .3em .3em;
    font-size: 85%;
    font-weight: 700;
    color: #fff;
    border-radius: .25em;
    background-color: green;
    }
    .label2 {
    display: inline;
    padding: .4em .4em .4em;
    font-size: 85%;
    font-weight: 700;
    color: #fff;
    text-align: center;
    border-radius: .25em;
    background-color: #dd4b39;
    }
    .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
        border-bottom-width: 2px;
        border-bottom: 10px;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Recurring Expances<small style="font-size: 14px;"><a class="a" href="<?= base_url('Recurring/addRecurring');?>" class="add_user">Add Recurring Expence</a></small>
        </h1>
        <ol class="breadcrumb" style="padding: 0px 5px;">
          <li><a href="<?php echo base_url('Admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Recurring Expences</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
       <?php echo $this->session->userdata('message');?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box col-xs-12 divPadding">
                    <div class="box-body col-xs-12 col-sm-12 divPadding"> 
                        <div class="col-sm-12" style="overflow: auto;">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <td><b>S. No.</b></td>
                                        <td><b>Customer Code</b></td>
                                        <td><b>Customer Name</b></td>
                                        <td><b>Created At</b></td>
                                        <td><b>Status</b></td>
                                        <td style="display:block;"><b>View Details</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                 <!--    <tr id="3" class="main_row">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    $(document).ready(function(){
    setTimeout(function() {
    $('.alert_box').fadeOut('slow');
    }, 2000);
    });
    $(document).ready(function() {
    // $('#example').DataTable();
    });
    $(document).ready(function() {
    var table = $('#example').DataTable( {
    lengthChange: false,
    buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
    table.buttons().container()
    .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
    } );
</script>