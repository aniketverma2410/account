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
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Change Password</h1>
        <ol class="breadcrumb" style="padding: 0px 5px;">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Change Password</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php echo $this->session->userdata('message');?>
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Admin Change Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('Admin/updatePassword');?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group" hidden="">
                  <label for="exampleInputEmail1">Id</label>
                  <input type="text" class="form-control" id="id" placeholder="Enter Id" name="id" value="<?= $this->session->userdata['logged_in']['id'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Old Password</label><span style="color: red">*</span>
                  <input type="password" class="form-control" id="old" placeholder="Enter Old Password" name="old" value="">
                  <span id="error_old"></span>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Password</label><span style="color: red">*</span>
                  <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password"  value="">
                  <span id="error_new"></span>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Confirm Password</label><span style="color: red">*</span>
                  <input type="password" class="form-control" id="confirm" placeholder="Enter Confirm Password" name="confirm" value="">
                  <span id="error_confirm"></span>
                </div>
              </div>
              <div class="row">
              <div class="col-sm-12">
              <div class="col-sm-4">
                <div class="form-group">
                  <input type="submit" class="btn btn-primary" id="submit" value="Update">
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
<script type="text/javascript">
  $(document).ready(function(){
  setTimeout(function() {
  $('.alert_box').fadeOut('slow');
  }, 2000);
  });
</script>
<script type="text/javascript">
  $('#old').blur(function(){
    var old = $('#old').val();
    var id = $('#id').val();
    var url = '<?= base_url('Admin/checkOldPassword');?>';
        if (old != '') {
            if(old.length < 5) {
                $('#error_old').css('color', 'red').text('Minimun length must be 5 digits').show();
                return false;
            } else {
                $.ajax({
                    url: url,
                    type: 'post',
                    dataType: 'JSON',
                    data: {'old': old, 'id': id},
                    success: function(res) {
                        if (res != 0) {
                            $('#error_old').css('color', 'red').html(res).show();
                            return false;
                        } else {
                            $('#error_old').css('color', 'red').html('').hide();
                        }
                    }
                });
            }
        }
  });

  $(document).ready(function(){
    $('#submit').click(function(){
    var old = $('#old').val();
    if(old == '') {
   $('#error_old').css('color', 'red').html('This Field is required.');
   return false;
  } else {
    var checkCode = $('#error_old').text();
                if (checkCode.length > 5) {
                    return false;
                }
  }
  var nPass = $('#password').val();
  if(nPass == '') {
    $('#error_new').css('color', 'red').html('This Field is required.').show();
    return false;
  } else if(nPass.length < 5) {
    $('#error_new').css('color', 'red').html('Minimun length must be 5 letters.').show();
    return false;
  } else {
    $('#error_new').css('color', 'red').html('').hide();
  }

  var confirm = $('#confirm').val();
  if(confirm == '') {
  $('#error_confirm').css('color', 'red').html('This Field is required.').show();
  return false;
    } else if(nPass != confirm) {
     $('#error_confirm').css('color', 'red').html('New And Confirm Password Is not Matching.').show();
     return false;
    } else {
        $('#error_confirm').css('color', 'red').html('').hide();
    }
    });
  });
</script>
