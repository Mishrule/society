<?php include_once('scripts/db.php'); ?>
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

                                                <?php
                                                $yearFetchDisplay = '';
                                                $yearFetchSQL = "SELECT * FROM years ORDER BY year_created DESC";
                                                $yearFetchResult = mysqli_query($con, $yearFetchSQL);

                                                if (mysqli_num_rows($yearFetchResult) > 0) {
                                                    while ($yearFetchRow = mysqli_fetch_array($yearFetchResult)) {
                                                        $yearFetchDisplay .= '
                                                                <option value="' . $yearFetchRow['years_year'] . '">' . $yearFetchRow['years_year'] . '</option>
                                                            ';
                                                    }
                                                } else {
                                                    $yearFetchDisplay .= '<option>No Year Created</option>';
                                                }
                                                echo $yearFetchDisplay;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12">
                                            <div id="showMessage"></div>
                                        <!--  <table class="table table2excel table2excel_with_colors">
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
                                                        <th colspan="3">January</th>
                                                        <td>Year</td>
                                                        <th colspan="5">2021</th>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Diocese</td>
                                                        <th>Tarkwa</th>
                                                        <td>Circuit</td>
                                                        <th>Tarkwa</th>
                                                        <td>Society</td>
                                                        <th colspan="2">Camp City</th>
                                                        <td>Location</td>
                                                        <th colspan="2">Tarkwa</th>

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
                                                        <td>1</td>
                                                        <td colspan="4">Database</td>
                                                        <td>89</td>
                                                        <td>130</td>
                                                        <td>219</td>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td colspan="4">Database</td>
                                                        <td>89</td>
                                                        <td>130</td>
                                                        <td>219</td>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td colspan="4">Database</td>
                                                        <td>89</td>
                                                        <td>130</td>
                                                        <td>219</td>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td colspan="4">Database</td>
                                                        <td>89</td>
                                                        <td>130</td>
                                                        <td>219</td>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td colspan="4">Database</td>
                                                        <td>89</td>
                                                        <td>130</td>
                                                        <td>219</td>
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
                                                        <td colspan="4">Number of classes</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>8</td>
                                                        <td>6</td>
                                                        <td>4</td>
                                                        <td>12</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td colspan="4">Class Membership</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td colspan="4">Class Meetings Attendances</td>
                                                        <td>2</td>
                                                        <td>5</td>
                                                        <td>1</td>
                                                        <td>6</td>
                                                        <td>1</td>
                                                        <td>15</td>
                                                    </tr>

                                                    <tr>
                                                        <th colspan="11">
                                                            <div align="center">Measure What Matters</div>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="3">Comment</td>
                                                        <td colspan="7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt non blanditiis dolorem nostrum, ex praesentium accusantium voluptatum consectetur perspiciatis excepturi eius veniam delectus aspernatur perferendis animi fugit quibusdam vel impedit.</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="3">Dated</td>
                                                        <td colspan="2">31st January, 2021</td>
                                                        <td colspan="2">Dated</td>
                                                        <td colspan="3">31st January, 2021</td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="3">Society Statistician</td>
                                                        <td colspan="2">E K Eshun</td>
                                                        <td colspan="2">Society Steward</td>
                                                        <td colspan="3">E K Eshun</td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="3">Contact</td>
                                                        <td colspan="2">020898134</td>
                                                        <td colspan="2">Contact</td>
                                                        <td colspan="3">020898134</td>

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
                                                        <td colspan="2">................</td>
                                                        <td colspan="2">Contact</td>
                                                        <td colspan="3">................</td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="3">Minister-In-Charge</td>
                                                        <td colspan="2">Very Rev Lews Smart Asare</td>
                                                        <td colspan="2">Signature</td>
                                                        <td colspan="3">................</td>

                                                    </tr>
                                                </tbody>
                                            </table> 
                                        -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12">
                                            <div align="center">
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