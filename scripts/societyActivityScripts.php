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

         $operationsMainSQL = "UPDATE main_activity SET operation='$operationType', week1='$weekOne', week2='$weekTwo', week3='$weekThree', week4='$weekFour', week5='$weekFive', operation_total='$total' WHERE main_month='$month' AND main_year='$year'";
 
         $operationsResult = mysqli_query($con, $operationsSQL);
         $operationsMainResult = mysqli_query($con, $operationsMainSQL);
         if($operationsResult && $operationsMainResult){
             echo '
             Success: Activity Created Successfully.
             
             ';
         }else{
             echo '
             ERROR! Failed to Create Year '.mysqli_error($con).'
             
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

        $updateActivityMainSQL = "UPDATE main_activity SET week1='$updateWeek1', week2='$updateWeek2', week3='$updateWeek3', week4='$updateWeek4', week5='$updateWeek5', operation_total='$total' WHERE operation='$FetchupdateOperation' AND main_month='$FetchupdateMonth' AND main_year='$FetchupdateYear'";
    
        $updateActivityResult = mysqli_query($con, $updateActivitySQL);
        $updateActivityMainResult = mysqli_query($con, $updateActivityMainSQL);
    
        if($updateActivityResult && $updateActivityMainResult){
            echo 'Success: Update Successfully.';
        }else{
            echo ' ERROR! Failed to Create Year '.mysqli_error($con).'</h4>';
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

        $insertGroupMainSQL = "INSERT INTO main_activity VALUES('','$groupMonth','$groupYear','', '', '','','$groupName','$male','$female', '$total','','','','','','','','','','','','','')";
         
        $insertGroupResult = mysqli_query($con, $insertGroupSQL);
        $insertGroupMainResult = mysqli_query($con, $insertGroupMainSQL);
        if($insertGroupResult && $insertGroupMainResult){
            echo '
            Success: '.$groupName.' Saved Successfully.
            
            ';
        }else{
            echo '
             ERROR! Failed to Save '.mysqli_error($con).'         
            ';
        }
    }
    // ================================ PREVIEW ACTIVITY
    // Weekly Records
    $selectWeeklyRecordOutput ='';
    if(isset($_GET['selectWeeklyRecord'])){
        
        $selectWeeklyRecord = mysqli_real_escape_string($con, $_GET['selectWeeklyRecordYear']);
        $selectWeeklyRecordSQL = "SELECT * FROM operationtype WHERE years='$selectWeeklyRecord' LIMIT 10";

        $selectWeeklyRecordOutput ='
        <div class="table-responsive">
        <table class="table">
            <th>S/N</th>
            <th>Operations</th>
            <th>Week1</th>
            <th>Week2</th>
            <th>Week3</th>
            <th>Week4</th>
            <th>Week5</th>
            <th>Total</th>
            <tbody>
        ';
        
        $selectWeeklyRecordCount = 1;
        $selectWeeklyRecordResult = mysqli_query($con, $selectWeeklyRecordSQL);

        if(mysqli_num_rows($selectWeeklyRecordResult)>0){
            while($selectWeeklyRecordRow = mysqli_fetch_array($selectWeeklyRecordResult)){
                $selectWeeklyRecordOutput .=' 
                <tr>
                    <td>'.$selectWeeklyRecordCount.'</td>
                    <td>'.$selectWeeklyRecordRow['operationtype'].'</td>
                    <td>'.$selectWeeklyRecordRow['week1'].'</td>
                    <td>'.$selectWeeklyRecordRow['week2'].'</td>
                    <td>'.$selectWeeklyRecordRow['week3'].'</td>
                    <td>'.$selectWeeklyRecordRow['week4'].'</td>
                    <td>'.$selectWeeklyRecordRow['week5'].'</td>
                    <td>'.$selectWeeklyRecordRow['total'].'</td>
                </tr>
    
                ';
                $selectWeeklyRecordCount++;
            }
        }else{
            $selectWeeklyRecordOutput .=' 
            <tr>
            <tr>
            <td colspan="8"><p style="color:red;"><marquee>Sorry No Records Found</marquee></p></td>
        </tr>
                
            </tr>

            ';
        }

       
        $selectWeeklyRecordOutput .='
        </tbody>
        </table>
        </div>
        ';

        echo $selectWeeklyRecordOutput;
    }

    // Weekly Records MONTH
    $selectWeeklyRecordOutputMonth ='';
    if(isset($_GET['selectWeeklyRecordmonth'])){
        

        $selectWeeklyRecordmonth = mysqli_real_escape_string($con, $_GET['selectWeeklyRecordmonth']);
        $selectWeeklyRecordYear = mysqli_real_escape_string($con, $_GET['selectWeeklyRecordYear']);
        $selectWeeklyRecordSQLMonth = "SELECT * FROM operationtype WHERE years='$selectWeeklyRecordYear' AND month='$selectWeeklyRecordmonth'";

        $selectWeeklyRecordOutputMonth ='
        <div class="table-responsive">
        <table class="table">
            <th>S/N</th>
            <th>Operations</th>
            <th>Week1</th>
            <th>Week2</th>
            <th>Week3</th>
            <th>Week4</th>
            <th>Week5</th>
            <th>Total</th>
            <tbody>
        ';
        
        $selectWeeklyRecordCountMonth = 1;
        $selectWeeklyRecordResultMonth = mysqli_query($con, $selectWeeklyRecordSQLMonth);

        if(mysqli_num_rows($selectWeeklyRecordResultMonth)>0){
            while($selectWeeklyRecordRowMonth = mysqli_fetch_array($selectWeeklyRecordResultMonth)){
                $selectWeeklyRecordOutputMonth .=' 
                <tr>
                    <td>'.$selectWeeklyRecordCountMonth.'</td>
                    <td>'.$selectWeeklyRecordRowMonth['operationtype'].'</td>
                    <td>'.$selectWeeklyRecordRowMonth['week1'].'</td>
                    <td>'.$selectWeeklyRecordRowMonth['week2'].'</td>
                    <td>'.$selectWeeklyRecordRowMonth['week3'].'</td>
                    <td>'.$selectWeeklyRecordRowMonth['week4'].'</td>
                    <td>'.$selectWeeklyRecordRowMonth['week5'].'</td>
                    <td>'.$selectWeeklyRecordRowMonth['total'].'</td>
                </tr>
    
                ';
                $selectWeeklyRecordCountMonth++;
            }
        }else{
            $selectWeeklyRecordOutputMonth .=' 
            <tr>
            <tr>
            <td colspan="8"><p style="color:red;"><marquee>Sorry No Records Found</marquee></p></td>
        </tr>
                
            </tr>

            ';
        }

       
        $selectWeeklyRecordOutputMonth .='
        </tbody>
        </table>
        </div>
        ';

        echo $selectWeeklyRecordOutputMonth;
    }

    // Gender Records
    $selectGenderRecordOutput ='';
    if(isset($_GET['selectGenderRecord'])){
        $selectGenderRecord = mysqli_real_escape_string($con, $_GET['weeklyGenderRecordsYear']);
        $selectGenderRecordSQL = "SELECT * FROM group_activity WHERE group_year='$selectGenderRecord' LIMIT 10";

        $selectGenderRecordOutput ='
        <div class="table-responsive">
        <table class="table">
            <th>S/N</th>
            <th>Group Name</th>
            <th>Male</th>
            <th>Female</th>
            <th>Month</th>
            <th>Year</th>
            <th>Total</th>
        <tbody>
        ';
        
        $selectGenderRecordCount = 1;
        $selectGenderRecordResult = mysqli_query($con, $selectGenderRecordSQL);

        if(mysqli_num_rows($selectGenderRecordResult)>0){
            while($selectGenderRecordRow = mysqli_fetch_array($selectGenderRecordResult)){
                $selectGenderRecordOutput .=' 
                <tr>
                    <td>'.$selectGenderRecordCount.'</td>
                    <td>'.$selectGenderRecordRow['groupname'].'</td>
                    <td>'.$selectGenderRecordRow['male'].'</td>
                    <td>'.$selectGenderRecordRow['female'].'</td>
                    <td>'.$selectGenderRecordRow['group_month'].'</td>
                    <td>'.$selectGenderRecordRow['group_year'].'</td>
                    <td>'.$selectGenderRecordRow['group_total'].'</td>
                </tr>
    
                ';
                $selectGenderRecordCount++;
            }
        }else{
            $selectGenderRecordOutput .=' 
                <tr>
                    <td colspan="7"><p style="color:red;"><marquee>Sorry No Records Found</marquee></p></td>
                </tr>
    
                ';
        }
        
        $selectGenderRecordOutput .='
        </tbody>
        </table>
        </div>
        ';

        echo $selectGenderRecordOutput;
    }

    // Gender Month
    // Gender Records
    $selectGenderRecordOutputMonth ='';
    if(isset($_GET['selectWeeklyGendermonth'])){
        $selectWeeklyGendermonth = mysqli_real_escape_string($con, $_GET['selectWeeklyGendermonth']);
        $selectWeeklyGenderYear = mysqli_real_escape_string($con, $_GET['selectWeeklyGenderYear']);
        $selectGenderRecordSQLMonth = "SELECT * FROM group_activity WHERE group_year='$selectWeeklyGenderYear' AND group_month='$selectWeeklyGendermonth' ";

        $selectGenderRecordOutputMonth ='
        <div class="table-responsive">
        <table class="table">
            <th>S/N</th>
            <th>Group Name</th>
            <th>Male</th>
            <th>Female</th>
            <th>Month</th>
            <th>Year</th>
            <th>Total</th>
        <tbody>
        ';
        
        $selectGenderRecordCountMonth = 1;
        $selectGenderRecordResultMonth = mysqli_query($con, $selectGenderRecordSQLMonth);

        if(mysqli_num_rows($selectGenderRecordResultMonth)>0){
            while($selectGenderRecordRowMonth = mysqli_fetch_array($selectGenderRecordResultMonth)){
                $selectGenderRecordOutputMonth .=' 
                <tr>
                    <td>'.$selectGenderRecordCountMonth.'</td>
                    <td>'.$selectGenderRecordRowMonth['groupname'].'</td>
                    <td>'.$selectGenderRecordRowMonth['male'].'</td>
                    <td>'.$selectGenderRecordRowMonth['female'].'</td>
                    <td>'.$selectGenderRecordRowMonth['group_month'].'</td>
                    <td>'.$selectGenderRecordRowMonth['group_year'].'</td>
                    <td>'.$selectGenderRecordRowMonth['group_total'].'</td>
                </tr>
    
                ';
                $selectGenderRecordCountMonth++;
            }
        }else{
            $selectGenderRecordOutputMonth .=' 
                <tr>
                    <td colspan="7"><p style="color:red;"><marquee>Sorry No Records Found</marquee></p></td>
                </tr>
    
                ';
        }
        
        $selectGenderRecordOutputMonth .='
        </tbody>
        </table>
        </div>
        ';

        echo $selectGenderRecordOutputMonth;
    }

 ?>
