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
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Add Vender</h1>
        <ol class="breadcrumb" style="padding: 0px 5px;">
          <li><a href="<?php echo base_url('Admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="<?php echo base_url('Vender/viewVender');?>">Venders</a></li>
        <li class="active">Add Vender</li>
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
              <h3 class="box-title">Add Vender Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-sm-12">
                <!-- <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Customer Type</label><span style="color: red">*</span><br>
                  <input type="radio" id="" name="radio" value="">&nbsp;&nbsp;&nbsp;Bussiness&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="radio" value="">&nbsp;&nbsp;&nbsp;Individual
                  <span id="error_code"></span>
                </div> -->
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Title</label><span style="color: red">*</span>
                  <select class="form-control">
                    <option value="">Choose Title</option>
                    <option value="1">Mr.</option>
                    <option value="2">Mrs.</option>
                    <option value="3">Ms.</option>
                    <option value="4">Miss.</option>
                    <option value="5">Dr.</option>
                  </select>
                  <span id="error_name"></span>
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" class="form-control" id="s_name" placeholder="Enter First Name" name="s_name" value="">
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Last Name</label><span style="color: red">*</span><br>
                  <input class="form-control" type="text" id="" name="lname" value="" placeholder="Enter Last Name">
                  <span id="error_code"></span>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Company Name</label><span style="color: red">*</span><br>
                  <input class="form-control" type="text" id="" name="cname" value="" placeholder="Enter Company Name">
                  <span id="error_code"></span>
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Customer Display Name</label><span style="color: red">*</span>
                  <select class="form-control">
                    <option value="">Choose Customer Name</option>
                  </select>
                  <span id="error_name"></span>
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Customer Email</label>
                  <input type="text" class="form-control" id="s_name" placeholder="Enter Customer Email" name="s_name" value="">
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Customer Mobile</label>
                  <input type="text" class="form-control" id="s_name" placeholder="Enter Customer Mobile" name="s_name" value="">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Scype Name/Number</label><span style="color: red">*</span><br>
                  <input class="form-control" type="text" id="" name="cname" value="" placeholder="Enter Company Name">
                  <span id="error_code"></span>
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Designation</label><span style="color: red">*</span>
                  <input type="text" name="" class="form-control" placeholder="Enter Designation">
                  <span id="error_name"></span>
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Department</label>
                  <input type="text" class="form-control" id="s_name" placeholder="Enter Department" name="s_name" value="">
                </div>
                <div class="col-sm-3 form-group">
                  <label for="exampleInputEmail1">Website</label>
                  <input type="text" class="form-control" id="s_name" name="s_name" value="">
                </div>
              </div>
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#detail" data-toggle="tab">Other Details</a></li>
              <li><a href="#address" data-toggle="tab">Address</a></li>
              <li><a href="#contact" data-toggle="tab">Contact Persons</a></li>
              <li><a href="#custom" data-toggle="tab">Custom Fields</a></li>
              <li><a href="#reporting" data-toggle="tab">Reporting Tags</a></li>
              <li><a href="#remark" data-toggle="tab">Remarks</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="detail">
                <div class="col-sm-12"><br>
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
                      <label for="exampleInputEmail1">Opening Balance</label><span style="color: red">*</span>
                      <input type="text" name="" placeholder="Enter Balance" class="form-control">
                </div>
                <div class="col-sm-3 form-group">
                      <label for="exampleInputEmail1">Payment Terms</label><span style="color: red">*</span>
                      <select class="form-control">
                        <option value="">Due On Receipt</option>
                      </select>
                </div>
                <div class="col-sm-3 form-group">
                      <label for="exampleInputEmail1">Enable Portal?</label><span style="color: red">*</span><br>
                      <input type="checkbox" name=""> Allow portal access for this customer
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-3 form-group">
                <label for="exampleInputEmail1">Facebook</label><span style="color: red">*</span>
                 <div class="input-group">
                    <span class="input-group-addon"><img src="<?= base_url('Assets/images/fb.png');?>" style="height: 20px;width: 20px"></span>
                    <input type="text" class="form-control" placeholder="Facebook">
                </div>
                </div>
                <div class="col-sm-3 form-group">
                <label for="exampleInputEmail1">Twitter</label><span style="color: red">*</span>
                 <div class="input-group">
                    <span class="input-group-addon"><img src="<?= base_url('Assets/images/twitter.jpg');?>" style="height: 20px;width: 20px"></span>
                    <input type="text" class="form-control" placeholder="Twitter">
                </div>
                </div>
              </div>
            </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="address">
              <div class="col-sm-12 divPadding" style="margin-right: 2px;">
                <div class="hline"><span>BILLING ADDRESS</span></div>
                <div class="col-sm-12">
                <div class="col-sm-3 form-group">
                  <label>Attention</label>
                  <input type="text" name="attention" id="attention" class="form-control" placeholder="Enter Attention">
                </div>
                <div class="col-sm-3 form-group">
                  <label>Country</label>
                  <select class="form-control" name="country" id="country">
                    <option value="">Choose</option>
                    <option value="1">India</option>
                    <option value="2">USA</option>
                    <option value="3">Chaina</option>
                    <option value="4">Pakistan</option>
                  </select>
                </div>
                <div class="col-sm-3 form-group">
                  <label>Address</label>
                  <input type="text" name="addressB" id="addressB" class="form-control" placeholder="Enter Address">
                </div>
                <div class="col-sm-3 form-group">
                  <label>City</label>
                  <input type="text" name="city" id="city" class="form-control" placeholder="Enter City">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-3 form-group">
                  <label>State</label>
                  <input type="text" name="state" id="state" class="form-control" placeholder="Enter State">
                </div>
                <div class="col-sm-3 form-group">
                  <label>Zip Code</label>
                 <input type="text" name="zip" id="zip" class="form-control" placeholder="Enter Zip Code">
                </div>
                <div class="col-sm-3 form-group">
                  <label>Phone</label>
                  <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone">
                </div>
                <div class="col-sm-3 form-group">
                  <label>Fax</label>
                  <input type="text" name="fax" id="fax" class="form-control" placeholder="Enter Fax">
                </div>
              </div>
            </div>
            <div class="col-sm-12 divPadding" style="margin-right: 2px;">
                <div class="hline"><span>SHIPPING ADDRESS (<i class="fa fa-files-o copy" onclick="detail()"> Copy billing address</i>)</span></div>
                <div class="col-sm-12">
                <div class="col-sm-3 form-group">
                  <label>Attention</label>
                  <input type="text" name="attention1" id="attention1" class="form-control" placeholder="Enter Attention">
                </div>
                <div class="col-sm-3 form-group">
                  <label>Country</label>
                  <select class="form-control" name="country1" id="country1">
                    <option value="">Choose</option>
                    <option value="1">India</option>
                    <option value="2">USA</option>
                    <option value="3">Chaina</option>
                    <option value="4">Pakistan</option>
                  </select>
                </div>
                <div class="col-sm-3 form-group">
                  <label>Address</label>
                  <input type="text" name="address1" id="address1" class="form-control" placeholder="Enter Address">
                </div>
                <div class="col-sm-3 form-group">
                  <label>City</label>
                  <input type="text" name="city1" id="city1" class="form-control" placeholder="Enter City">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-3 form-group">
                  <label>State</label>
                  <input type="text" name="state1" id="state1" class="form-control" placeholder="Enter State">
                </div>
                <div class="col-sm-3 form-group">
                  <label>Zip Code</label>
                 <input type="text" name="zip1" id="zip1" class="form-control" placeholder="Enter Zip Code">
                </div>
                <div class="col-sm-3 form-group">
                  <label>Phone</label>
                  <input type="text" name="phone1" id="phone1" class="form-control" placeholder="Enter Phone">
                </div>
                <div class="col-sm-3 form-group">
                  <label>Fax</label>
                  <input type="text" name="fax1" id="fax1" class="form-control" placeholder="Enter Fax">
                </div>
              </div>
            </div>
              </div>
              <div class="tab-pane" id="contact">
                <div class="col-sm-12"><br>
                 <table class="table table-bordered table-condensed">
                    <thead>
                      <tr class="active">
                      <td>Saluation</td>
                      <td>First Name</td>
                      <td>Last Name</td>
                      <td>Email Address</td>
                      <td>Work Phone</td>
                      <td>Mobile</td>
                      <td>Scype&nbsp;Name/Number</td>
                      <td>Designation</td>
                      <td>Department</td>
                    </tr>
                    </thead>
                    <tbody id="tbody">
                      <tr id="tr1">
                        <td class="tb"><select class="form-control tbl" name="" id=""><option value="1">Mr.</option><option value="2">Mrs.</option><option value="3">Ms.</option><option value="4">Miss.</option><option value="5">Dr.</option></select></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                      </tr>
                    </tbody>
                  </table>
                     <i class="fa fa-plus" style="color: #268ddd;cursor: pointer;" onclick="addmore(1)"> Add Contact Person</i>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="custom">
                Custom
              </div>
              <div class="tab-pane" id="reporting">
                Reporting
              </div>
              <div class="tab-pane" id="remark">
                <div class="col-sm-12"><br>
                  <div class="col-sm-8 form-group">
                    <label>Remarks</label>
                    <textarea name="" id="" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
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
<!-- <script type="text/javascript">
  $(document).ready(function(){
    alert();
  setTimeout(function() {
  $('.alert_box').fadeOut('slow');
  }, 2000);

  function detail() {
    var attention = $('#attention').val();
    alert(attention);
  }
</script> -->
