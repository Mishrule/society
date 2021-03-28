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
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <caption class="devit-card-custom">
                                                                <caption>
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                            <div class="form-group">
                                                                                <input name="searchMembers" id="searchMembers" type="text" class="form-control" placeholder="Search by Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                                            <div class="form-group">
                                                                                Show: <select name="memberSearchSelect" id="memberSearchSelect" class="form-control">
                                                                                    <option value="10">10</option>
                                                                                    <option value="20">20</option>
                                                                                    <option value="50">50</option>
                                                                                    <option value="10000">All</option>

                                                                                </select>
                                                                                <p style="color:red;" id="errorAdherents"></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </caption>
                                                                <div id="deleteMessage"></div>
                                                                <div id="displaySearch"></div>
                                                            </caption>
                                                        </div>
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

        // Fetch from database
        fetchFromDB();

        function fetchFromDB() {
            let fetch = 'fetch';
            let selectMember = $('#memberSearchSelect').val();
            // alert(selectMember);

            $.ajax({
                url: 'scripts/addUserScript.php',
                method: 'GET',
                data: {
                    fetch,
                    selectMember
                },
                success: function(data) {
                    $('#displaySearch').html(data);
                }
            });

        }

        // ====== Search Members
        $('#searchMembers').keyup(function() {
            let selectMemberText = $('#searchMembers').val();
            // alert(selectMemberText);

            $.ajax({
                url: 'scripts/addUserScript.php',
                method: 'GET',
                data: {
                    selectMemberText
                },
                success: function(data) {
                    $('#displaySearch').html(data);
                }
            });
        });

        // FETCH DETAILS
        $(document).on('click', '.edit', function() {
            var fetchDetails = $(this).attr('id');
            // alert(fetchDetails);


            $.ajax({
                url: 'scripts/addUserScript.php',
                method: 'GET',
                dataType: "JSON",
                data: {
                    fetchDetails
                },

                success: function(data) {
                    $('#updateid').val(data.updateid);
                    $('#updateFullName').val(data.updateFullName);
                    $('#updateUsername').val(data.updateUsername);
                    $('#updatePassword').val(data.updatePassword);
                    $('#updateContact').val(data.updateContact);
                    $('#updateLocation').val(data.updateLocation);
                    $('#updateGender').val(data.updateGender);
                    
                    // console.log(data);
                }
            });
        });
        // =============== UPDATE
        $('#updateBTN').click(function() {
            let updateBTN = $('#updateBTN').text();

            let updateid = $('#updateid').val();
            let updateFullName = $('#updateFullName').val();
            // let updateUsername = $('#updateUsername').val();
            let updatePassword = $('#updatePassword').val();
            let updateContact = $('#updateContact').val();
            let updateLocation = $('#updateLocation').val();
            let updateGender = $('#updateGender').val();
            

            if (confirm(`ARE YOU SURE YOU WANT TO UPDATE RECORDS`)) {
                $.ajax({
                    url: 'scripts/addUserScript.php',
                    method: 'POST',
                    data: {
                        updateBTN,
                        updateid,
                        updateFullName,
                        updatePassword,
                        updateContact,
                        updateLocation,
                        updateGender                       
                    },

                    success: function(data) {
                        // $('#showMessage').html(data);
                        showNotification('top', 'center', data);
                        setTimeout(() => {
                            fetchFromDB();
                            $('#PrimaryModalalert').modal('hide');
                        }, 3000);
                    }
                });
            }

        });

        // ============= DELETE RECORDS
        $(document).on('click', '.del', function() {
            let del = $(this).attr('id');

            if (confirm("ARE YOU SURE YOU WANT TO DELETE THIS RECORD")) {
                $.ajax({
                    url: 'scripts/addUserScript.php',
                    method: 'POST',
                    data: {
                        del
                    },
                    success: function(data) {
                        // $('#deleteMessage').html(data);
                        showNotification('top', 'center', data);

                        fetchFromDB();
                    }
                });
            }
        })

    })
</script>
<div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">

                <div id="showMessage"></div>
                <h3>UPDATE RECORDS</h3>
                <!-- <form action="/upload" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload"> -->
                <form method="GET">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <!-- <div class="form-group"> -->
                            <!-- <label for="updateid">ID</label> -->
                            <input name="updateid" id="updateid" type="hidden" class="form-control" placeholder="ID" disabled>

                            <!-- </div> -->
                            <div class="form-group">
                                <label for="updateFullName">Full Name</label>
                                <input name="updateFullName" id="updateFullName" type="text" class="form-control" placeholder="Full Name">

                            </div>
                            <div class="form-group">
                                <label for="updateUsername">Username</label>
                                <input name="updateUsername" id="updateUsername" type="text" class="form-control" placeholder="updateUsername" disabled>

                            </div>
                            <div class="form-group">
                                <label for="updatePassword">Password</label>
                                <input name="updatePassword" id="updatePassword" type="text" class="form-control" placeholder="Password">

                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="dob">Contact</label>
                                <input name="updateContact" id="updateContact" type="number" class="form-control" placeholder="Contact">

                            </div>
                            <div class="form-group">
                                <label for="updateLocaton">Location</label>
                                <input name="updateLocation" id="updateLocation" type="text" class="form-control" placeholder="updateLocation">
                            </div>
                            <div class="form-group">
                                <label for="updateGender">Gender</label>
                                <select name="updateGender" id="updateGender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal" href="#">Cancel</a>
                <a href="#" id="updateBTN" name="updateBTN">Update Record</a>
            </div>
        </div>
    </div>
</div>