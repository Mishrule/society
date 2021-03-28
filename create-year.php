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
                        <a class="navbar-brand" href="javascript:;">Create Operations</a>
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
                                <h5 class="card-title">Create Year</h5>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">

                                <form>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" id="createYear" name="createYear" class="form-control" placeholder="Create Year">
                                                        <p id="createYearError" style="color:red;"></p>
                                                    </div>

                                                    <div align="center">
                                                        <a href="#!" id="createYearBTN" name="createYearBTN" class="btn btn-primary waves-effect waves-light">Create Year</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="white-box">
                                                        <ul class="list-group">
                                                            <li class="list-group-item active" aria-current="true">Created Years</li>
                                                            <?php
                                                            $yearFetchDisplay = '';
                                                            $yearFetchSQL = "SELECT * FROM years ORDER BY year_created DESC LIMIT 5";
                                                            $yearFetchResult = mysqli_query($con, $yearFetchSQL);

                                                            if (mysqli_num_rows($yearFetchResult) > 0) {
                                                                while ($yearFetchRow = mysqli_fetch_array($yearFetchResult)) {
                                                                    $yearFetchDisplay .= '
                                                                                
                                                                                <li class="list-group-item">' . $yearFetchRow['years_year'] . ' <span class="pull-right label-purple label-2 label"></span></li>
                                                                                ';
                                                                }
                                                            } else {
                                                                $yearFetchDisplay .= '<li>NO YEAR CREATED YET</li>';
                                                            }

                                                            echo $yearFetchDisplay;
                                                            ?>
                                                        </ul>
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
                        showNotification('top', 'center', data);
                        $('#createYear').val('');
                    }
                });
            }
        });
    })
</script>