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

        <!-- Vendors: Data tables -->
        <script src="<?php echo base_url();?>assets/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bower_components/jszip/dist/jszip.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>

        <!-- App functions and actions -->
        <script src="<?php echo base_url();?>assets/js/app.min.js"></script>
        <?php
    
$month_array=array();
$amount_array=array();
    for($m=0;$m<count($roleDashboardInfo['response_monthly_sale']);$m++)
    {        
        $month_array[] = "'". $roleDashboardInfo['response_monthly_sale'][$m]['month']. "'";
        $amount_array[] = $roleDashboardInfo['response_monthly_sale'][$m]['amount'];
    }

$month_array_expense=array();
$amount_array_expense=array();
    for($m=0;$m<count($roleDashboardInfo['response_monthly_expense']);$m++)
    {        
        $month_array_expense[] = "'". $roleDashboardInfo['response_monthly_expense'][$m]['month']. "'";
        $amount_array_expense[] = $roleDashboardInfo['response_monthly_expense'][$m]['amount'];
    }

    
    $month_array_monthly_profit=array();
    $amount_array_monthly_profit=array();
    for($m=0;$m<count($roleDashboardInfo['monthly_profit']);$m++)
    {        
        $month_array_monthly_profit[] = "'". $roleDashboardInfo['monthly_profit'][$m]['month']. "'";
        $amount_array_monthly_profit[] = $roleDashboardInfo['monthly_profit'][$m]['profit'];
    }

    ?>


        <script>
            var xValues = [<?php echo  implode(',', $month_array); ?>] 
            var yValues = [<?php echo  implode(',', $amount_array); ?>] 
            var barColors = ["red", "green","blue","orange","brown",'yellow',"white", "grey","sky","pink","black",'cyan'];

            new Chart("myChart1", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                legend: {display: false},
                title: {
                display: true,
                text: "Month Wise Sales Report <?php echo date('Y').'-'.date('Y')+1;?>"
                }
            }
            });
            </script>


            <script>
            var xValues = [<?php echo  implode(',', $month_array_expense); ?>] 
            var yValues = [<?php echo  implode(',', $amount_array_expense); ?>] 
            var barColors = ["red", "green","blue","orange","brown",'yellow',"white", "grey","sky","pink","black",'cyan'];

            new Chart("myChart2", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                legend: {display: false},
                title: {
                display: true,
                text: "Month Wise Sales Report <?php echo date('Y').'-'.date('Y')+1;?>"
                }
            }
            });
            </script>



            <script>
            var xValues = [<?php echo  implode(',', $month_array_monthly_profit); ?>] 
            var yValues = [<?php echo  implode(',', $amount_array_monthly_profit); ?>] 

            new Chart("myChart3", {
            type: "line",
            data: {
                labels: xValues.reverse(),
                datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "#fff",
                data: yValues.reverse()
                }]
            },
            options: {
                legend: {display: false},
                scales: {
                yAxes: [{ticks: {min: 0, max:3000000}}],
                }
            }
            });
            </script>


            <script>
            var xValues = ["Food", "Drinks"];
            var yValues = [<?php
                            echo $roleDashboardInfo['response_current_amount_food_drink'][0]['food_amount'];
                            ?>, <?php
                            echo $roleDashboardInfo['response_current_amount_food_drink'][0]['drink_amount'];
                            ?>
                          ];
            var barColors = [
            "#b91d47",
            "#00aba9",
            ];

            new Chart("myChart4", {
            type: "doughnut",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                title: {
                display: true,
                text: "Month Wise Sales Report For Food and Drink <?php echo date('Y').'-'.date('Y')+1;?>"
                }
            }
            });
            </script>
    </body>
</html>