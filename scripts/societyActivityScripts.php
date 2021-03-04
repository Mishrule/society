<?php 
        require_once('db.php');
        require_once('datetime.php');
//  GET ACTIVITY
        if(isset($_GET['activityButton'])){
            $activityButton = mysqli_real_escape_string($con, $_GET['activityButton']);
            $getOperationSQL = "SELECT * FROM operations WHERE operation_id = '$activityButton'";
            
            $getOperationResult = mysqli_query($con, $getOperationSQL);

            while($getOperationRow = mysqli_fetch_array($getOperationResult)){
                echo $getOperationRow['operation_name'];
            }
        }

         // =================== PERFORM OPERATIONS
    if(isset($_POST['activityPerformBTN'])){
       
        $operationType = mysqli_real_escape_string($con, $_POST['operationType']);
        $weekOne = intval(mysqli_real_escape_string($con, $_POST['weekOne']));
        $weekTwo = intval(mysqli_real_escape_string($con, $_POST['weekTwo']));
        $weekThree = intval(mysqli_real_escape_string($con, $_POST['weekThree']));
        $weekFour = intval(mysqli_real_escape_string($con, $_POST['weekFour']));
        $weekFive = intval(mysqli_real_escape_string($con, $_POST['weekFive']));
        $month = mysqli_real_escape_string($con, $_POST['month']);
        $year = mysqli_real_escape_string($con, $_POST['year']);

        $total = $weekOne + $weekTwo + $weekThree + $weekFour + $weekFive;
 
         $operationsSQL = "INSERT INTO operationtype VALUES('$operationType','$weekOne','$weekTwo','$weekThree','$weekFour','$weekFive','$total','$month','$year')";
 
         $operationsResult = mysqli_query($con, $operationsSQL);
         if($operationsResult){
             echo '
             <div class="alert alert-success alert-success-style1 alert-success-stylenone">
                 <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                     <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                 </button>
                 <i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i>
                 <p class="message-alert-none"><strong>Success: </strong>Activity Created Successfully.</p>
             </div>
             ';
         }else{
             echo '
             <div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
                 <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                     <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                 </button>
                 <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                 <p class="message-alert-none"><strong>ERROR!</strong> Failed to Add '.mysqli_error($con).'</p>
             </div>
             ';
         }
    }

     // ================== Fetch Data to Textfields
    $fetchArray = array();  
    if(isset($_GET['FetchupdateOperation'])){ 
        
        $FetchupdateMonth = mysqli_real_escape_string($con, $_GET['FetchupdateMonth']);
        $FetchupdateYear = mysqli_real_escape_string($con, $_GET['FetchupdateYear']);
        $FetchupdateOperation = mysqli_real_escape_string($con, $_GET['FetchupdateOperation']);
        
        
        $fetchSQL = "SELECT * FROM operationtype WHERE operationtype = '$FetchupdateOperation' AND month='$FetchupdateMonth' AND years='$FetchupdateYear' ";
    
        $fetchResult = mysqli_query($con, $fetchSQL);
        
        if(mysqli_num_rows($fetchResult) > 0){
            // while($fetchRow = mysqli_fetch_array($fetchResult)){
                $fetchRow = mysqli_fetch_array($fetchResult);    
                $fetchArray['updateWeek1'] = $fetchRow['week1'];
                $fetchArray['updateWeek2'] = $fetchRow['week2'];
                $fetchArray['updateWeek3'] = $fetchRow['week3'];
                $fetchArray['updateWeek4'] = $fetchRow['week4'];
                $fetchArray['updateWeek5'] = $fetchRow['week5'];
                
                
            // }
        }
        
        echo json_encode($fetchArray);
    }

        // =====================| UPDATE RECORDS 
    if(isset($_POST['update_BTN'])){ 

        $updateWeek1 = intval(mysqli_real_escape_string($con, $_POST['updateWeek1']));
        $updateWeek2 = intval(mysqli_real_escape_string($con, $_POST['updateWeek2']));
        $updateWeek3 = intval(mysqli_real_escape_string($con, $_POST['updateWeek3']));
        $updateWeek4 = intval(mysqli_real_escape_string($con, $_POST['updateWeek4']));
        $updateWeek5 = intval(mysqli_real_escape_string($con, $_POST['updateWeek5']));
        $FetchupdateMonth = mysqli_real_escape_string($con, $_POST['FetchupdateMonth']);
        $FetchupdateYear = mysqli_real_escape_string($con, $_POST['FetchupdateYear']);
        $FetchupdateOperation = mysqli_real_escape_string($con, $_POST['FetchupdateOperation']);

        $total = $updateWeek1 + $updateWeek2 + $updateWeek3 + $updateWeek4 + $updateWeek5;
    
        $updateActivitySQL = "UPDATE operationtype SET week1='$updateWeek1', week2='$updateWeek2', week3='$updateWeek3', week4='$updateWeek4', week5='$updateWeek5', total='$total' WHERE operationtype='$FetchupdateOperation' AND month='$FetchupdateMonth' AND years='$FetchupdateYear'";
    
        $updateActivityResult = mysqli_query($con, $updateActivitySQL);
    
        if($updateActivityResult){
            echo '<i class="educate-icon educate-checked modal-check-pro"></i>
                <h4 style="color: blue;">Update Successfully</h4>';
        }else{
            echo '<span class="educate-icon educate-danger modal-check-pro information-icon-pro"></span>
                <h4 style="color: red;">Oops Failed to Update Try again'.mysqli_error($con).'</h4>';
        }
    }


    //  GET GROUP ACTIVITY
    if(isset($_GET['activityGroupButton'])){
        $activityGroupButton = mysqli_real_escape_string($con, $_GET['activityGroupButton']);
        $getgroupSQL = "SELECT * FROM groupings WHERE group_id = '$activityGroupButton'";
        
        $getgroupResult = mysqli_query($con, $getgroupSQL);

        while($getgroupRow = mysqli_fetch_array($getgroupResult)){
            echo $getgroupRow['group_name'];
        }
    }

             // =================== PERFORM GROUPINGS
    if(isset($_POST['activityGroupPerformBTN'])){
   
    $groupName = mysqli_real_escape_string($con, $_POST['groupName']);
    $male = intval(mysqli_real_escape_string($con, $_POST['male']));
    $female = intval(mysqli_real_escape_string($con, $_POST['female']));
    $groupMonth = mysqli_real_escape_string($con, $_POST['groupMonth']);
    $groupYear = mysqli_real_escape_string($con, $_POST['groupYear']);
    
        
    $total = $male + $female;
         
        $insertGroupSQL = "INSERT INTO group_activity VALUES('$groupName','$male','$female','$groupMonth','$groupYear', '$total')";
         
        $insertGroupResult = mysqli_query($con, $insertGroupSQL);
        if($insertGroupResult){
            echo '
            <div class="alert alert-success alert-success-style1 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                    <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                </button>
                <i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i>
                <p class="message-alert-none"><strong>Success: </strong>'.$groupName.' Saved Successfully.</p>
            </div>
            ';
        }else{
            echo '
            <div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                    <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                </button>
                <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                <p class="message-alert-none"><strong>ERROR!</strong> Failed to Add '.mysqli_error($con).'</p>
            </div>
            ';
        }
 }
