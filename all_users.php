<?php include_once('scripts/db.php'); ?>
<!doctype html>
<html class="no-js" lang="zxx">

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
        <div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <?php
                        $fetchAllUsersSQL = "SELECT * FROM useraccount";
                        $fetchAllUsersResult = mysqli_query($con, $fetchAllUsersSQL);
                        if(mysqli_num_rows($fetchAllUsersResult)>0){
                            while($fetchAllUsersRow = mysqli_fetch_array($fetchAllUsersResult)){
                                echo '
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="student-inner-std res-mg-b-30">
                                        <div class="student-img">
                                            <img src="img/profile'.$fetchAllUsersRow['image'].'" width="600px" height="600px" alt="User Image" />
                                        </div>
                                        <div class="student-dtl">
                                            <h2>'.$fetchAllUsersRow['fullname'].'</h2>
                                            <p class="dp">'.$fetchAllUsersRow['username'].'</p>
                                            <p class="dp-ag">'.$fetchAllUsersRow['contact'].'</p>
                                        </div>
                                    </div>
                                </div>
                                ';
                            }
                        }else{
                            echo '<h3>
                                <marquee><span style="color:red;">Sorry There is no registered Users yet '.mysqli_error($con).'</span></marquee>
                            </h3>';
                        }
                    ?>
                    
                 <!--   <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img src="img/student/2.jpg" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std res-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="student-img">
                                <img src="img/student/3.jpg" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="student-img">
                                <img src="img/student/4.jpg" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std mg-t-30">
                            <div class="student-img">
                                <img src="img/student/1.jpg" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std mg-t-30">
                            <div class="student-img">
                                <img src="img/student/2.jpg" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std mg-t-30">
                            <div class="student-img">
                                <img src="img/student/3.jpg" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std mg-t-30">
                            <div class="student-img">
                                <img src="img/student/4.jpg" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        
        <?php require('./inc/footer.php');?>
    </div>
        <?php require('./inc/footerjs.php');?>
    
</body>

</html>