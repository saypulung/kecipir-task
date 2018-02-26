</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Admin Panel - Version</b> 2.9.18
    </div>
    <strong>Copyright &copy; 2016-<?php echo date('Y')?> <a href="http://intelligence.co.id">Intelligence</a>.</strong>
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>public/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo base_url()?>public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/morris.js/morris.min.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url()?>public/admin/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url()?>public/admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url()?>public/admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url()?>public/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url()?>public/admin/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>public/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url()?>public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url()?>public/admin/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url()?>public/admin/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url()?>public/admin/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url()?>public/admin/dist/js/demo.js"></script>
<script type="text/javascript">
  $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
</script>

<?php
if(isset($generated_js)){
  echo "<script type=''>$generated_js</script>";
}?>
</body>
</html>
