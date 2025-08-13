<!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

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
        <script src="<?php echo base_url();?>assets/custom/js/Table/table.js"></script>
        <script>
        $('.select2all').each(function () {
            $(this).select2({
                dropdownParent: $(this).parent(),
            });
        });
        $(document).ready(function() {
            let selected = [];
            const updateUI = () => {
            const selects = document.querySelectorAll("[data-select]");
            selects.forEach(s => {
                const options = s.querySelectorAll("option");
            options.forEach(o => {
                o.disabled = selected.includes(o.value) && !(s.value === o.value);
            })
            });
        }

            const selects = $("[data-select]");
        selects.select2();
        selects.on('select2:select', function(e) {
            const data = e.params.data;
            selected.push(data.id);
            updateUI();
            });
        
        updateUI();
        });
        </script>
    </body>
</html>