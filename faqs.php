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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <title>FAQs</title>
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
                        <i class="fa fa-user:before "></i> Prashanth Jayavaradhan<!-- USER --> <b class="caret"></b>
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
        </div>
        <div id="mainbody" class="col-md-9 col-md-offset-3">
            <header class="cd-header flex flex-column flex-center">
                <div class="text-component text-center">
                    <h1>FAQs</h1>
                </div>
            </header>

            <section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
                <ul class="cd-faq__categories"></ul>
                <div class="cd-faq__items">
                    <ul>
                        <li class="cd-faq__item">
                            <a class="cd-faq__trigger"
                               href="#0"><span>How to make a request for an online appointment?</span></a>
                            <div class="cd-faq__content">
                                <div class="text-component">
                                    <p>In sidebar menu, click on “Appointments”. Then, click on “Schedule an
                                        appointment”
                                        button. You can filter the appointments by selecting the preferred date and
                                        healthcare
                                        provider.
                                    </p>
                                </div>
                            </div> <!-- cd-faq__content -->
                        </li>

                        <li class="cd-faq__item">
                            <a class="cd-faq__trigger" href="#0"><span>My appointment status is pending, when will the status change to confirmed?</span></a>
                            <div class="cd-faq__content">
                                <div class="text-component">
                                    <p>To confirm your appointment, you must fill out a clinical questionnaire which is
                                        mandatory before the consultation time. You can find the questionnaire in
                                        upcoming
                                        appointments by clicking on “Appointments” then, click on “View scheduled
                                        appointments”.</p>
                                </div>
                            </div> <!-- cd-faq__content -->
                        </li>

                        <li class="cd-faq__item">
                            <a class="cd-faq__trigger"
                               href="#0"><span>Can I book online appointment for Mental Health?</span></a>
                            <div class="cd-faq__content">
                                <div class="text-component">
                                    <p>Yes, you can book an online appointment for Mental Health and/or Medical care</p>
                                </div>
                            </div> <!-- cd-faq__content -->
                        </li>

                        <li class="cd-faq__item">
                            <a class="cd-faq__trigger" href="#0"><span>Can I change the date and time of my confirmed appointment?</span></a>
                            <div class="cd-faq__content">
                                <div class="text-component">
                                    <p>No. You have to cancel the current appointment and create a new appointment</p>
                                </div>
                            </div> <!-- cd-faq__content -->
                        </li>

                        <li class="cd-faq__item">
                            <a class="cd-faq__trigger"
                               href="#0"><span>How to cancel an appointment I request?</span></a>
                            <div class="cd-faq__content">
                                <div class="text-component">
                                    <p>To Cancel your appointment, click on “View Scheduled Appointments”, then click on
                                        the
                                        “Cancel” button.</p>
                                </div>
                            </div> <!-- cd-faq__content -->
                        </li>
                        <li class="cd-faq__item">
                            <a class="cd-faq__trigger" href="#0"><span>How to join a consultation?</span></a>
                            <div class="cd-faq__content">
                                <div class="text-component">
                                    <p>To access to the online consultation session, click on “View Scheduled
                                        Appointments”,
                                        then click on the “Join” button.</p>
                                </div>
                            </div> <!-- cd-faq__content -->
                        </li>
                        <li class="cd-faq__item">
                            <a class="cd-faq__trigger"
                               href="#0"><span>Can I see the details of my past appointments?</span></a>
                            <div class="cd-faq__content">
                                <div class="text-component">
                                    <p>Yes, you can see all your past appointments and view medical reports by clicking
                                        on on
                                        “View Scheduled Appointments”.</p>
                                </div>
                            </div> <!-- cd-faq__content -->
                        </li>
                        <li class="cd-faq__item">
                            <a class="cd-faq__trigger"
                               href="#0"><span>Can I request more than one appointment?</span></a>
                            <div class="cd-faq__content">
                                <div class="text-component">
                                    <p>Yes. you can request more than one appointment. Just repeat the process of
                                        request a
                                        new appointment.</p>
                                </div>
                            </div> <!-- cd-faq__content -->
                        </li>
                    </ul> <!-- cd-faq__group -->
                </div> <!-- cd-faq__items -->
                <a href="index.php" class="cd-faq__close-panel text-replace">Close</a>
                <div class="cd-faq__overlay" aria-hidden="true"></div>
            </section> <!-- cd-faq -->
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
                <div class='text-muted' style='float: right; font-size: 0.85em;'>Language:&nbsp;<a href='/Student/Locale'>Default</a></div><!-- FOOTER -->
            </div>
        </div>
    </div>
</footer>
</body>
</html>