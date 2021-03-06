﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <title>Login</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/kendo.common.min.css">
    <link rel="stylesheet" href="assets/css/kendo.default.min.css">
    <link rel="stylesheet" href="assets/css/kendo.default.mobile.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/remax.css">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <script src="assets/js/kendo.all.min.js"></script>
    <script src="assets/js/metisMenu.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrapValidator.min.js"></script>

    <script src="assets/js/remax.js?v=191008_2341"></script>
    <script src="assets/js/login.js?v=191008_2341"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default login-panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group"><input type="email" class="form-control" placeholder="Email" id="email" name="email" autofocus="" value="remax@daikai.com"></div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password"> <!-- value="mypassword" -->
                        </div><div class="checkbox"><label><input type="checkbox" name="remember" id="remember" />Remember Me</label></div>
                        <button class="btn btn-default btn-lg btn-success btn-block" type="button" id="login" onclick="login.performLogin()">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="modal fade" role="dialog" tabindex="-1" id="twoFA" aria-labelledby="twoFALabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form class="form-horizontal" role="form" id="form_twoFA">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button><h4 class="modal-title">
                                <em class="fa fa-upload fa-1x"></em>
                                Google Two Factor Authenticator
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-sm-6 control-label" for="channel_model">Enter Google Authenticator Token</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="googleToken" name="googleToken" placeholder="Token" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" type="button" id="btnTwoFACancel" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="button" id="btnTwoFALogin">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            login.performLogOut();
            $('#btnTwoFALogin').click(function () {
                login.verifyToken();
            });
            $('#btnTwoFACancel').click(function () {
                login.performLogOut();
            });
        });
    </script>
</body>
</html>