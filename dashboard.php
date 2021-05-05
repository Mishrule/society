<?php include_once('scripts/db.php'); 
  
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
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <!-- <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div> -->
                <span>Welcome: <?php echo $login_Session_userName; ?></span>
                
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <!-- <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a> -->
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block"></span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="create-society.php">Create Society</a>
                  <a class="dropdown-item" href="#">Create Groupings</a>
                  <a class="dropdown-item" href="#">Create Operations</a>
                  <a class="dropdown-item" href="#">Create Year</a>
                </div>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-02 text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Christain Community</p>
                      <?php 
                         $christainCommunityMessage = '';
                        $christainCommunitySQL = "SELECT COUNT(*) AS total FROM members WHERE community = 'yes'";
                        $christainCommunityResult = mysqli_query($con, $christainCommunitySQL);
                        /*if(mysqli_num_rows($christainCommunityResult)==0){
                          // $christainCommunityMessage = 0;
                        }else*/if(mysqli_num_rows($christainCommunityResult)>0){
                          while($christainCommunityRow = mysqli_fetch_array($christainCommunityResult)){
                            $christainCommunityMessage = $christainCommunityRow['total'];
                          }
                          // $christainCommunityMessage = mysqli_num_rows($christainCommunityResult);
                        }else{
                          $christainCommunityMessage = mysqli_error($con);
                        }
                      ?>
                      <p class="card-title"><?php echo $christainCommunityMessage; ?> <small class="card-category">Members</small>
                      <p> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  <?php echo $christainCommunityMessage.' Christian Members'; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-02 text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Full Members</p>
                      <?php 
                         $fullMemberMessage = '';
                        $fullMemberSQL = "SELECT COUNT(*) AS total FROM members WHERE fullmember = 'yes'";
                        $fullMemberResult = mysqli_query($con, $fullMemberSQL);
                        if(mysqli_num_rows($fullMemberResult)>0){
                          while($fullMemberRow = mysqli_fetch_array($fullMemberResult)){
                            $fullMemberMessage = $fullMemberRow['total'];
                          }
                         
                        }else{
                          $fullMemberMessage = mysqli_error($con);
                        }
                      ?>
                      <p class="card-title"><?php echo $fullMemberMessage; ?> <small class="card-category">Members</small>
                      <p> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  <?php echo $fullMemberMessage.' Full Members'; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-02 text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Junior Members</p>
                      <?php 
                         $juniorMemberMessage = '';
                        $juniorMemberSQL = "SELECT COUNT(*) AS total FROM members WHERE juniorMember = 'yes'";
                        $juniorMemberResult = mysqli_query($con, $juniorMemberSQL);
                        if(mysqli_num_rows($juniorMemberResult)>0){
                          while($juniorMemberRow = mysqli_fetch_array($juniorMemberResult)){
                            $juniorMemberMessage = $juniorMemberRow['total'];
                          }
                         
                        }else{
                          $juniorMemberMessage = mysqli_error($con);
                        }
                      ?>
                      <p class="card-title"><?php echo $juniorMemberMessage; ?> <small class="card-category">Members</small>
                      <p> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i>
                  <?php echo $juniorMemberMessage.' Junior Members'; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-02 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Catechumens</p>
                      <?php 
                         $catechumensMessage = '';
                        $catechumensSQL = "SELECT COUNT(*) AS total FROM members WHERE catechumens = 'yes'";
                        $catechumensResult = mysqli_query($con, $catechumensSQL);
                        if(mysqli_num_rows($catechumensResult)>0){
                          while($catechumensRow = mysqli_fetch_array($catechumensResult)){
                            $catechumensMessage = $catechumensRow['total'];
                          }
                         
                        }else{
                          $catechumensMessage = mysqli_error($con);
                        }
                      ?>
                      <p class="card-title"><?php echo $catechumensMessage; ?> <small class="card-category">Members</small>
                      <p> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  <?php echo $catechumensMessage.' Catechumens Members'; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-02 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Adherents</p>
                      <?php 
                         $adherentsMessage = '';
                        $adherentsSQL = "SELECT COUNT(*) AS total FROM members WHERE adherents = 'yes'";
                        $adherentsResult = mysqli_query($con, $adherentsSQL);
                        if(mysqli_num_rows($adherentsResult)>0){
                          while($adherentsRow = mysqli_fetch_array($adherentsResult)){
                            $adherentsMessage = $adherentsRow['total'];
                          }
                         
                        }else{
                          $adherentsMessage = mysqli_error($con);
                        }
                      ?>
                      <p class="card-title"><?php echo $adherentsMessage; ?> <small class="card-category">Members</small>
                      <p> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  <?php echo $adherentsMessage.' Adherents Members'; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-02 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Female</p>
                      <?php 
                         $femaleMessage = '';
                        $femaleSQL = "SELECT COUNT(*) AS total FROM members WHERE gender = 'female'";
                        $femaleResult = mysqli_query($con, $femaleSQL);
                        if(mysqli_num_rows($femaleResult)>0){
                          while($femaleRow = mysqli_fetch_array($femaleResult)){
                            $femaleMessage = $femaleRow['total'];
                          }
                         
                        }else{
                          $femaleMessage = mysqli_error($con);
                        }
                      ?>
                      <p class="card-title"><?php echo $femaleMessage; ?> <small class="card-category">Members</small>
                      <p> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-female"></i>
                  <?php echo $femaleMessage.' Female Members'; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-02 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Males</p>
                      <?php 
                         $maleMessage = '';
                        $maleSQL = "SELECT COUNT(*) AS total FROM members WHERE gender = 'male'";
                        $maleResult = mysqli_query($con, $maleSQL);
                        if(mysqli_num_rows($maleResult)>0){
                          while($maleRow = mysqli_fetch_array($maleResult)){
                            $maleMessage = $maleRow['total'];
                          }
                         
                        }else{
                          $maleMessage = mysqli_error($con);
                        }
                      ?>
                      <p class="card-title"><?php echo $maleMessage; ?> <small class="card-category">Members</small>
                      <p> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-male"></i>
                  <?php echo $maleMessage.' Male Members'; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-copy-04 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Total Members</p>
                      <?php 
                         $totalMemberMessage = '';
                        $totalMemberSQL = "SELECT COUNT(*) AS total FROM members";
                        $totalMemberResult = mysqli_query($con, $totalMemberSQL);
                        if(mysqli_num_rows($totalMemberResult)>0){
                          while($totalMemberRow = mysqli_fetch_array($totalMemberResult)){
                            $totalMemberMessage = $totalMemberRow['total'];
                          }
                         
                        }else{
                          $totalMemberMessage = mysqli_error($con);
                        }
                      ?>
                      <p class="card-title"><?php echo $totalMemberMessage; ?> <small class="card-category">Members</small>
                      <p> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  <?php echo $totalMemberMessage.' Total Members'; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Users Behavior</h5>
                <p class="card-category">24 Hours performance</p>
              </div>
              <div class="card-body ">
                <canvas id=chartHours width="400" height="100"></canvas>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Email Statistics</h5>
                <p class="card-category">Last Campaign Performance</p>
              </div>
              <div class="card-body ">
                <canvas id="chartEmail"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-primary"></i> Opened
                  <i class="fa fa-circle text-warning"></i> Read
                  <i class="fa fa-circle text-danger"></i> Deleted
                  <i class="fa fa-circle text-gray"></i> Unopened
                </div>
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar"></i> Number of emails sent
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">NASDAQ: AAPL</h5>
                <p class="card-category">Line Chart with Points</p>
              </div>
              <div class="card-body">
                <canvas id="speedChart" width="400" height="100"></canvas>
              </div>
              <div class="card-footer">
                <div class="chart-legend">
                  <i class="fa fa-circle text-info"></i> Tesla Model S
                  <i class="fa fa-circle text-warning"></i> BMW 5 Series
                </div>
                <hr />
                <div class="card-stats">
                  <i class="fa fa-check"></i> Data information certified
                </div>
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


