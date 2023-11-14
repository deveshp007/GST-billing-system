@extends('layout.app')

@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title font-weight-bold">DASHBORAD</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                            <i class="fe-rupee font-22 avatar-title text-primary">💸</i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="mt-1">
                                ₹<span data-plugin="counterup">7,23,947</span>
                            </h3>
                            <p class="text-muted mb-1 text-truncate">
                                Total Revenue
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end row-->
            </div>
            <!-- end widget-rounded-circle-->
        </div>
        <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                            <i class="fe-shopping-cart font-22 avatar-title text-success"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark mt-1">
                                <span data-plugin="counterup">3007</span>
                            </h3>
                            <p class="text-muted mb-1 text-truncate">
                                Today's Sales
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end row-->
            </div>
            <!-- end widget-rounded-circle-->
        </div>
        <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                            <i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark mt-1">
                                <span data-plugin="counterup">77.58</span>%
                            </h3>
                            <p class="text-muted mb-1 text-truncate">Conversion</p>
                        </div>
                    </div>
                </div>
                <!-- end row-->
            </div>
            <!-- end widget-rounded-circle-->
        </div>
        <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                            <i class="fe-eye font-22 avatar-title text-warning"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark mt-1">
                                <span data-plugin="counterup">11.41</span>M
                            </h3>
                            <p class="text-muted mb-1 text-truncate">
                                Today's Visits
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end row-->
            </div>
            <!-- end widget-rounded-circle-->

        </div>
        <!-- end col-->
        <!-- Company Info -->
        <div class="col-md-12">
            <div class="company-info-box card-box">
                <div class="text-center">
                    <h1>Dex Enterprises</h1>
                </div>
                <div class="text-center">
                    <span>Varanasi-221010 (U.P.), India</span><br>
                    <span><b>Email:</b> dexent@thedex.com | <b>Web:</b> www.thedex.com | <b>Mob:</b>
                        +919795122966</span>
                </div>
                <div class="row pb-1">
                    <div class="col-6 text-right">
                        <span class="text-right"><b>PAN NO:</b> GAETE2437D</span>
                    </div>
                    <div class="col-6">
                        <span>
                            <b>GSTIN NO:</b> CHEC2342DEX007</span>
                    </div>
                </div>
            </div>
        </div>
        @endsection

        <style>
            .company-info-box {
                background-color: #ffffff;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                border-radius: 12px;
                overflow: hidden;
                padding: 20px;
                margin-top: 20px;
            }

            .company-info-box h1 {
                color: #3498db;
                margin-bottom: 10px;
            }

            .company-info-box span {
                color: #666;
                display: block;
                margin-bottom: 10px;
            }

            .company-info-box b {
                font-weight: bold;
            }

            .company-info-box .row {
                margin-top: 15px;
            }

            .company-info-box .col-md-6 {
                margin-top: 10px;
            }
        </style>