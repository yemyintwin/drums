﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <title>Vessel</title>

    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="/assets/css/kendo.common.min.css">
    <link rel="stylesheet" href="/assets/css/kendo.default.min.css">
    <link rel="stylesheet" href="/assets/css/kendo.default.mobile.min.css">
    <link rel="stylesheet" href="/assets/css/metisMenu.css">
    <link rel="stylesheet" href="/assets/css/remax.css">
    <link rel="stylesheet" href="/assets/css/dataTables.bootstrap.css" />
    <link href="/assets/datatables-responsive/dataTables.responsive.css" rel="stylesheet" />
    <link href="/vendor/kendo/styles/kendo.common.core.min.css" rel="stylesheet" />
    <link href="/vendor/kendo/styles/kendo.common.min.css" rel="stylesheet" />
    <link href="/vendor/kendo/styles/kendo.bootstrap.min.css" rel="stylesheet" />
    <link href="/vendor/kendo/styles/kendo.bootstrap.mobile.min.css" rel="stylesheet" />
    <link href="/assets/bootstrap_datetime/css/bootstrap-datepicker.min.css" rel="stylesheet" />

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/kendo/js/kendo.all.min.js"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/jquery.cookie.js"></script>
    <script src="/assets/js/kendo.all.min.js"></script>
    <script src="/assets/js/metisMenu.js"></script>
    <!--<script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/dataTables.bootstrap.min.js"></script>-->
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrapValidator.min.js"></script>
    <script src="/assets/bootstrap_datetime/js/bootstrap-datepicker.min.js"></script>

    <!--
    <script src="/assets/js/remax.js?v=191008_2341"></script>
    <script src="/assets/js/vessel.js?v=191008_2341"></script>
    -->
</head>

<body>
    <div id="wrapper">
        <div>
            @include('nav')
        </div>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="page-header">
                        <h1>Vessels</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel-group" role="tablist" aria-multiselectable="false" id="accordionPanel">

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div>
        @include('footer')
    </div>
</body>

</html>