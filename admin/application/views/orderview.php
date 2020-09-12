<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">
<?php require('inc/nav.php')?>


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Order Bill</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Order</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
       
            </div>
            <div class="content-body">
                <!-- invoice functionality start -->
                <section class="invoice-print mb-1">
                    <div class="row">

                        <fieldset class="col-12 col-md-5 mb-1 mb-md-0">
                           
                        </fieldset>
                        <div class="col-12 col-md-7 d-flex flex-column flex-md-row justify-content-end">
                            <button class="btn btn-primary btn-print mb-1 mb-md-0"> <i class="feather icon-file-text"></i> Print</button>
                           
                        </div>
                    </div>
                </section>
                <!-- invoice functionality end -->
                <!-- invoice page -->
                <section class="card invoice-page">
                    <div id="invoice-template" class="card-body">
                        <!-- Invoice Company Details -->
                        <div id="invoice-company-details" class="row">
                            <div class="col-sm-6 col-12 text-left pt-1">
                                <div class="media pt-1">
                                    <img src="../../../app-assets/images/logo/logo.png" alt="company logo" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-12 text-right">
                                <h1>Order</h1>
                                <div class="invoice-details mt-2">
                                    <h6>Order NO.</h6>
                                    <p>FBLMS<?=$id?></p>
                                    <h6 class="mt-2">Order DATE</h6>
                                    <p><?=date('F,d Y',strtotime($order_created))?></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Invoice Company Details -->

                        <!-- Invoice Recipient Details -->
                        <div id="invoice-customer-details" class="row pt-2">
                            <div class="col-sm-6 col-12 text-left">
                                <h5>Recipient</h5>
                                <?php $rec = json_decode($order_detail,true); ?>
                                <div class="recipient-info my-2">
                                    <p><?=$rec['fullname']?></p>
                                    <p><?=$rec['street_1']?></p>
                                    <p><?=$rec['street_2']?> <?=$rec['town']?>,<?=$rec['state']?>,<?=$rec['country']?></p>
                                    <p><?=$rec['zip']?></p>
                                </div>
                                <div class="recipient-contact pb-2">
                                    <p>
                                        <i class="feather icon-mail"></i>
                                        <?=$rec['email']?>
                                    </p>
                                    <p>
                                        <i class="feather icon-phone"></i>
                                        <?=$rec['phone']?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12 text-right">
                                <h5>Foster Bright Pvt. Ltd.</h5>
                                <div class="company-info my-2">
                                    <p>C-54,2nd Floor,</p>
                                    <p>Sec.2 Noida, Uttar Pradesh </p>
                                    <p>201301</p>
                                </div>
                                <div class="company-contact">
                                    <p>
                                        <i class="feather icon-mail"></i>
                                        fosterbrightedu@gmail.com
                                    </p>
                                    <p>
                                        <i class="feather icon-phone"></i>
                                        +91 88607 56247
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/ Invoice Recipient Details -->

                        <!-- Invoice Items Details -->
                        <div id="invoice-items-details" class="pt-1 invoice-items-table">
                            <div class="row">
                                <div class="table-responsive col-12">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>TASK DESCRIPTION</th>
                                                <th>HOURS</th>
                                                <th>RATE</th>
                                                <th>AMOUNT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Website Redesign</td>
                                                <td>60</td>
                                                <td>15 USD</td>
                                                <td>90000 USD</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="invoice-total-details" class="invoice-total-table">
                            <div class="row">
                                <div class="col-7 offset-5">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th>SUBTOTAL</th>
                                                    <td>114000 USD</td>
                                                </tr>
                                                <tr>
                                                    <th>DISCOUNT (5%)</th>
                                                    <td>5700 USD</td>
                                                </tr>
                                                <tr>
                                                    <th>TOTAL</th>
                                                    <td>108300 USD</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice Footer -->
                        <div id="invoice-footer" class="text-right pt-3">
                            <p>Transfer the amounts to the business amount below. Please include invoice number on your check.
                                <p class="bank-details mb-0">
                                    <span class="mr-4">BANK: <strong>FTSBUS33</strong></span>
                                    <span>IBAN: <strong>G882-1111-2222-3333</strong></span>
                                </p>
                        </div>
                        <!--/ Invoice Footer -->

                    </div>
                </section>
                <!-- invoice page end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>