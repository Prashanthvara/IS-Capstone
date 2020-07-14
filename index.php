<!DOCTYPE html>
<html lang="en" class="responsive">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Appointments</title>
    <link href="css/yui-combined.css" rel="stylesheet">
    <!-- YUICSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- THEME -->
    <link href="css/toastr.min.css" rel="stylesheet">
    <link href="css/workaround.css" rel="stylesheet">
    <link href="css/sidebar.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/datepicker.min.css" rel="stylesheet">
    <link href="css/datetimepicker.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <style>
        .navbar-default {
            background-color: #004065 !important;
            border-color: #004065 !important;
            background-image: none;
        }
    </style>
    <!-- STYLES -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="Resources/yui/build/yui-combined.js"></script>
    <script src="Resources/js/emf.js"></script><!-- YUIJS -->
</head>
<body class='appointments_home'>
<a id='ocommbypass' href='javascript:skipToContent();'>Skip to main content</a>
<div id="idletimeout">
    You will be logged off in
    <span>
            <!-- countdown place holder -->
         </span>
    &nbsp;seconds due to inactivity.
    <p><a id="idletimeout-resume" href="#"></a>.</p>
</div>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button id="side-toggle" type="button" class="navbar-toggle toggle-left hidden-md hidden-lg"
                    data-toggle="sidebar" data-target=".sidebar-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle user</span>
                <i class="fa fa-user"></i>
            </button>
            <a class="navbar-brand" href="home.aspx">
                <div>GW Colonial Health Center</div>
                <!-- BRAND -->
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user:before "></i> John Smith<!-- USER --> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- PATIENTS -->
                        <li>
                            <a href="logout.aspx"><i class="fa fa-fw fa-sign-out"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div id="sidebar" class="col-xs-7 col-sm-3 col-md-3 sidebar sidebar-left sidebar-animate sidebar-md-show">
            <ul class='nav nav-pills nav-stacked'>
                <li class='inactive'><a href='/home.aspx'>Home</a></li>
                <li class='inactive'><a href='/Profile.aspx'>Profile</a></li>
                <li class='inactive'><a href='/clearances.aspx'>Medical Clearances</a></li>
                <li class='active'><a href='index.php'>Appointments</a></li>
                <li class='inactive'><a href='/rosters.aspx'>Groups/Workshops</a></li>
                <li class='inactive'><a href='/referrals.aspx'>Referrals</a></li>
                <li class='inactive'><a href='/Handouts.aspx'>Handouts</a></li>
                <li class='inactive'><a href='/messages_send_compliance.aspx'>Messages</a></li>
                <li class='inactive'><a href='/Letters.aspx'>Letters</a></li>
                <li class='inactive'><a href='/Mvc/DownloadableForms'>Downloadable Forms</a></li>
                <li class='inactive'><a href='/EmfGateway.aspx'>Forms</a></li>
                <li class='inactive'><a href='/Mvc/InsuranceCards'>Insurance Card</a></li>
                <li class='inactive'><a href='/SurveyFormsHome.aspx'>Survey Forms</a></li>
                <li class='inactive'><a href='/StatementsHome.aspx'>Account Summary</a></li>
                <li class='inactive'><a href='/PersRecordsHome.aspx'>Personal Records</a></li>
                <li class='inactive'><a href='/immunizations_home.aspx'>Immunizations</a></li>
                <li>
                    <hr style='margin: 10px;'/>
                </li>
                <li class='inactive'><a href='/logout.aspx'><i class='fa fa-sign-out::before'></i> Log Out</a></li>
            </ul>
            <!-- NAV -->
        </div>
        <div id="mainbody" class="col-md-9 col-md-offset-3">
            <div class="validation-summary" style="display: none;">
                <div class="header">The form was NOT submmitted!</div>
                <div class="message"></div>
            </div>
            <form name="ctl03" method="post" action="./appointments_home.aspx" id="ctl03">
                <div>
                    <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value=""/>
                    <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value=""/>
                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value=""/>
                </div>
                <span>
                     <h1>Appointments for John Smith</h1>
                      <br/>
                  </span>
                <P><input type="button" onclick="window.location.href='';"
                          value="Schedule an Inhouse Appointment" class="btn btn-primary"/>
                <P><input type="button" onclick="window.location.href='scheduleappointment.php';"
                          value="Schedule an Online Appointment" class="btn btn-primary"/>
                <P><input type="button" name="cmdSchedule"
                          onclick="window.location.href='viewscheduledappointments.php';"
                          value="View Scheduled Appointments" id="cmdSchedule" class="btn btn-primary"/>
                <P><span class="StandardText">Please be sure to fill out your Clinical Questionnaire before your appointment.</span>
                <P>
                <HR width='90%'>
                <span class="StandardText">No currently scheduled appointments</span>
                <P>
                    <span class="CriticalText">You Can Receive Text Message Appointment Reminders and Other Alerts:&nbsp;</span><a
                            id="gotoApptTextReminders" class="CriticalText"
                            href="javascript:__doPostBack(&#39;gotoApptTextReminders&#39;,&#39;&#39;)">Enable Text
                        Messages</a>
                    <!-- BODY -->
        </div>
    </div>
</div>
<div id="progressHUD" style="display: none;">
    <div id='spinner'></div>
    <div id='progressMessage'>Please wait...</div>
</div>
<div id="overlay"></div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div id="footer" class="col-md-9 col-md-offset-3">
                <p style="float: left;" class="text-muted"></p>
                <p style='float: left;'' class='text-muted'>Powered by Point and Click Solutions © 2020 </p>
                <div class='text-muted' style='float: right; font-size: 0.85em;'>Language:&nbsp;<a
                            href='/Student/Locale'>Default</a></div><!-- FOOTER --></p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="/Resources/js/activity.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/bower_components/bootstrap-sidebar/dist/js/sidebar.js"></script>
<script src="/Resources/js/plugins/bootbox.min.js"></script>
<script src="/Resources/js/ie10-viewport-bug-workaround.js"></script>
<script src="/Resources/js/plugins/jquery.idletimer.js"></script>
<script src="/Resources/js/plugins/jquery.idletimeout.js"></script>
<script src="/Resources/js/plugins/toastr/toastr.min.js"></script>
<script src="/Resources/js/validation/jquery.validate.min.js"></script>
<script src="/Resources/js/plugins/moment/moment-with-locales.js"></script>
<script src="/Resources/js/plugins/moment/moment-timezone.js"></script>
<script src="/Resources/js/plugins/bootstrap-datepicker.min.js"></script>
<script src="/Resources/lib/datetimepicker/datetimepicker.js"></script>
<script src="/Resources/js/spin.min.js"></script>
<script src="/Resources/js/plugins.js"></script>
<script src="/Resources/js/main.js"></script>
<script src="/Resources/js/openCommunicator.js"></script>
<script src="/Resources/js/responsive.js"></script>
<script>window.config = {
        "basePath": "/",
        "locale": "en-US",
        "responsiveMode": true,
        "dateFormat": "M/d/yyyy",
        "imageUploadLicensed": true,
        "navAlerts": true,
        "activityEnabled": "true",
        "activitySelector": "a, button, .btn, .fa, td, li",
        "uploadRejected": "Your upload is too large. Please choose another file less than 4 MB in size."
    };</script>
<script>var pncIdlePeriodSec = 1200;</script><!-- SCRIPTS -->
</body>
</html>