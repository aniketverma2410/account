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
        <h1>Add Expance</h1>
        <ol class="breadcrumb" style="padding: 0px 5px;">
          <li><a href="<?php echo base_url('Admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="<?php echo base_url('Expence/viewExpence');?>">Expences</a></li>
        <li class="active">Add Expence</li>
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
              <h3 class="box-title">Add Expence Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#" method="post" enctype="multipart/form-data">
              <div class="box-body">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#Record" data-toggle="tab">Record Expense</a></li>
              <li><a href="#Mileage" data-toggle="tab">Record Mileage</a></li>
              <li><a href="#Bulk" data-toggle="tab">Bulk Add Expenses</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="Record">
                <div class="col-sm-12"><br>
                <div class="col-sm-3 form-group">
                      <label for="exampleInputEmail1">Date</label><span style="color: red">*</span>
                      <input type="" name="" id="datepicker11" class="form-control" placeholder="dd/mm/yyyy">
                </div>
                <div class="col-sm-3 form-group">
                      <label for="exampleInputEmail1">Expense Account</label><span style="color: red">*</span>
                      <select class="form-control">
                        <option>Select Account</option>
                      </select>
                </div>
                <div class="col-sm-3 form-group">
                      <label for="exampleInputEmail1">Amount</label><span style="color: red">*</span>
                     <input type="" name="text" class="form-control">
                </div>
                <div class="col-sm-3 form-group">
                      <label for="exampleInputEmail1">Paid Through</label><span style="color: red">*</span><br>
                      <select class="form-control">
                        <option>Select Amount</option>
                      </select>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-3 form-group">
                <label for="exampleInputEmail1">Vendor</label><span style="color: red">*</span>
                 <div class="input-group">
                    <select class="form-control">
                      <option></option>
                    </select>
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-danger" style="height: 34px"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span>
                </div>
                </div>
                <div class="col-sm-3 form-group">
                <label for="exampleInputEmail1">Invoice#</label><span style="color: red">*</span>
                 <input type="" name="" class="form-control">
                </div>
                <div class="col-sm-3 form-group">
                <label for="exampleInputEmail1">Notes</label><span style="color: red">*</span>
                 <input type="" name="" class="form-control" placeholder="Max 500 characters">
                </div>
                <div class="col-sm-3 form-group">
                <label for="exampleInputEmail1">Customer Name</label><span style="color: red">*</span>
               <div class="input-group">
                    <select class="form-control">
                      <option></option>
                    </select>
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-danger" style="height: 34px"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span>
                </div>
                </div>
              </div>
            </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="Mileage">Record Mileage
              <!-- <div class="col-sm-12 divPadding" style="margin-right: 2px;">
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
            </div> -->
              </div>
              <div class="tab-pane" id="Bulk">
                <div class="col-sm-12"><br>
                 <table class="table table-bordered table-condensed">
                    <thead>
                      <tr class="active">
                      <td>DATE</td>
                      <td>EXPENSE&nbsp;&nbsp;ACCOUNT</td>
                      <td>AMOUNT</td>
                      <td>PAID THROUGH</td>
                      <td>VENDOR</td>
                      <td>CUSTOMER&nbsp;&nbsp;NAME</td>
                      <td>PROJECTS</td>
                      <td>BILLABLE</td>
                    </tr>
                    </thead>
                    <tbody id="tbody">
                      <tr id="tr1">
                        <td class="tb"><input type="text" name="" id="datepicker1" class="form-control tbl" placeholder="dd/mm/yyyy"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl" disabled=""><option></option></select></td>
                        <td class="tb"><input type="checkbox" name="" id="" class="tbl"></td>
                      </tr>
                      <tr id="tr1">
                        <td class="tb"><input type="text" name="" id="datepicker2" class="form-control tbl" placeholder="dd/mm/yyyy"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl" disabled=""><option></option></select></td>
                        <td class="tb"><input type="checkbox" name="" id="" class="tbl"></td>
                      </tr>
                      <tr id="tr1">
                        <td class="tb"><input type="text" name="" id="datepicker3" class="form-control tbl" placeholder="dd/mm/yyyy"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl" disabled=""><option></option></select></td>
                        <td class="tb"><input type="checkbox" name="" id="" class="tbl"></td>
                      </tr>
                      <tr id="tr1">
                        <td class="tb"><input type="text" name="" id="datepicker4" class="form-control tbl" placeholder="dd/mm/yyyy"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl" disabled=""><option></option></select></td>
                        <td class="tb"><input type="checkbox" name="" id="" class="tbl"></td>
                      </tr>
                      <tr id="tr1">
                        <td class="tb"><input type="text" name="" id="datepicker5" class="form-control tbl" placeholder="dd/mm/yyyy"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl" disabled=""><option></option></select></td>
                        <td class="tb"><input type="checkbox" name="" id="" class="tbl"></td>
                      </tr>
                      <tr id="tr1">
                        <td class="tb"><input type="text" name="" id="datepicker6" class="form-control tbl" placeholder="dd/mm/yyyy"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl" disabled=""><option></option></select></td>
                        <td class="tb"><input type="checkbox" name="" id="" class="tbl"></td>
                      </tr>
                      <tr id="tr1">
                        <td class="tb"><input type="text" name="" id="datepicker7" class="form-control tbl" placeholder="dd/mm/yyyy"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl" disabled=""><option></option></select></td>
                        <td class="tb"><input type="checkbox" name="" id="" class="tbl"></td>
                      </tr>
                      <tr id="tr1">
                        <td class="tb"><input type="text" name="" id="datepicker8" class="form-control tbl" placeholder="dd/mm/yyyy"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl" disabled=""><option></option></select></td>
                        <td class="tb"><input type="checkbox" name="" id="" class="tbl"></td>
                      </tr>
                      <tr id="tr1">
                        <td class="tb"><input type="text" name="" id="datepicker9" class="form-control tbl" placeholder="dd/mm/yyyy"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl" disabled=""><option></option></select></td>
                        <td class="tb"><input type="checkbox" name="" id="" class="tbl"></td>
                      </tr>
                      <tr id="tr1">
                        <td class="tb"><input type="text" name="" id="datepicker10" class="form-control tbl" placeholder="dd/mm/yyyy"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><input type="text" name="" id="" class="form-control tbl"></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option>Select Ammount</option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl"><option></option></select></td>
                        <td class="tb"><select name="" id="" class="form-control tbl" disabled=""><option></option></select></td>
                        <td class="tb"><input type="checkbox" name="" id="" class="tbl"></td>
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
<script src="<?= base_url('Assets/js/bootstrap-datepicker.min.js');?>"></script>
<script type="text/javascript">
    //Date picker
    $('#datepicker1').datepicker({
      autoclose: true
    })
    $('#datepicker1').datepicker({
      autoclose: true
    })
    $('#datepicker2').datepicker({
      autoclose: true
    })
    $('#datepicker3').datepicker({
      autoclose: true
    })
    $('#datepicker4').datepicker({
      autoclose: true
    })
    $('#datepicker5').datepicker({
      autoclose: true
    })
    $('#datepicker6').datepicker({
      autoclose: true
    })
    $('#datepicker7').datepicker({
      autoclose: true
    })
    $('#datepicker8').datepicker({
      autoclose: true
    })
    $('#datepicker9').datepicker({
      autoclose: true
    })
    $('#datepicker10').datepicker({
      autoclose: true
    })
    $('#datepicker11').datepicker({
      autoclose: true
    })
</script>
