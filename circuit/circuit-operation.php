<?php include_once('../scripts/db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<?php include('inc/head.php'); ?>

<body class="">
    <div class="wrapper ">
        <?php include('inc/aside.php'); ?>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Generate Report</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">

                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">

                            </li>

                            <?php include('inc/settings.php'); ?>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Report</h5>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <form>
                                    <!-- Content here -->
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group">
                                                <select name="month" id="month" class="form-control">
                                                    <option value="None">Select Month</option>
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <select name="year" id="year" class="form-control">

                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                                <option value="2031">2031</option>
                                                <option value="2032">2032</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12">
                                            <div id="showMessage"></div>
                                            <table class="table table2excel table2excel_with_colors">
                                                <thead>
                                                    <tr>
                                                        <th colspan="11">
                                                            <div align="center">THE METHODIST CHURCH GHANA</div>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="11">
                                                            <div align="center">Monthly Operating Statistical Returns (Society)</div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <th colspan="4">
                                                            <div align="center">Operations</div>
                                                        </th>
                                                        <th colspan="4">
                                                            <div align="center">Numbers</div>
                                                        </th>
                                                        <th></th>
                                                        <th></th>

                                                    </tr>
                                                    <tr>
                                                        <th></th>
                                                        <th colspan="4"></th>
                                                        <th>Week1</th>
                                                        <th>Week2</th>
                                                        <th>Week3</th>
                                                        <th>Week4</th>
                                                        <th>Week5</th>
                                                        <th>Totals</th>
                                                    </tr>
                                                    <tr>
                                                        <td id="op_id1_text">1</td>
                                                        <td colspan="4" id="op_Numberofclasses_text">Number of classes</td>
                                                        <td><input type="number" id="op_Numberofclasses_Week1" name="op_Numberofclasses_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Numberofclasses_Week2" name="op_Numberofclasses_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Numberofclasses_Week3" name="op_Numberofclasses_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Numberofclasses_Week4" name="op_Numberofclasses_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Numberofclasses_Week5" name="op_Numberofclasses_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Numberofclasses_Total" name="op_Numberofclasses_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id2_text">2</td>
                                                        <td colspan="4" id="op_ClassMembership_text">Class Membership</td>
                                                        <td><input type="number" id="op_ClassMembership_Week1" name="op_ClassMembership_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ClassMembership_Week2" name="op_ClassMembership_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ClassMembership_Week3" name="op_ClassMembership_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ClassMembership_Week4" name="op_ClassMembership_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ClassMembership_Week5" name="op_ClassMembership_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ClassMembership_Total" name="op_ClassMembership_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id3_text">3</td>
                                                        <td colspan="4" id="op_ClassMeetings_text">Class Meetings Attendances</td>
                                                        <td><input type="number" id="op_ClassMeetings_Week1" name="op_ClassMeetings_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ClassMeetings_Week2" name="op_ClassMeetings_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ClassMeetings_Week3" name="op_ClassMeetings_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ClassMeetings_Week4" name="op_ClassMeetings_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ClassMeetings_Week5" name="op_ClassMeetings_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ClassMeetings_Total" name="op_ClassMeetings_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id4_text">4</td>
                                                        <td colspan="4" id="op_ChurchServices_text">Church Services Attendance</td>
                                                        <td><input type="number" id="op_ChurchServices_Week1" name="op_ChurchServices_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChurchServices_Week2" name="op_ChurchServices_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChurchServices_Week3" name="op_ChurchServices_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChurchServices_Week4" name="op_ChurchServices_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChurchServices_Week5" name="op_ChurchServices_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChurchServices_Total" name="op_ChurchServices_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id4a_text">4a</td>
                                                        <td colspan="4" id="op_AdultService_text">Adult Service Attendance</td>
                                                        <td><input type="number" id="op_AdultService_Week1" name="op_AdultService_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_AdultService_Week2" name="op_AdultService_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_AdultService_Week3" name="op_AdultService_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_AdultService_Week4" name="op_AdultService_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_AdultService_Week5" name="op_AdultService_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_AdultService_Total" name="op_AdultService_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id4b_text">4b</td>
                                                        <td colspan="4" id="op_Youth_TeensServices_text">Youth/Teens Services Attendance</td>
                                                        <td><input type="number" id="op_Youth_TeensServices_Week1" name="op_Youth_TeensServices_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Youth_TeensServices_Week2" name="op_Youth_TeensServices_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Youth_TeensServices_Week3" name="op_Youth_TeensServices_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Youth_TeensServices_Week4" name="op_Youth_TeensServices_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Youth_TeensServices_Week5" name="op_Youth_TeensServices_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Youth_TeensServices_Total" name="op_Youth_TeensServices_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id4c_text">4c</td>
                                                        <td colspan="4" id="op_ChildrenServices_text">Children Services Participants</td>
                                                        <td><input type="number" id="op_Youth_TeensServices_Week1" name="op_ChildrenServices_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChildrenServices_Week2" name="op_ChildrenServices_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChildrenServices_Week3" name="op_ChildrenServices_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChildrenServices_Week4" name="op_ChildrenServices_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChildrenServices_Week5" name="op_ChildrenServices_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChildrenServices_Total" name="op_ChildrenServices_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id5_text">5</td>
                                                        <td colspan="4" id="op_Communion_text">Communion Service Participants</td>
                                                        <td><input type="number" id="op_Communion_Week1" name="op_Communion_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Communion_Week2" name="op_Communion_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Communion_Week3" name="op_Communion_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Communion_Week4" name="op_Communion_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Communion_Week5" name="op_Communion_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Communion_Total" name="op_Communion_Total" class="form-control" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="op_id6_text">6</td>
                                                        <td colspan="4" id="op_NewMembersReceived_text">New Members Received at Leaders Meeting</td>
                                                        <td><input type="number" id="op_NewMembersReceived_Week1" name="op_NewMembersReceived_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_NewMembersReceived_Week2" name="op_NewMembersReceived_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_NewMembersReceived_Week3" name="op_NewMembersReceived_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_NewMembersReceived_Week4" name="op_NewMembersReceived_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_NewMembersReceived_Week5" name="op_NewMembersReceived_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_NewMembersReceived_Total" name="op_NewMembersReceived_Total" class="form-control" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="op_id7_text">7</td>
                                                        <td colspan="4" id="op_Visitors_text">Visitors</td>
                                                        <td><input type="number" id="op_Visitors_Week1" name="op_Visitors_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Visitors_Week2" name="op_Visitors_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Visitors_Week3" name="op_Visitors_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Visitors_Week4" name="op_Visitors_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Visitors_Week5" name="op_Visitors_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Visitors_Total" name="op_Visitors_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id8_text">8</td>
                                                        <td colspan="4" id="op_PrayerMeeting_text">Prayer Meeting Attendance</td>
                                                        <td><input type="number" id="op_PrayerMeeting_Week1" name="op_PrayerMeeting_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_PrayerMeeting_Week2" name="op_PrayerMeeting_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_PrayerMeeting_Week3" name="op_PrayerMeeting_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_PrayerMeeting_Week4" name="op_PrayerMeeting_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_PrayerMeeting_Week5" name="op_PrayerMeeting_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_PrayerMeeting_Total" name="op_PrayerMeeting_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id9_text">9</td>
                                                        <td colspan="4" id="op_MPRP_text">MPRP Attendance</td>
                                                        <td><input type="number" id="op_MPRP_Week1" name="op_MPRP_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_MPRP_Week2" name="op_MPRP_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_MPRP_Week3" name="op_MPRP_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_MPRP_Week4" name="op_MPRP_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_MPRP_Week5" name="op_MPRP_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_MPRP_Total" name="op_MPRP_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id10_text">10</td>
                                                        <td colspan="4" id="op_RevivalMeeting_text">Revival Meeting Attendance</td>
                                                        <td><input type="number" id="op_RevivalMeeting_Week1" name="op_RevivalMeeting_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_RevivalMeeting_Week2" name="op_RevivalMeeting_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_RevivalMeeting_Week3" name="op_RevivalMeeting_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_RevivalMeeting_Week4" name="op_RevivalMeeting_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_RevivalMeeting_Week5" name="op_RevivalMeeting_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_RevivalMeeting_Total" name="op_RevivalMeeting_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id11_text">11</td>
                                                        <td colspan="4" id="op_Outreach_text">Outreach Members Participating</td>
                                                        <td><input type="number" id="op_Outreach_Week1" name="op_Outreach_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Outreach_Week2" name="op_Outreach_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Outreach_Week3" name="op_Outreach_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Outreach_Week4" name="op_Outreach_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Outreach_Week5" name="op_Outreach_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Outreach_Total" name="op_Outreach_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id12_text">12</td>
                                                        <td colspan="4" id="op_Souls_text">Souls Won(New Members)</td>
                                                        <td><input type="number" id="op_Souls_Week1" name="op_Souls_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Souls_Week2" name="op_Souls_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Souls_Week3" name="op_Souls_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Souls_Week4" name="op_Souls_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Souls_Week5" name="op_Souls_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Souls_Total" name="op_Souls_Total" class="form-control" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="op_id13_text">13</td>
                                                        <td colspan="4" id="op_Marriages_text">Marriages</td>
                                                        <td><input type="number" id="op_Marriages_Week1" name="op_Marriages_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Marriages_Week2" name="op_Marriages_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Marriages_Week3" name="op_Marriages_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Marriages_Week4" name="op_Marriages_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Marriages_Week5" name="op_Marriages_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Marriages_Total" name="op_Marriages_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id14_text">14</td>
                                                        <td colspan="4" id="op_Births_text">Births</td>
                                                        <td><input type="number" id="op_Births_Week1" name="op_Births_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Births_Week2" name="op_Births_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Births_Week3" name="op_Births_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Births_Week4" name="op_Births_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Births_Week5" name="op_Births_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Births_Total" name="op_Births_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id15_text">15</td>
                                                        <td colspan="4" id="op_Baptisms_text">Baptisms</td>
                                                        <td><input type="number" id="op_Baptisms_Week1" name="op_Baptisms_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Baptisms_Week2" name="op_Baptisms_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Baptisms_Week3" name="op_Baptisms_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Baptisms_Week4" name="op_Baptisms_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Baptisms_Week5" name="op_Baptisms_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Baptisms_Total" name="op_Baptisms_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id16_text">16</td>
                                                        <td colspan="4" id="op_Confirmations_text">Confirmations</td>
                                                        <td><input type="number" id="op_Confirmations_Week1" name="op_Confirmations_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Confirmations_Week2" name="op_Confirmations_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Confirmations_Week3" name="op_Confirmations_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Confirmations_Week4" name="op_Confirmations_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Confirmations_Week5" name="op_Confirmations_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Confirmations_Total" name="op_Confirmations_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id17_text">17</td>
                                                        <td colspan="4" id="op_OrganisationMembership_text">Organisation Membership</td>
                                                        <td><input type="number" id="op_OrganisationMembership_Week1" name="op_OrganisationMembership_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_OrganisationMembership_Week2" name="op_OrganisationMembership_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_OrganisationMembership_Week3" name="op_OrganisationMembership_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_OrganisationMembership_Week4" name="op_OrganisationMembership_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_OrganisationMembership_Week5" name="op_OrganisationMembership_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_OrganisationMembership_Total" name="op_OrganisationMembership_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id18_text">18</td>
                                                        <td colspan="4" id="op_OrganisationMeetingAttendance_text">Organisation Meeting Attendance</td>
                                                        <td><input type="number" id="op_OrganisationMeetingAttendance_Week1" name="op_OrganisationMeetingAttendance_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_OrganisationMeetingAttendance_Week2" name="op_OrganisationMeetingAttendance_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_OrganisationMeetingAttendance_Week3" name="op_OrganisationMeetingAttendance_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_OrganisationMeetingAttendance_Week4" name="op_OrganisationMeetingAttendance_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_OrganisationMeetingAttendance_Week5" name="op_OrganisationMeetingAttendance_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_OrganisationMeetingAttendance_Total" name="op_OrganisationMeetingAttendance_Total" class="form-control" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="op_ida_text">a</td>
                                                        <td colspan="4" id="op_BoysandGirlsBrigade_text">Boys and Girls Brigade</td>
                                                        <td><input type="number" id="op_BoysandGirlsBrigade_Week1" name="op_BoysandGirlsBrigade_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_BoysandGirlsBrigade_Week2" name="op_BoysandGirlsBrigade_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_BoysandGirlsBrigade_Week3" name="op_BoysandGirlsBrigade_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_BoysandGirlsBrigade_Week4" name="op_BoysandGirlsBrigade_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_BoysandGirlsBrigade_Week5" name="op_BoysandGirlsBrigade_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_BoysandGirlsBrigade_Total" name="op_BoysandGirlsBrigade_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_idb_text">b</td>
                                                        <td colspan="4" id="op_GirlsFellowship_text">Girls Fellowship</td>
                                                        <td><input type="number" id="op_GirlsFellowship_Week1" name="op_GirlsFellowship_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_GirlsFellowship_Week2" name="op_GirlsFellowship_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_GirlsFellowship_Week3" name="op_GirlsFellowship_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_GirlsFellowship_Week4" name="op_GirlsFellowship_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_GirlsFellowship_Week5" name="op_GirlsFellowship_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_GirlsFellowship_Total" name="op_GirlsFellowship_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_idc_text">c</td>
                                                        <td colspan="4" id="op_YouthFellowship_text">Youth Fellowship</td>
                                                        <td><input type="number" id="op_YouthFellowship_Week1" name="op_YouthFellowship_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_YouthFellowship_Week2" name="op_YouthFellowship_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_YouthFellowship_Week3" name="op_YouthFellowship_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_YouthFellowship_Week4" name="op_YouthFellowship_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_YouthFellowship_Week5" name="op_YouthFellowship_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_YouthFellowship_Total" name="op_YouthFellowship_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_idd_text">d</td>
                                                        <td colspan="4" id="op_WomenFellowship_text">Women's Fellowship</td>
                                                        <td><input type="number" id="op_WomenFellowship_Week1" name="op_WomenFellowship_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_WomenFellowship_Week2" name="op_WomenFellowship_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_WomenFellowship_Week3" name="op_WomenFellowship_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_WomenFellowship_Week4" name="op_WomenFellowship_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_WomenFellowship_Week5" name="op_WomenFellowship_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_WomenFellowship_Total" name="op_WomenFellowship_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_ide_text">e</td>
                                                        <td colspan="4" id="op_MenFellowship_text">Men's Fellowship</td>
                                                        <td><input type="number" id="op_MenFellowship_Week1" name="op_MenFellowship_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_MenFellowship_Week2" name="op_MenFellowship_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_MenFellowship_Week3" name="op_MenFellowship_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_MenFellowship_Week4" name="op_MenFellowship_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_MenFellowship_Week5" name="op_MenFellowship_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_MenFellowship_Total" name="op_MenFellowship_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_idf_text">f</td>
                                                        <td colspan="4" id="op_SusannaWesleyAuxillary_text">Susanna Wesley Auxillary</td>
                                                        <td><input type="number" id="op_SusannaWesleyAuxillary_Week1" name="op_SusannaWesleyAuxillary_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_SusannaWesleyAuxillary_Week2" name="op_SusannaWesleyAuxillary_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_SusannaWesleyAuxillary_Week3" name="op_SusannaWesleyAuxillary_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_SusannaWesleyAuxillary_Week4" name="op_SusannaWesleyAuxillary_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_SusannaWesleyAuxillary_Week5" name="op_SusannaWesleyAuxillary_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_SusannaWesleyAuxillary_Total" name="op_SusannaWesleyAuxillary_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_idg_text">g</td>
                                                        <td colspan="4" id="op_ChristLittleBand_text">Christ Little Band</td>
                                                        <td><input type="number" id="op_ChristLittleBand_Week1" name="op_ChristLittleBand_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChristLittleBand_Week2" name="op_ChristLittleBand_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChristLittleBand_Week3" name="op_ChristLittleBand_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChristLittleBand_Week4" name="op_ChristLittleBand_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChristLittleBand_Week5" name="op_ChristLittleBand_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_ChristLittleBand_Total" name="op_ChristLittleBand_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_idh_text">h</td>
                                                        <td colspan="4" id="op_Choir_text">Choir</td>
                                                        <td><input type="number" id="op_Choir_Week1" name="op_Choir_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Choir_Week2" name="op_Choir_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Choir_Week3" name="op_Choir_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Choir_Week4" name="op_Choir_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Choir_Week5" name="op_Choir_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Choir_Total" name="op_Choir_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_idi_text">i</td>
                                                        <td colspan="4" id="op_SingingBand_text">Singing Band</td>
                                                        <td><input type="number" id="op_SingingBand_Week1" name="op_SingingBand_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_SingingBand_Week2" name="op_SingingBand_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_SingingBand_Week3" name="op_SingingBand_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_SingingBand_Week4" name="op_SingingBand_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_SingingBand_Week5" name="op_SingingBand_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_SingingBand_Total" name="op_SingingBand_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_idj_text">j</td>
                                                        <td colspan="4" id="op_Guild_text">Guild</td>
                                                        <td><input type="number" id="op_Guild_Week1" name="op_Guild_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Guild_Week2" name="op_Guild_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Guild_Week3" name="op_Guild_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Guild_Week4" name="op_Guild_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Guild_Week5" name="op_Guild_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Guild_Total" name="op_Guild_Total" class="form-control" value="0"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="op_id19_text">19</td>
                                                        <td colspan="4" id="op_Deaths_text">Deaths</td>
                                                        <td><input type="number" id="op_Deaths_Week1" name="op_Deaths_Week1" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Deaths_Week2" name="op_Deaths_Week2" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Deaths_Week3" name="op_Deaths_Week3" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Deaths_Week4" name="op_Deaths_Week4" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Deaths_Week5" name="op_Deaths_Week5" class="form-control" value="0"></td>
                                                        <td><input type="number" id="op_Deaths_Total" name="op_Deaths_Total" class="form-control" value="0"></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12">
                                            <div align="center">
                                                <!-- <button type="button" id="exporToExcel" class="btn btn-primary btn-sm">ADD</button> -->
                                                <div id="showBTN"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <?php include('inc/footer.php'); ?>

        </div>
    </div>
    <!--   Core JS Files   -->
    <?php include('inc/footerjs.php'); ?>
</body>

</html>
<script>
    $(document).ready(function() {
        var christain_male = '';
        var christain_female = '';
        var christain_total = '';

        var full_male = '';
        var full_female = '';
        var full_total = '';

        var junior_male = '';
        var junior_female = '';
        var junior_total = '';

        var catechumens_male = '';
        var catechumens_female = '';
        var catechumens_total = '';

        var adherents_male = '';
        var adherents_female = '';
        var adherents_total = '';

        function showNotification(from, align, data) {
            color = 'primary';

            $.notify({
                icon: "nc-icon nc-bell-55",
                message: data

            }, {
                type: color,
                timer: 8000,
                placement: {
                    from: from,
                    align: align
                }
            });
        }


        $('#month').change(function() {
            var op_selectMonth = $(this).val();
            var op_selectyear = $('#year').val();
            if ($(this).val() == "None") {
                alert("Please Select Month");
                $('#saveFirstBTN').attr('disabled', true);
                $('#addMoreBTN').attr('disabled', true);
            } else {
                $.ajax({
                    url: '../scripts/fetch.php',
                    method: 'POST',
                    data: {
                        op_selectMonth,
                        op_selectyear
                    },
                    success: function(data) {
                        $('#showBTN').html(data);
                        $('#saveFirstBTN').attr('disabled', false);
                        $('#addMoreBTN').attr('disabled', false);
                    }
                })
            }
        })


        $(document).on('click', '#saveFirstBTN', function() {

            let op_id1_text = $('#op_id1_text').text();
            let op_Numberofclasses_text = $('#op_Numberofclasses_text').text();
            let op_Numberofclasses_Week1 = $('#op_Numberofclasses_Week1').val();
            let op_Numberofclasses_Week2 = $('#op_Numberofclasses_Week2').val();
            let op_Numberofclasses_Week3 = $('#op_Numberofclasses_Week3').val();
            let op_Numberofclasses_Week4 = $('#op_Numberofclasses_Week4').val();
            let op_Numberofclasses_Week5 = $('#op_Numberofclasses_Week5').val();
            let op_Numberofclasses_Total = $('#op_Numberofclasses_Total').val();

            let op_id2_text = $('#op_id2_text').text();
            let op_ClassMembership_text = $('#op_ClassMembership_text').text();
            let op_ClassMembership_Week1 = $('#op_ClassMembership_Week1').val();
            let op_ClassMembership_Week2 = $('#op_ClassMembership_Week2').val();
            let op_ClassMembership_Week3 = $('#op_ClassMembership_Week3').val();
            let op_ClassMembership_Week4 = $('#op_ClassMembership_Week4').val();
            let op_ClassMembership_Week5 = $('#op_ClassMembership_Week5').val();
            let op_ClassMembership_Total = $('#op_ClassMembership_Total').val();

            let op_id3_text = $('#op_id3_text').text();
            let op_ClassMeetings_text = $('#op_ClassMeetings_text').text();
            let op_ClassMeetings_Week1 = $('#op_ClassMeetings_Week1').val();
            let op_ClassMeetings_Week2 = $('#op_ClassMeetings_Week2').val();
            let op_ClassMeetings_Week3 = $('#op_ClassMeetings_Week3').val();
            let op_ClassMeetings_Week4 = $('#op_ClassMeetings_Week4').val();
            let op_ClassMeetings_Week5 = $('#op_ClassMeetings_Week5').val();
            let op_ClassMeetings_Total = $('#op_ClassMeetings_Total').val();

            let op_id4_text = $('#op_id4_text').text();
            let op_ChurchServices_text = $('#op_ChurchServices_text').text();
            let op_ChurchServices_Week1 = $('#op_ChurchServices_Week1').val();
            let op_ChurchServices_Week2 = $('#op_ChurchServices_Week2').val();
            let op_ChurchServices_Week3 = $('#op_ChurchServices_Week3').val();
            let op_ChurchServices_Week4 = $('#op_ChurchServices_Week4').val();
            let op_ChurchServices_Week5 = $('#op_ChurchServices_Week5').val();
            let op_ChurchServices_Total = $('#op_ChurchServices_Total').val();

            let op_id4a_text = $('#op_id4a_text').text();
            let op_AdultService_text = $('#op_AdultService_text').text();
            let op_AdultService_Week1 = $('#op_AdultService_Week1').val();
            let op_AdultService_Week2 = $('#op_AdultService_Week2').val();
            let op_AdultService_Week3 = $('#op_AdultService_Week3').val();
            let op_AdultService_Week4 = $('#op_AdultService_Week4').val();
            let op_AdultService_Week5 = $('#op_AdultService_Week5').val();
            let op_AdultService_Total = $('#op_AdultService_Total').val();

            let op_id4b_text = $('#op_id4b_text').text();
            let op_Youth_TeensServices_text = $('#op_Youth_TeensServices_text').text();
            let op_Youth_TeensServices_Week1 = $('#op_Youth_TeensServices_Week1').val();
            let op_Youth_TeensServices_Week2 = $('#op_Youth_TeensServices_Week2').val();
            let op_Youth_TeensServices_Week3 = $('#op_Youth_TeensServices_Week3').val();
            let op_Youth_TeensServices_Week4 = $('#op_Youth_TeensServices_Week4').val();
            let op_Youth_TeensServices_Week5 = $('#op_Youth_TeensServices_Week5').val();
            let op_Youth_TeensServices_Total = $('#op_Youth_TeensServices_Total').val();

            let op_id4c_text = $('#op_id4c_text').text();
            let op_ChildrenServices_text = $('#op_ChildrenServices_text').text();
            let op_ChildrenServices_Week1 = $('#op_ChildrenServices_Week1').val();
            let op_ChildrenServices_Week2 = $('#op_ChildrenServices_Week2').val();
            let op_ChildrenServices_Week3 = $('#op_ChildrenServices_Week3').val();
            let op_ChildrenServices_Week4 = $('#op_ChildrenServices_Week4').val();
            let op_ChildrenServices_Week5 = $('#op_ChildrenServices_Week5').val();
            let op_ChildrenServices_Total = $('#op_ChildrenServices_Total').val();

            let op_id5_text = $('#op_id5_text').text();
            let op_Communion_text = $('#op_Communion_text').text();
            let op_Communion_Week1 = $('#op_Communion_Week1').val();
            let op_Communion_Week2 = $('#op_Communion_Week2').val();
            let op_Communion_Week3 = $('#op_Communion_Week3').val();
            let op_Communion_Week4 = $('#op_Communion_Week4').val();
            let op_Communion_Week5 = $('#op_Communion_Week5').val();
            let op_Communion_Total = $('#op_Communion_Total').val();

            let op_id6_text = $('#op_id6_text').text();
            let op_NewMembersReceived_text = $('#op_NewMembersReceived_text').text();
            let op_NewMembersReceived_Week1 = $('#op_NewMembersReceived_Week1').val();
            let op_NewMembersReceived_Week2 = $('#op_NewMembersReceived_Week2').val();
            let op_NewMembersReceived_Week3 = $('#op_NewMembersReceived_Week3').val();
            let op_NewMembersReceived_Week4 = $('#op_NewMembersReceived_Week4').val();
            let op_NewMembersReceived_Week5 = $('#op_NewMembersReceived_Week5').val();
            let op_NewMembersReceived_Total = $('#op_NewMembersReceived_Total').val();

            let op_id7_text = $('#op_id7_text').text();
            let op_Visitors_text = $('#op_Visitors_text').text();
            let op_Visitors_Week1 = $('#op_Visitors_Week1').val();
            let op_Visitors_Week2 = $('#op_Visitors_Week2').val();
            let op_Visitors_Week3 = $('#op_Visitors_Week3').val();
            let op_Visitors_Week4 = $('#op_Visitors_Week4').val();
            let op_Visitors_Week5 = $('#op_Visitors_Week5').val();
            let op_Visitors_Total = $('#op_Visitors_Total').val();

            let op_id8_text = $('#op_id8_text').text();
            let op_PrayerMeeting_text = $('#op_PrayerMeeting_text').text();
            let op_PrayerMeeting_Week1 = $('#op_PrayerMeeting_Week1').val();
            let op_PrayerMeeting_Week2 = $('#op_PrayerMeeting_Week2').val();
            let op_PrayerMeeting_Week3 = $('#op_PrayerMeeting_Week3').val();
            let op_PrayerMeeting_Week4 = $('#op_PrayerMeeting_Week4').val();
            let op_PrayerMeeting_Week5 = $('#op_PrayerMeeting_Week5').val();
            let op_PrayerMeeting_Total = $('#op_PrayerMeeting_Total').val();

            let op_id9_text = $('#op_id9_text').text();
            let op_MPRP_text = $('#op_MPRP_text').text();
            let op_MPRP_Week1 = $('#op_MPRP_Week1').val();
            let op_MPRP_Week2 = $('#op_MPRP_Week2').val();
            let op_MPRP_Week3 = $('#op_MPRP_Week3').val();
            let op_MPRP_Week4 = $('#op_MPRP_Week4').val();
            let op_MPRP_Week5 = $('#op_MPRP_Week5').val();
            let op_MPRP_Total = $('#op_MPRP_Total').val();

            let op_id10_text = $('#op_id10_text').text();
            let op_RevivalMeeting_text = $('#op_RevivalMeeting_text').text();
            let op_RevivalMeeting_Week1 = $('#op_RevivalMeeting_Week1').val();
            let op_RevivalMeeting_Week2 = $('#op_RevivalMeeting_Week2').val();
            let op_RevivalMeeting_Week3 = $('#op_RevivalMeeting_Week3').val();
            let op_RevivalMeeting_Week4 = $('#op_RevivalMeeting_Week4').val();
            let op_RevivalMeeting_Week5 = $('#op_RevivalMeeting_Week5').val();
            let op_RevivalMeeting_Total = $('#op_RevivalMeeting_Total').val();

            let op_id11_text = $('#op_id11_text').text();
            let op_Outreach_text = $('#op_Outreach_text').text();
            let op_Outreach_Week1 = $('#op_Outreach_Week1').val();
            let op_Outreach_Week2 = $('#op_Outreach_Week2').val();
            let op_Outreach_Week3 = $('#op_Outreach_Week3').val();
            let op_Outreach_Week4 = $('#op_Outreach_Week4').val();
            let op_Outreach_Week5 = $('#op_Outreach_Week5').val();
            let op_Outreach_Total = $('#op_Outreach_Total').val();

            let op_id12_text = $('#op_id12_text').text();
            let op_Souls_text = $('#op_Souls_text').text();
            let op_Souls_Week1 = $('#op_Souls_Week1').val();
            let op_Souls_Week2 = $('#op_Souls_Week2').val();
            let op_Souls_Week3 = $('#op_Souls_Week3').val();
            let op_Souls_Week4 = $('#op_Souls_Week4').val();
            let op_Souls_Week5 = $('#op_Souls_Week5').val();
            let op_Souls_Total = $('#op_Souls_Total').val();

            let op_id13_text = $('#op_id13_text').text();
            let op_Marriages_text = $('#op_Marriages_text').text();
            let op_Marriages_Week1 = $('#op_Marriages_Week1').val();
            let op_Marriages_Week2 = $('#op_Marriages_Week2').val();
            let op_Marriages_Week3 = $('#op_Marriages_Week3').val();
            let op_Marriages_Week4 = $('#op_Marriages_Week4').val();
            let op_Marriages_Week5 = $('#op_Marriages_Week5').val();
            let op_Marriages_Total = $('#op_Marriages_Total').val();

            let op_id14_text = $('#op_id14_text').text();
            let op_Births_text = $('#op_Births_text').text();
            let op_Births_Week1 = $('#op_Births_Week1').val();
            let op_Births_Week2 = $('#op_Births_Week2').val();
            let op_Births_Week3 = $('#op_Births_Week3').val();
            let op_Births_Week4 = $('#op_Births_Week4').val();
            let op_Births_Week5 = $('#op_Births_Week5').val();
            let op_Births_Total = $('#op_Births_Total').val();

            let op_id15_text = $('#op_id15_text').text();
            let op_Baptisms_text = $('#op_Baptisms_text').text();
            let op_Baptisms_Week1 = $('#op_Baptisms_Week1').val();
            let op_Baptisms_Week2 = $('#op_Baptisms_Week2').val();
            let op_Baptisms_Week3 = $('#op_Baptisms_Week3').val();
            let op_Baptisms_Week4 = $('#op_Baptisms_Week4').val();
            let op_Baptisms_Week5 = $('#op_Baptisms_Week5').val();
            let op_Baptisms_Total = $('#op_Baptisms_Total').val();

            let op_id16_text = $('#op_id16_text').text();
            let op_Confirmations_text = $('#op_Confirmations_text').text();
            let op_Confirmations_Week1 = $('#op_Confirmations_Week1').val();
            let op_Confirmations_Week2 = $('#op_Confirmations_Week2').val();
            let op_Confirmations_Week3 = $('#op_Confirmations_Week3').val();
            let op_Confirmations_Week4 = $('#op_Confirmations_Week4').val();
            let op_Confirmations_Week5 = $('#op_Confirmations_Week5').val();
            let op_Confirmations_Total = $('#op_Confirmations_Total').val();

            let op_id17_text = $('#op_id17_text').text();
            let op_OrganisationMembership_text = $('#op_OrganisationMembership_text').text();
            let op_OrganisationMembership_Week1 = $('#op_OrganisationMembership_Week1').val();
            let op_OrganisationMembership_Week2 = $('#op_OrganisationMembership_Week2').val();
            let op_OrganisationMembership_Week3 = $('#op_OrganisationMembership_Week3').val();
            let op_OrganisationMembership_Week4 = $('#op_OrganisationMembership_Week4').val();
            let op_OrganisationMembership_Week5 = $('#op_OrganisationMembership_Week5').val();
            let op_OrganisationMembership_Total = $('#op_OrganisationMembership_Total').val();

            let op_id18_text = $('#op_id18_text').text();
            let op_OrganisationMeetingAttendance_text = $('#op_OrganisationMeetingAttendance_text').text();
            let op_OrganisationMeetingAttendance_Week1 = $('#op_OrganisationMeetingAttendance_Week1').val();
            let op_OrganisationMeetingAttendance_Week2 = $('#op_OrganisationMeetingAttendance_Week2').val();
            let op_OrganisationMeetingAttendance_Week3 = $('#op_OrganisationMeetingAttendance_Week3').val();
            let op_OrganisationMeetingAttendance_Week4 = $('#op_OrganisationMeetingAttendance_Week4').val();
            let op_OrganisationMeetingAttendance_Week5 = $('#op_OrganisationMeetingAttendance_Week5').val();
            let op_OrganisationMeetingAttendance_Total = $('#op_OrganisationMeetingAttendance_Total').val();

            let op_ida_text = $('#op_ida_text').text();
            let op_BoysandGirlsBrigade_text = $('#op_BoysandGirlsBrigade_text').text();
            let op_BoysandGirlsBrigade_Week1 = $('#op_BoysandGirlsBrigade_Week1').val();
            let op_BoysandGirlsBrigade_Week2 = $('#op_BoysandGirlsBrigade_Week2').val();
            let op_BoysandGirlsBrigade_Week3 = $('#op_BoysandGirlsBrigade_Week3').val();
            let op_BoysandGirlsBrigade_Week4 = $('#op_BoysandGirlsBrigade_Week4').val();
            let op_BoysandGirlsBrigade_Week5 = $('#op_BoysandGirlsBrigade_Week5').val();
            let op_BoysandGirlsBrigade_Total = $('#op_BoysandGirlsBrigade_Total').val();

            let op_idb_text = $('#op_idb_text').text();
            let op_GirlsFellowship_text = $('#op_GirlsFellowship_text').text();
            let op_GirlsFellowship_Week1 = $('#op_GirlsFellowship_Week1').val();
            let op_GirlsFellowship_Week2 = $('#op_GirlsFellowship_Week2').val();
            let op_GirlsFellowship_Week3 = $('#op_GirlsFellowship_Week3').val();
            let op_GirlsFellowship_Week4 = $('#op_GirlsFellowship_Week4').val();
            let op_GirlsFellowship_Week5 = $('#op_GirlsFellowship_Week5').val();
            let op_GirlsFellowship_Total = $('#op_GirlsFellowship_Total').val();

            let op_idc_text = $('#op_idc_text').text();
            let op_YouthFellowship_text = $('#op_YouthFellowship_text').text();
            let op_YouthFellowship_Week1 = $('#op_YouthFellowship_Week1').val();
            let op_YouthFellowship_Week2 = $('#op_YouthFellowship_Week2').val();
            let op_YouthFellowship_Week3 = $('#op_YouthFellowship_Week3').val();
            let op_YouthFellowship_Week4 = $('#op_YouthFellowship_Week4').val();
            let op_YouthFellowship_Week5 = $('#op_YouthFellowship_Week5').val();
            let op_YouthFellowship_Total = $('#op_YouthFellowship_Total').val();

            let op_idd_text = $('#op_idd_text').text();
            let op_WomenFellowship_text = $('#op_WomenFellowship_text').text();
            let op_WomenFellowship_Week1 = $('#op_WomenFellowship_Week1').val();
            let op_WomenFellowship_Week2 = $('#op_WomenFellowship_Week2').val();
            let op_WomenFellowship_Week3 = $('#op_WomenFellowship_Week3').val();
            let op_WomenFellowship_Week4 = $('#op_WomenFellowship_Week4').val();
            let op_WomenFellowship_Week5 = $('#op_WomenFellowship_Week5').val();
            let op_WomenFellowship_Total = $('#op_WomenFellowship_Total').val();

            let op_ide_text = $('#op_ide_text').text();
            let op_MenFellowship_text = $('#op_MenFellowship_text').text();
            let op_MenFellowship_Week1 = $('#op_MenFellowship_Week1').val();
            let op_MenFellowship_Week2 = $('#op_MenFellowship_Week2').val();
            let op_MenFellowship_Week3 = $('#op_MenFellowship_Week3').val();
            let op_MenFellowship_Week4 = $('#op_MenFellowship_Week4').val();
            let op_MenFellowship_Week5 = $('#op_MenFellowship_Week5').val();
            let op_MenFellowship_Total = $('#op_MenFellowship_Total').val();

            let op_idf_text = $('#op_idf_text').text();
            let op_SusannaWesleyAuxillary_text = $('#op_SusannaWesleyAuxillary_text').text();
            let op_SusannaWesleyAuxillary_Week1 = $('#op_SusannaWesleyAuxillary_Week1').val();
            let op_SusannaWesleyAuxillary_Week2 = $('#op_SusannaWesleyAuxillary_Week2').val();
            let op_SusannaWesleyAuxillary_Week3 = $('#op_SusannaWesleyAuxillary_Week3').val();
            let op_SusannaWesleyAuxillary_Week4 = $('#op_SusannaWesleyAuxillary_Week4').val();
            let op_SusannaWesleyAuxillary_Week5 = $('#op_SusannaWesleyAuxillary_Week5').val();
            let op_SusannaWesleyAuxillary_Total = $('#op_SusannaWesleyAuxillary_Total').val();

            let op_idg_text = $('#op_idg_text').text();
            let op_ChristLittleBand_text = $('#op_ChristLittleBand_text').text();
            let op_ChristLittleBand_Week1 = $('#op_ChristLittleBand_Week1').val();
            let op_ChristLittleBand_Week2 = $('#op_ChristLittleBand_Week2').val();
            let op_ChristLittleBand_Week3 = $('#op_ChristLittleBand_Week3').val();
            let op_ChristLittleBand_Week4 = $('#op_ChristLittleBand_Week4').val();
            let op_ChristLittleBand_Week5 = $('#op_ChristLittleBand_Week5').val();
            let op_ChristLittleBand_Total = $('#op_ChristLittleBand_Total').val();

            let op_idh_text = $('#op_idh_text').text();
            let op_Choir_text = $('#op_Choir_text').text();
            let op_Choir_Week1 = $('#op_Choir_Week1').val();
            let op_Choir_Week2 = $('#op_Choir_Week2').val();
            let op_Choir_Week3 = $('#op_Choir_Week3').val();
            let op_Choir_Week4 = $('#op_Choir_Week4').val();
            let op_Choir_Week5 = $('#op_Choir_Week5').val();
            let op_Choir_Total = $('#op_Choir_Total').val();

            let op_idi_text = $('#op_idi_text').text();
            let op_SingingBand_text = $('#op_SingingBand_text').text();
            let op_SingingBand_Week1 = $('#op_SingingBand_Week1').val();
            let op_SingingBand_Week2 = $('#op_SingingBand_Week2').val();
            let op_SingingBand_Week3 = $('#op_SingingBand_Week3').val();
            let op_SingingBand_Week4 = $('#op_SingingBand_Week4').val();
            let op_SingingBand_Week5 = $('#op_SingingBand_Week5').val();
            let op_SingingBand_Total = $('#op_SingingBand_Total').val();

            let op_idj_text = $('#op_idj_text').text();
            let op_Guild_text = $('#op_Guild_text').text();
            let op_Guild_Week1 = $('#op_Guild_Week1').val();
            let op_Guild_Week2 = $('#op_Guild_Week2').val();
            let op_Guild_Week3 = $('#op_Guild_Week3').val();
            let op_Guild_Week4 = $('#op_Guild_Week4').val();
            let op_Guild_Week5 = $('#op_Guild_Week5').val();
            let op_Guild_Total = $('#op_Guild_Total').val();

            let op_id19_text = $('#op_id19_text').text();
            let op_Deaths_text = $('#op_Deaths_text').text();
            let op_Deaths_Week1 = $('#op_Deaths_Week1').val();
            let op_Deaths_Week2 = $('#op_Deaths_Week2').val();
            let op_Deaths_Week3 = $('#op_Deaths_Week3').val();
            let op_Deaths_Week4 = $('#op_Deaths_Week4').val();
            let op_Deaths_Week5 = $('#op_Deaths_Week5').val();
            let op_Deaths_Total = $('#op_Deaths_Total').val();

            let saveFirstBTN = $('#saveFirstBTN').val();
            let year = $('#year').val();
            let month = $('#month').val();

            $.ajax({
                url: '../scripts/circuitActivityScripts.php',
                method: 'POST',
                data: {
                             op_id1_text,
                     op_Numberofclasses_text,
                     op_Numberofclasses_Week1,
                     op_Numberofclasses_Week2,
                     op_Numberofclasses_Week3,
                     op_Numberofclasses_Week4,
                     op_Numberofclasses_Week5,
                     op_Numberofclasses_Total,

                     op_id2_text,
                     op_ClassMembership_text,
                     op_ClassMembership_Week1,
                     op_ClassMembership_Week2,
                     op_ClassMembership_Week3,
                     op_ClassMembership_Week4,
                     op_ClassMembership_Week5,
                     op_ClassMembership_Total,

                     op_id3_text,
                     op_ClassMeetings_text,
                     op_ClassMeetings_Week1,
                     op_ClassMeetings_Week2,
                     op_ClassMeetings_Week3,
                     op_ClassMeetings_Week4,
                     op_ClassMeetings_Week5,
                     op_ClassMeetings_Total,

                     op_id4_text,
                     op_ChurchServices_text,
                     op_ChurchServices_Week1,
                     op_ChurchServices_Week2,
                     op_ChurchServices_Week3,
                     op_ChurchServices_Week4,
                     op_ChurchServices_Week5,
                     op_ChurchServices_Total,

                     op_id4a_text,
                     op_AdultService_text,
                     op_AdultService_Week1,
                     op_AdultService_Week2,
                     op_AdultService_Week3,
                     op_AdultService_Week4,
                     op_AdultService_Week5,
                     op_AdultService_Total,

                     op_id4b_text,
                     op_Youth_TeensServices_text,
                     op_Youth_TeensServices_Week1,
                     op_Youth_TeensServices_Week2,
                     op_Youth_TeensServices_Week3,
                     op_Youth_TeensServices_Week4,
                     op_Youth_TeensServices_Week5,
                     op_Youth_TeensServices_Total,

                     op_id4c_text,
                     op_ChildrenServices_text,
                     op_ChildrenServices_Week1,
                     op_ChildrenServices_Week2,
                     op_ChildrenServices_Week3,
                     op_ChildrenServices_Week4,
                     op_ChildrenServices_Week5,
                     op_ChildrenServices_Total,

                     op_id5_text,
                     op_Communion_text,
                     op_Communion_Week1,
                     op_Communion_Week2,
                     op_Communion_Week3,
                     op_Communion_Week4,
                     op_Communion_Week5,
                     op_Communion_Total,

                     op_id6_text,
                     op_NewMembersReceived_text,
                     op_NewMembersReceived_Week1,
                     op_NewMembersReceived_Week2,
                     op_NewMembersReceived_Week3,
                     op_NewMembersReceived_Week4,
                     op_NewMembersReceived_Week5,
                     op_NewMembersReceived_Total,

                     op_id7_text,
                     op_Visitors_text,
                     op_Visitors_Week1,
                     op_Visitors_Week2,
                     op_Visitors_Week3,
                     op_Visitors_Week4,
                     op_Visitors_Week5,
                     op_Visitors_Total,
                     op_id8_text,
                     op_PrayerMeeting_text,
                     op_PrayerMeeting_Week1,
                     op_PrayerMeeting_Week2,
                     op_PrayerMeeting_Week3,
                     op_PrayerMeeting_Week4,
                     op_PrayerMeeting_Week5,
                     op_PrayerMeeting_Total,

                     op_id9_text,
                     op_MPRP_text,
                     op_MPRP_Week1,
                     op_MPRP_Week2,
                     op_MPRP_Week3,
                     op_MPRP_Week4,
                     op_MPRP_Week5,
                     op_MPRP_Total,

                     op_id10_text,
                     op_RevivalMeeting_text,
                     op_RevivalMeeting_Week1,
                     op_RevivalMeeting_Week2,
                     op_RevivalMeeting_Week3,
                     op_RevivalMeeting_Week4,
                     op_RevivalMeeting_Week5,
                     op_RevivalMeeting_Total,

                     op_id11_text,
                     op_Outreach_text,
                     op_Outreach_Week1,
                     op_Outreach_Week2,
                     op_Outreach_Week3,
                     op_Outreach_Week4,
                     op_Outreach_Week5,
                     op_Outreach_Total,

                     op_id12_text,
                     op_Souls_text,
                     op_Souls_Week1,
                     op_Souls_Week2,
                     op_Souls_Week3,
                     op_Souls_Week4,
                     op_Souls_Week5,
                     op_Souls_Total,

                     op_id13_text,
                     op_Marriages_text,
                     op_Marriages_Week1,
                     op_Marriages_Week2,
                     op_Marriages_Week3,
                     op_Marriages_Week4,
                     op_Marriages_Week5,
                     op_Marriages_Total,

                     op_id14_text,
                     op_Births_text,
                     op_Births_Week1,
                     op_Births_Week2,
                     op_Births_Week3,
                     op_Births_Week4,
                     op_Births_Week5,
                     op_Births_Total,

                     op_id15_text,
                     op_Baptisms_text,
                     op_Baptisms_Week1,
                     op_Baptisms_Week2,
                     op_Baptisms_Week3,
                     op_Baptisms_Week4,
                     op_Baptisms_Week5,
                     op_Baptisms_Total,

                     op_id16_text,
                     op_Confirmations_text,
                     op_Confirmations_Week1,
                     op_Confirmations_Week2,
                     op_Confirmations_Week3,
                     op_Confirmations_Week4,
                     op_Confirmations_Week5,
                     op_Confirmations_Total,

                     op_id17_text,
                     op_OrganisationMembership_text,
                     op_OrganisationMembership_Week1,
                     op_OrganisationMembership_Week2,
                     op_OrganisationMembership_Week3,
                     op_OrganisationMembership_Week4,
                     op_OrganisationMembership_Week5,
                     op_OrganisationMembership_Total,

                     op_id18_text,
                     op_OrganisationMeetingAttendance_text,
                     op_OrganisationMeetingAttendance_Week1,
                     op_OrganisationMeetingAttendance_Week2,
                     op_OrganisationMeetingAttendance_Week3,
                     op_OrganisationMeetingAttendance_Week4,
                     op_OrganisationMeetingAttendance_Week5,
                     op_OrganisationMeetingAttendance_Total,

                     op_ida_text,
                     op_BoysandGirlsBrigade_text,
                     op_BoysandGirlsBrigade_Week1,
                     op_BoysandGirlsBrigade_Week2,
                     op_BoysandGirlsBrigade_Week3,
                     op_BoysandGirlsBrigade_Week4,
                     op_BoysandGirlsBrigade_Week5,
                     op_BoysandGirlsBrigade_Total,

                     op_idb_text,
                     op_GirlsFellowship_text,
                     op_GirlsFellowship_Week1,
                     op_GirlsFellowship_Week2,
                     op_GirlsFellowship_Week3,
                     op_GirlsFellowship_Week4,
                     op_GirlsFellowship_Week5,
                     op_GirlsFellowship_Total,

                     op_idc_text,
                     op_YouthFellowship_text,
                     op_YouthFellowship_Week1,
                     op_YouthFellowship_Week2,
                     op_YouthFellowship_Week3,
                     op_YouthFellowship_Week4,
                     op_YouthFellowship_Week5,
                     op_YouthFellowship_Total,

                     op_idd_text,
                     op_WomenFellowship_text,
                     op_WomenFellowship_Week1,
                     op_WomenFellowship_Week2,
                     op_WomenFellowship_Week3,
                     op_WomenFellowship_Week4,
                     op_WomenFellowship_Week5,
                     op_WomenFellowship_Total,

                     op_ide_text,
                     op_MenFellowship_text,
                     op_MenFellowship_Week1,
                     op_MenFellowship_Week2,
                     op_MenFellowship_Week3,
                     op_MenFellowship_Week4,
                     op_MenFellowship_Week5,
                     op_MenFellowship_Total,

                     op_idf_text,
                     op_SusannaWesleyAuxillary_text,
                     op_SusannaWesleyAuxillary_Week1,
                     op_SusannaWesleyAuxillary_Week2,
                     op_SusannaWesleyAuxillary_Week3,
                     op_SusannaWesleyAuxillary_Week4,
                     op_SusannaWesleyAuxillary_Week5,
                     op_SusannaWesleyAuxillary_Total,

                     op_idg_text,
                     op_ChristLittleBand_text,
                     op_ChristLittleBand_Week1,
                     op_ChristLittleBand_Week2,
                     op_ChristLittleBand_Week3,
                     op_ChristLittleBand_Week4,
                     op_ChristLittleBand_Week5,
                     op_ChristLittleBand_Total,

                     op_idh_text,
                     op_Choir_text,
                     op_Choir_Week1,
                     op_Choir_Week2,
                     op_Choir_Week3,
                     op_Choir_Week4,
                     op_Choir_Week5,
                     op_Choir_Total,

                     op_idi_text,
                     op_SingingBand_text,
                     op_SingingBand_Week1,
                     op_SingingBand_Week2,
                     op_SingingBand_Week3,
                     op_SingingBand_Week4,
                     op_SingingBand_Week5,
                     op_SingingBand_Total,

                     op_idj_text,
                     op_Guild_text,
                     op_Guild_Week1,
                     op_Guild_Week2,
                     op_Guild_Week3,
                     op_Guild_Week4,
                     op_Guild_Week5,
                     op_Guild_Total,

                     op_id19_text,
                     op_Deaths_text,
                     op_Deaths_Week1,
                     op_Deaths_Week2,
                     op_Deaths_Week3,
                     op_Deaths_Week4,
                     op_Deaths_Week5,
                     op_Deaths_Total,

                     saveFirstBTN,
                     year,
                     month
                },
                success: function(data) {
                    // $('#activityGroupMessage').html(data);
                    showNotification('top', 'center', data);
                    $('#christianCommunityMale').val(0);
                    $('#christianCommunityFemale').val(0);
                    $('#christianCommunityTotal').val(0);
                    $('#fullMemberMale').val(0);
                    $('#fullMemberFemale').val(0);
                    $('#fullMemberTotal').val(0);
                    $('#juniorMemberMale').val(0);
                    $('#juniorMemberFemale').val(0);
                    $('#juniorMemberTotal').val(0);
                    $('#catechumensMale').val(0);
                    $('#catechumensFemale').val(0);
                    $('#catechumensTotal').val(0);
                    $('#adherentsMale').val(0);
                    $('#adherentsFemale').val(0);
                    $('#adherentsTotal').val(0);
                    window.location.reload();
                }
            });

        });
        // SET FROM DATA BASE
        $('#month').change(function() {
            let month = $('#month').val();
            let year = $('#year').val();
            $.ajax({
                url: '../scripts/circuitActivityScripts.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    month,
                    year
                },
                success: function(data) {
                    // console.log(data);
                    /*    // $('#activityGroupMessage').html(data);
                        // showNotification('top', 'center', data);
                        $('#christianCommunityMale').val(data);
                        $('#christianCommunityFemale').val(data);
                        $('#christianCommunityTotal').val(data);
                        $('#fullMemberMale').val(data);
                        $('#fullMemberFemale').val(data);
                        $('#fullMemberTotal').val(data);
                        $('#juniorMemberMale').val(data);
                        $('#juniorMemberFemale').val(data);
                        $('#juniorMemberTotal').val(data);
                        $('#catechumensMale').val(data);
                        $('#catechumensFemale').val(data);
                        $('#catechumensTotal').val(data);
                        $('#adherentsMale').val(data);
                        $('#adherentsFemale').val(data);
                        $('#adherentsTotal').val(data);
                        // window.location.reload();*/
                    christain_male = data.christain_male;
                    christain_female = data.christain_female;
                    christain_total = data.christain_total;
                    full_male = data.full_male;
                    full_female = data.full_female;
                    full_total = data.full_total;
                    junior_male = data.junior_male;
                    junior_female = data.junior_female;
                    junior_total = data.junior_total;
                    catechumens_male = data.catechumens_male;
                    catechumens_female = data.catechumens_female;
                    catechumens_total = data.catechumens_total;
                    adherents_male = data.adherents_male;
                    adherents_female = data.adherents_female;
                    adherents_total = data.adherents_total;

                }
            });
        });
        // ADD MORE
        $(document).on('click', '#addMoreBTN', function() {

            let u_christianCommunityMaleAlpha = $('#christianCommunityMaleAlpha').text();
            let u_christianCommunityMaleTxt = $('#christianCommunityMaleTxt').text();
            let u_christianCommunityMale = parseInt($('#christianCommunityMale').val()) + parseInt(christain_male);
            let u_christianCommunityFemale = parseInt($('#christianCommunityFemale').val()) + parseInt(christain_female);
            let u_christianCommunityTotal = parseInt($('#christianCommunityTotal').val()) + parseInt(christain_total);


            // alert(christianCommunityMale);

            let u_fullMemberMaleAlpha = $('#fullMemberMaleAlpha').text();
            let u_fullMemberMaleTxt = $('#fullMemberMaleTxt').text();
            let u_fullMemberMale = parseInt($('#fullMemberMale').val()) + parseInt(full_male);
            let u_fullMemberFemale = parseInt($('#fullMemberFemale').val()) + parseInt(full_female);
            let u_fullMemberTotal = parseInt($('#fullMemberTotal').val()) + parseInt(full_total);

            let u_juniorMemberMaleAlpha = $('#juniorMemberMaleAlpha').text();
            let u_juniorMemberMaleTxt = $('#juniorMemberMaleTxt').text();
            let u_juniorMemberMale = parseInt($('#juniorMemberMale').val()) + parseInt(junior_male);
            let u_juniorMemberFemale = parseInt($('#juniorMemberFemale').val()) + parseInt(junior_female);
            let u_juniorMemberTotal = parseInt($('#juniorMemberTotal').val()) + parseInt(junior_total);

            let u_catechumensMaleAlpha = $('#catechumensMaleAlpha').text();
            let u_catechumensMaleTxt = $('#catechumensMaleTxt').text();
            let u_catechumensMale = parseInt($('#catechumensMale').val()) + parseInt(catechumens_male);
            let u_catechumensFemale = parseInt($('#catechumensFemale').val()) + parseInt(catechumens_female);
            let u_catechumensTotal = parseInt($('#catechumensTotal').val()) + parseInt(catechumens_total);

            let u_adherentsMaleAlpa = $('#adherentsMaleAlpa').text();
            let u_adherentsMaleTxt = $('#adherentsMaleTxt').text();
            let u_adherentsMale = parseInt($('#adherentsMale').val()) + parseInt(adherents_male);
            let u_adherentsFemale = parseInt($('#adherentsFemale').val()) + parseInt(adherents_female);
            let u_adherentsTotal = parseInt($('#adherentsTotal').val()) + parseInt(adherents_total);
            let u_month = $('#month').val();
            let u_year = $('#year').val();

            let addMoreBTN = $('#addMoreBTN').val();
            // alert(saveFirstBTN);


            $.ajax({
                url: '../scripts/circuitActivityScripts.php',
                method: 'POST',
                data: {
                    u_christianCommunityMaleAlpha,
                    u_christianCommunityMaleTxt,
                    u_christianCommunityMale,
                    u_christianCommunityFemale,
                    u_christianCommunityTotal,

                    u_fullMemberMaleAlpha,
                    u_fullMemberMaleTxt,
                    u_fullMemberMale,
                    u_fullMemberFemale,
                    u_fullMemberTotal,

                    u_juniorMemberMaleAlpha,
                    u_juniorMemberMaleTxt,
                    u_juniorMemberMale,
                    u_juniorMemberFemale,
                    u_juniorMemberTotal,

                    u_catechumensMaleAlpha,
                    u_catechumensMaleTxt,
                    u_catechumensMale,
                    u_catechumensFemale,
                    u_catechumensTotal,

                    u_adherentsMaleAlpa,
                    u_adherentsMaleTxt,
                    u_adherentsMale,
                    u_adherentsFemale,
                    u_adherentsTotal,

                    addMoreBTN,
                    u_month,
                    u_year
                },
                success: function(data) {
                    // $('#activityGroupMessage').html(data);
                    showNotification('top', 'center', data);
                    $('#christianCommunityMale').val(0);
                    $('#christianCommunityFemale').val(0);
                    $('#christianCommunityTotal').val(0);
                    $('#fullMemberMale').val(0);
                    $('#fullMemberFemale').val(0);
                    $('#fullMemberTotal').val(0);
                    $('#juniorMemberMale').val(0);
                    $('#juniorMemberFemale').val(0);
                    $('#juniorMemberTotal').val(0);
                    $('#catechumensMale').val(0);
                    $('#catechumensFemale').val(0);
                    $('#catechumensTotal').val(0);
                    $('#adherentsMale').val(0);
                    $('#adherentsFemale').val(0);
                    $('#adherentsTotal').val(0);
                    window.location.reload();
                    console.log(data);
                }
            });

        });

        //   weeklyRecords();

        /*    // ================= Preview Activity
            function weeklyRecords() {
                let selectWeeklyRecord = "weeklyRecord";
                let selectWeeklyRecordYear = $('#previewyear').val();
                // alert(selectWeeklyRecordYear);
                $.ajax({
                    url: 'scripts/societyActivityScripts.php',
                    method: 'GET',
                    data: {
                        selectWeeklyRecord,
                        selectWeeklyRecordYear
                    },
                    success: function(data) {
                        $('#weeklyFetchRecord').html(data);

                    }
                });
            }*/

        /*  $('#previewmonth').change(function() {
              let selectWeeklyRecordmonth = $('#previewmonth').val();
              let selectWeeklyRecordYear = $('#previewyear').val();
              // alert(selectWeeklyRecordmonth);
              //  alert(selectWeeklyRecordYear);
              $.ajax({
                  url: 'scripts/societyActivityScripts.php',
                  method: 'GET',
                  data: {
                      selectWeeklyRecordmonth,
                      selectWeeklyRecordYear
                  },
                  success: function(data) {
                      $('#weeklyFetchRecord').html(data);

                  }
              });

          });*/

        /*  // ================= Gender Activity
          weeklyGenderRecords();

          function weeklyGenderRecords() {
              let selectGenderRecord = "weeklyRecord";
              let weeklyGenderRecordsYear = $('#previewyear').val();
              // alert(weeklyGenderRecordsYear);
              $.ajax({
                  url: 'scripts/societyActivityScripts.php',
                  method: 'GET',
                  data: {
                      selectGenderRecord,
                      weeklyGenderRecordsYear
                  },
                  success: function(data) {
                      $('#genderFetchRecord').html(data);

                  }
              });
          }*/

        // Change Month
        /* $('#previewmonth').change(function() {
             let selectWeeklyGendermonth = $('#previewmonth').val();
             let selectWeeklyGenderYear = $('#previewyear').val();
             // alert(selectWeeklyGendermonth);
             //  alert(selectWeeklyGenderYear);
             $.ajax({
                 url: 'scripts/societyActivityScripts.php',
                 method: 'GET',
                 data: {
                     selectWeeklyGendermonth,
                     selectWeeklyGenderYear
                 },
                 success: function(data) {
                     $('#genderFetchRecord').html(data);

                 }
             });

         });*/
    })
</script>