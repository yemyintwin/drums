<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <title>Home</title>

    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="/assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="/assets/css/kendo.common.min.css">
    <link rel="stylesheet" href="/assets/css/kendo.default.min.css">
    <link rel="stylesheet" href="/assets/css/kendo.default.mobile.min.css">
    <link rel="stylesheet" href="/assets/css/metisMenu.css">
    <link rel="stylesheet" href="/assets/css/remax.css">
    <link rel="stylesheet" href="/assets/css/print.css">

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

    
    <script src="/assets/js/remax.js?v=191008_2341"></script>
    <!--
    <script src="/assets/js/index.js?v=191008_2341"></script>
    -->
</head>

<body>
    <?php 
        // Test database connection
        try {
            $results = DB::select('select * from monitoring limit 10;');
        } catch (Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
    ?>
    
    <!--
    <div class="remax-overlay"></div>
    -->
    <div id="wrapper">
        <div>
            @include('nav')
        </div>
        <div id="page-wrapper" style="min-height: 731px;">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="page-header">
                        <h1>Daikai Engineering Pte Ltd</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-3 col-xs-3"><em class="fa fa-ship fa-5x"></em></div>
                                <div class="col-md-9 col-xs-9 text-right">
                                    <div class="huge" id="count_vessels">...</div>
                                    <div>Ships</div>
                                </div>
                            </div>
                        </div><a href="vessel/">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-lightblue">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-3 col-xs-3"><em class="fa fa-gears fa-5x"></em></div>
                                <div class="col-md-9 col-xs-9 text-right">
                                    <div class="huge" id="count_engines">...</div>
                                    <div>Engines</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <span class="pull-left">&nbsp;</span>
                            <span class="pull-right"><!--<i class="fa fa-arrow-circle-right"></i>--></span>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-3 col-xs-3"><em class="fa fa-plug fa-5x"></em></div>
                                <div class="col-md-9 col-xs-9 text-right">
                                    <div class="huge" id="count_generators">...</div>
                                    <div>Generators</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <span class="pull-left">&nbsp;</span>
                            <span class="pull-right"><!--<i class="fa fa-arrow-circle-right"></i>--></span>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-3 col-xs-3"><em class="fa fa-warning fa-5x"></em></div>
                                <div class="col-md-9 col-xs-9 text-right">
                                    <div class="huge" id="count_alerts">...</div>
                                    <div>Alerts!</div>
                                </div>
                            </div>
                        </div><a href="alerts.html">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-bar-chart-o fa-fw"></i> Today's Data Receiving Logs</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="demo-section k-content wide">
                                        <div id="dataChart" style="min-height:100px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-clock-o fa-fw"></i> Event Timeline</div>
                        <div class="panel-body">
                            <ul class="timeline" id="timeline">
                                <!--
                                <li>
                                    <div class="timeline-badge warning">
                                        <i class="fa fa-warning"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">S M/E EXH No.1 CYL TEMP</h4>
                                            <p>
                                                <small class="text-muted"><i class="fa fa-clock-o"></i> 7 April 2018 11:30 AM</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Channel 0161 data is 485 which is greater than 485.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge danger">
                                        <i class="fa fa-warning"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">S M/E H/T FW OUTLET TEMP</h4>
                                            <p>
                                                <small class="text-muted"><i class="fa fa-clock-o"></i> 7 April 2018 11:00 AM</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Channel 0146 data is 90 which is greater than 85.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success">
                                        <i class="fa fa-umbrella"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Weather Forecast</h4>
                                            <p>
                                                <small class="text-muted"><i class="fa fa-clock-o"></i> 8 April 2018 09:00 AM</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                                        </div>
                                    </div>
                                </li>
                                -->
                            </ul>
                        </div>
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