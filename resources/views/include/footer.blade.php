<!-- BEGIN VENDOR JS -->



<?php
switch($ezapp_set['js']) {
    case 'dashboard':
    case 'forms':
    case 'tables':
?>
<!-- dashboard, forms, tables {{$ezapp_set['js']}} -->
<script src="{{$ezapp_set['base_url']}}/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="{{$ezapp_set['base_url']}}/assets/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="{{$ezapp_set['base_url']}}/assets/plugins/classie/classie.js"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<?php
    break;
}
?>

<?php
switch($ezapp_set['js']) {
    case 'forms':
?>
<!-- forms -->
<script src="{{$ezapp_set['base_url']}}/assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script type="text/javascript" src="{{$ezapp_set['base_url']}}/assets/plugins/jquery-autonumeric/autoNumeric.js"></script>
<script type="text/javascript" src="{{$ezapp_set['base_url']}}/assets/plugins/dropzone/dropzone.min.js"></script>
<script type="text/javascript" src="{{$ezapp_set['base_url']}}/assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="{{$ezapp_set['base_url']}}/assets/plugins/jquery-inputmask/jquery.inputmask.min.js"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<?php
    break;
}
?>

<?php
switch($ezapp_set['js']) {
    case 'dashboard':
    case 'forms':
?>
<!-- dashboard, forms -->
<script src="{{$ezapp_set['base_url']}}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<?php
    break;
}
?>

<?php
switch($ezapp_set['js']) {
    case 'forms':
?>
<!-- forms -->
<script src="{{$ezapp_set['base_url']}}/assets/plugins/summernote/js/summernote.min.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/moment/moment.min.js"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/bootstrap-typehead/typeahead.bundle.min.js"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/bootstrap-typehead/typeahead.jquery.min.js"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/handlebars/handlebars-v4.0.5.js"></script>
<?php
break;
}
?>

<?php
switch($ezapp_set['js']) {
    case 'dashboard':
?>
<!-- dashboard -->
<script src="{{$ezapp_set['base_url']}}/assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/mapplic/js/hammer.js"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/mapplic/js/jquery.mousewheel.js"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/mapplic/js/mapplic.js"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/rickshaw/rickshaw.min.js"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/skycons/skycons.js" type="text/javascript"></script>
<?php
break;
}
?>

<?php
switch($ezapp_set['js']) {
    case 'tables':
?>
<!-- tables -->
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="{{$ezapp_set['base_url']}}/assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="{{$ezapp_set['base_url']}}/assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<?php
break;
}
?>

<!-- END VENDOR JS -->
<!-- BEGIN CORE TEMPLATE JS -->

<?php
switch($ezapp_set['js']) {
    case 'dashboard':
    case 'forms':
    case 'tables':
?>
<!-- dashboard, forms, tables -->
<script src="{{$ezapp_set['base_url']}}/pages/js/pages.min.js"></script>
<?php
break;
}
?>
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->

<?php
switch($ezapp_set['js']) {
    case 'dashboard':
?>
<!-- dashbaord -->
<script src="{{$ezapp_set['base_url']}}/assets/js/dashboard.js" type="text/javascript"></script>
<?php
break;
}
?>

<?php
switch($ezapp_set['js']) {
    case 'forms':
?>
<!-- forms -->
<script src="{{$ezapp_set['base_url']}}/assets/js/form_elements.js" type="text/javascript"></script>
<?php
break;
}
?>

<?php
switch($ezapp_set['js']) {
    case 'tables':
?>
<!-- tables -->
<script src="{{$ezapp_set['base_url']}}/assets/js/datatables.js" type="text/javascript"></script>
<?php
break;
}
?>

<?php
switch($ezapp_set['js']) {
    case 'dashboard':
    case 'forms':
    case 'tables':
?>
<script src="{{$ezapp_set['base_url']}}/assets/js/scripts.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS -->
<?php
break;
}
?>