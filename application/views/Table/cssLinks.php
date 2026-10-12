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
        .table-page__hint{
            margin: 0 0 8px;
            color: rgba(255,255,255,0.65);
            font-size: 14px;
        }
        .table-wrapper{
            width: 100%;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(168px, 1fr));
            gap: 16px;
            align-items: stretch;
        }
        .table-wrapper .table{
            width: 100%;
            height: 140px;
            position: relative;
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.3);
            padding: 12px;
            border-radius: 14px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
            transition: 0.3s;
            margin-bottom: 0;
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

        .plus-button button{
            margin-top:8px;
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
            .table-modal-body {
                position: relative;
                min-height: 220px;
            }
            .table-modal-content.is-loading {
                opacity: 0.4;
                pointer-events: none;
            }
            .table-modal-loader {
                display: none;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.72);
                z-index: 20;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                border-radius: 4px;
            }
            .table-modal-loader.is-visible {
                display: flex !important;
            }
            .table-modal-loader p {
                color: #fff;
                margin: 12px 0 0;
                font-weight: 600;
            }
            .table-modal-spinner {
                width: 42px;
                height: 42px;
                border: 4px solid rgba(255,255,255,0.25);
                border-top-color: #fff;
                border-radius: 50%;
                animation: tableSpin 0.8s linear infinite;
            }
            @keyframes tableSpin {
                to { transform: rotate(360deg); }
            }
            .collapse {
                position: relative;
            }
            .section-loader {
                display: none;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                min-height: 120px;
                background: rgba(0, 0, 0, 0.55);
                z-index: 5;
                align-items: center;
                justify-content: center;
            }
            .section-loader.is-visible {
                display: flex;
            }
            .table-wrapper .table.loading {
                pointer-events: none;
            }
            .table-wrapper .table.loading::after {
                content: "";
                position: absolute;
                width: 28px;
                height: 28px;
                border: 3px solid rgba(255,255,255,0.3);
                border-top-color: #fff;
                border-radius: 50%;
                animation: tableSpin 0.8s linear infinite;
                z-index: 3;
            }

            #table-modal.modal {
                text-align: left;
                padding: 12px 0 !important;
            }
            #table-modal.modal:before {
                display: none !important;
            }
            #table-modal .modal-dialog {
                display: flex;
                width: calc(100% - 24px);
                max-width: 1140px;
                margin: 0 auto;
                max-height: calc(100vh - 24px);
                vertical-align: top;
            }
            #table-modal .modal-content {
                width: 100%;
                max-height: calc(100vh - 24px);
                border-radius: 16px;
                overflow: hidden;
                border: 1px solid rgba(255,255,255,0.08);
                background: #121212;
            }
            #table-modal .modal-header {
                padding: 16px 20px;
                border-bottom: 1px solid rgba(255,255,255,0.08);
                background: #161616;
                flex-shrink: 0;
            }
            #table-modal .modal-title {
                color: #fff;
                font-size: 1.35rem;
                font-weight: 700;
            }
            #table-modal .modal-close {
                border-radius: 8px;
                font-weight: 600;
                padding: 6px 14px;
            }
            #table-modal .modal-body {
                overflow-y: auto;
                padding: 16px 20px 24px;
                -webkit-overflow-scrolling: touch;
            }
            #table-modal .order-actions {
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
                margin-bottom: 4px;
            }
            #table-modal .order-actions .btn {
                margin: 0;
                border-radius: 8px;
                font-weight: 600;
                padding: 8px 14px;
            }
            #table-modal .order-actions .btn[aria-expanded="true"] {
                box-shadow: inset 0 -3px 0 #ffc107;
            }
            #table-modal .order-section {
                background: rgba(255,255,255,0.04);
                border: 1px solid rgba(255,255,255,0.08);
                border-radius: 12px;
                padding: 14px 14px 8px;
                margin-top: 12px;
            }
            #table-modal .order-section > h3 {
                margin: 0 0 12px;
                color: #fff;
                font-size: 1.05rem;
                font-weight: 700;
            }
            #table-modal .field-grid {
                margin-left: -8px;
                margin-right: -8px;
            }
            #table-modal .field-grid > [class*="col-"] {
                padding-left: 8px;
                padding-right: 8px;
                margin-top: 8px;
                margin-bottom: 8px;
            }
            #table-modal .order-section label {
                display: block;
                margin-bottom: 6px;
                color: rgba(255,255,255,0.72);
                font-size: 13px;
                font-weight: 600;
            }
            #table-modal .form-control,
            #table-modal .select2-container--default .select2-selection--single {
                background: rgba(255,255,255,0.06);
                border: 1px solid rgba(255,255,255,0.16) !important;
                border-radius: 8px;
                color: #fff;
                min-height: 42px;
            }
            #table-modal .form-control {
                padding: 8px 12px;
            }
            #table-modal .select2-container {
                width: 100% !important;
            }
            #table-modal .select2-container--default .select2-selection--single .select2-selection__rendered {
                line-height: 28px;
                padding-left: 12px;
                padding-right: 28px;
                color: #fff;
            }
            #table-modal .select2-container--default .select2-selection--single:before {
                right: 10px;
                bottom: 14px;
            }
            #table-modal .select2-container--default .select2-selection--single .select2-selection__arrow b {
                display: none;
            }
            #table-modal .input-group {
                align-items: center;
                width: 100%;
            }
            #table-modal .input-group .form-group {
                flex: 1;
                margin-bottom: 0;
                width: 100%;
            }
            #table-modal .input-group-addon {
                color: #fff;
                padding-right: 8px;
            }
            #table-modal .order-table-wrap {
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                margin-top: 8px;
            }
            #table-modal .order-table {
                width: 100%;
                min-width: 720px;
                margin-bottom: 8px;
                color: #fff;
                background: transparent;
            }
            #table-modal .order-table th {
                color: rgba(255,255,255,0.6);
                font-size: 12px;
                letter-spacing: 0.03em;
                text-transform: uppercase;
                border-top: 0;
                border-bottom: 1px solid rgba(255,255,255,0.12);
                white-space: nowrap;
            }
            #table-modal .order-table td {
                vertical-align: middle;
                border-top: 1px solid rgba(255,255,255,0.08);
                color: #fff;
            }
            #table-modal .order-qty {
                width: 76px;
                min-width: 68px;
                min-height: 36px;
                padding: 4px 8px;
            }
            #table-modal .order-comment {
                min-width: 140px;
                min-height: 36px;
            }
            #table-modal .order-delete {
                width: 40px;
                height: 40px;
                padding: 0;
                border-radius: 8px;
                line-height: 1;
            }
            #table-modal .order-delete .fa {
                font-size: 16px;
            }
            #table-modal .order-empty {
                text-align: center;
                color: rgba(255,255,255,0.55) !important;
                padding: 18px 8px !important;
            }
            #table-modal .payment-card {
                background: transparent;
                border: 0;
                padding: 0;
                box-shadow: none;
            }
            #table-modal #payment_error {
                display: block;
                color: #ff8a80;
                min-height: 18px;
                margin-top: 4px;
                font-size: 13px;
            }
            #table-modal .bill-summary {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 8px;
                margin-top: 8px;
            }
            #table-modal .bill-line {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 12px;
                padding: 10px 12px;
                border-radius: 8px;
                background: rgba(0,0,0,0.28);
                color: #fff;
                font-size: 14px;
            }
            #table-modal .bill-line strong {
                font-variant-numeric: tabular-nums;
                font-weight: 700;
            }
            #table-modal .bill-line--grand {
                grid-column: 1 / -1;
                background: rgba(33, 150, 243, 0.2);
                font-size: 16px;
            }
            #table-modal .modal-footer {
                padding: 8px 0 4px;
                flex-wrap: wrap;
                gap: 8px;
            }
            #table-modal .modal-footer .btn {
                border-radius: 8px;
                margin-left: 0;
            }
            body > .select2-container {
                z-index: 2000;
            }

            @media (max-width: 767px) {
                .table-wrapper {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                    gap: 10px;
                }
                .table-wrapper .table {
                    height: 112px;
                    padding: 8px;
                }
                .table-wrapper .table p {
                    font-size: 16px;
                }
                #table-modal .modal-dialog {
                    width: calc(100% - 12px);
                    max-height: calc(100vh - 12px);
                }
                #table-modal .modal-content {
                    max-height: calc(100vh - 12px);
                    border-radius: 12px;
                }
                #table-modal .modal-header,
                #table-modal .modal-body {
                    padding-left: 12px;
                    padding-right: 12px;
                }
                #table-modal .modal-title {
                    font-size: 1.1rem;
                }
                #table-modal .order-actions .btn {
                    flex: 1 1 calc(50% - 8px);
                }
                #table-modal .order-table-wrap {
                    overflow: visible;
                }
                #table-modal .order-table {
                    min-width: 0;
                }
                #table-modal .order-table thead {
                    display: none;
                }
                #table-modal .order-table tr {
                    display: block;
                    background: rgba(255,255,255,0.04);
                    border: 1px solid rgba(255,255,255,0.08);
                    border-radius: 10px;
                    padding: 8px 12px;
                    margin-bottom: 8px;
                }
                #table-modal .order-table td {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    gap: 12px;
                    border: 0;
                    padding: 6px 0;
                    text-align: right;
                    white-space: normal;
                }
                #table-modal .order-table td::before {
                    content: attr(data-label);
                    font-weight: 600;
                    color: rgba(255,255,255,0.5);
                    text-align: left;
                    flex: 0 0 38%;
                }
                #table-modal .order-table td.cell-skip {
                    display: none;
                }
                #table-modal .order-table tr.is-summary {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    background: transparent;
                    border: 0;
                    border-top: 1px solid rgba(255,255,255,0.08);
                    border-radius: 0;
                    padding: 8px 2px;
                    margin: 0;
                }
                #table-modal .order-table tr.is-summary td {
                    display: none;
                    padding: 0;
                    border: 0;
                }
                #table-modal .order-table tr.is-summary td.summary-label,
                #table-modal .order-table tr.is-summary td.summary-value {
                    display: block;
                }
                #table-modal .order-table tr.is-summary td::before {
                    content: none;
                }
                #table-modal .order-table tr.is-empty td {
                    display: block;
                    text-align: center;
                }
                #table-modal .order-table tr.is-empty td::before {
                    content: none;
                }
                #table-modal .bill-summary {
                    grid-template-columns: 1fr;
                }
                #table-modal .modal-footer {
                    flex-direction: column;
                    align-items: stretch;
                }
                #table-modal .modal-footer .btn {
                    width: 100%;
                }
                #table-modal .order-comment,
                #table-modal .order-qty {
                    width: 58%;
                    min-width: 0;
                    max-width: 180px;
                }
            }

      </style>          