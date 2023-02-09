<link rel="stylesheet" href="<?= base_url('Assets/css/bootstrap-datepicker.min.css');?>">
<style>
  .alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
  }
  #error{
  height:50px;
  width:100%;
  background: red;
  color:white;
  }
  .error{
  color:red;
  }
  span p{color:red}p#deleteFile{margin:0;color:#e0aeae}
  #myProgress{width:100%;background-color:black}
  #myBar{width:1%;height:6px;background-color:#61bd65;margin-top:7px}
  #loaderShow{display:none}
  .hline {
  color: #666;
  font-family: helvetica;
  font-weight: bold;
  /*font-variant: small-caps;*/
  letter-spacing: .1em;
  line-height: 0px;
  padding-left: 20px;
  /*text-transform: uppercase;*/
  margin-bottom: 20px;
}

.hline > span {
  background-color: #FFF;
  /*padding: 0px 1em;*/
}
  .divPadding{
    border-top:none;
    border: 1px solid #eee;
    margin-top: 20px;
  }
  .nav-tabs-custom>.tab-content {
    padding: 0px;
  }
  .copy {
    color: red;
    cursor: pointer;
  }
.tbl {display: block !important; padding: 0 !important; margin: 0 !important; border: 0 !important; width: 100% !important; border-radius: 0 !important; line-height: 1 !important;}
.tb {margin: 0 !important; padding: 0 !important;}
.dropdown-menu {
  min-width: 10px;
}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Add Chart of Account</h1>
        <ol class="breadcrumb" style="padding: 0px 5px;">
          <li><a href="<?php echo base_url('Admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="<?php echo base_url('Chart/viewChart');?>">Chart of Accounts</a></li>
        <li class="active">Add Chart of Account</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php echo $this->session->userdata('message');?>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Chart of Account Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-sm-12">
                <div class="col-sm-3 form-group">
                      <label for="exampleInputEmail1">Account Type</label><span style="color: red">*</span>
                      <select class="form-control">
                        <option value=""></option>
                      </select>
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Account Name</label><span style="color: red">*</span>
                  <input type="text" class="form-control pull-right" id="" placeholder="">
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Account Code</label>
                <input type="text" class="form-control" name="" id="">
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input class="form-control" type="text" id="" name="" value="" placeholder="Max 500 Characters">
                </div>
              </div>
                <div class="col-sm-12">
                  <div class="col-sm-4">
                    <br>
                <div class="form-group">
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </div>
            </div>
          </div>
            </form>
          </div>
          <!-- /.box -->
    </section>
  </div>
  <div class="col-sm-2"></div>
<script src="<?php echo base_url('Assets/js/jquery.min.js');?>" type="text/javascript"></script>
<script src="<?= base_url('Assets/js/bootstrap-datepicker.min.js');?>"></script>
<script type="text/javascript">
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
  $('#datepicker1').datepicker({
      autoclose: true
    })
</script>