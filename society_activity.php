<?php include_once('scripts/db.php'); ?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Head Start -->
<?php require('./inc/head.php'); ?>
<!-- Head Ends -->

<body>

    <!-- Start Left menu area -->
    <?php require('./inc/aside.php'); ?>
    <!-- End Left menu area -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">

        <!-- Start Brand -->
        <?php require('./inc/brand.php'); ?>
        <!-- End Brand -->

        <!-- Header Start -->
        <?php require('./inc/header.php'); ?>
        <!-- End Header -->

        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Basic Activity</a></li>
                                <li><a href="#grouping">Basic Group</a></li>
                                <!-- <li><a href="#reviews"> Manage Activity</a></li> -->
                                <li><a href="#previewActivity">Preview Activity</a></li>
                                <li><a href="#report">Report</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
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
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="/upload" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
                                                            <div id="activityMessage"></div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="white-box">
                                                                    <h3 class="box-title">Click to Perform Activity</h3>
                                                                    <ul class="basic-list">
                                                                        <?php
                                                                        $operationFetchDisplay = '';
                                                                        $operationFetchSQL = "SELECT * FROM operations";
                                                                        $operationFetchResult = mysqli_query($con, $operationFetchSQL);

                                                                        if (mysqli_num_rows($operationFetchResult) > 0) {
                                                                            while ($operationFetchRow = mysqli_fetch_array($operationFetchResult)) {
                                                                                $operationFetchDisplay .= '
                                                                                
                                                                                <li class="activityEdit" id="' . $operationFetchRow['operation_id'] . '" name="' . $operationFetchRow['operation_id'] . '">' . $operationFetchRow['operation_name'] . ' <span class="pull-right label-purple label-2 label">' . $operationFetchRow['operation_id'] . '</span></li>
                                                                                ';
                                                                            }
                                                                        } else {
                                                                            $operationFetchDisplay .= '<li>NO operation CREATED YET</li>';
                                                                        }
                                                                        $operationFetchDisplay .= ' </ul>';
                                                                        echo $operationFetchDisplay;
                                                                        ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label for="operationType">Operation Type</label>
                                                                    <input name="operationType" id="operationType" type="text" class="form-control" placeholder="Operation Type" disabled>
                                                                </div>
                                                                <!-- <div class="form-group res-mg-t-15">
                                                                    <textarea name="description" placeholder="Description"></textarea>
                                                                </div> -->
                                                                <div class="form-group">
                                                                    <label for="weekOne">Week 1</label>
                                                                    <input name="weekOne" id="weekOne" type="number" class="form-control" placeholder="Week One" value='0'>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="weekTwo">Week 2</label>
                                                                    <input name="weekTwo" id="weekTwo" type="number" class="form-control" placeholder="Week Two" value='0'>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="weekThree">Week 3</label>
                                                                    <input name="weekThree" id="weekThree" type="number" class="form-control" placeholder="Week Three" value='0'>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="weekFour">Week 4</label>
                                                                    <input name="weekFour" id="weekFour" type="number" class="form-control" placeholder="Week Four" value='0'>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="weekFive">Week 5</label>
                                                                    <input name="weekFive" id="weekFive" type="number" class="form-control" placeholder="Week Five" value='0'>
                                                                </div>
                                                                <!-- <div class="form-group">
                                                                    <label for="total">Total</label>
                                                                    <input name="total" id="total" type="number" class="form-control" placeholder="Total" value='0'>
                                                                </div> -->
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="payment-adress">
                                                                            <button type="button" id="activityBTN" name="activityBTN" class="btn btn-primary waves-effect waves-light">Log Activity</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="payment-adress">
                                                                            <button type="button" id="updateActivityBTN" name="updateActivityBTN" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#WarningModalalert">Update Activity</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Grouping -->
                                <div class="product-tab-list tab-pane fade" id="grouping">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group">
                                                <select name="groupMonth" id="groupMonth" class="form-control">
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
                                            <select name="groupYear" id="groupYear" class="form-control">

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
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="/upload" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
                                                            <div id="activityGroupMessage"></div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="white-box">
                                                                    <h3 class="box-title">Click to Perform Activity</h3>
                                                                    <ul class="basic-list">
                                                                        <?php
                                                                        $groupFetchDisplay = '';
                                                                        $groupFetchSQL = "SELECT * FROM groupings";
                                                                        $groupFetchResult = mysqli_query($con, $groupFetchSQL);

                                                                        if (mysqli_num_rows($groupFetchResult) > 0) {
                                                                            while ($groupFetchRow = mysqli_fetch_array($groupFetchResult)) {
                                                                                $groupFetchDisplay .= '
                                                                                
                                                                                <li class="activityGroupEdit" id="' . $groupFetchRow['group_id'] . '" name="' . $groupFetchRow['group_id'] . '">' . $groupFetchRow['group_name'] . ' <span class="pull-right label-purple label-2 label">' . $groupFetchRow['group_id'] . '</span></li>
                                                                                ';
                                                                            }
                                                                        } else {
                                                                            $groupFetchDisplay .= '<li>NO GROUP CREATED YET</li>';
                                                                        }
                                                                        $groupFetchDisplay .= ' </ul>';
                                                                        echo $groupFetchDisplay;
                                                                        ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label for="groupName">Database</label>
                                                                    <input name="groupName" id="groupName" type="text" class="form-control" placeholder="group Name" disabled>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="male">Male</label>
                                                                    <input name="male" id="male" type="number" class="form-control" value="0" placeholder="eg. 0">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="female">Female</label>
                                                                    <input name="female" id="female" type="number" class="form-control" value="0" placeholder="eg. 0">
                                                                </div>



                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="payment-adress">
                                                                            <button type="button" id="activityGroupBTN" name="activityGroupBTN" class="btn btn-primary waves-effect waves-light">Log Groups Activity</button>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="col-lg-6">
                                                                        <div class="payment-adress">
                                                                            <button type="button" id="updateActivityBTN" name="updateActivityBTN" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#WarningModalalert">Update Activity</button>
                                                                        </div>
                                                                    </div> -->
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Preview Activity -->
                                <div class="product-tab-list tab-pane fade" id="previewActivity">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <!-- <div class="row">
                                                    <div align="center">
                                                        <h4>WEEKLY RECORDS</h4>
                                                    </div>
                                                </div> -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="devit-card-custom">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                    <div class="form-group">
                                                                        <select name="previewmonth" id="previewmonth" class="form-control">
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
                                                                    <select name="previewyear" id="previewyear" class="form-control">

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
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div align="center">
                                                    <h4>WEEKLY RECORDS</h4>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div id="weeklyFetchRecord"></div>

                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div align="center">
                                                        <h4>GENDER</h4>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div id="genderFetchRecord"></div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="product-tab-list tab-pane fade" id="report">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="url" class="form-control" placeholder="Facebook URL">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control" placeholder="Twitter URL">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control" placeholder="Google Plus">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control" placeholder="Linkedin URL">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require('./inc/footer.php'); ?>
    </div>

    <?php require('./inc/footerjs.php'); ?>
