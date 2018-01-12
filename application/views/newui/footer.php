
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/build/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/build/js/pages/forms/form-wizard.js"></script>
    <!-- Input Mask Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery-inputmask/jquery.inputmask.bundle.js"></script>
    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>assets/build/js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#ijazah').inputmask('** - ** - ****** - ** - ****', { placeholder: '__ - __ - ______ - __ -____' });
            $('#nisn').inputmask('** - ** - ****', { placeholder: '__ - __ -____' });
            $('#nik').inputmask('** - ** - ****** - ** - ****', { placeholder: '__ - __ - ______ - __ -____' });
            $('#skhun').inputmask('** - ** - ****** - ** - ****', { placeholder: '__ - __ - ______ - __ -____' });
        });
        $(function () {
            $('.js-basic-example').DataTable();

            //Exportable table
            $('.js-exportable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf', 'print'
                ]
            });
            $('li').find("a[href$='#finish']").attr('onclick', "$('#wizard_with_validation').submit()");
        });
    </script>
</body>
</html>