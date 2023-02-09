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
        <h1>Add Currency Adjustment</h1>
        <ol class="breadcrumb" style="padding: 0px 5px;">
          <li><a href="<?php echo base_url('Admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="<?php echo base_url('Currency/viewCurrency');?>">Currency Adjustments</a></li>
        <li class="active">Add Currency Adjustment</li>
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
              <h3 class="box-title">Add Currency Adjustment Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-sm-12">
                <div class="col-sm-3 form-group">
                      <label for="exampleInputEmail1">Currency</label><span style="color: red">*</span>
                      <select class="form-control">
                        <option value="">Choose Currency</option>
                        <option value="1">ADE- UAE Dirham</option>
                        <option value="2">AUD- Australian Dollar</option>
                        <option value="3">CAD- Canadian Dollar</option>
                        <option value="4">CNY- Renminbi</option>
                        <option value="5">EUR- Euro</option>
                        <option value="6">GBP- Pound Sterling</option>
                        <option value="7" selected="">INR- Indian Rupee</option>
                        <option value="8">JPY- Japanese Yen</option>
                        <option value="9">USD- United States Dollar</option>
                        <option value="10">ZAR- South African Rand</option>
                      </select>
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Date of Adjustment</label><span style="color: red">*</span>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" placeholder="dd/mm/yyyy">
                </div>
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Exchange Rate</label><span style="color: red">*</span>
                  <div class="input-group">
                <span class="input-group-addon">1 AED =</span>
                <input type="text" class="form-control">
                <span class="input-group-addon">INR</span>
              </div>
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Notes</label><span style="color: red">*</span>
                  <input class="form-control" type="text" id="" name="" value="" placeholder="Max 500 Characters">
                  <span id="error_code"></span>
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