</body>

</html>
<script>
    $(document).ready(function() {
        // GET ACTIVITY
        $(document).on('click', '.activityEdit', function() {
            let activityButton = $(this).attr('id');
            $.ajax({
                url: 'scripts/societyActivityScripts.php',
                method: 'GET',
                data: {
                    activityButton
                },
                success: function(data) {
                    $('#operationType').val(data);

                }
            });
        });

        // ======   LOG ACTIVITY

        $('#activityBTN').click(function() {
            if ($('#month').val() == 'None') {
                alert('Please select Month');
            } else if ($('#operationType').val() == "") {
                alert('Please Click an Activity');
            } else {
                let operationType = $('#operationType').val();
                let weekOne = $('#weekOne').val();
                let weekTwo = $('#weekTwo').val();
                let weekThree = $('#weekThree').val();
                let weekFour = $('#weekFour').val();
                let weekFive = $('#weekFive').val();
                let month = $('#month').val();
                let year = $('#year').val();
                let activityPerformBTN = $('#activityBTN').val();
                // alert(year);

                $.ajax({
                    url: 'scripts/societyActivityScripts.php',
                    method: 'POST',
                    data: {
                        operationType,
                        weekOne,
                        weekTwo,
                        weekThree,
                        weekFour,
                        weekFive,
                        activityPerformBTN,
                        month,
                        year
                    },
                    success: function(data) {
                        $('#activityMessage').html(data);
                        $('#operationType').val('');
                        $('#weekOne').val(0);
                        $('#weekTwo').val(0);
                        $('#weekThree').val(0);
                        $('#weekFour').val(0);
                        $('#weekFive').val(0);
                        $('#month').val('None');

                    }
                });
            }
        });
        // Fetch for update
        $('#updateOperation').change(function() {
            let FetchupdateMonth = $('#updateMonth').val();
            let FetchupdateYear = $('#updateYear').val();
            let FetchupdateOperation = $('#updateOperation').val();

            $.ajax({
                url: 'scripts/societyActivityScripts.php',
                method: 'GET',
                dataType: 'JSON',
                data: {
                    FetchupdateMonth,
                    FetchupdateYear,
                    FetchupdateOperation
                },
                success: function(data) {
                    $('#updateWeek1').val(data.updateWeek1);
                    $('#updateWeek2').val(data.updateWeek2);
                    $('#updateWeek3').val(data.updateWeek3);
                    $('#updateWeek4').val(data.updateWeek4);
                    $('#updateWeek5').val(data.updateWeek5);

                }
            });
        });

        // Update Fetched Data
        $('#updateBTN').click(function() {
            let updateWeek1 = $('#updateWeek1').val();
            let updateWeek2 = $('#updateWeek2').val();
            let updateWeek3 = $('#updateWeek3').val();
            let updateWeek4 = $('#updateWeek4').val();
            let updateWeek5 = $('#updateWeek5').val();
            let FetchupdateMonth = $('#updateMonth').val();
            let FetchupdateYear = $('#updateYear').val();
            let FetchupdateOperation = $('#updateOperation').val();
            let update_BTN = $('#updateBTN').text();
            // alert(updateWeek1);
            // alert(updateWeek2);
            // alert(updateWeek3);
            // alert(updateWeek4);
            // alert(updateWeek5);
            // alert(FetchupdateMonth);
            // alert(FetchupdateOperation);
            // alert(FetchupdateYear);
            $.ajax({
                url: 'scripts/societyActivityScripts.php',
                method: 'POST',

                data: {
                    updateWeek1,
                    updateWeek2,
                    updateWeek3,
                    updateWeek4,
                    updateWeek5,
                    FetchupdateMonth,
                    FetchupdateYear,
                    FetchupdateOperation,
                    update_BTN
                },
                success: function(data) {
                    $('#fetchMessage').html(data);
                    setTimeout(function() {
                        window.location.reload();
                    }, 3000);
                }
            });
        });

        // GET GROUP ACTIVITY
        $(document).on('click', '.activityGroupEdit', function() {
            let activityGroupButton = $(this).attr('id');
            $.ajax({
                url: 'scripts/societyActivityScripts.php',
                method: 'GET',
                data: {
                    activityGroupButton
                },
                success: function(data) {
                    $('#groupName').val(data);

                }
            });
        });

        // Group Activity
        //   LOG ACTIVITY

        $('#activityGroupBTN').click(function() {
            if ($('#groupMonth').val() == 'None') {
                alert('Please select Month');
            } else if ($('#groupName').val() == "") {
                alert('Please Click an Activity');
            } else {
                let groupName = $('#groupName').val();
                let male = $('#male').val();
                let female = $('#female').val();
                // let groupName = $('#groupName').val();

                let groupMonth = $('#groupMonth').val();
                let groupYear = $('#groupYear').val();
                let activityGroupPerformBTN = $('#activityGroupBTN').val();
                // alert(year);


                $.ajax({
                    url: 'scripts/societyActivityScripts.php',
                    method: 'POST',
                    data: {
                        groupName,
                        male,
                        female,
                        groupMonth,
                        groupYear,
                        activityGroupPerformBTN
                    },
                    success: function(data) {
                        $('#activityGroupMessage').html(data);
                        $('#groupName').val('');
                        $('#male').val(0);
                        $('#female').val(0);
                        $('#month').val('None');

                    }
                });
            }
        });

        weeklyRecords();

        // ================= Preview Activity
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
        }

        $('#previewmonth').change(function(){
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

        });

        // ================= Gender Activity
        weeklyGenderRecords();
        function weeklyGenderRecords() {
            let selectGenderRecord = "weeklyRecord";
            let  weeklyGenderRecordsYear= $('#previewyear').val();
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
        }

        // Change Month
        $('#previewmonth').change(function(){
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

        });
        
    })
