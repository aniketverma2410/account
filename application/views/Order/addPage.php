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
        <h1>Add Sales Order</h1>
        <ol class="breadcrumb" style="padding: 0px 5px;">
          <li><a href="<?php echo base_url('Admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="<?php echo base_url('Order/viewOrder');?>">Sales Order</a></li>
        <li class="active">Add Sales Order</li>
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
              <h3 class="box-title">Add Sales Order Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-sm-12">
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Customer Name</label><span style="color: red">*</span>
                  <select class="form-control">
                    <option value="">Select Customer</option>
                  </select>
                  <span id="error_name"></span>
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Estimate</label><span style="color: red">*</span>
                  <input type="text" class="form-control" id="s_name" placeholder="Enter Estimate" name="s_name" value="">
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Reference</label><span style="color: red">*</span><br>
                  <input class="form-control" type="text" id="" name="lname" value="" placeholder="Enter Reference">
                  <span id="error_code"></span>
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Estimate Date</label><span style="color: red">*</span><br>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" placeholder="dd/mm/yyyy">
                </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Expiry Date</label><span style="color: red">*</span><br>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker1" placeholder="dd/mm/yyyy">
                </div>
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Salesperson</label><span style="color: red">*</span>
                  <select class="form-control">
                    <option value="">Choose Salesperson Name</option>
                  </select>
                  <span id="error_name"></span>
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Project Name</label>
                  <select class="form-control" disabled="">
                    <option value="">Choose Project Name</option>
                  </select>
                </div>
              </div>
        <div class="col-md-12">
                 <table class="table table-bordered table-condensed">
                    <thead>
                      <tr class="active">
                      <td>Item Details</td>
                      <td>Quantity</td>
                      <td>Rate</td>
                      <td>Amount</td>
                    </tr>
                    </thead>
                    <tbody id="tbody">
                      <tr id="tr1">
                        <td class="tb"><select class="form-control tbl" name="" id=""><option value="1">Type or Click to select an Item</option></select></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl" placeholder="1.00"></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl" placeholder="0.00"></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl" readonly="" placeholder="0.00"></td>
                      </tr>
                    </tbody>
                  </table>
                     <i class="fa fa-plus" style="color: #268ddd;cursor: pointer;" onclick="addmore(1)"> Add Another Line</i>
                </div>
                <div class="col-sm-12">
                  <div class="col-sm-12"><br>
                    <div class="col-sm-4">Sub Total</div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">0.00</div>
                  </div>
                   <div class="col-sm-12"><br>
                    <div class="col-sm-4">Discount</div>
                    <div class="col-sm-4">
                      <div class="input-group input-group-sm" style="width: 100px">
                        <input type="text" class="form-control" placeholder="0.00">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-inr" aria-hidden="true"></i>
                            <span class="fa fa-caret-down"></span></button>
                          <ul class="dropdown-menu">
                            <li><a>%</a></li>
                          </ul>
                        </div>
                        <!-- /btn-group -->
                      </div>
                      </div>
                    <div class="col-sm-4">0.00</div>
                  </div>
                  <div class="col-sm-12"><br>
                    <div class="col-sm-4">Total ( <i class="fa fa-inr" aria-hidden="true"></i> )</div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">0.00</div>
                  </div>
                </div>
                <div class="col-sm-12"><br>
                  <div class="col-sm-3">
                    <label>Attach File(s)</label>
                    <input type="file" name="" class="form-control">
                  </div>
                  <div class="col-sm-3">
                    <label>Customer Notes</label>
                    <input type="text" name="" class="form-control" placeholder="Looking forward for your business.">
                  </div>
                  <div class="col-sm-3">
                    <label>Terms & Conditions</label>
                    <input type="text" name="" class="form-control" placeholder="Terms & Conditions">
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