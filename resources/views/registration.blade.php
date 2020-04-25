﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <title>Registration</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/kendo.common.min.css">
    <link rel="stylesheet" href="assets/css/kendo.default.min.css">
    <link rel="stylesheet" href="assets/css/kendo.default.mobile.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/remax.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap.css" />
    <link href="assets/datatables-responsive/dataTables.responsive.css" rel="stylesheet" />
    <link href="vendor/kendo/styles/kendo.common.core.min.css" rel="stylesheet" />
    <link href="vendor/kendo/styles/kendo.common.min.css" rel="stylesheet" />
    <link href="vendor/kendo/styles/kendo.bootstrap.min.css" rel="stylesheet" />
    <link href="vendor/kendo/styles/kendo.bootstrap.mobile.min.css" rel="stylesheet" />
    <link href="assets/bootstrap_datetime/css/bootstrap-datepicker.min.css" rel="stylesheet" />

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/kendo/js/kendo.all.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <script src="assets/js/kendo.all.min.js"></script>
    <script src="assets/js/metisMenu.js"></script>
    <!--<script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>-->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrapValidator.min.js"></script>
    <script src="assets/bootstrap_datetime/js/bootstrap-datepicker.min.js"></script>
    <!--<script src="assets/datatables-responsive/dataTables.responsive.js"></script>-->

    <script src="assets/js/remax.js?v=191008_2341"></script>
    <script src="assets/js/registration.js?v=191008_2341"></script>

</head>

