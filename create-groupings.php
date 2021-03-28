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
                        <a class="navbar-brand" href="javascript:;">Create Groups</a>
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
                    <div class="col-md-8">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Create Groups</h5>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">

                                <form>

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
        $('#send').click(function() {
            let sent_BTN = $('#send').val();
            let society_name_Text = $('#society_name').val();
            let circuit_Text = $('#circuit').val();
            let location_Text = $('#location').val();
            // alert(sent_BTN);
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
                        showNotification('top', 'center', data);
                        // $('#societyMessage').html(data);
                        $('#society_name').val('');
                        $('#circuit').val('');
                        $('#location').val('');
                    }
                });
            }
        });

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

        // ======================= CREATE OPERATIONS
        // $('#createOperationBTN').click(function() {
        //     let createOperations = $('#createOperations').val();
        //     let createOperationBTN = $('#createOperationBTN').text();
        //     if (createOperations == '') {
        //         $('#createOperationsError').text('Create Operation Text Fields Can not be empty ');
        //     } else {
        //         $.ajax({
        //             url: 'scripts/societyScripts.php',
        //             method: 'POST',
        //             data: {
        //                 createOperations,
        //                 createOperationBTN
        //             },
        //             success: function(data) {
        //                 $('#operationMessage').html(data);
        //                 $('#createOperations').val('');
        //             }
        //         });
        //     }
        // });

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
                        // $('#GroupingMessage').html(data);
                        showNotification('top', 'center', data);
                        $('#createGroupings').val('');
                    }
                });
            }
        });


    /*    // ======================= CREATE YEAR
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
        });*/
    })
</script>