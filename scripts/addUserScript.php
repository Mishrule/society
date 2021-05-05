<?php
require_once('db.php');
require_once('datetime.php');
    $fetchMessage ='';
    if(isset($_GET['fetch'])){
        $selectMember = intVal(mysqli_real_escape_string($con, $_GET['selectMember']));
        $fetchSQL = "SELECT * FROM useraccount ORDER BY registrationdate DESC LIMIT $selectMember";
      
        $fetchResult = mysqli_query($con, $fetchSQL);
        $fetchMessage .='
            <table class="table table-sm">                                                      
            <thead>
                <th>S/N</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Contact</th>
                <th>Gender</th>
                <th>Society Name</th>
                <th>Circuit Name</th>
                <th>Controls</th>
            </thead>
            <tbody>
        ';
        $fetchcount = 1;
        if(mysqli_num_rows($fetchResult)>0){
            while($fetchRow = mysqli_fetch_array($fetchResult)){
                $fetchMessage .='
                <tr>
                    <td>'.$fetchcount.'</td>
                    <td>'.$fetchRow['fullname'].'</td>
                    <td>'.$fetchRow['username'].'</td>
                    <td>'.$fetchRow['zpassword'].'</td>
                    <td>'.$fetchRow['contact'].'</td>
                    <td>'.$fetchRow['gender'].'</td>
                    <td>'.$fetchRow['societyname'].'</td>
                    <td>'.$fetchRow['circuitname'].'</td>
                    <td>
                        <i class="fa fa-pencil-square-o fa-lg edit" name="'.$fetchRow['user_id'].'" id="'.$fetchRow['user_id'].'" style="color:blue;" aria-hidden="true" data-toggle="modal" data-target="#PrimaryModalalert"></i>&nbsp;&nbsp;
                        <i class="fa fa-trash fa-lg del" name="'.$fetchRow['user_id'].'" id="'.$fetchRow['user_id'].'"  style="color:red;" aria-hidden="true"></i>
                    </td>
                </tr>
            ';
            $fetchcount++;
            }
            
        }else{
            $fetchMessage .='
                <tr>
                    <td colspan="9" style="color:red"><marquee>SORRY NO USER IS REGISTERED YET</marquee></td>
                </tr>
            ';
        }
        $fetchMessage .='</tbody>
        </table>';

        echo $fetchMessage; 
    } 

    // ================================ SEARCH STUDENT
    $searchMemberMessage ='';
    if(isset($_GET['selectMemberText'])){
        $selectMemberText = mysqli_real_escape_string($con, $_GET['selectMemberText']);
        $searchMemberSQL = "SELECT * FROM useraccount WHERE fullname LIKE '%$selectMemberText%' OR username LIKE '%$selectMemberText%'";
      
        $searchMemberResult = mysqli_query($con, $searchMemberSQL);
        $searchMemberMessage .='
            <table class="table table-sm">                                                      
            <thead>
                <th>S/N</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Contact</th>
                <th>Gender</th>
                <th>Society Name</th>
                <th>Circuit Name</th>
                <th>Controls</th>
            </thead>
            <tbody>
        ';
        $searchMembercount = 1;
        if(mysqli_num_rows($searchMemberResult)>0){
            while($searchMemberRow = mysqli_fetch_array($searchMemberResult)){
                $searchMemberMessage .='
                <tr>
                    <td>'.$searchMembercount.'</td>
                    <td>'.$searchMemberRow['fullname'].'</td>
                    <td>'.$searchMemberRow['username'].'</td>
                    <td>'.$searchMemberRow['zpassword'].'</td>
                    <td>'.$searchMemberRow['contact'].'</td>
                    <td>'.$searchMemberRow['gender'].'</td>
                    <td>'.$searchMemberRow['societyname'].'</td>
                    <td>'.$searchMemberRow['circuitname'].'</td>
                    <td>
                        <i class="fa fa-pencil-square-o fa-lg edit" name="'.$searchMemberRow['user_id'].'" id="'.$searchMemberRow['user_id'].'" style="color:blue;" aria-hidden="true" data-toggle="modal" data-target="#PrimaryModalalert"></i>&nbsp;&nbsp;
                        <i class="fa fa-trash fa-lg del" name="'.$searchMemberRow['user_id'].'" id="'.$searchMemberRow['user_id'].'"  style="color:red;" aria-hidden="true"></i>
                    </td>
                </tr>
            ';
            $searchMembercount++;
            }
            
        }else{
            $searchMemberMessage .='
                <tr>
                    <td colspan="9" style="color:red"><marquee>SORRY NO USER IS REGISTERED YET</marquee></td>
                </tr>
            ';
        }
        $searchMemberMessage .='</tbody>
        </table>';

        echo $searchMemberMessage; 
    }

        // ================== Fetch Data to Textfields
        $fetchArray = array();  
    if(isset($_GET['fetchDetails'])){ 
                
            $fetchDetails = mysqli_real_escape_string($con, $_GET['fetchDetails']);
            
            $fetch_SQL = "SELECT * FROM useraccount WHERE user_id = '$fetchDetails'";
        
            $fetch_Result = mysqli_query($con, $fetch_SQL);
            
            if(mysqli_num_rows($fetch_Result) > 0){
                while($fetch_Row = mysqli_fetch_array($fetch_Result)){
                    // $fetch_Row = mysqli_fetch_array($fetch_Result);    
                    $fetchArray['updateid'] = $fetch_Row['user_id'];
                    $fetchArray['updateFullName'] = $fetch_Row['fullname'];
                    $fetchArray['updateUsername'] = $fetch_Row['username'];
                    $fetchArray['updatePassword'] = $fetch_Row['zpassword'];
                    $fetchArray['updateContact'] = $fetch_Row['contact'];
                    $fetchArray['updateLocation'] = $fetch_Row['userlocation'];
                    $fetchArray['updateGender'] = $fetch_Row['gender'];
                                   
                }
            }
            
            echo json_encode($fetchArray);
    }
    
        // =====================| UPDATE RECORDS 
    if(isset($_POST['updateBTN'])){ 
        
            $updateid = mysqli_real_escape_string($con, $_POST['updateid']);
            $updateFullName = mysqli_real_escape_string($con, $_POST['updateFullName']);
            $updatePassword = mysqli_real_escape_string($con, $_POST['updatePassword']);
            $updateContact = mysqli_real_escape_string($con, $_POST['updateContact']);
            $updateLocation = mysqli_real_escape_string($con, $_POST['updateLocation']);
            $updateGender = mysqli_real_escape_string($con, $_POST['updateGender']);
            
    
            $updateSQL = "UPDATE useraccount SET fullname='$updateFullName', zpassword='$updatePassword', contact='$updateContact', userlocation='$updateLocation', gender=' $updateGender' WHERE user_id='$updateid'";
    
            $updateResult = mysqli_query($con, $updateSQL);
    
            if($updateResult){
                echo '
                Success: Update Successfully
                ';
            }else{
                echo 'ERROR! Failed to Update Records '.mysqli_error($con).'';
            }
    }

    // =================== DELETE USER
     // =====================| DELETE RECORDS 
     if(isset($_POST['del'])){ 
        $del = mysqli_real_escape_string($con, $_POST['del']);
        

        $delSQL = "DELETE FROM useraccount WHERE user_id='$del'";

        $delResult = mysqli_query($con, $delSQL);

        if($delResult){
            echo '
                Success: '. $del.' Update Successfully
            ';
        }else{
            echo '
             ERROR! Failed to Deleted Records '.mysqli_error($con).'
             ';
    
        }
    }
?>