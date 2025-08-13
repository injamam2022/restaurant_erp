

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="<?php echo base_url();?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>
        <script src="<?= base_url('assets/');?>vendors/bower_components/flatpickr/dist/flatpickr.min.js"></script>
        <!-- Vendors: Data tables -->
        <script src="<?php echo base_url();?>assets/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bower_components/jszip/dist/jszip.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

        <!-- App functions and actions -->
        <script src="<?php echo base_url();?>assets/js/app.min.js"></script>

        <script src="<?php echo base_url();?>assets/custom/js/Expense/expense.js"></script>
        <script>
        $('.select2all').each(function () {
            $(this).select2({
                dropdownParent: $(this).parent(),
            });
        });
        </script>
    </body>

</html>