<script src="<?= base_url('Assets/js/bootstrap-datepicker.min.js');?>"></script>
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="<?= base_url('Admin/dashboard');?>">Account</a></strong> All rights reserved.
  </footer>
<script type="text/javascript">
    $(document).ready(function(){
    setTimeout(function() {
    $('.alert_box').fadeOut('fast');
    }, 2000);
    });

    function detail() {
    var attention = $('#attention').val();
    var country = $('#country').val();
    var address = $('#addressB').val();
    var city = $('#city').val();
    var state = $('#state').val();
    var zip = $('#zip').val();
    var phone = $('#phone').val();
    var fax = $('#fax').val();
    $('#attention1').val(attention);
    $('#country1').val(country);
    $('#address1').val(address);
    $('#city1').val(city);
    $('#state1').val(state);
    $('#zip1').val(zip);
    $('#phone1').val(phone);
    $('#fax1').val(fax);
  }
</script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/jquery-3.3.1.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/dataTables.bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/dataTables.bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/dataTables.buttons.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/dataTables.bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/buttons.bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/jszip.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/pdfmake.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/vfs_fonts.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/buttons.html5.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/buttons.print.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/buttons.colVis.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/adminlte.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url(); ?>Assets/moment/min/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/bootstrap-select.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/select2.full.min.js');?>"></script>
 