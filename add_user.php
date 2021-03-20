<?php include_once('scripts/db.php'); 
include_once('scripts/datetime.php'); 
$msg ='';
if(isset($_POST['createUser'])){
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
    $Image = $_FILES['userimage']['name'];
    $Target = "img/".basename($_FILES['studentImage']['name']);
    $postDetailsSQL = "INSERT INTO usersaccount VALUES('','$firstname','$username','$pass','$contact','$location','$gender','$societyName','$circuitName','$Image','$DateTime')";

    $postDetailsResult = mysqli_query($con, $postDetailsSQL);

    move_uploaded_file($_FILES['userimage']['tmp_name'], $Target);
    if($registerResult){
        $msg = '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>'.$username.'</strong> Registered Successfully
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ';
        header("Refresh:2");
    }else{
        $msg = '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>'.mysqli_error($con).'</strong>  Failed Try again
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ';
    }

}

?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Head Start -->
<?php require('./inc/head.php');?>
<!-- Head Ends -->

<body>

    <!-- Start Left menu area -->
    <?php require('./inc/aside.php');?>
    <!-- End Left menu area -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        
        <!-- Start Brand -->
        <?php require('./inc/brand.php');?>
        <!-- End Brand -->
        
       <!-- Header Start -->
        <?php require('./inc/header.php');?>
        <!-- End Header -->

        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Add New User</a></li>
                                <li><a href="#reviews">Manage User</a></li>
                                <!-- <li><a href="#INFORMATION">View Information</a></li> -->
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
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
                                                                    <input name="pass" id="pass" type="text" class="form-control" placeholder="Password">
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
                                                                    <select name="gender" class="form-control">
																		<option value="none" selected="" >Select Gender</option>
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
                                                                                while($selectSocietyNameRow = mysqli_fetch_array($selectSocietyNameResult)){
                                                                                    echo '<option value="'.$selectSocietyNameRow['society_name'].'">'.$selectSocietyNameRow['society_name'].'</option>';
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
                                                                                while($selectCircuitNameRow = mysqli_fetch_array($selectCircuitNameResult)){
                                                                                    echo '<option value="'.$selectCircuitNameRow['circuit_name'].'">'.$selectCircuitNameRow['circuit_name'].'</option>';
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
                                                                <div class="form-group">
                                                                    <input name="userimage" id="userimage" type="file" class="form-control" placeholder="User Image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" id="createUser" name="createUser" value="createUser" class="btn btn-primary waves-effect waves-light">Create User</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control" placeholder="Phone">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Confirm Password">
                                                            </div>
                                                            <a href="#!" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="product-tab-list tab-pane fade" id="INFORMATION">
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
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php require('./inc/footer.php');?>
    </div>

    <?php require('./inc/footerjs.php');?>
</body>

</html>