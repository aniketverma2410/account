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
        <h1>Update Profile</h1>
        <ol class="breadcrumb" style="padding: 0px 5px;">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin Profile</li>
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
              <h3 class="box-title">Admin Profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('Admin/updateProfile');?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label><span style="color: red">*</span>
                  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?= $this->session->userdata['logged_in']['name'];?>">
                  <input type="hidden" class="form-control" id="id" placeholder="Enter Name" name="id" value="<?= $this->session->userdata['logged_in']['id'];?>">
                  <span id="error_name"></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label><span style="color: red">*</span>
                  <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="<?= $this->session->userdata['logged_in']['username'];?>">
                  <span id="error_username"></span>
                </div>
                 <div class="form-group">
                <label for="exampleInputEmail1">User Profile</label><span style="color: red">*</span>
                <input type="file" class="form-control" id="thumbnail" name="img" onchange="ImageChange(this)">
                <input type="hidden" class="form-control" name="StoredImg" value="<?php echo $this->session->userdata['logged_in']['image'];?>">
                <div id="displayImagesShow" style="margin-top: 5px;">
                  <?php if(!empty($this->session->userdata['logged_in']['image'])) {
                    $img = $this->session->userdata['logged_in']['image'];
                  } else {
                    $img = 'u3.png';
                  }
                  ?>
                   <img src="<?php echo base_url('Assets/images/');?><?php echo $img;?>" style="height: 150px;width:150px">
                </div>
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
  function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    setTimeout(function() {
    $('.alert_box').fadeOut('slow');
    }, 2000);

    $('#submit').click(function(){
      var name = $('#name').val();
      if(name == '') {
      $('#error_name').html('This Field is Required.').css('color','red');
      return false;
        } else {
        $('#error_name').html('').hide();
      }

      var username = $('#username').val();
      if(username == '') {
        $('#error_username').html('This Field is Required.').css('color','red');
      return false;
      } else {
       var checkEmail = $('#error_username').text();
        if (checkEmail.length > 5) {
          return false;
        }
      }
});

      $('#username').blur(function(){
      var username = $('#username').val();
        if(username == '') {
         $('#error_username').html('This Field is Required.').css('color','red');
          return false;
          } else if(!validateEmail(username)) {
          $('#error_username').html('Please Enter valid Username.').css('color','red');;
          return false;
          } else {
          $('#error_username').html('').hide();
          return false;
      }
  });

});
</script>
<script type="text/javascript">
  function ImageChange(input){
  $('#loaderShow').css('display','block');
  if (input.files && input.files[0]) {
  // if value is images
  var  file = input.files[0].name;
  var  ext = file.split(".");  
  ext = ext[ext.length-1].toLowerCase();      
  var arrayExtensions = ["jpg" , "jpeg", "png", "bmp", "gif"];
  var exactSize = getFileSize(input.files[0].size);
  var lastextType = exactSize.substr(exactSize.length - 2);
  var res = exactSize.split(".");
  var kbcheck = '';
  if(jQuery.isEmptyObject(res[1]) != true){
  kbcheck = res[1].split("&");
  }
  if(lastextType == 'KB'){
  var res = res[0];
  }else if(lastextType == 'MB'){
  var res = res[0]*1024;
  var res = +(res)+ + +(kbcheck[0]);
  }else {
  var res = (res[0]*1024)*1024;
  }
  if(res > 500){
  alert('!Oops file size to larger. can\'t be upload more than 500 KB');
  deletefile();
  }
  if($.inArray(ext, arrayExtensions) == -1) {
  console.log(res);
  }else{ 
  var reader = new FileReader();
  var image = '';
  reader.onload = function (e) {
  $('#blah').attr('src', e.target.result);
   var exactSize = getFileSize(input.files[0].size);
   $('#displayImagesShow').html('<div style="border: 2px solid #dedadad9;padding: 5px;width: 160px;"><img id="blah" src="'+e.target.result+'" alt="your image" width="100%" height="100" /><div id="myProgress"><div id="myBar"></div></div><p id="deleteFile"><span onclick="deletefile()"><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></span>&nbsp;&nbsp;<span id="message" style="color:green;"></span><span id="videoSize" style="float:right; color:black;">'+exactSize+'</span></p></div>');
  $('input[name="sessionFileSize"]').val(exactSize);
  move();
  $('#displayImagesShow').css('display','block');
  $('#showFile').css('display','block');
  $('#displayError3').css('display','none');
  // console.log(e.target.result)
  };
  reader.readAsDataURL(input.files[0]);
  }
  }
  }
  function getFileSize(videoSize){
  var fSExt = new Array('Bytes', 'KB', 'MB', 'GB'),
  i=0;
  while(videoSize > 900){
  videoSize /=1024;i++;
  }
  return exactSize = (Math.round(videoSize*100)/100)+'&nbsp;'+fSExt[i];
  }
  function deletefile(){
  // var sessionImage = "<?php //$this->session->unset_userdata('thumbnail_file'); ?>";  
  $("#thumbnail_file").val(null);
  $("#thumbnail").val(null);
  $("#displayImagesShow").hide();
  } 

  function move() {
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
  if (width >= 100) {
  clearInterval(id);
  $('#message').text('Success');
  } else {
  width++; 
  elem.style.width = width + '%'; 
  }
  }
  }
</script>
