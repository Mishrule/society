<?php
    require_once('db.php');
    require_once('datetime.php');
    // -------------------- Save
    if(isset($_POST['regMemberBTN'])){       
        $firstnameText = mysqli_real_escape_string($con, $_POST['firstnameText']);
        $addressText = mysqli_real_escape_string($con, $_POST['addressText']);
        $mobilenoText = mysqli_real_escape_string($con, $_POST['mobilenoText']);
        $dobText = mysqli_real_escape_string($con, $_POST['dobText']);
        $locationText = mysqli_real_escape_string($con, $_POST['locationText']);
        $genderText = mysqli_real_escape_string($con, $_POST['genderText']);
        $communityText = mysqli_real_escape_string($con, $_POST['communityText']);
        $fullMemberText = mysqli_real_escape_string($con, $_POST['fullMemberText']);
        $juniorMemberText = mysqli_real_escape_string($con, $_POST['juniorMemberText']);
        $catechumensText = mysqli_real_escape_string($con, $_POST['catechumensText']);
        $adherentsText = mysqli_real_escape_string($con, $_POST['adherentsText']);

        $registerSQL = "INSERT INTO members VALUES('','$firstnameText','$addressText','$mobilenoText','$dobText','$locationText','$genderText','$communityText','$fullMemberText','$juniorMemberText','$catechumensText','$adherentsText','$DateTime')";

        $registerResult = mysqli_query($con, $registerSQL);
        if($registerResult){
            echo '
            <div class="alert alert-success alert-success-style1 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
					<span class="icon-sc-cl" aria-hidden="true">&times;</span>
				</button>
                <i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i>
                <p class="message-alert-none"><strong>Success: </strong>'. $firstnameText.' is Successfully registered as a Member of the Society.</p>
            </div>
            ';
        }else{
            echo '
            <div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
					<span class="icon-sc-cl" aria-hidden="true">&times;</span>
				</button>
                <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                <p class="message-alert-none"><strong>ERROR!</strong> Failed to Register a Member '.mysqli_error($con).'</p>
            </div>
            ';
        }
    }

    $fetchMessage ='';
    if(isset($_GET['fetch'])){
        $selectMember = intVal(mysqli_real_escape_string($con, $_GET['selectMember']));
        $fetchSQL = "SELECT * FROM members ORDER BY registrationdate DESC LIMIT $selectMember";
      
        $fetchResult = mysqli_query($con, $fetchSQL);
        $fetchMessage .='
            <table class="table table-sm">                                                      
            <thead>
                <th>S/N</th>
                <th>Full Name</th>
                <th>Address</th>
                <th>Mobile Number</th>
                <th>Location</th>
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
                    <td>'.$fetchRow['address'].'</td>
                    <td>'.$fetchRow['mobilenumber'].'</td>
                    <td>'.$fetchRow['location'].'</td>
                    <td>
                        <i class="fa fa-pencil-square-o fa-lg edit" name="'.$fetchRow['member_id'].'" id="'.$fetchRow['member_id'].'" style="color:blue;" aria-hidden="true" data-toggle="modal" data-target="#PrimaryModalalert"></i>&nbsp;&nbsp;
                        <i class="fa fa-trash fa-lg del" name="'.$fetchRow['member_id'].'" id="'.$fetchRow['member_id'].'"  style="color:red;" aria-hidden="true"></i>
                    </td>
                </tr>
            ';
            $fetchcount++;
            }
            
        }else{
            $fetchMessage .='
                <tr>
                    <td colspan="6" style="color:red"><marquee>SORRY NO MEMBER IS REGISTERED YET</marquee></td>
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
        $searchMemberSQL = "SELECT * FROM members WHERE fullname LIKE '%$selectMemberText%'";
      
        $searchMemberResult = mysqli_query($con, $searchMemberSQL);
        $searchMemberMessage .='
            <table class="table table-sm">                                                      
            <thead>
                <th>S/N</th>
                <th>Full Name</th>
                <th>Address</th>
                <th>Mobile Number</th>
                <th>Location</th>
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
                    <td>'.$searchMemberRow['address'].'</td>
                    <td>'.$searchMemberRow['mobilenumber'].'</td>
                    <td>'.$searchMemberRow['location'].'</td>
                    <td>
                        <i class="fa fa-pencil-square-o fa-lg edit" name="'.$searchMemberRow['member_id'].'" id="'.$searchMemberRow['member_id'].'" style="color:blue;" aria-hidden="true" data-toggle="modal" data-target="#PrimaryModalalert"></i>&nbsp;&nbsp;
                        <i class="fa fa-trash fa-lg del" name="'.$searchMemberRow['member_id'].'" id="'.$searchMemberRow['member_id'].'"  style="color:red;" aria-hidden="true"></i>
                    </td>
                </tr>
            ';
            $searchMembercount++;
            }
            
        }else{
            $searchMemberMessage .='
                <tr>
                    <td colspan="6" style="color:red"><marquee>SORRY NO MEMBER IS REGISTERED YET</marquee></td>
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
        
        $fetchSQL = "SELECT * FROM members WHERE member_id = '$fetchDetails'";
    
        $fetchResult = mysqli_query($con, $fetchSQL);
        
        if(mysqli_num_rows($fetchResult) > 0){
            // while($fetchRow = mysqli_fetch_array($fetchResult)){
                $fetchRow = mysqli_fetch_array($fetchResult);    
                $fetchArray['update_id'] = $fetchRow['member_id'];
                $fetchArray['update_FullName'] = $fetchRow['fullname'];
                $fetchArray['update_Address'] = $fetchRow['address'];
                $fetchArray['update_Mobile'] = $fetchRow['mobilenumber'];
                $fetchArray['update_dob'] = $fetchRow['dob'];
                $fetchArray['update_Location'] = $fetchRow['location'];
                $fetchArray['update_Gender'] = $fetchRow['gender'];
                $fetchArray['update_Community'] = $fetchRow['community'];
                $fetchArray['update_FullMember'] = $fetchRow['fullmember'];
                $fetchArray['update_JuniorMember'] = $fetchRow['junionmember'];
                $fetchArray['update_Catechumens'] = $fetchRow['catechumens'];
                $fetchArray['update_Adherents'] = $fetchRow['adherents'];
                
            // }
        }
        
        echo json_encode($fetchArray);
    }

    // =====================| UPDATE RECORDS 
    if(isset($_POST['updateBTN'])){ 
        $updateid = mysqli_real_escape_string($con, $_POST['updateid']);
        $updateFullName = mysqli_real_escape_string($con, $_POST['updateFullName']);
        $updateAddress = mysqli_real_escape_string($con, $_POST['updateAddress']);
        $updateMobile = mysqli_real_escape_string($con, $_POST['updateMobile']);
        $updatedob = mysqli_real_escape_string($con, $_POST['updatedob']);
        $updateLocation = mysqli_real_escape_string($con, $_POST['updateLocation']);
        $updateGender = mysqli_real_escape_string($con, $_POST['updateGender']);
        $updateCommunity = mysqli_real_escape_string($con, $_POST['updateCommunity']);
        $updateFullMember = mysqli_real_escape_string($con, $_POST['updateFullMember']);
        $updateJuniorMember = mysqli_real_escape_string($con, $_POST['updateJuniorMember']);
        $updateCatechumens = mysqli_real_escape_string($con, $_POST['updateCatechumens']);
        $updateAdherents = mysqli_real_escape_string($con, $_POST['updateAdherents']);

        $updateSQL = "UPDATE members SET fullname='$updateFullName', address='$updateAddress', mobilenumber='$updateMobile', dob='$updatedob', location=' $updateLocation', gender='$updateGender', community=' $updateCommunity', fullmember='$updateFullMember', junionmember='$updateJuniorMember', catechumens='$updateCatechumens', adherents='$updateAdherents' WHERE member_id='$updateid'";

        $updateResult = mysqli_query($con, $updateSQL);

        if($updateResult){
            echo '<i class="educate-icon educate-checked modal-check-pro"></i>
            <h4 style="color: blue;">Update Successfully</h4>';
        }else{
            echo '<span class="educate-icon educate-danger modal-check-pro information-icon-pro"></span>
            <h4 style="color: red;">Oops Failed to Update Try again'.mysqli_error($con).'</h4>';
        }
    }

    // =====================| DELETE RECORDS 
    if(isset($_POST['del'])){ 
        $del = mysqli_real_escape_string($con, $_POST['del']);
        

        $delSQL = "DELETE FROM members WHERE member_id='$del'";

        $delResult = mysqli_query($con, $delSQL);

        if($delResult){
            echo '
            <div class="alert alert-success alert-success-style1 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
					<span class="icon-sc-cl" aria-hidden="true">&times;</span>
				</button>
                <i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i>
                <p class="message-alert-none"><strong>Success: </strong>'. $del.' is Deleted Successfully.</p>
            </div>
            ';
        }else{
            echo '
            <div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
					<span class="icon-sc-cl" aria-hidden="true">&times;</span>
				</button>
                <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                <p class="message-alert-none"><strong>ERROR!</strong> Failed to Deleted Records '.mysqli_error($con).'</p>
            </div>
            ';
        }
    }
?>

                                                                    
                                                                