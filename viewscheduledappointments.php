<?php
include_once('connection.php');
$sql1 = "UPDATE appointment SET appointment_status = \"free\", appointment_patient_name= null ,appointment_patient_session = null WHERE appointment_id=" . $_GET['view_id'];
$result = mysqli_query($db, $sql1);

$sql = "INSERT INTO questionnaire (question1,question2,question3,question4,question5,question6,question7,question8,question9,question10,question11,question12,question13,question14,app_id) VALUES ('$_POST[q1]','$_POST[q2]','$_POST[q3]','$_POST[q4]','$_POST[q5]','$_POST[q6]','$_POST[q7]','$_POST[q8]','$_POST[q9]','$_POST[q10]','$_POST[q11]','$_POST[q12]','$_POST[q13]','$_POST[q14]','$_POST[app_id]')";
$result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html class="responsive" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="favicon.ico" rel="icon">
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
</head>
<body class='appointments_home'>
<a href='javascript:skipToContent();' id='ocommbypass'>Skip to main content</a>
<div id="idletimeout">
    You will be logged off in
    <span>
            <!-- countdown place holder -->
         </span>
    &nbsp;seconds due to inactivity.
    <p><a href="#" id="idletimeout-resume"></a>.</p>
</div>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle toggle-left hidden-md hidden-lg" data-target=".sidebar-left"
                    data-toggle="sidebar"
                    id="side-toggle" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar"
                    data-toggle="collapse" type="button">
                <span class="sr-only">Toggle user</span>
                <i class="fa fa-user"></i>
            </button>
            <a class="navbar-brand" href="home.aspx">
                <div>GW Colonial Health Center</div>
                <!-- BRAND -->
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user::before"></i> Prashanth Jayavaradhan<!-- USER --> <b class="caret"></b>
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
        <div class="col-xs-7 col-sm-3 col-md-3 sidebar sidebar-left sidebar-animate sidebar-md-show" id="sidebar">
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
        <div class="col-md-9 col-md-offset-3" id="mainbody">
            <div class="validation-summary" style="display: none;">
                <div class="header">The form was NOT submmitted!</div>
                <div class="message"></div>
            </div>
            <form action="./appointments_home.aspx" id="ctl03" method="post" name="ctl03">
                <div>
                    <input id="__EVENTTARGET" name="__EVENTTARGET" type="hidden" value=""/>
                    <input id="__EVENTARGUMENT" name="__EVENTARGUMENT" type="hidden" value=""/>
                    <input id="__VIEWSTATE" name="__VIEWSTATE" type="hidden" value=""/>
                </div>

                <span>
                     <h2>Appointments for Prashanth Jayavaradhan</h2>
                      <br/>
                  </span>

                <table style="color: black">
                    <caption><h4 style="color: black"><b>Upcoming Appointments</b></h4></caption>
                    <thead>
                    <tr>
                        <th style="padding-right: 4em">Doctor Name</th>
                        <th style="padding-right: 9em">Specialty</th>
                        <th style="padding-right: 4em">Reason</th>
                        <th style="padding-right: 10em">Date</th>
                        <th style="padding-right: 4em">Status</th>
                        <th style="padding-right: 4em">Questionnaire</th>
                        <th style="padding-right: 4em" colspan="3">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT doctor.doctor_name, specialty.sp_type, appointment.appointment_patient_name, appointment.appointment_start, appointment.appointment_status, appointment.appointment_id, doctor.webex_link FROM appointment, specialty, doctor WHERE specialty.sp_id = doctor.sp_id AND doctor.doctor_id = appointment.doctor_id  AND appointment.appointment_status IN('confirmed', 'waiting') AND appointment.appointment_start >= CURRENT_TIME ORDER BY appointment.appointment_start ASC";
                    $res = mysqli_query($db, $sql);
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_object($res)) {
                            echo "<tr><td>" . $row->doctor_name . "</td><td>" . $row->sp_type . "</td><td>" . $row->appointment_patient_name . "</td><td>" . (new DateTime($row->appointment_start))->format('d- M- y g:i A') . "</td><td>" . $row->appointment_status . "</td><td><p>";
                            $sql2 = "SELECT questionnaire.questionnaire_id FROM  questionnaire WHERE questionnaire.app_id=" . $row->appointment_id;
                            $res2 = mysqli_query($db, $sql2);
                            if (mysqli_num_rows($res2) > 0) {
                                echo "<a class=\"btn btn-primary btn-sm disabled\" style=\"width: 7em;\">Finished</a>";
                            } else {
                                echo "<a href=\"questionnaire.php?id= $row->appointment_id\" class=\"btn btn-primary btn-sm \" style=\"width: 7em;\">Finish</a>";
                            }
                            echo "</p></td><td><p><a href=\"javascript:view_id($row->appointment_id)\" class=\"btn btn-primary btn-sm\">Cancel</a></p></td><td><p>";
                            if ($row->appointment_status == "waiting") {
                                echo "<a class= \"btn btn-primary btn-sm disabled \">Join</a>" ;
                            } else {
                                echo "<a href=\"  $row->webex_link\" target=\"_blank\" class=\"btn btn-primary btn-sm\">Join</a>";
                            }

                            echo "</p></td></tr>";
                        }
                    }
                    ?>
                    </tbody>
                </table>

                <table style="color: black">
                    <caption><h4 style="color: black"><b>Past Appointments</b></h4></caption>
                    <thead>
                    <tr>
                        <th style="padding-right: 4em">Doctor Name</th>
                        <th style="padding-right: 9em">Specialty</th>
                        <th style="padding-right: 4em">Reason</th>
                        <th style="padding-right: 10em">Date</th>
                        <th style="padding-right: 4em">Status</th>
                        <th style="padding-right: 4em">Documents</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT doctor.doctor_name, specialty.sp_type, appointment.appointment_patient_name, appointment.appointment_start, appointment.appointment_status, appointment.appointment_id FROM appointment, specialty, doctor WHERE specialty.sp_id = doctor.sp_id AND doctor.doctor_id = appointment.doctor_id AND appointment.appointment_status IN('confirmed') AND appointment.appointment_start <= CURRENT_TIME ORDER BY appointment.appointment_start DESC";
                    $res = mysqli_query($db, $sql);
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_object($res)) {
                            echo "<tr><td>" . $row->doctor_name . "</td><td>" . $row->sp_type . "</td><td>" . $row->appointment_patient_name . "</td><td>" . (new DateTime($row->appointment_start))->format('d- M- y g:i A') . "</td><td>" . $row->appointment_status . "</td><td><p><a href=\"report.php?id= $row->appointment_id\" target=\"_blank\" class=\"btn btn-primary btn-sm\" style=\"width: 7em;\">Report</a></p></td></tr>";
                        }
                    }
                    ?>
                    </tbody>
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
            <div class="col-md-9 col-md-offset-3" id="footer">
                <p class="text-muted" style="float: left;"></p>
                <p style='float: left;'' class='text-muted'>Powered by Point and Click Solutions © 2020 </p>
                <div class='text-muted' style='float: right; font-size: 0.85em;'>Language:&nbsp;<a
                            href='/Student/Locale'>Default</a></div><!-- FOOTER --></p>
            </div>
        </div>
    </div>
</footer>
<script>
    function view_id(id) {
        if (confirm('Are you sure you want to cancel this appointment? ')) {
            window.location = 'viewscheduledappointments.php?view_id=' + id;

        }
    }
</script>
</body>
</html>