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
                                                <option value="2021">Select Month</option>
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
                                                        <td>Month</td>
                                                        <th colspan="3"><span id="circuitMonth"></span></th>
                                                        <td>Year</td>
                                                        <th colspan="5"><span id="circuitYear"></span></th>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Diocese</td>
                                                        <th>........</th>
                                                        <td>Circuit</td>
                                                        <th>........</th>
                                                        <td>Society</td>
                                                        <th colspan="2">.......</th>
                                                        <td>Location</td>
                                                        <th colspan="2">........</th>

                                                    </tr>
                                                    <tr>
                                                        <th colspan="5">
                                                            <div align="center">Database</div>
                                                        </th>
                                                        <th>Males</th>
                                                        <th>Females</th>
                                                        <th>Total</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td>A</td>
                                                        <td colspan="4">Christian Community</td>
                                                        <td><span id="christianCommunityMale">0</span></td>
                                                        <td><span id="christianCommunityFemale">0</span></td>
                                                        <td><span id="christianCommunityTotal">0</span></td>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td>B</td>
                                                        <td colspan="4">Full Members</td>
                                                        <td><span id="fullMemberMale">0</span></td>
                                                        <td><span id="fullMemberFemale">0</span></td>
                                                        <td><span id="fullMemberTotal">0</span></td>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td>C</td>
                                                        <td colspan="4">Junior members</td>
                                                        <td><span id="juniorMemberMale">0</span></td>
                                                        <td><span id="juniorMemberFemale">0</span></td>
                                                        <td><span id="juniorMemberTotal">0</span></td>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td>D</td>
                                                        <td colspan="4">Catechumens</td>
                                                        <td><span id="catechumensMale">0</span></td>
                                                        <td><span id="catechumensFemale">0</span></td>
                                                        <td><span id="catechumensTotal">0</span></td>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td>E</td>
                                                        <td colspan="4">Adherents</td>
                                                        <td><span id="adherentsMale">0</span></td>
                                                        <td><span id="adherentsFemale">0</span></td>
                                                        <td><span id="adherentsTotal">0</span></td>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
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
                                                        <td>1</td>
                                                        <td colspan="4"><span id="numberClassesTitle">Number of classes</span></td>
                                                        <td><span id="numberClassesWeek1">0</span></td>
                                                        <td><span id="numberClassesWeek2">0</span></td>
                                                        <td><span id="numberClassesWeek3">0</span></td>
                                                        <td><span id="numberClassesWeek5">0</span></td>
                                                        <td><span id="numberClassesWeek5">0</span></td>
                                                        <td><span id="numberClassesTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td colspan="4"><span id="classMembershipTitle">Class Membership(Total)</span></td>
                                                        <td><span id="classMembershipWeek1">0</span></td>
                                                        <td><span id="classMembershipWeek2">0</span></td>
                                                        <td><span id="classMembershipWeek3">0</span></td>
                                                        <td><span id="classMembershipWeek5">0</span></td>
                                                        <td><span id="classMembershipWeek5">0</span></td>
                                                        <td><span id="classMembershipTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td colspan="4"><span id="classMeetingTitle">Class Meeting Attendance</span></td>
                                                        <td><span id="classMeetingWeek1">0</span></td>
                                                        <td><span id="classMeetingWeek2">0</span></td>
                                                        <td><span id="classMeetingWeek3">0</span></td>
                                                        <td><span id="classMeetingWeek5">0</span></td>
                                                        <td><span id="classMeetingWeek5">0</span></td>
                                                        <td><span id="classMeetingTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td colspan="4"><span id="churchServiceTitle">Church Service Attendance</span></td>
                                                        <td><span id="churchServiceWeek1">0</span></td>
                                                        <td><span id="churchServiceWeek2">0</span></td>
                                                        <td><span id="churchServiceWeek3">0</span></td>
                                                        <td><span id="churchServiceWeek5">0</span></td>
                                                        <td><span id="churchServiceWeek5">0</span></td>
                                                        <td><span id="churchServiceTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4a</td>
                                                        <td colspan="4"><span id="adultServiceTitle">Adult Service Attendance</span></td>
                                                        <td><span id="adultServiceWeek1">0</span></td>
                                                        <td><span id="adultServiceWeek2">0</span></td>
                                                        <td><span id="adultServiceWeek3">0</span></td>
                                                        <td><span id="adultServiceWeek5">0</span></td>
                                                        <td><span id="adultServiceWeek5">0</span></td>
                                                        <td><span id="adultServiceTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4b</td>
                                                        <td colspan="4"><span id="youthServiceTitle">Youth/Teens Services Attendance</span></td>
                                                        <td><span id="youthServiceWeek1">0</span></td>
                                                        <td><span id="youthServiceWeek2">0</span></td>
                                                        <td><span id="youthServiceWeek3">0</span></td>
                                                        <td><span id="youthServiceWeek5">0</span></td>
                                                        <td><span id="youthServiceWeek5">0</span></td>
                                                        <td><span id="youthServiceTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4c</td>
                                                        <td colspan="4"><span id="childrenServiceTitle">Children Services Attendance</span></td>
                                                        <td><span id="childrenServiceWeek1">0</span></td>
                                                        <td><span id="childrenServiceWeek2">0</span></td>
                                                        <td><span id="childrenServiceWeek3">0</span></td>
                                                        <td><span id="childrenServiceWeek5">0</span></td>
                                                        <td><span id="childrenServiceWeek5">0</span></td>
                                                        <td><span id="childrenServiceTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td colspan="4"><span id="communionTitle">Communion Services Participants</span></td>
                                                        <td><span id="communionWeek1">0</span></td>
                                                        <td><span id="communionWeek2">0</span></td>
                                                        <td><span id="communionWeek3">0</span></td>
                                                        <td><span id="communionWeek5">0</span></td>
                                                        <td><span id="communionWeek5">0</span></td>
                                                        <td><span id="communionTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td colspan="4"><span id="newMembersTitle">New Members Received at Leaders Meetings</span></td>
                                                        <td><span id="newMembersWeek1">0</span></td>
                                                        <td><span id="newMembersWeek2">0</span></td>
                                                        <td><span id="newMembersWeek3">0</span></td>
                                                        <td><span id="newMembersWeek5">0</span></td>
                                                        <td><span id="newMembersWeek5">0</span></td>
                                                        <td><span id="newMembersTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td colspan="4"><span id="visitorsTitle">Visitors</span></td>
                                                        <td><span id="visitorsWeek1">0</span></td>
                                                        <td><span id="visitorsWeek2">0</span></td>
                                                        <td><span id="visitorsWeek3">0</span></td>
                                                        <td><span id="visitorsWeek5">0</span></td>
                                                        <td><span id="visitorsWeek5">0</span></td>
                                                        <td><span id="visitorsTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td colspan="4"><span id="prayerMeetingTitle">Prayer Meeting Attendance</span></td>
                                                        <td><span id="prayerMeetingWeek1">0</span></td>
                                                        <td><span id="prayerMeetingWeek2">0</span></td>
                                                        <td><span id="prayerMeetingWeek3">0</span></td>
                                                        <td><span id="prayerMeetingWeek5">0</span></td>
                                                        <td><span id="prayerMeetingWeek5">0</span></td>
                                                        <td><span id="prayerMeetingTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td colspan="4"><span id="mprpTitle">MPRP Attendance</span></td>
                                                        <td><span id="mprpWeek1">0</span></td>
                                                        <td><span id="mprpWeek2">0</span></td>
                                                        <td><span id="mprpWeek3">0</span></td>
                                                        <td><span id="mprpWeek5">0</span></td>
                                                        <td><span id="mprpWeek5">0</span></td>
                                                        <td><span id="mprpTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td colspan="4"><span id="revivalTitle">Revival Meeting Attendance</span></td>
                                                        <td><span id="revivalWeek1">0</span></td>
                                                        <td><span id="revivalWeek2">0</span></td>
                                                        <td><span id="revivalWeek3">0</span></td>
                                                        <td><span id="revivalWeek5">0</span></td>
                                                        <td><span id="revivalWeek5">0</span></td>
                                                        <td><span id="revivalTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td colspan="4"><span id="outreachTitle">Outreach Members Participating</span></td>
                                                        <td><span id="outreachWeek1">0</span></td>
                                                        <td><span id="outreachWeek2">0</span></td>
                                                        <td><span id="outreachWeek3">0</span></td>
                                                        <td><span id="outreachWeek5">0</span></td>
                                                        <td><span id="outreachWeek5">0</span></td>
                                                        <td><span id="outreachTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td colspan="4"><span id="soulsTitle">Souls Won(New Members)</span></td>
                                                        <td><span id="soulsWeek1">0</span></td>
                                                        <td><span id="soulsWeek2">0</span></td>
                                                        <td><span id="soulsWeek3">0</span></td>
                                                        <td><span id="soulsWeek5">0</span></td>
                                                        <td><span id="soulsWeek5">0</span></td>
                                                        <td><span id="soulsTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td colspan="4"><span id="marriagesTitle">Marriages</span></td>
                                                        <td><span id="marriagesWeek1">0</span></td>
                                                        <td><span id="marriagesWeek2">0</span></td>
                                                        <td><span id="marriagesWeek3">0</span></td>
                                                        <td><span id="marriagesWeek5">0</span></td>
                                                        <td><span id="marriagesWeek5">0</span></td>
                                                        <td><span id="marriagesTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td colspan="4"><span id="birthsTitle">Births</span></td>
                                                        <td><span id="birthsWeek1">0</span></td>
                                                        <td><span id="birthsWeek2">0</span></td>
                                                        <td><span id="birthsWeek3">0</span></td>
                                                        <td><span id="birthsWeek5">0</span></td>
                                                        <td><span id="birthsWeek5">0</span></td>
                                                        <td><span id="birthsTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td colspan="4"><span id="baptismTitle">Baptisms</span></td>
                                                        <td><span id="baptismWeek1">0</span></td>
                                                        <td><span id="baptismWeek2">0</span></td>
                                                        <td><span id="baptismWeek3">0</span></td>
                                                        <td><span id="baptismWeek5">0</span></td>
                                                        <td><span id="baptismWeek5">0</span></td>
                                                        <td><span id="baptismTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td colspan="4"><span id="confirmationTitle">Confirmations</span></td>
                                                        <td><span id="confirmationWeek1">0</span></td>
                                                        <td><span id="confirmationWeek2">0</span></td>
                                                        <td><span id="confirmationWeek3">0</span></td>
                                                        <td><span id="confirmationWeek5">0</span></td>
                                                        <td><span id="confirmationWeek5">0</span></td>
                                                        <td><span id="confirmationTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td colspan="4"><span id="omTitle">Organisation Membership</span></td>
                                                        <td><span id="omWeek1">0</span></td>
                                                        <td><span id="omWeek2">0</span></td>
                                                        <td><span id="omWeek3">0</span></td>
                                                        <td><span id="omWeek5">0</span></td>
                                                        <td><span id="omWeek5">0</span></td>
                                                        <td><span id="omTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td colspan="4"><span id="omaTitle">Organisation Meetings Attendance</span></td>
                                                        <td><span id="omaWeek1">0</span></td>
                                                        <td><span id="omaWeek2">0</span></td>
                                                        <td><span id="omaWeek3">0</span></td>
                                                        <td><span id="omaWeek5">0</span></td>
                                                        <td><span id="omaWeek5">0</span></td>
                                                        <td><span id="omaTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>a</td>
                                                        <td colspan="4"><span id="boysGirlsTitle">Boys and Girls Brigade</span></td>
                                                        <td><span id="boysGirlsWeek1">0</span></td>
                                                        <td><span id="boysGirlsWeek2">0</span></td>
                                                        <td><span id="boysGirlsWeek3">0</span></td>
                                                        <td><span id="boysGirlsWeek5">0</span></td>
                                                        <td><span id="boysGirlsWeek5">0</span></td>
                                                        <td><span id="boysGirlsTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>b</td>
                                                        <td colspan="4"><span id="girlsFellowshipTitle">Girls Fellowship</span></td>
                                                        <td><span id="girlsFellowshipWeek1">0</span></td>
                                                        <td><span id="girlsFellowshipWeek2">0</span></td>
                                                        <td><span id="girlsFellowshipWeek3">0</span></td>
                                                        <td><span id="girlsFellowshipWeek5">0</span></td>
                                                        <td><span id="girlsFellowshipWeek5">0</span></td>
                                                        <td><span id="girlsFellowshipTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>c</td>
                                                        <td colspan="4"><span id="youthFellowshipTitle">Youth Fellowship</span></td>
                                                        <td><span id="youthFellowshipWeek1">0</span></td>
                                                        <td><span id="youthFellowshipWeek2">0</span></td>
                                                        <td><span id="youthFellowshipWeek3">0</span></td>
                                                        <td><span id="youthFellowshipWeek5">0</span></td>
                                                        <td><span id="youthFellowshipWeek5">0</span></td>
                                                        <td><span id="youthFellowshipTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>d</td>
                                                        <td colspan="4"><span id="womenFellowshipTitle">Women's Fellowship</span></td>
                                                        <td><span id="womenFellowshipWeek1">0</span></td>
                                                        <td><span id="womenFellowshipWeek2">0</span></td>
                                                        <td><span id="womenFellowshipWeek3">0</span></td>
                                                        <td><span id="womenFellowshipWeek5">0</span></td>
                                                        <td><span id="womenFellowshipWeek5">0</span></td>
                                                        <td><span id="womenFellowshipTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>e</td>
                                                        <td colspan="4"><span id="menFellowshipTitle">Men's Fellowship</span></td>
                                                        <td><span id="menFellowshipWeek1">0</span></td>
                                                        <td><span id="menFellowshipWeek2">0</span></td>
                                                        <td><span id="menFellowshipWeek3">0</span></td>
                                                        <td><span id="menFellowshipWeek5">0</span></td>
                                                        <td><span id="menFellowshipWeek5">0</span></td>
                                                        <td><span id="menFellowshipTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>f</td>
                                                        <td colspan="4"><span id="susannaTitle">Susanna Wesley Auxillary</span></td>
                                                        <td><span id="susannaWeek1">0</span></td>
                                                        <td><span id="susannaWeek2">0</span></td>
                                                        <td><span id="susannaWeek3">0</span></td>
                                                        <td><span id="susannaWeek5">0</span></td>
                                                        <td><span id="susannaWeek5">0</span></td>
                                                        <td><span id="susannaTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>g</td>
                                                        <td colspan="4"><span id="christLittleBandTitle">Christ Little Band</span></td>
                                                        <td><span id="christLittleBandWeek1">0</span></td>
                                                        <td><span id="christLittleBandWeek2">0</span></td>
                                                        <td><span id="christLittleBandWeek3">0</span></td>
                                                        <td><span id="christLittleBandWeek5">0</span></td>
                                                        <td><span id="christLittleBandWeek5">0</span></td>
                                                        <td><span id="christLittleBandTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>h</td>
                                                        <td colspan="4"><span id="choirTitle">Choir</span></td>
                                                        <td><span id="choirWeek1">0</span></td>
                                                        <td><span id="choirWeek2">0</span></td>
                                                        <td><span id="choirWeek3">0</span></td>
                                                        <td><span id="choirWeek5">0</span></td>
                                                        <td><span id="choirWeek5">0</span></td>
                                                        <td><span id="choirTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>i</td>
                                                        <td colspan="4"><span id="singingBandTitle">Singing Band</span></td>
                                                        <td><span id="singingBandWeek1">0</span></td>
                                                        <td><span id="singingBandWeek2">0</span></td>
                                                        <td><span id="singingBandWeek3">0</span></td>
                                                        <td><span id="singingBandWeek5">0</span></td>
                                                        <td><span id="singingBandWeek5">0</span></td>
                                                        <td><span id="singingBandTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>j</td>
                                                        <td colspan="4"><span id="guildTitle">Guild</span></td>
                                                        <td><span id="guildWeek1">0</span></td>
                                                        <td><span id="guildWeek2">0</span></td>
                                                        <td><span id="guildWeek3">0</span></td>
                                                        <td><span id="guildWeek5">0</span></td>
                                                        <td><span id="guildWeek5">0</span></td>
                                                        <td><span id="guildTotal">0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td colspan="4"><span id="deathTitle">Deaths</span></td>
                                                        <td><span id="deathWeek1">0</span></td>
                                                        <td><span id="deathWeek2">0</span></td>
                                                        <td><span id="deathWeek3">0</span></td>
                                                        <td><span id="deathWeek5">0</span></td>
                                                        <td><span id="deathWeek5">0</span></td>
                                                        <td><span id="deathTotal">0</span></td>
                                                    </tr>
                                                    

                                                    <tr>
                                                        <th colspan="11">
                                                            <div align="center">Measure What Matters</div>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="3">Comment</td>
                                                        <td colspan="7"><span id="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt non blanditiis dolorem nostrum, ex praesentium accusantium voluptatum consectetur perspiciatis excepturi eius veniam delectus aspernatur perferendis animi fugit quibusdam vel impedit.</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="3">Dated</td>
                                                        <td colspan="2"><span id="first_date">31st January, 2021</span></td>
                                                        <td colspan="2">Dated</td>
                                                        <td colspan="3"><span id="second_date">31st January, 2021</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="3">Society Statistician</td>
                                                        <td colspan="2"><span id="statistician">E K Eshun</span></td>
                                                        <td colspan="2">Society Steward</td>
                                                        <td colspan="3"><span id="steward">E K Eshun</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="3">Contact</td>
                                                        <td colspan="2"><span id="first_Contact">020898134</span></td>
                                                        <td colspan="2">Contact</td>
                                                        <td colspan="3"><span id="second_Contact">020898134</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="3">Signature</td>
                                                        <td colspan="2">................</td>
                                                        <td colspan="2">Signature</td>
                                                        <td colspan="3">................</td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="3">Dated</td>
                                                        <td colspan="2"><span id="third_Date">31st January, 2021</span></td>
                                                        <td colspan="2">Contact</td>
                                                        <td colspan="3"><span id="third_Contact">02585452125</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="3">Minister-In-Charge</td>
                                                        <td colspan="2"><span id="minister_in_charge">Very Rev Lews Smart Asare</span></td>
                                                        <td colspan="2">Signature</td>
                                                        <td colspan="3">................</td>

                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12">
                                            <div align="center">
                                                <button type="button" id="" class="btn btn-primary btn-sm">Create Data</button>
                                                <button type="button" id="" class="btn btn-success btn-sm">Add Data</button>
                                                <button type="button" id="exportToExcel" class="btn btn-primary btn-sm">Export Excel</button>
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
        $("#exportToExcel").click(function() {
            $('.table').table2excel({
                exclude: ".noExl",
                name: "report",
                fileext: ".xls",
                filename: "monthly_report" + new Date().toISOString() + ".xls"
            });
            /*var table = $(this).prev('.table2excel');
            if (table && table.length) {
                var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
                $(table).table2excel({
                    exclude: ".noExl",
                    name: "Excel Document Name",
                    filename: "report" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
                    fileext: ".xls",
                    exclude_img: true,
                    exclude_links: true,
                    exclude_inputs: true,
                    preserveColors: preserveColors
                });
            }*/
        });


        $('#month').change(function() {
            let reportMonth = $(this).val();
            let reportYear = $('#year').val();

            $.ajax({
                url: 'scripts/reportScripts.php',
                method: 'GET',
                data: {
                    reportMonth,
                    reportYear
                },

                success: function(data) {
                    $('#showMessage').html(data);
                }
            });
        })

    });
</script>