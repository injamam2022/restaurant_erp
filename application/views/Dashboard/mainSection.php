<section class="content">
    <header class="content__title">
        <h1>Dashboard</h1>
    </header>

    <?php
    // echo "<pre>";
    // print_r($roleDashboardInfo); 
    ?>
    <div class="row quick-stats">
        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item">
                <div class="quick-stats__info">
                    <h2><?php echo ($roleDashboardInfo['total_orders'] != null ? $roleDashboardInfo['total_orders']: '0') ?></h2>
                    <small>Total Orders Recieved</small>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item">
                <div class="quick-stats__info">
                    <h2>Rs. <?php echo ($roleDashboardInfo['income'] != null ? $roleDashboardInfo['income']: '0.00'); ?></h2>
                    <small>Total Sale</small>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item">
                <div class="quick-stats__info">
                    <h2>Rs. <?php echo ($roleDashboardInfo['expense'] != null ? $roleDashboardInfo['expense']: '0.00'); ?></h2>
                    <small>Total Expense</small>
                </div>

                
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item">
                <div class="quick-stats__info">
                <?php

                   $style = ($roleDashboardInfo['total_profit'] < 0) ? "color:red; font-weight:bold;" : "color:#28e328; font-weight:bold;";

               ?>
                    <h2 style="<?php echo $style ?>">Rs. <?php echo number_format($roleDashboardInfo['total_profit'],2) ?></h2>
                    <small>Total Profit/Loss</small>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Food Sale</h4>
                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                </div>
            </div>
        </div> -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Monthly Sale </h4>
                    <canvas id="myChart1" style="width:100%;max-width:600px"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Monthly Expense</h4>
                    <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Monthly Growth</h4>
                    <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
                </div>
            </div>
        </div>
     
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Order Rate</h4>
                    <canvas id="myChart4"></canvas>
                </div>
            </div>
        </div>
    </div>
    


                

                

        