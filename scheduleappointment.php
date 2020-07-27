<?php
include_once('connection.php');
?>

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
            <form name="form" method="post" action="">
                <div>
                    <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value=""/>
                    <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value=""/>
                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value=""/>
                </div>

                <span>
                     <h2>Appointments for Prashanth Jayavaradhan</h2>
                      <br/>
                  </span>
                <table style="color: black">
                    <caption><h4 style="color: black"><b>Create a new appointment</b></h4></caption>
                    <thead>
                    <tr>
                        <Th class="select" style="padding-right: 0.25em">Specialty</Th>
                        <TD ALIGN="center" style="padding-right: 1em">
                            <label>
                                <select name="Specialty" id="Specialty">
                                    <option value=''>------- Select --------</option>
                                    <?php
                                    $sql = "select sp_id, sp_type from `specialty`";
                                    $res = mysqli_query($db, $sql);
                                    if (mysqli_num_rows($res) > 0) {
                                        while ($row = mysqli_fetch_object($res)) {
                                            echo "<option value='" . $row->sp_id . "'>" . $row->sp_type . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </label>
                        </TD>

                        <Th class="select" style="padding-right: 0.5em">Healthcare Provider Name</Th>
                        <TD ALIGN="center" style="padding-right: 3em">
                            <label>
                                <select name="hp_name" id="hp_name">
                                    <option>------- Select --------</option>
                                </select>
                            </label>
                        </TD>
                        <th style="padding-right: 0.5em">Date</th>
                        <td style="padding-right: 3em">
                            <div id="nav"></div></td>
                        <td><p><a href="" class="btn btn-primary btn-sm" style="width: 5em;">Search</a></p></td>

                    </tr>
                    </thead>
                </table>
                <div class="column-main">
                    <div class="toolbar">Available time slots:</div>
                    <div id="calendar"></div>
                </div>
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
            </div>
        </div>
    </div>
</footer>


<script src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script src="js/daypilot/daypilot-all.min.js"></script>
<script>
    var nav = new DayPilot.Navigator("nav");
    nav.selectMode = "day";
    nav.showMonths = 1;
    nav.skipMonths = 1;
    nav.onTimeRangeSelected = function (args) {
        loadEvents(args.start.firstDayOfWeek(DayPilot.Locale.find(nav.locale).weekStarts), args.start.addDays(7));
    };
    nav.init();

    var calendar = new DayPilot.Calendar("calendar");
    calendar.viewType = "Week";
    calendar.timeRangeSelectedHandling = "Disabled";
    calendar.eventMoveHandling = "Disabled";
    calendar.eventResizeHandling = "Disabled";
    calendar.onBeforeEventRender = function (args) {
        if (!args.data.tags) {
            return;
        }
        switch (args.data.tags.status) {
            case "free":
                args.data.barColor = "green";
                args.data.html = "Available<br/>" + args.data.tags.doctor;
                args.data.toolTip = "Click to request this time slot";
                break;
            case "waiting":
                args.data.barColor = "orange";
                args.data.html = "Your appointment, waiting for confirmation";
                break;
            case "confirmed":
                args.data.barColor = "#f41616";  // red
                args.data.html = "Your appointment, confirmed";
                break;
        }
    };
    calendar.onEventClick = function (args) {
        if (args.e.tag("status") !== "free") {
            calendar.message("You can only request a new appointment in a free slot.");
            return;
        }

        var modal = new DayPilot.Modal({
            onClosed: function (args) {
                if (args.result) {  // args.result is empty when modal is closed without submitting
                    loadEvents();
                }
            }
        });

        modal.showUrl("appointment_request.php?id=" + args.e.id());
    };
    calendar.init();

    loadEvents();


    function loadEvents(day) {
        var start = nav.visibleStart() > new DayPilot.Date() ? nav.visibleStart() : new DayPilot.Date();

        var params = {
            start: start.toString(),
            end: nav.visibleEnd().toString()
        };

        $.post("backend_events_free.php", JSON.stringify(params), function (data) {
            if (day) {
                calendar.startDate = day;
            }
            calendar.events.list = data;
            calendar.update();

            nav.events.list = data;
            nav.update();

        });
    }
</script>
</body>
</html>