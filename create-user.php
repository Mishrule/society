<?php include_once('scripts/db.php');
 
include_once('scripts/datetime.php');
$msg = '';
if (isset($_POST['createUser'])) {
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $societyName = mysqli_real_escape_string($con, $_POST['societyName']);
    $circuitName = mysqli_real_escape_string($con, $_POST['circuitName']);
    // $societylocation = mysqli_real_escape_string($con, $_POST['societylocation']);
    // userimage
    if($username == ""){
        $msg = '
        <div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
					<span class="icon-sc-cl" aria-hidden="true">&times;</span>
				</button>
                <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                <p class="message-alert-none"><strong>ERROR!</strong> Username Can not be Empty</p>
            </div>
        ';
    }else if($password == ""){
        $msg = '
        <div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
					<span class="icon-sc-cl" aria-hidden="true">&times;</span>
				</button>
                <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                <p class="message-alert-none"><strong>ERROR!</strong> Password Can not be empty</p>
            </div>
        ';
    }else{
    $Image = $_FILES['userimage']['name'];
    $Target = "assets/img/profile/" . basename($_FILES['userimage']['name']);
    $postDetailsSQL = "INSERT INTO useraccount VALUES('','$firstname','$username','$pass','$contact','$location','$gender','$societyName','$circuitName','','$DateTime')";

    $postDetailsResult = mysqli_query($con, $postDetailsSQL);

    move_uploaded_file($_FILES['userimage']['tmp_name'], $Target);
        if ($postDetailsResult) {
        $msg = '
        <div class="alert alert-success alert-success-style1 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
					<span class="icon-sc-cl" aria-hidden="true">&times;</span>
				</button>
                <i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i>
                <p class="message-alert-none"><strong>Success: </strong>' . $firstname . ' is Registered Successfully.</p>
            </div>
        ';
        header("Refresh:3");
        } else {
        $msg = '
        <div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
					<span class="icon-sc-cl" aria-hidden="true">&times;</span>
				</button>
                <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                <p class="message-alert-none"><strong>ERROR!</strong> Failed to Registered User' . mysqli_error($con) . '</p>
            </div>
        ';
        }
    }
}


?>
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
                        <a class="navbar-brand" href="javascript:;">User Account</a>
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
                                <h5 class="card-title">Create new User</h5>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <form action="<?php $Php_SELF ?>" method="POST" enctype="multipart/form-data" >
                                    <!-- Content here -->
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <div><?php echo $msg; ?></div>
                                                    <form action="<?php $Php_SELF ?>" method="POST" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="firstname" id="firstname" type="text" class="form-control" placeholder="Full Name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="username" id="username" type="text" class="form-control" placeholder="Username">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="pass" id="pass" type="password" class="form-control" placeholder="Password">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="contact" id="contact" type="number" class="form-control" placeholder="Contact Number">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="location" id="location" type="text" class="form-control" placeholder="User Location">
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    <select name="gender" id="gender" class="form-control">
                                                                        <option value="none" selected="">Select Gender</option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="societyName" id="societyName" class="form-control">
                                                                        <option value="none">Society Name</option>
                                                                        <?php
                                                                        $selectSocietyNameSQL = "SELECT * FROM society";
                                                                        $selectSocietyNameResult = mysqli_query($con, $selectSocietyNameSQL);
                                                                        while ($selectSocietyNameRow = mysqli_fetch_array($selectSocietyNameResult)) {
                                                                            echo '<option value="' . $selectSocietyNameRow['society_name'] . '">' . $selectSocietyNameRow['society_name'] . '</option>';
                                                                        }
                                                                        ?>

                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="circuitName" id="circuitName" class="form-control">
                                                                        <option value="none">Circuit Name</option>
                                                                        <?php
                                                                        $selectCircuitNameSQL = "SELECT DISTINCT(circuit_name) FROM society";
                                                                        $selectCircuitNameResult = mysqli_query($con, $selectCircuitNameSQL);
                                                                        while ($selectCircuitNameRow = mysqli_fetch_array($selectCircuitNameResult)) {
                                                                            echo '<option value="' . $selectCircuitNameRow['circuit_name'] . '">' . $selectCircuitNameRow['circuit_name'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                                <!-- <div class="form-group">
                                                                    <select name="city" class="form-control">
																			<option value="none" >Diocese Name</option>
																			<option value="0">Surat</option>
																			<option value="1">Baroda</option>
																			<option value="2">Navsari</option>
																			<option value="3">Baroda</option>
																			<option value="4">Surat</option>
																	</select>
                                                                </div> -->

                                                                <div class="mb-3">
                                                                    
                                                                    <input class="form-control" name="userimage" id="userimage" type="file">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div align="center">
                                                                    <button type="submit" id="createUser" name="createUser" value="createUser" class="btn btn-primary waves-effect waves-light">Create User</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
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

    })
</script>