<body>
    <div id="wrapper">
        <div w3-include-html="nav.html"></div>

        <div id="page-wrapper" style="min-height: 731px;">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="page-header">
                        <h1>Registration</h1>
                    </div>
                </div>
            </div>

            <!--- Account Registration -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Accounts</h3>
                        </div>
                        <div class="panel-body">
                            <div id="table-wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="table_accounts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="btn-group" role="group">
                                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#registration_acc" id="btnNewAccount" onclick="registration.btnNewAccount_OnClick();">New</button>
                                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#registration_acc" id="btnEditAccount" onclick="registration.btnEditAccount_OnClick();">Edit</button>
                                <button class="btn btn-default" type="button" id="btnDelAccount" onclick="registration.btnDelAccount_OnClick();">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="height:20px"></div>
                </div>
            </div>

            <!--- User Registration -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Users</h3>
                        </div>
                        <div class="panel-body">
                            <div id="table-wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="table_users"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="btn-group" role="group">
                                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#registration_user" id="btnNewUser" onclick="registration.btnNewUser_OnClick();">New</button>
                                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#registration_user" id="btnEditUser" onclick="registration.btnEditUser_OnClick();">Edit</button>
                                <button class="btn btn-default" type="button" id="btnDelUser" onclick="registration.btnDelUser_OnClick();">Delete</button>
                                <button class="btn btn-default" type="button" data-dismiss="modal" id="btnResetPassword" onclick="registration.btnResetPassword_OnClick()">Reset Password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="height:20px"></div>
                </div>
            </div>

            <!--- Vessel Registration -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Vessels</h3>
                        </div>
                        <div class="panel-body">
                            <div id="table-wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="table_vessels"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="btn-group" role="group">
                        <button class="btn btn-default" type="button" data-toggle="modal" data-target="#registration_vessel" id="btnNewVessel" onclick="registration.btnNewVessel_OnClick()">New</button>
                        <button class="btn btn-default" type="button" data-toggle="modal" data-target="#registration_vessel" id="btnEditVessel" onclick="registration.btnEditVessel_OnClick();">Edit</button>
                        <button class="btn btn-default" type="button" id="btnDelVessel" onclick="registration.btnDelVessel_OnClick();">Delete</button>
                        <button class="btn btn-default" type="button" data-toggle="modal" data-target="#registration_vessel_photo"
                                id="btnUploadVesselPhoto">
                            Photo Upload
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="height:20px"></div>
                </div>
            </div>

            <!--- Engine Registration -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Engines</h3>
                        </div>
                        <div class="panel-body">
                            <div id="table-wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="table_engines"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="btn-group" role="group">
                        <button class="btn btn-default" type="button" data-toggle="modal" data-target="#registration_engine"
                                id="btnNewEngine" onclick="registration.btnNewEngine_OnClick()">
                            New
                        </button>
                        <button class="btn btn-default" type="button" data-toggle="modal" data-target="#registration_engine"
                                id="btnEditEngine" onclick="registration.btnEditEngine_OnClick();">
                            Edit
                        </button>
                        <button class="btn btn-default" type="button"
                                id="btnDelEngine" onclick="registration.btnDelEngine_OnClick();">
                            Delete
                        </button>
                        <button class="btn btn-default" type="button" data-toggle="modal" data-target="#registration_engine_photo"
                                id="btnUploadEnginePhoto">
                            Photo Upload
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="height:20px"></div>
                </div>
            </div>

            <!--- Channel Registration -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Channels (per Engine Model)</h3>
                        </div>
                        <div class="panel-body">
                            <div id="table-wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="table_channels"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#registration_channel"
                            id="btnNewChannel" onclick="registration.btnNewChannel_OnClick()">
                        New
                    </button>
                    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#registration_channel"
                            id="btnEditChannel" onclick="registration.btnEditChannel_OnClick();">
                        Edit
                    </button>
                    <button class="btn btn-default" type="button"
                            id="btnDelChannel" onclick="registration.btnDelChannel_OnClick();">
                        Delete
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="height:20px"></div>
                </div>
            </div>
        </div>

    </div>

    <div w3-include-html="footer.html"></div>

    <div id="model_dialogs">
        <!-- Modal registration_acc -->
        <div>
            <div class="modal fade" role="dialog" tabindex="-1" id="registration_acc" aria-labelledby="registrationLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal" role="form" id="form_acc" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">
                                    <em class="fa fa-building fa-1x"></em>Account Registration
                                </h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="id" name="id" />
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="accName">Account Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="accName" name="accName" placeholder="Account Name" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="accID">Account ID.</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="accID" name="accID" placeholder="Account No." required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="primary">Primary Contact</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="primary" name="primary" placeholder="Primary Contact" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="phone">Phone</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="fax">Fax</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="fax" name="fax" placeholder="Fax" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="email">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit" id="btnAccSubmit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Model registration_user -->
        <div>
            <div class="modal fade" role="dialog" tabindex="-1" id="registration_user" aria-labelledby="registrationLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal" role="form" id="form_user" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button><h4 class="modal-title">
                                    <em class="fa fa-user fa-1x"></em>
                                    User Registration
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="userName">User Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="userName" name="userName" placeholder="User Name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label"
                                           for="parent">Parent (Account)</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="userParent" name="userParent"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="title">Job Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="userTitle" name="userTitle" placeholder="Job Title" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="userPhone">Office Phone</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="userPhone" name="userPhone" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="userMobile">Mobile</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="userMobile" name="userMobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="userEmail">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="userCountry">Country</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="userCountry" name="userCountry"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="userTwoFA">Two Factor Authentication</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="userTwoFA" name="userTwoFA">
                                            <option>Yes</option>
                                            <option selected>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="userRole">Roles</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="userRole" name="userRole" multiple="multiple"></select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit" id="btnUserSubmit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Model registration_vessel -->
        <div>
            <div class="modal fade" role="dialog" tabindex="-1" id="registration_vessel" aria-labelledby="registrationLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal" role="form" id="form_vessel" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button><h4 class="modal-title">
                                    <em class="fa fa-ship fa-1x"></em>
                                    Vessel Registration
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="vessel_Name">Vessel Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="vessel_Name" name="vessel_Name" placeholder="Vessel Name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="vessel_imo">IMO</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="vessel_imo" name="vessel_imo" placeholder="IMO Number" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="vessel_owner">Owner</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="vessel_owner" name="vessel_owner"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="vessel_operator">Operator</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="vessel_operator" name="vessel_operator"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="vessel_shipType">Ship Type</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <select class="form-control" id="vessel_shipType" name="vessel_shipType"></select>
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#inputModal" id="btnAddShipType" onclick="registration.btnAddShipType_OnClick()">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="vessel_shipyard">Shipyard Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="vessel_shipyard" name="vessel_shipyard" placeholder="Shipyard Name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="vessel_shipyardCountry">Shipyard Country</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="vessel_shipyardCountry" name="vessel_shipyardCountry"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="vessel_builtYear">Built Year</label>
                                    <div class="col-sm-8">
                                        <div class="input-append date" data-date-format="yyyy">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="vessel_builtYear" name="vessel_builtYear" placeholder="Built Year" data-provide="datepicker" readonly />
                                                <label class="input-group-btn" for="vessel_builtYear">
                                                    <span class="btn btn-default">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="vessel_ownYear">Delivery to Owner</label>
                                    <div class="col-sm-8">
                                        <div class="input-append date" data-date-format="yyyy">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="vessel_ownYear" name="vessel_ownYear" placeholder="Delivery to Owner" data-provide="datepicker" readonly />
                                                <label class="input-group-btn" for="vessel_ownYear">
                                                    <span class="btn btn-default">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="vessel_class">Ship Class</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <select class="form-control" id="vessel_class" name="vessel_class"></select>
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#inputModal" id="btnAddShipClass" onclick="registration.btnAddShipClass_OnClick()">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="vessel_dwt">DWT</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="vessel_dwt" name="vessel_dwt" placeholder="DWT" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="vessel_propulsion">Total Propulsion Power</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="vessel_propulsion" name="vessel_propulsion" placeholder="Total Propulsion Power" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="vessel_generator">Total Generator Power</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="vessel_generator" name="vessel_generator" placeholder="Total Generator Power" />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit" id="btnVesselSubmit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Model registration_vessel_photo -->
        <div>
            <div class="modal fade" role="dialog" tabindex="-1" id="registration_vessel_photo" aria-labelledby="registrationLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal" role="form" id="form_vessel_photo" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button><h4 class="modal-title">
                                    <em class="fa fa-ship fa-1x"></em>
                                    Vessel Photo Upload
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <input name="vesselId" id="vesselId" type="hidden" />
                                    <input name="vesselPhoto" id="vesselPhoto" type="file" aria-label="files" />
                                </div>
                            </div>
                            <!--<div class="modal-footer">
                            <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit" id="btnVesselPhotoSubmit">Save</button>
                        </div>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Model registration_engine -->
        <div>
            <div class="modal fade" role="dialog" tabindex="-1" id="registration_engine" aria-labelledby="registrationLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal" role="form" id="form_engine" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button><h4 class="modal-title">
                                    <em class="fa fa-gears fa-1x"></em>
                                    Equipment Registration
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="engine_vessel">Vessel</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="engine_vessel" name="engine_vessel"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="engine_type">Engine Type</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="engine_type" name="engine_type"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="engine_model">Engine Model</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <select class="form-control" id="engine_model" name="engine_model"></select>
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#inputModal" id="btnAddEngineModel" onclick="registration.btnAddEngineModel_OnClick()">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="engine_sno">Engine Serial No.</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="engine_sno" name="engine_sno" placeholder="Engine Serial No." />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="engine_outputPower">Output Power</label>
                                    <div class="col-sm-8">
                                        <input type="number" step="1" class="form-control" id="engine_outputPower" name="engine_outputPower" placeholder="Output Power" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="engine_rpm">RPM</label>
                                    <div class="col-sm-8">
                                        <input type="number" step="1" class="form-control" id="engine_rpm" name="engine_rpm" placeholder="RPM" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="engine_gearboxModel">Gearbox Model</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <!--<input type="text" class="form-control" id="engine_gearboxModel" name="engine_gearboxModel" placeholder="Gearbox Model" />-->
                                            <select class="form-control" id="engine_gearboxModel" name="engine_gearboxModel"></select>
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#inputModal" id="btnAddGearboxModel" onclick="registration.btnAddGearboxModel_OnClick()">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="engine_gearboxSrNo">Gearbox Serial No.</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="engine_gearboxSrNo" name="engine_gearboxSrNo" placeholder="Gearbox Serial No." />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="engine_gearboxRatio">Gear Ratio</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="engine_gearboxRatio" name="engine_gearboxRatio" placeholder="Gear Ratio" />
                                    </div>
                                </div>
                                <div class="form-group" id="engine_alternatorMaker_group">
                                    <label class="col-sm-4 control-label" for="engine_alternatorMaker">Alternator Maker</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <select class="form-control" id="engine_alternatorMaker" name="engine_alternatorMaker"></select>
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#inputModal" id="btnAddAlternatorMaker" onclick="registration.btnAddAlternatorMaker_OnClick()">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="engine_alternatorMakerModel_group">
                                    <label class="col-sm-4 control-label" for="engine_alternatorMakerModel">Alternator Maker Model</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="engine_alternatorMakerModel" name="engine_alternatorMakerModel" placeholder="Alternator Maker Model" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="engine_alternatorSrNo_group">
                                    <label class="col-sm-4 control-label" for="engine_alternatorSrNo">Alternator Serial No.</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="engine_alternatorSrNo" name="engine_alternatorSrNo" placeholder="Alternator Serial No." />
                                    </div>
                                </div>
                                <div class="form-group" id="engine_alternatorOutput_group">
                                    <label class="col-sm-4 control-label" for="engine_alternatorOutput">Alternator Output (kWe)</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="engine_alternatorOutput" name="engine_alternatorOutput" placeholder="Alternator Output (kWe)" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="engine_powerSupplySystem">Power Supply System</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="engine_powerSupplySystem" name="engine_powerSupplySystem" placeholder="Power Supply System" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="engine_insulation">Insulation / Temperature Rise</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="engine_insulation" name="engine_insulation" placeholder="Insulation / Temperature Rise" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="engine_iprRate">IP Rating</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="engine_iprRate" name="engine_iprRate" placeholder="IP Rating" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="engine_mounting">Mounting</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="engine_mounting" name="engine_mounting" placeholder="Mounting" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="engine_alertEmail">Alert Email</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="engine_alertEmail" name="engine_alertEmail"></select>
                                    </div>
                                </div>
                                <div class="form-group" id="engine_side_group">
                                    <label class="col-sm-4 control-label" for="engine_side">Side</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <select class="form-control" id="engine_side" name="engine_side"></select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit" id="btnEngineSubmit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Model registration_engine_photo -->
        <div>
            <div class="modal fade" role="dialog" tabindex="-1" id="registration_engine_photo" aria-labelledby="registrationLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal" role="form" id="form_engine_photo" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button><h4 class="modal-title">
                                    <em class="fa fa-ship fa-1x"></em>
                                    Engine Photo Upload
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <input name="engineId" id="engineId" type="hidden" />
                                    <input name="enginePhoto" id="enginePhoto" type="file" aria-label="files" />
                                </div>
                            </div>
                            <!--<div class="modal-footer">
                            <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit" id="btnVesselPhotoSubmit">Save</button>
                        </div>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Model registration_datachannel -->
        <div>
            <div class="modal fade" role="dialog" tabindex="-1" id="registration_channel" aria-labelledby="registrationLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal" role="form" id="form_channel" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button><h4 class="modal-title">
                                    <em class="fa fa-upload fa-1x"></em>
                                    Data Channel Registration
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_model">Engine Model</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="channel_model" name="channel_model"></select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_channelNo">Channel No</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="channel_channelNo" name="channel_channelNo" placeholder="Channel No" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_channelName">Channel Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="channel_channelName" name="channel_channelName" placeholder="Channel Name" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_dashboardDisplay">Dashboard Display</label>
                                    <div class="col-sm-8">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="channel_dashboardDisplay" name="channel_dashboardDisplay" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_group">Channel Group</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="channel_group" name="channel_group" ></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_chartType">Chart Type</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="channel_chartType" name="channel_chartType"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_minRange">Min Range</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="channel_minRange" name="channel_minRange" placeholder="Min Range" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_maxRange">Max Range</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="channel_maxRange" name="channel_maxRange" placeholder="Max Range" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_scale">Scale</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="channel_scale" name="channel_scale" placeholder="Scale" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_unit">Display Unit</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="channel_unit" name="channel_unit" placeholder="Display Unit" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_lowerLimit">Lower Limit</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="channel_lowerLimit" name="channel_lowerLimit" placeholder="Lower Limit" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_upperLimit">Upper Limit</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="channel_upperLimit" name="channel_upperLimit" placeholder="Upper Limit" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_monitor">Monitoring Timer</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="channel_monitor" name="channel_monitor" placeholder="Monitoring Timer" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_dataType">Data Type</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="channel_dataType" name="channel_dataType"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_alarmValue">Alarm Value (Digital Only)</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="channel_alarmValue" name="channel_alarmValue"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_documentUrl">Document URL</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="channel_documentUrl" name="channel_documentUrl" placeholder="Document URL" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="channel_side">Side</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="channel_side" name="channel_side"></select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit" id="btnChannelSubmit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for displaying the messages -->
        <div class="modal fade" id="messageModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">
                            <em class="fa fa-warning fa-1x"> </em> Server Error(s)
                        </h4>
                    </div>
                    <div class="modal-body">
                        <!-- The messages container -->
                        <div id="errors"></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for  ad-hoc master data entry -->
        <div class="modal fade" id="inputModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">
                            <em class="fa fa-pencil fa-1x"> </em> Add New <span id="masterdata_header"></span>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <!-- The messages container -->
                        <form class="form-horizontal" role="form" id="masterdata_form" method="post">
                            <input type="hidden" class="form-control" id="master_url" name="master_url" />
                            <input type="hidden" class="form-control" id="master_requestType" name="master_requestType" />
                            <input type="hidden" class="form-control" id="master_targetDropDown" name="master_targetDropDown" />
                            <input type="hidden" class="form-control" id="master_paretnModal" name="master_paretnModal" />

                            <!-- Generic Master Data Name -->
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="master_name">Enter Value: </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="master_name" name="master_name" placeholder="Name" />
                                </div>
                            </div>

                            <!-- Only applicable for new engine model -->
                            <!--<div class="form-group" id="master_engine_model_group">
                                <label class="col-sm-4 control-label" for="master_engine_model">Engine Model: </label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="master_engine_type" name="master_engine_type"></select>
                                </div>
                            </div>-->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" type="button" id="btnSaveMaster" onclick="registration.btnSaveMaster_OnClick()">Save</button>
                        <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        includeHTML();

        $(document).ready(function () {
            // Calling on load method from registration.js
            registration.onload();
        });
    </script>
</body>

</html>