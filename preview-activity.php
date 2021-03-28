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
                        <a class="navbar-brand" href="javascript:;">Preview Activity</a>
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
                                <h5 class="card-title">Weekly Records</h5>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <form>
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
                                                <!-- <hr>
                                                <div class="row">
                                                    <div align="center">
                                                        <h4>GENDER</h4>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div id="genderFetchRecord"></div>
                                                        
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

                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Gender</h5>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <!-- <div class="row">
                                                    <div align="center">
                                                        <h4>WEEKLY RECORDS</h4>
                                                    </div>
                                                </div> -->
                                                
                                                <!-- <div class="row"> -->
                                                    <div align="center">
                                                        <h4>GENDER</h4>
                                                    </div>
                                                <!-- </div> -->
                                                
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div id="genderFetchRecord"></div>
                                                        
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
            <?php include('inc/footer.php'); ?>

        </div>
    </div>
    <!--   Core JS Files   -->
    <?php include('inc/footerjs.php'); ?>
</body>

</html>
<script>
    $(document).ready(function() {

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

    /*    // GET ACTIVITY
        $(document).on('click', '.activityEdit', function() {
            let activityButton = $(this).attr('id');
            // alert(activityButton);
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
                        // $('#activityMessage').html(data);
                        showNotification('top', 'center', data);
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
                    // $('#fetchMessage').html(data);
                    showNotification('top', 'center', data);
                    setTimeout(function() {
                        window.location.reload();
                    }, 3000);
                }
            });
        }); 
    */

    /*    // GET GROUP ACTIVITY
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
                        // $('#activityGroupMessage').html(data);
                        showNotification('top', 'center', data);
                        $('#groupName').val('');
                        $('#male').val(0);
                        $('#female').val(0);
                        $('#month').val('None');

                    }
                });
            }
        });
    */

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

        $('#previewmonth').change(function() {
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
        }

        // Change Month
        $('#previewmonth').change(function() {
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

<!--<div id="WarningModalalert" class="modal  modal-edu-general Customwidth-popup-WarningModal fade" role="dialog">
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
                <div class="modal-footer warning-md">
                    <a data-dismiss="modal" href="#">Cancel</a>
                    <a href="#" id="updateBTN" name="updateBTN">Update</a>
                </div>
            </div>
        </div>
    </div>
</div> -->