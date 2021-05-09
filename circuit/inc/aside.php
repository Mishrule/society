<?php
    // include('../session.php');
    echo '
    <div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
      <a href="#" class="simple-text logo-mini">
        <div class="logo-image-small">
          <img src="../assets/img/logo-small.png">
        </div>
        <!-- <p>CT</p> -->
      </a>
      <a href="#" class="simple-text logo-normal">
       
        <!-- <div class="logo-image-big">
          <img src="../assets/img/logo-big.png">
        </div> -->
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="">
          <a href="dashboard.php">
            <i class="nc-icon nc-bank"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li>
          <a href="register-member.php">
            <i class="nc-icon nc-single-02"></i>
            <p>Register Member</p>
          </a>
        </li>
        <li>
          <a href="manage-members.php">
            <i class="nc-icon nc-user-run"></i>
            <p>Manage Members</p>
          </a>
        </li>
      <!--  <li>
          <a href="#">
            <i class="nc-icon nc-bell-55"></i>
            <p>Manage Members</p>
          </a>
        </li> -->
        <li>
          <a href="basic-group.php">
            <i class="nc-icon nc-layout-11"></i>
            <p>Basic Group</p>
          </a>
        </li>
        <li>
          <a href="activity.php">
            <i class="nc-icon nc-paper"></i>
            <p>Log Activity</p>
          </a>
        </li>
        
        <li>
          <a href="preview-activity.php">
            <i class="nc-icon nc-credit-card"></i>
            <p>Preview Activity</p>
          </a>
        </li>
        <li>
          <a href="report.php">
            <i class="nc-icon nc-single-copy-04"></i>
            <p>Report</p>
          </a>
        </li>
        <li>
          <a href="create-user.php">
            <i class="nc-icon nc-simple-add"></i>
            <p>Create User</p>
          </a>
        </li>
        <li>
          <a href="manage-users.php">
            <i class="nc-icon nc-tile-56"></i>
            <p>Manage User</p>
          </a>
        </li>
        <!--<li>
          <a href="#">
            <i class="nc-icon nc-spaceship"></i>
            <p>All Users</p>
          </a>
        </li> -->
        <li>
          <a href="logout.php">
            <i class="nc-icon nc-button-power"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
    ';
?>