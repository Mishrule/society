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
                                <li class="active"><a href="#description">Create a Society</a></li>
                                <li><a href="#groupings"> Create Groupings</a></li>
                                <li><a href="#operations"> Create Operations</a></li>
                                <li><a href="#yearConfig">Create Year</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="/upload" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">

                                                        <div id="societyMessage"></div>

                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="society_name" id="society_name" type="text" class="form-control" placeholder="Society Name">
                                                                    <p id="SocietyTextError" style="color:red;"></p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="circuit" id="circuit" type="text" class="form-control" placeholder="Circuit">
                                                                    <p id="CircuitTtextError" style="color:red;"></p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="location" id="location" type="text" class="form-control" placeholder="Location">
                                                                    <p id="LocationTextError" style="color:red;"></p>
                                                                </div>
                                                                <!-- <div class="form-group">
                                                                    <input name="finish" id="finish" type="text" class="form-control" placeholder="Date of Birth">
                                                                </div> -->
                                                                <!-- <div class="form-group">
                                                                    <input name="postcode" id="postcode" type="text" class="form-control" placeholder="Postcode">
                                                                </div> -->
                                                                <!-- <div class="form-group alert-up-pd">
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                        <p class="edudropnone"><span class="note needsclick">(This is just a demo dropzone. Selected image is <strong>not</strong> actually uploaded.)</span>
                                                                        </p>
                                                                        <input name="imageico" class="hd-pro-img" type="text" />
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="department" type="text" class="form-control" placeholder="Department">
                                                                </div>
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="description" placeholder="Description"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="gender" class="form-control">
																		<option value="none" selected="" disabled="">Select Gender</option>
																		<option value="0">Male</option>
																		<option value="1">Female</option>
																	</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="country" class="form-control">
																			<option value="none" selected="" disabled="">Select country</option>
																			<option value="0">India</option>
																			<option value="1">Pakistan</option>
																			<option value="2">Amerika</option>
																			<option value="3">China</option>
																			<option value="4">Dubai</option>
																			<option value="5">Nepal</option>
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="state" class="form-control">
																			<option value="none" selected="" disabled="">Select state</option>
																			<option value="0">Gujarat</option>
																			<option value="1">Maharastra</option>
																			<option value="2">Rajastan</option>
																			<option value="3">Maharastra</option>
																			<option value="4">Rajastan</option>
																			<option value="5">Gujarat</option>
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="city" class="form-control">
																			<option value="none" selected="" disabled="">Select city</option>
																			<option value="0">Surat</option>
																			<option value="1">Baroda</option>
																			<option value="2">Navsari</option>
																			<option value="3">Baroda</option>
																			<option value="4">Surat</option>
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="website" type="text" class="form-control" placeholder="Website URL">
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="button" id="send" name="send" value="send" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="groupings">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div id="GroupingMessage"></div>
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" id="createGroupings" name="createGroupings" class="form-control" placeholder="Create Groupings">
                                                                <p id="createGroupingsError" style="color:red"></p>
                                                            </div>
                                                            
                                                            <div align="center">
                                                                <a href="#" id="createGroupingsBTN" name="createGroupingsBTN" class="btn btn-primary waves-effect waves-light">Create Groupings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="operations">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div id="operationMessage"></div>
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" id="createOperations" name="createOperations" class="form-control" placeholder="Create Operation">
                                                                <p id="createOperationsError" style="color:red"></p>
                                                            </div>
                                                            <!-- <div class="form-group">
                                                                <input type="number" class="form-control" placeholder="Phone">
                                                            </div> -->
                                                            <!-- <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Password">
                                                            </div> -->
                                                            <!-- <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Confirm Password">
                                                            </div> -->
                                                            <div align="center">
                                                                <a href="#!" id="createOperationBTN" name="createOperationBTN" class="btn btn-primary waves-effect waves-light">Create Operations</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="yearConfig">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div id="yearMessage"></div>
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" id="createYear" name="createYear" class="form-control" placeholder="Create Year">
                                                                <p id="createYearError" style="color:red;"></p>
                                                            </div>

                                                            <div align="center">
                                                                <a href="#!" id="createYearBTN" name="createYearBTN" class="btn btn-primary waves-effect waves-light">Create Year</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="devit-card-custom">
                                                            <div class="white-box">
                                                                <h3 class="box-title">LIST OF YEARS CREATED</h3>
                                                                <ul class="basic-list">
                                                                    <?php
                                                                    $yearFetchDisplay = '';
                                                                    $yearFetchSQL = "SELECT * FROM years ORDER BY year_created DESC LIMIT 5";
                                                                    $yearFetchResult = mysqli_query($con, $yearFetchSQL);

                                                                    if (mysqli_num_rows($yearFetchResult) > 0) {
                                                                        while ($yearFetchRow = mysqli_fetch_array($yearFetchResult)) {
                                                                            $yearFetchDisplay .= '
                                                                                
                                                                                <li>' . $yearFetchRow['years_year'] . ' <span class="pull-right label-purple label-2 label"></span></li>
                                                                                ';
                                                                        }
                                                                    } else {
                                                                        $yearFetchDisplay .= '<li>NO YEAR CREATED YET</li>';
                                                                    }
                                                                   
                                                                    echo $yearFetchDisplay;
                                                                    ?>
                                                                </ul>
                                                            </div>

                                                            <!-- <div align="center">
                                                                <a href="#!" class="btn btn-primary waves-effect waves-light">Create Year</a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
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
        $('#send').click(function() {
            let sent_BTN = $('#send').val();
            let society_name_Text = $('#society_name').val();
            let circuit_Text = $('#circuit').val();
            let location_Text = $('#location').val();

            if (society_name_Text == '') {
                $('#SocietyTextError').text('Society Field can not be empty');
            } else if (circuit_Text == '') {
                $('#CircuitTtextError').text('Circuit Field can not be empty');
            } else if (location_Text == '') {
                $('#LocationTextError').text('Location Field can not be empty');
            } else {
                $.ajax({
                    url: 'scripts/societyScripts.php',
                    method: 'POST',
                    data: {
                        sent_BTN,
                        society_name_Text,
                        circuit_Text,
                        location_Text
                    },
                    success: function(data) {
                        $('#societyMessage').html(data);
                        $('#society_name').val('');
                        $('#circuit').val('');
                        $('#location').val('');
                    }
                });
            }
        });

        // ======================= CREATE OPERATIONS
        $('#createOperationBTN').click(function() {
            let createOperations = $('#createOperations').val();
            let createOperationBTN = $('#createOperationBTN').text();
            if (createOperations == '') {
                $('#createOperationsError').text('Create Operation Text Fields Can not be empty ');
            } else {
                $.ajax({
                    url: 'scripts/societyScripts.php',
                    method: 'POST',
                    data: {
                        createOperations,
                        createOperationBTN
                    },
                    success: function(data) {
                        $('#operationMessage').html(data);
                        $('#createOperations').val('');
                    }
                });
            }
        });

                // ======================= CREATE GROUPINGS
                $('#createGroupingsBTN').click(function() {
            let createGroupings = $('#createGroupings').val();
            let createGroupingBTN = $('#createGroupingsBTN').text();
            if (createGroupings == '') {
                $('#createGroupingsError').text('Create Grouping Text Fields Can not be empty ');
            } else {
                $.ajax({
                    url: 'scripts/societyScripts.php',
                    method: 'POST',
                    data: {
                        createGroupings,
                        createGroupingBTN
                    },
                    success: function(data) {
                        $('#GroupingMessage').html(data);
                        $('#createGroupings').val('');
                    }
                });
            }
        });


        // ======================= CREATE YEAR
        $('#createYearBTN').click(function() {

            let createYear = $('#createYear').val();
            let createYearBTN = $('#createYearBTN').text();
            if (createYear == '') {
                $('#createYearError').text('Year Text Fields Can not be empty ');
            } else {
                $.ajax({
                    url: 'scripts/societyScripts.php',
                    method: 'POST',
                    data: {
                        createYear,
                        createYearBTN
                    },
                    success: function(data) {
                        $('#yearMessage').html(data);
                        $('#createYear').val('');
                    }
                });
            }
        });
    })
</script>