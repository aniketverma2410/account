<title><?php echo $title;?> | <?php echo PROJECT_NAME;?></title>
<link href="<?php echo base_url('Assets/css/bootstrap.min.css');?>" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
  body {
  font-family: 'Montserrat', sans-serif;
  transition: 3s;
  background-image: url('<?php echo base_url('Assets/images/background8.jpeg');?>');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  }

  .login-container {
  margin-top: 10%;
  border: 1px solid #CCD1D1;
  border-radius: 5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  max-width: 50%;
  }

  .ads {
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  color: #fff;
  padding: 15px;
  text-align: center;
  }

  .ads h1 {
  margin-top: 20%;
  }

  #fl {
  font-weight: 600;
  }

  #sl {
  font-weight: 100 !important;
  }

  .profile-img {
  text-align: center;
  }

  .profile-img img {
  border-radius: 50%;
  /* animation: mymove 2s infinite; */
  }

  @keyframes mymove {
  from {border: 1px solid #F2F3F4;}
  to {border: 8px solid #F2F3F4;}
  }

  .login-form {
  padding: 15px;
  }

  .login-form h3 {
  text-align: center;
  padding-top: 15px;
  padding-bottom: 15px;
  }

  .form-control {
  font-size: 14px;
  }

  .forget-password a {
  font-weight: 500;
  text-decoration: none;
  font-size: 14px;
  }
  #message
  {
  position: absolute;
  width: 700px;
  margin: 24%;
  margin-top: -5%;
  }
  .bg-green, .callout.callout-success, .alert-success, .label-success, .modal-success .modal-body {
  background-color: green !important;
  color: white;
  }
  .bg-red, .callout.callout-danger, .alert-danger, .alert-error, .label-danger, .modal-danger .modal-body {
  background-color: #dd4b39 !important;
  color: white;
  }
</style>
<body>
  <div class="col-sm-12" id="message">
   <?php echo $this->session->userdata('message');?>
  </div>
    <div class="container login-container">
      <div class="row">
        <div class="col-md-6 ads" style="background-color: #f39c12;height: 300px">
          <h1><span id="fl">Account</span><br><span id="sl"></span></h1>
        </div>
        <div class="col-md-6 login-form">
          <h3 style="color: white">Admin Login</h3>
          <form method="post" action="<?php echo base_url('admin/login');?>">
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Username" id="username">
              <span id="error_username"></span>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              <span id="error_password"></span>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block" id="submit">Sign In</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<script type="text/javascript" src="<?php echo base_url('Assets/js/jquery-3.3.1.js');?>"></script>
<script type="text/javascript">
  $(document).ready(function(){
  setTimeout(function() {
  $('.alert_box').fadeOut('slow');
  }, 2000);
// form Validation
    $('#submit').click(function(){
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

      var password = $('#password').val();
      if(password == '') {
        $('#error_password').html('This Field is Required.').css('color','red');
        return false;
      } else {
         $('#error_password').html('').css('color','red').hide();
      }
    });
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

// email checker
   function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
  }
</script>