</script>

<div id="WarningModalalert" class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>

            </div>
            <div class="modal-body">
                <span class="educate-icon educate-success modal-check-pro information-icon-pro"></span>
                <div class="row">
                    <div id="fetchMessage"></div>
                    <h3>Update Operation</h3>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="updateMonth">Month</label>
                            <select name="updateMonth" id="updateMonth" class="form-control">
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
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="updateYear">Year</label>
                            <select name="updateYear" id="updateYear" class="form-control">
                                <option value="None">Select Year</option>
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
                                    $yearFetchDisplay .= '<option>No Year Created Yet</option>';
                                }

                                echo $yearFetchDisplay;
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="updateOperation">Operation</label>
                            <select name="updateOperation" id="updateOperation" class="form-control">
                                <option value="None">Select Operation</option>

                                <?php
                                $operationFetchDisplay = '';
                                $operationFetchSQL = "SELECT * FROM operations";
                                $operationFetchResult = mysqli_query($con, $operationFetchSQL);

                                if (mysqli_num_rows($operationFetchResult) > 0) {
                                    while ($operationFetchRow = mysqli_fetch_array($operationFetchResult)) {
                                        $operationFetchDisplay .= '
                                     
                                     <option value="' . $operationFetchRow['operation_name'] . '">' . $operationFetchRow['operation_name'] . '</option>
                                                                                ';
                                    }
                                } else {
                                    $operationFetchDisplay .= '<option>NO operation CREATED YET</option>';
                                }

                                echo $operationFetchDisplay;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label for="updateWeek1">Week 1</label>
                                <input name="updateWeek1" id="updateWeek1" type="number" class="form-control" placeholder="Week 1" value='0'>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label for="updateWeek2">Week 2</label>
                                <input name="updateWeek2" id="updateWeek2" type="number" class="form-control" placeholder="Week 2" value='0'>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label for="updateWeek3">Week 3</label>
                                <input name="updateWeek3" id="updateWeek3" type="number" class="form-control" placeholder="Week 3" value='0'>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label for="updateWeek4">Week 4</label>
                                <input name="updateWeek4" id="updateWeek4" type="number" class="form-control" placeholder="Week 4" value='0'>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label for="updateWeek5">Week 5</label>
                                <input name="updateWeek5" id="updateWeek5" type="number" class="form-control" placeholder="Week 5" value='0'>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer warning-md">
                    <a data-dismiss="modal" href="#">Cancel</a>
                    <a href="#" id="updateBTN" name="updateBTN">Update</a>
                </div>
            </div>
        </div>
    </div>
</div>