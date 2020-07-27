<!DOCTYPE html>
<html lang="en" class="responsive">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Report</title>
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

<?php
// check the input
is_numeric($_GET['id']) or die("invalid URL");

require_once '_db.php';

$stmt = $db->prepare('SELECT * FROM appointment, specialty, doctor, report WHERE specialty.sp_id = doctor.sp_id AND doctor.doctor_id = appointment.doctor_id AND appointment.appointment_id = report.appointment_id and report.appointment_id = :id');
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();
$event = $stmt->fetch();

?>
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
            <!-- NAV -->
        </div>
        <div id="mainbody" class="col-md-9 col-md-offset-3">
            <table style="color: black">
                <caption><h4 style="color: black"><b>Consultation Report</b></h4></caption>
                <tr>
                    <th style="padding: 1em">Healthcare Professional Name:</th>
                    <td style="padding: 1em">
                        <input type="text" id="end" name="end" disabled
                               value="<?php print ($event['doctor_name']) ?>"/>
                    </td>
                </tr>
                <tr>
                    <th style="padding: 1em">Specialty:</th>
                    <td style="padding: 1em">
                        <input type="text" id="end" name="end" disabled
                               value="<?php print ($event['sp_type']) ?>"/>
                    </td>
                </tr>
                <tr>
                    <th style="padding: 1em">Reason for the Appointment:</th>
                    <td style="padding: 1em">
                        <input type="text" disabled
                               value="<?php print ($event['appointment_patient_name']) ?>"/>
                    </td>
                </tr>
                <tr>
                    <Th style="padding: 1em">Appointment Start Time:</Th>
                    <TD style="padding: 1em">
                        <input type="text" id="start" name="start" disabled
                               value="<?php print (new DateTime($event['appointment_start']))->format('d- M- y g:i A') ?>"/>
                    </TD>
                </tr>
                <tr>
                    <Th style="padding: 1em">Appointment End Time:</Th>
                    <TD style="padding: 1em">
                        <input type="text" id="end" name="end" disabled
                               value="<?php print (new DateTime($event['appointment_end']))->format('d- M- y g:i A') ?>"/>
                    </TD>
                </tr>
                <tr>
                    <Th style="padding: 1em">Diagnosis:</Th>
                    <TD style="padding: 1em">
                        <?php print ($event['diagnosis']) ?>
                    </TD>
                </tr>
                <tr>
                    <Th style="padding: 1em">Prescription:</Th>
                    <TD style="padding: 1em">
                        <?php print ($event['prescription']) ?>
                    </TD>
                </tr>
                <tr>
                    <Th style="padding: 1em">Course of Action:</Th>
                    <TD style="padding: 1em">
                        <?php print ($event['course_of_action']) ?>
                    </TD>
                </tr>
                <tr>
                    <Th style="padding: 1em">Next Visit:</Th>
                    <TD style="padding: 1em">
                        <?php print (new DateTime($event['next_visit']))->format('d- M- y') ?>
                    </TD>
                </tr>
            </table>
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
</body>
</html>