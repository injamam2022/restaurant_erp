<!DOCTYPE html>
<html lang="en">
    

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bower_components/select2/dist/css/select2.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/');?>vendors/bower_components/flatpickr/dist/flatpickr.min.css">
        <!-- App styles -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.min.css">
    </head>
    <style>
        .table-wrapper{
            width: 100%;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 30px;
            flex-wrap: wrap;
        }
        .table-wrapper .table{
            width: 200px;
            height: 150px;
            position: relative;
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.3);
            padding: 15px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
            transition: 0.3s;
        }
        .table-wrapper .table:hover{
            background-color: rgba(255, 165, 0, 0.3);
            cursor: pointer;
        }
        .table-wrapper .table.deactive{
            opacity: 1;
            background-color: #365E32;
        }
        .table-wrapper .table.deactive:hover{
            opacity: 1;
            background-color: #059212;
            cursor: pointer;
        }
        .table-wrapper .table img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .table-wrapper .table p{
            position: absolute;
            z-index: 2;
            margin-bottom: 0;
            font-size: 22px;
            color: #fff;
            font-weight: 700;
        }

        .collapse .col-md-6,  .collapse .col-md-3{
            margin-top:15px;
        }

        .plus-button button{
            margin-top:30px;
        }
        .isDisabled {
            color: currentColor;
            cursor: not-allowed;
            opacity: 0.5;
            text-decoration: none;
            }
            .modal-body span {
                color: white;
            }
            .modal-body label {
                color: #fff;
            }
                            

      </style>          