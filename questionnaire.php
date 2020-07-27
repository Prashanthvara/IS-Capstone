<!DOCTYPE html>
<html lang="en" class="responsive">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Questionnaire</title>
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
$stmt = $db->prepare('SELECT * FROM appointment, specialty, doctor WHERE specialty.sp_id = doctor.sp_id AND doctor.doctor_id = appointment.doctor_id AND appointment.appointment_id =:id');
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
                <caption><h4 style="color: black"><b>Appointment Information</b></h4></caption>
                <tr>
                    <th style="padding: 1em">Healthcare Professional Name:</th>
                    <td style="padding: 1em">
                        <input type="text" id="end" name="end" disabled
                               value="<?php print ($event['doctor_name']) ?>"/>
                    </td>
                    <th style="padding: 1em">Specialty:</th>
                    <td style="padding: 1em">
                        <input type="text" id="end" name="end" disabled
                               value="<?php print ($event['sp_type']) ?>"/>
                    </td>
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
                    <Th style="padding: 1em">Appointment End Time:</Th>
                    <TD style="padding: 1em">
                        <input type="text" id="end" name="end" disabled
                               value="<?php print (new DateTime($event['appointment_end']))->format('d- M- y g:i A') ?>"/>
                    </TD>
                </tr>
            </table>
            <form action="viewscheduledappointments.php" method="post">
                <input type="hidden" , name="app_id" , value="<?php print ($event['appointment_id']) ?>">
                <table style="color: black">
                    <caption><h4 style="color: black"><b>Clinical Questionnaire</b></h4></caption>
                    <tr>
                        <Th style="padding: 1em">1. What do you hope to accomplish in your visit?</Th>
                        <TD style="padding: 1em">
                            <input type="text" id="end" name="q1" size="50"/>
                        </TD>
                    </tr>
                    <tr>
                        <Th style="padding: 1em">2. Is there anything you would like to work on to improve your
                            health?
                        </Th>
                        <TD style="padding: 1em">
                            <input type="text" id="end" name="q2" size="50"/>
                        </TD>
                    </tr>
                    <tr>
                        <Th style="padding: 1em">3. How often do you have a drink containing alcohol?</Th>
                        <TD style="padding: 1em">
                            <input type="radio" id="end" name="q3" value="Never"/><label for="1">Never</label><br>
                            <input type="radio" id="end" name="q3" value="Once a month or less"/><label for="2">Once a
                                month or less</label><br>
                            <input type="radio" id="end" name="q3" value="2-4 per month"/><label for="3">2-4 per
                                month</label><br>
                            <input type="radio" id="end" name="q3" value="2-3 per week"/><label for="4">2-3 per
                                week</label><br>
                            <input type="radio" id="end" name="q3" value="4 or more per week"/><label for="5">4 or more
                                per week</label><br>
                        </TD>
                    </tr>
                    <tr>
                        <Th style="padding: 1em">4. How many standard drinks containing alcohol do you have on a typical
                            day?
                        </Th>
                        <TD style="padding: 1em">
                            <input type="radio" id="end" name="q4" value="1 or 2"/><label for="1">1 or 2</label><br>
                            <input type="radio" id="end" name="q4" value="3 or 4"/><label for="2">3 or 4</label><br>
                            <input type="radio" id="end" name="q4" value="5 or 6"/><label for="3">5 or 6</label><br>
                            <input type="radio" id="end" name="q4" value="7 or 9"/><label for="4">7 or 9</label><br>
                            <input type="radio" id="end" name="q4" value="10 or more"/><label for="5">10 or more</label><br>
                        </TD>
                    </tr>
                    <tr>
                        <Th style="padding: 1em">5. Do you consume any caffeine?</Th>
                        <TD style="padding: 1em">
                            <input type="radio" id="end" name="q5" value="Yes"/><label for="1">Yes</label><br>
                            <input type="radio" id="end" name="q5" value="No"/><label for="2">No</label><br>
                        </TD>
                    </tr>
                    <tr>
                        <Th style="padding: 1em">6. If yes, How often and How much?</Th>
                        <TD style="padding: 1em">
                            <input type="text" id="end" name="q6" size="50"/>
                        </TD>
                    </tr>
                    <tr>
                        <Th style="padding: 1em">7. Do you exercise?</Th>
                        <TD style="padding: 1em">
                            <input type="radio" id="end" name="q7" value="Yes"/><label for="1">Yes</label><br>
                            <input type="radio" id="end" name="q7" value="No"/><label for="2">No</label><br>
                        </TD>
                    </tr>
                    <tr>
                        <Th style="padding: 1em">8. If yes, How often and How long?</Th>
                        <TD style="padding: 1em">
                            <input type="text" id="end" name="q8" size="50"/>
                        </TD>
                    </tr>
                    <tr>
                        <Th style="padding: 1em">9. Do you smoke?</Th>
                        <TD style="padding: 1em">
                            <input type="radio" id="end" name="q9" value="Yes"/><label for="1">Yes</label><br>
                            <input type="radio" id="end" name="q9" value="No"/><label for="2">No</label><br>
                        </TD>
                    </tr>
                    <tr>
                        <Th style="padding: 1em">10. If yes, How often and How many?</Th>
                        <TD style="padding: 1em">
                            <input type="text" id="end" name="q10" size="50"/>
                        </TD>
                    </tr>
                    <tr>
                        <Th style="padding: 1em">11. Do you have trouble taking any of your medications?</Th>
                        <TD style="padding: 1em">
                            <input type="radio" id="end" name="q11" value="Yes"/><label for="1">Yes</label><br>
                            <input type="radio" id="end" name="q11" value="No"/><label for="2">No</label><br>
                        </TD>
                    </tr>
                    <tr>
                        <Th style="padding: 1em">12. Are there any changes to your family's medical history?</Th>
                        <TD style="padding: 1em">
                            <input type="text" id="end" name="q12" size="50"/>
                        </TD>
                    </tr>
                    <tr>
                        <Th style="padding: 1em">13. Have you recently developed an allergy to any of your medications?
                            If yes, please describe below.
                        </Th>
                        <TD style="padding: 1em">
                            <input type="text" id="end" name="q13" size="50"/>
                        </TD>
                    </tr>
                    <tr>
                        <Th style="padding: 1em">14. Do you have any other concerns? If yes, please describe below.</Th>
                        <TD style="padding: 1em">
                            <input type="text" id="end" name="q14" size="50"/>
                        </TD>
                    </tr>
                </table>
                <input type="submit"/>
            </form>
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