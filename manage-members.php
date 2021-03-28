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
                        <a class="navbar-brand" href="javascript:;">Manage Members</a>
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
                                <h5 class="card-title">Manage Memebers</h5>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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


        // ======================= Register Member
        $(document).ready(function() {
            /* $('#regMember').click(function() {
                 let regMemberBTN = $('#regMember').val();
                 let firstnameText = $('#firstname').val();
                 let addressText = $('#address').val();
                 let mobilenoText = $('#mobileno').val();
                 let dobText = $('#dob').val();
                 let locationText = $('#location').val();
                 let genderText = $('#gender').val();
                 let communityText = $('#community').val();
                 let fullMemberText = $('#fullMember').val();
                 let juniorMemberText = $('#juniorMember').val();
                 let catechumensText = $('#catechumens').val();
                 let adherentsText = $('#adherents').val();

                 if (firstnameText == '') {
                     $('#errorName').text('Full Name Fields can not be empty');
                 } else if (addressText == '') {
                     $('#errorAddress').text('Address Fields can not be empty');
                 } else if (mobilenoText == '') {
                     $('#errorNumber').text('Mobile Number Fields can not be empty');
                 } else if (dobText == '') {
                     $('#errorDOB').text('Date of Birth Fields can not be empty');
                 } else if (locationText == '') {
                     $('#errorLocation').text('Location Fields can not be empty');
                 } else if (genderText == 'none') {
                     $('#errorGender').text('Gender Fields can not be empty');
                 } else if (communityText == 'none') {
                     $('#errorCommunity').text('Community Fields can not be empty');
                 } else if (fullMemberText == 'none') {
                     $('#errorFullMember').text('Full Member Fields can not be empty');
                 } else if (juniorMemberText == 'none') {
                     $('#errorJuniorMembers').text('Junior Member Fields can not be empty');
                 } else if (catechumensText == 'none') {
                     $('#errorCatechumens').text('Catechumens Fields can not be empty');
                 } else if (adherentsText == 'none') {
                     $('#errorAdherents').text('Adherents Fields can not be empty');
                 } else {

                     $.ajax({
                         url: 'scripts/societyMembersScripts.php',
                         method: 'POST',
                         data: {
                             regMemberBTN,
                             firstnameText,
                             addressText,
                             mobilenoText,
                             dobText,
                             locationText,
                             genderText,
                             communityText,
                             fullMemberText,
                             juniorMemberText,
                             catechumensText,
                             adherentsText
                         },
                         success: function(data) {
                             showNotification('top', 'center', data);
                             $('#regMember').val('');
                             $('#firstname').val('');
                             $('#address').val('');
                             $('#mobileno').val('');
                             $('#dob').val('');
                             $('#location').val('');
                             $('#gender').val('');
                             $('#community').val('');
                             $('#fullMember').val('');
                             $('#juniorMember').val('');
                             $('#catechumens').val('');
                             $('#adherents').val('');
                             fetchFromDB();
                         }
                     });

                 }
             }); */

            // Fetch from database
            fetchFromDB();

            function fetchFromDB() {
                let fetch = 'fetch';
                let selectMember = $('#memberSearchSelect').val();
                // alert(selectMember);

                $.ajax({
                    url: 'scripts/societyMembersScripts.php',
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
                    url: 'scripts/societyMembersScripts.php',
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
            //    alert(fetchDetails);


                $.ajax({
                    url: 'scripts/societyMembersScripts.php',
                    method: 'GET',
                    dataType: "JSON",
                    data: {
                        fetchDetails
                    },

                    success: function(data) {
                        $('#updateid').val(data.update_id);
                        $('#updateFullName').val(data.update_FullName);
                        $('#updateAddress').val(data.update_Address);
                        $('#updateMobile').val(data.update_Mobile);
                        $('#updatedob').val(data.update_dob);
                        $('#updateLocation').val(data.update_Location);
                        $('#updateGender').val(data.update_Gender);
                        $('#updateCommunity').val(data.update_Community);
                        $('#updateFullMember').val(data.update_FullMember);
                        $('#updateJuniorMember').val(data.update_JuniorMember);
                        $('#updateCatechumens').val(data.update_Catechumens);
                        $('#updateAdherents').val(data.update_Adherents); 
                        console.log(data);
                    }
                });
           });

            // =============== UPDATE
            $('#updateBTN').click(function() {
                let updateBTN = $('#updateBTN').text();

                let updateid = $('#updateid').val();
                let updateFullName = $('#updateFullName').val();
                let updateAddress = $('#updateAddress').val();
                let updateMobile = $('#updateMobile').val();
                let updatedob = $('#updatedob').val();
                let updateLocation = $('#updateLocation').val();
                let updateGender = $('#updateGender').val();
                let updateCommunity = $('#updateCommunity').val();
                let updateFullMember = $('#updateFullMember').val();
                let updateJuniorMember = $('#updateJuniorMember').val();
                let updateCatechumens = $('#updateCatechumens').val();
                let updateAdherents = $('#updateAdherents').val();

                if (confirm(`ARE YOU SURE YOU WANT TO UPDATE RECORDS`)) {
                    $.ajax({
                        url: 'scripts/societyMembersScripts.php',
                        method: 'POST',
                        data: {
                            updateBTN,
                            updateid,
                            updateFullName,
                            updateAddress,
                            updateMobile,
                            updatedob,
                            updateLocation,
                            updateGender,
                            updateCommunity,
                            updateFullMember,
                            updateJuniorMember,
                            updateCatechumens,
                            updateAdherents
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
                        url: 'scripts/societyMembersScripts.php',
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

        });
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
                                <label for="updateAddress">Address</label>
                                <input name="updateAddress" id="updateAddress" type="text" class="form-control" placeholder="updateAddress">

                            </div>
                            <div class="form-group">
                                <label for="updateMobile">Mobile Number</label>
                                <input name="updateMobile" id="updateMobile" type="number" class="form-control" placeholder="Mobile no.">

                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input name="updatedob" id="updatedob" type="date" class="form-control" placeholder="Date of Birth">

                            </div>
                            <div class="form-group">
                                <label for="updateLocaton">Location</label>
                                <input name="updateLocation" id="updateLocation" type="text" class="form-control" placeholder="updateLocation">

                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <div class="form-group">
                                <label for="updateGender">Gender</label>
                                <select name="updateGender" id="updateGender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="updateCommunity">Christian Community</label>
                                <select name="updateCommunity" id="updateCommunity" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="updateFullMember">Full Member</label>
                                <select name="updateFullMember" id="updateFullMember" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="updateJuniorMember">Junior Member</label>
                                <select name="updateJuniorMember" id="updateJuniorMember" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="updateCatechumens">Catechumens</label>
                                <select name="updateCatechumens" id="updateCatechumens" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="updateAdherents">Adherents</label>
                                <select name="updateAdherents" id="updateAdherents" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <div class="payment-adress">
                                <button type="button" id="regMember" name="regMember" value="send" class="btn btn-primary waves-effect waves-light">Register Member</button>
                            </div>
                        </div>
                    </div> -->
                </form>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal" href="#">Cancel</a>
                <a href="#" id="updateBTN" name="updateBTN">Update Record</a>
            </div>
        </div>
    </div>
</div>